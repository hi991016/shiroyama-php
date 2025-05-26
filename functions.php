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
    
    function pagination_tdc($post_type, $wp_query, $paged, $cat = "", $filter = "") {
        if( $wp_query->max_num_pages <= 1 ) return;
        $paged = $paged;
        $max = intval( $wp_query->max_num_pages );
       
        if ( $paged >= 1 ) $links[] = $paged;
        if ( $paged >= 3 ) {
               $links[] = $paged - 1;
               $links[] = $paged - 2;
        }
        if ( ( $paged + 2 ) <= $max ) {
               $links[] = $paged + 2;
               $links[] = $paged + 1;
        }

        $html = '';

        if ($paged > 1 && $max > 1) {
            $html .= '<a class="c-page_pager pager-newer" href="'.build_url($post_type, $cat, ($paged - 1), $filter).'" ><p>Newer <span>Posts</span></p></a>';
        } else if ($paged >= 0) {
            $html .= '<div class="c-page_pager pager-newer"><p></p></div>';
        }

        $html .= '<div class="c-pagination c-page_center" data-cat="'.$cat.'" role="navigation">' . "\n";
        // if ($paged > 1 && $max > 1) {
        //     $html .= '<a class="item" href="'.build_url($post_type, $cat, ($paged - 1), $filter).'" >prev</a>';
        // }
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="item current"' : '';
            if(!$class) {
                $html .= '<a class="item" href="'.build_url($post_type, $cat, 1, $filter).'" >1</a>';
            } else {
                $html .= '<a '.$class.'>1</a>';
            }
            if ( ! in_array( 2, $links ) )
                $html .= '<a>…</a>';
        }
        sort( $links );

        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="item current"' : '';
            if(!$class) {
                $html .= '<a class="item" href="'.build_url($post_type, $cat, $link, $filter).'">'.$link .'</a>' . "\n";
            } else {
                $html .= '<a '.$class.'>'. $link .'</a>';
            }
        }

        if (!in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) ) $html .= '<a class="item">…</a>' . "\n";
            // $class = $paged == $max ? ' class="item"' : '';
            $html .= '<a class="item" href="'.build_url($post_type, $cat, $max, $filter).'">'.$max.'</a>';
        }
        // if ($paged < $max && $max > 1) {
        //     $html .= '<a class="item" href="'.build_url($post_type, $cat, ($paged + 1), $filter).'" >next</a>';
        // }
        $html .= '</div>' . "\n";
        
        if ($paged < $max && $max > 1) {
            $html .= '<a class="c-page_pager pager-older" href="'.build_url($post_type, $cat, ($paged + 1), $filter).'" ><p>Older <span>Posts</span></p></a>';
        }
        return $html;
    }
    function build_url($post_type, $cat, $paged, $filter){
        if ($cat) {
            $url = home_url('/'.$post_type.'/page/'.$paged).'/?cate='.$cat;
        } elseif ($filter) {
            $url = home_url('/'.$post_type.'/page/'.$paged).'/?'.$filter;
        } else {
            $url = home_url('/'.$post_type.'/page/'.$paged);
        }
        return $url;
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
    function custom_news_archive_rewrite() {
        add_rewrite_rule(
            '^news/?$',
            'index.php?post_type=news',
            'top'
        );
    }
    add_action('init', 'custom_news_archive_rewrite');

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
    }
    add_action('init', 'custom_news_permalinks');

    // setting permarlink
    function custom_news_post_link($post_link, $post) {
        if ($post->post_type === 'news') {
            return home_url('/news/' . $post->ID . '/');
        }
        return $post_link;
    }
    add_filter('post_type_link', 'custom_news_post_link', 10, 2);
    
    function check_taxonomy_rewrite() {
        $taxonomy = get_taxonomy('news_tax');
        if ($taxonomy && $taxonomy->rewrite) {
            error_log(print_r($taxonomy->rewrite, true));
        }
    }
    add_action('init', 'check_taxonomy_rewrite');

    // ================================================