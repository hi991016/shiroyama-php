<?php
    /** Define */
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );
    /** Hook */

    // initialize custom settings for the website
    function initTheme() {
        // change the editor to old version
        add_filter('use_block_editor_for_post', '__return_false');
        add_filter('gutenberg_use_widgets_block_editor', '__return_false');
        add_filter('use_widgets_block_editor', '__return_false');
    }

    /** Functions */
    function remove_menus() {
        remove_menu_page( 'edit.php' );// 投稿.
		if ( current_user_can( 'editor' ) ) {// 投稿者の場合
			remove_menu_page( 'edit.php?post_type=page' ); // 固定.
			remove_menu_page( 'edit-comments.php' ); // コメント.
			remove_menu_page( 'tools.php' ); // ツール.
		}
    }

    function remove_admin_bar_menus( $wp_admin_bar ) {
        $wp_admin_bar->remove_menu( 'comments' ); // コメント.
        $wp_admin_bar->remove_menu( 'new-content' ); // 新規投稿.
	}

    function create_post_type() {
        register_post_type(
            'news',
            array(
                'label' => 'News',
                'labels' => array(
                    'all_items' => 'News一覧',
                    'add_new' => '新規追加',
                    'add_new_item' => 'News追加',
                    'edit_item' => 'News編集',
                    'new_item' => 'News追加',
                    'view_item' => 'Newsビュー',
                    'search_items' => 'News検索',
                    'not_found' => '見つかりません',
                    'not_found_in_trash' => 'ゴミ箱に見つかりません',
                ),
                'public' => true,
                'rewrite' => ['slug' => 'news/%post_id%', 'with_front' => false],
                'has_archive' => 'news',
                'menu_position' => 2,
                'supports' => [ 'title', 'thumbnail', 'editor' ],
            )
        );	
    }
    
    add_action('init', 'create_news_taxonomies');
    function create_news_taxonomies() {
        // カテゴリを作成
        $labels = array(
            'name'                => 'Newsカテゴリ',
            'singular_name'       => 'Newsカテゴリ',
            'search_items'        => 'Newsカテゴリを検索',
            'all_items'           => '全てのNewsカテゴリ',
            'parent_item'         => '親カテゴリ',
            'parent_item_colon'   => '親カテゴリ:',
            'edit_item'           => 'Newsカテゴリを編集',
            'update_item'         => 'Newsカテゴリを更新',
            'add_new_item'        => 'Newsカテゴリを追加',
            'new_item_name'       => '新規Newsカテゴリ',
            'menu_name'           => 'Newsカテゴリ'
        );
        $args = array(
            'hierarchical'        => true,
            'labels'              => $labels,
            'rewrite'             => array( 'slug' => 'news' )
        );
        register_taxonomy( 'news_tax', 'news', $args );
    }
    
    function add_page_to_admin_menu() {
    }
    add_action( 'admin_menu', 'add_page_to_admin_menu' );
    add_action('init', 'initTheme');
    add_theme_support('post-thumbnails', array('post', 'news'));
    add_action( 'admin_menu', 'remove_menus' );
	add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );
    add_action('init', 'create_post_type');
    add_action('init', function() {
        remove_post_type_support('news', 'editor');
    }, 99);

    // =========
    add_action('wp_head', function() {
        if (is_user_logged_in()) {
            echo '<style>
                html {
                    margin-top: 0 !important;
                }
            </style>';
        } else {
            remove_action('wp_head', 'wp_admin_bar_render', 1000);
            wp_deregister_style('admin-bar');
        }
    }, 100);

    // ========= change title to id ==========
    function custom_news_permalinks() {
        // Rule archive /news/
        add_rewrite_rule(
            '^news/?$',
            'index.php?post_type=news',
            'top'
        );
        // Rule /news/123/
        add_rewrite_rule(
            '^news/([0-9]+)/?$',
            'index.php?post_type=news&p=$matches[1]',
            'top'
        );
        // Pagination rules for archive /news/page/[num]/
        add_rewrite_rule(
            '^news/page/([0-9]+)/?$',
            'index.php?post_type=news&paged=$matches[1]',
            'top'
        );
        // Pagination rules for taxonomy /news/[term]/page/[num]/
        add_rewrite_rule(
            '^news/([^/]+)/page/([0-9]+)/?$',
            'index.php?news_tax=$matches[1]&paged=$matches[2]',
            'top'
        );
    }
    add_action('init', 'custom_news_permalinks');

    //
    function custom_news_post_link($post_link, $post) {
        if ($post->post_type === 'news' && $post->ID) {
            return home_url('/news/' . $post->ID . '/');
        }
        return $post_link;
    }
    add_filter('post_type_link', 'custom_news_post_link', 10, 2);

    //
    function check_taxonomy_rewrite() {
        $taxonomy = get_taxonomy('news_tax');
        if ($taxonomy && $taxonomy->rewrite) {
            error_log(print_r($taxonomy->rewrite, true));
        }
    }
    add_action('init', 'check_taxonomy_rewrite');

    // ========= custom pagination ==========
    function news_pagination($total_pages, $paged, $base_url) {
        if ($total_pages <= 1) return '';
        $html = '<div class="news_pager newer">';
        if ($paged > 1) {
            $prev_page = $paged - 1;
            $html .= sprintf('<a href="%s/page/%d/">＜ 新しい記事</a>', esc_url($base_url), $prev_page);
        }
        $html .= '</div>';
        $html .= '<div class="news_center">';

        $range = 2; // Number of pages to show around the current page
        $showitems = ($range * 2) + 1;

        if ($total_pages <= $showitems) {
            // Display all pages if total is small
            for ($i = 1; $i <= $total_pages; $i++) {
                $class = ($i == $paged) ? ' class="--active"' : '';
                $html .= sprintf('<a href="%s/page/%d/"%s>%d</a>', esc_url($base_url), $i, $class, $i);
            }
        } else {
            // Display first page
            $class = (1 == $paged) ? ' class="--active"' : '';
            $html .= sprintf('<a href="%s/page/1/"%s>1</a>', esc_url($base_url), $class);

            // Calculate start and end of page numbers
            $start = max(2, $paged - $range);
            $end = min($total_pages - 1, $paged + $range);

            // Add ellipsis if there’s a gap after the first page
            if ($start > 2) {
                $html .= '<span>...</span>';
            }

            // Display pages around current page
            for ($i = $start; $i <= $end; $i++) {
                $class = ($i == $paged) ? ' class="--active"' : '';
                $html .= sprintf('<a href="%s/page/%d/"%s>%d</a>', esc_url($base_url), $i, $class, $i);
            }

            // Add ellipsis if there’s a gap before the last page
            if ($end < $total_pages - 1) {
                $html .= '<span>...</span>';
            }

            // Display last page
            $class = ($total_pages == $paged) ? ' class="--active"' : '';
            $html .= sprintf('<a href="%s/page/%d/"%s>%d</a>', esc_url($base_url), $total_pages, $class, $total_pages);
        }

        $html .= '</div>';
        $html .= '<div class="news_pager older">';
        if ($paged < $total_pages) {
            $next_page = $paged + 1;
            $html .= sprintf('<a href="%s/page/%d/">古い記事 ＞</a>', esc_url($base_url), $next_page);
        }
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

    // ========= Add meta box to 'news' post type =========
    function add_pin_post_meta_box() {
        add_meta_box(
            'pin_post_meta_box',
            'Pin Post',
            'render_pin_post_meta_box',
            'news',
            'side',
            'high'
        );
    }
    add_action('add_meta_boxes', 'add_pin_post_meta_box');

    // Render meta box content
    function render_pin_post_meta_box($post) {
        $is_pinned = get_post_meta($post->ID, '_is_pinned', true);
        // Add nonce for security
        wp_nonce_field('pin_post_nonce', 'pin_post_nonce_field');
        ?>
        <label>
            <input type="checkbox" name="is_pinned" value="1" <?php checked($is_pinned, '1'); ?>>
            Pin this post
        </label>
        <?php
    }

    // Save meta data when post is saved
    function save_pin_post_meta($post_id) {
        // Verify nonce for security
        if (!isset($_POST['pin_post_nonce_field']) || !wp_verify_nonce($_POST['pin_post_nonce_field'], 'pin_post_nonce')) {
            return;
        }
        // Check user permissions
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
        // Save or delete pinned meta
        if (isset($_POST['is_pinned']) && $_POST['is_pinned'] == '1') {
            update_post_meta($post_id, '_is_pinned', '1');
        } else {
            delete_post_meta($post_id, '_is_pinned');
        }
    }
    add_action('save_post_news', 'save_pin_post_meta');

    // Add 'Pinned' column to admin post list
    add_filter('manage_news_posts_columns', function($columns) {
        $columns['is_pinned'] = 'Pinned';
        return $columns;
    });

    // Display content for 'Pinned' column
    add_action('manage_news_posts_custom_column', function($column, $post_id) {
        if ($column === 'is_pinned') {
            echo get_post_meta($post_id, '_is_pinned', true) ? '📌 Yes' : 'No';
        }
    }, 10, 2);