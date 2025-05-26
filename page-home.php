<?php 
    get_header();
?>

    <!-- @main -->
    <main class="homepage">
        <!-- firstview// -->
        <section class="fv">
            <div class="fv_container">
                <div class="fv_overlay"></div>
                <div class="fv_swiper" data-fv-swiper>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture>
                                <source media="(max-width: 1023px)"
                                    data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/fv_slide_01_sp.webp">
                                <img class="lazy" draggable="false" data-src="<?= get_template_directory_uri() ?>/assets/images/home/fv_slide_01.webp"
                                    alt="いちばんの今日を、ここで。" width="1300" height="779">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(max-width: 1023px)"
                                    data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/fv_slide_02_sp.webp">
                                <img class="lazy" draggable="false" data-src="<?= get_template_directory_uri() ?>/assets/images/home/fv_slide_02.webp"
                                    alt="いちばんの今日を、ここで。" width="1300" height="779">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="fv_heading">
                    <h2>
                        いちばんの <br />
                        今日を、ここで。
                    </h2>
                </div>
                <div class="c-scrolldown"><span></span></div>
            </div>
        </section>
        <!-- //firstview -->

        <!-- news// -->
        <section class="news">
            <div class="news_container u-wrapper" data-offset-top>
                <div class="news_inner">
                    <div class="news_left">
                        <div class="c-heading" data-fadein>
                            <h2>おしらせ</h2>
                            <p>NEWS</p>
                        </div>
                        <div data-fadein>
                            <a href="<?= home_url(); ?>/news/" class="news_link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <g id="Group_58" data-name="Group 58" transform="translate(-80 -650)">
                                        <path id="Polygon_1" data-name="Polygon 1" d="M3,0,6,5H0Z"
                                            transform="translate(91 655) rotate(90)" fill="#a99055" />
                                        <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(80 650)"
                                            fill="none" stroke="#a99055" stroke-width="1">
                                            <circle cx="8" cy="8" r="8" stroke="none" />
                                            <circle cx="8" cy="8" r="7.5" fill="none" />
                                        </g>
                                    </g>
                                </svg>
                                <p>一覧を見る</p>
                            </a>
                        </div>
                    </div>
                    <div class="news_right">
                        <div class="c-news">
                            <div class="c-news_list">
                                <?php 
                                    // Get previous pinned post
                                    $pinned_args = array(
                                        'post_type'      => 'news',
                                        'post_status'    => 'publish',
                                        'posts_per_page' => 5, 
                                        'meta_query'     => array(
                                            array(
                                                'key'     => '_is_pinned',
                                                'value'   => '1',
                                                'compare' => '='
                                            )
                                        ),
                                        'orderby'        => 'date',
                                        'order'          => 'DESC'
                                    );
                                    $pinned_query = new WP_Query($pinned_args);
                                    $pinned_posts = $pinned_query->posts;
                                    $pinned_count = count($pinned_posts);

                                    // Calculate the number of unpinned posts to get
                                    $remaining_posts = max(0, 5 - $pinned_count);

                                    // Get unpinned post if needed
                                    $non_pinned_args = array(
                                        'post_type'      => 'news',
                                        'post_status'    => 'publish',
                                        'posts_per_page' => $remaining_posts,
                                        'meta_query'     => array(
                                            'relation' => 'OR',
                                            array(
                                                'key'     => '_is_pinned',
                                                'compare' => 'NOT EXISTS'
                                            ),
                                            array(
                                                'key'     => '_is_pinned',
                                                'value'   => '0',
                                                'compare' => '='
                                            )
                                        ),
                                        'orderby'        => 'date',
                                        'order'          => 'DESC'
                                    );
                                    $non_pinned_query = new WP_Query($non_pinned_args);
                                    $all_posts = array_merge($pinned_posts, $non_pinned_query->posts);

                                    // Limited to 5 posts only
                                    $all_posts = array_slice($all_posts, 0, 5);

                                    // show post
                                    if (!empty($all_posts)) :
                                        $i = 0;
                                        foreach ($all_posts as $post) :
                                            setup_postdata($post);
                                            $news = get_field('news_fields', $post->ID);
                                            $cate = get_the_terms($post->ID, 'news_tax');
                                            $p = !empty($cate) && is_array($cate) ? $cate[0] : null;
                                ?>
                                            <div data-fadein>
                                                <a href="<?php the_permalink($post->ID); ?>" class="c-news_items">
                                                    <div class="c-news_group">
                                                        <p class="date"><?php echo get_the_date('Y.m.d', $post->ID); ?></p>
                                                        <p class="category --<?php echo $p ? $p->slug : 'default'; ?>">
                                                            <?php echo $p ? $p->name : 'Chưa có danh mục'; ?>
                                                        </p>
                                                    </div>
                                                    <div class="c-news_title">
                                                        <p class="title"><?php echo get_the_title($post->ID); ?></p>
                                                        <div class="arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.828"
                                                                viewBox="0 0 27.414 12.828">
                                                                <g id="Group_51" data-name="Group 51"
                                                                    transform="translate(-1332 -606.586)">
                                                                    <line id="Line_3" data-name="Line 3" x2="25"
                                                                        transform="translate(1333 613)" fill="none" stroke="#000"
                                                                        stroke-linecap="round" stroke-width="2" />
                                                                    <line id="Line_4" data-name="Line 4" x1="5" y1="5"
                                                                        transform="translate(1353 608)" fill="none" stroke="#000"
                                                                        stroke-linecap="round" stroke-width="2" />
                                                                    <line id="Line_5" data-name="Line 5" y1="5" x2="5"
                                                                        transform="translate(1353 613)" fill="none" stroke="#000"
                                                                        stroke-linecap="round" stroke-width="2" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                <?php   
                                        $i++;
                                        endforeach;
                                        wp_reset_postdata();
                                    endif; 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //news -->

        <!-- philosophy// -->
        <section class="phy">
            <div class="phy_container u-wrapper">
                <div class="phy_wrapper">
                    <div data-fadein>
                        <div class="phy_swiper" data-phy-swiper>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <picture>
                                        <source media="(max-width: 1023px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/philosophy_slide_01_sp.webp">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/home/philosophy_slide_01.webp" alt="いちばんの今日を、ここで。"
                                            width="1100" height="733">
                                    </picture>
                                </div>
                            </div>
                            <div class="phy_pagination swiper-pagination"></div>
                            <div class="phy_heading">
                                <h2>
                                    いちばんの<br />
                                    今日を、ここで。
                                </h2>
                            </div>
                            <div class="phy_content pc-only">
                                <p>
                                    まいにち、たのしく、げんきよく。<br />
                                    八百万の神様に、まもられて。<br />
                                    からだをうごかし、くらしをととのえ、<br />
                                    ふかく、おおきく、まなびをひろげる。<br />
                                    きみのみらいへ続く <br />
                                    いちばんの今日が、ここにある。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="phy_content sp-only" data-fadein>
                        <p>
                            まいにち、たのしく、げんきよく。<br />
                            八百万の神様に、まもられて。<br />
                            からだをうごかし、くらしをととのえ、<br />
                            ふかく、おおきく、まなびをひろげる。<br />
                            きみのみらいへ続く <br />
                            いちばんの今日が、ここにある。
                        </p>
                    </div>
                    <div data-fadein>
                        <a href="<?= home_url(); ?>/about/" class="phy_btn c-btn">
                            <p>城山幼稚園について</p>
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.828"
                                viewBox="0 0 27.414 12.828">
                                <g id="Group_61" data-name="Group 61" transform="translate(-1332 -606.586)">
                                    <line id="Line_3" data-name="Line 3" x2="25" transform="translate(1333 613)"
                                        fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_4" data-name="Line 4" x1="5" y1="5" transform="translate(1353 608)"
                                        fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_5" data-name="Line 5" y1="5" x2="5" transform="translate(1353 613)"
                                        fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //philosophy -->

        <!-- feature// -->
        <section class="feature">
            <div class="feature_container">
                <div class="feature_swiper" data-feature-swiper>
                    <div class="feature_wrapper swiper-wrapper">
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>/education/" class="feature_items">
                                    <picture>
                                        <source media="(max-width: 1023px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/feature_01_sp.webp">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/home/feature_01.webp" alt="まなび" width="1200"
                                            height="400">
                                    </picture>
                                    <div class="feature_top">
                                        <div class="feature_heading">
                                            <h2>まなび</h2>
                                            <p>EDUCATION</p>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.829"
                                            viewBox="0 0 27.414 12.829">
                                            <g id="Group_71" data-name="Group 71" transform="translate(-1332 -606.586)">
                                                <line id="Line_3" data-name="Line 3" x2="25"
                                                    transform="translate(1333 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_4" data-name="Line 4" x1="5" y1="5"
                                                    transform="translate(1353 608)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_5" data-name="Line 5" y1="5" x2="5"
                                                    transform="translate(1353 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="feature_desc">
                                        <p>
                                            テキストが入りますテキストが入りますテキストが入ります<br class="pc-only" />
                                            テキストが入りますテキストが入りますテキストが入ります（60字程度）
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>/daily-life/" class="feature_items">
                                    <picture>
                                        <source media="(max-width: 1023px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/feature_02_sp.webp">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/home/feature_02.webp" alt="園の生活" width="1200"
                                            height="400">
                                    </picture>
                                    <div class="feature_top">
                                        <div class="feature_heading">
                                            <h2>園の生活</h2>
                                            <p>DAILY LIFE</p>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.829"
                                            viewBox="0 0 27.414 12.829">
                                            <g id="Group_71" data-name="Group 71" transform="translate(-1332 -606.586)">
                                                <line id="Line_3" data-name="Line 3" x2="25"
                                                    transform="translate(1333 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_4" data-name="Line 4" x1="5" y1="5"
                                                    transform="translate(1353 608)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_5" data-name="Line 5" y1="5" x2="5"
                                                    transform="translate(1353 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="feature_desc">
                                        <p>
                                            テキストが入りますテキストが入りますテキストが入ります<br class="pc-only" />
                                            テキストが入りますテキストが入りますテキストが入ります（60字程度）
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>/teacher/" class="feature_items">
                                    <picture>
                                        <source media="(max-width: 1023px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/feature_03.webp">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/home/feature_03.webp" alt="先生のこと" width="1200"
                                            height="400">
                                    </picture>
                                    <div class="feature_top">
                                        <div class="feature_heading">
                                            <h2>先生のこと</h2>
                                            <p>TEACHER</p>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.829"
                                            viewBox="0 0 27.414 12.829">
                                            <g id="Group_71" data-name="Group 71" transform="translate(-1332 -606.586)">
                                                <line id="Line_3" data-name="Line 3" x2="25"
                                                    transform="translate(1333 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_4" data-name="Line 4" x1="5" y1="5"
                                                    transform="translate(1353 608)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_5" data-name="Line 5" y1="5" x2="5"
                                                    transform="translate(1353 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="feature_desc">
                                        <p>
                                            テキストが入りますテキストが入りますテキストが入ります<br class="pc-only" />
                                            テキストが入りますテキストが入りますテキストが入ります（60字程度）
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div data-fadein>
                                <a href="<?= home_url(); ?>/support/" class="feature_items">
                                    <picture>
                                        <source media="(max-width: 1023px)"
                                            data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/feature_04.webp">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/home/feature_04.webp" alt="子育てサポート" width="1200"
                                            height="400">
                                    </picture>
                                    <div class="feature_top">
                                        <div class="feature_heading">
                                            <h2>子育てサポート</h2>
                                            <p>SUPPORT</p>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.829"
                                            viewBox="0 0 27.414 12.829">
                                            <g id="Group_71" data-name="Group 71" transform="translate(-1332 -606.586)">
                                                <line id="Line_3" data-name="Line 3" x2="25"
                                                    transform="translate(1333 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_4" data-name="Line 4" x1="5" y1="5"
                                                    transform="translate(1353 608)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                                <line id="Line_5" data-name="Line 5" y1="5" x2="5"
                                                    transform="translate(1353 613)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="feature_desc">
                                        <p>
                                            テキストが入りますテキストが入りますテキストが入ります<br class="pc-only" />
                                            テキストが入りますテキストが入りますテキストが入ります（60字程度）
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //feature -->

        <!-- admission// -->
        <section class="admission">
            <div class="admission_container u-wrapper">
                <div class="c-heading" data-fadein>
                    <h2>入園をお考えの方へ</h2>
                    <p>ADMISSION</p>
                </div>
                <div class="admission_list">
                    <div data-fadein>
                        <a href="<?= home_url(); ?>/admission/" class="admission_items">
                            <picture>
                                <source media="(max-width: 1023px)"
                                    data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/admission_01.webp">
                                <img class="lazy" draggable="false" data-src="<?= get_template_directory_uri() ?>/assets/images/home/admission_01.webp"
                                    alt="入園のご案内" width="353" height="260">
                            </picture>
                            <p>入園のご案内</p>
                        </a>
                    </div>
                    <div data-fadein>
                        <a href="<?= home_url(); ?>/admission/tour/" class="admission_items">
                            <picture>
                                <source media="(max-width: 1023px)"
                                    data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/admission_02.webp">
                                <img class="lazy" draggable="false" data-src="<?= get_template_directory_uri() ?>/assets/images/home/admission_02.webp"
                                    alt="園見学について" width="353" height="260">
                            </picture>
                            <p>園見学について</p>
                        </a>
                    </div>
                    <div data-fadein>
                        <a href="<?= home_url(); ?>/admission/faq/" class="admission_items">
                            <picture>
                                <source media="(max-width: 1023px)"
                                    data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/admission_03.webp">
                                <img class="lazy" draggable="false" data-src="<?= get_template_directory_uri() ?>/assets/images/home/admission_03.webp"
                                    alt="よくあるご質問" width="353" height="260">
                            </picture>
                            <p>よくあるご質問</p>
                        </a>
                    </div>
                </div>
                <div class="admission_bnr c-bnr">
                    <?php include 'components/bnr.php'; ?>
                </div>
            </div>
        </section>
        <!-- //admission -->

        <!-- nursary// -->
        <section class="nursary">
            <div class="nursary_container" data-fadein>
                <div class="nursary_inner u-pad">
                    <div class="nursary_left">
                        <div class="pc-only">
                            <div class="nursary_heading">
                                <span></span>
                                <h2>提携保育園のご案内</h2>
                            </div>
                            <h3 class="nursary_title">
                                鎮守の森 <br />
                                城山どんぐり保育園
                            </h3>
                        </div>
                        <div class="nursary_desc">
                            <p>
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります（100字程度）
                            </p>
                        </div>
                        <a class="nursary_btn c-btn" href="http://" target="_blank" rel="noopener noreferrer">
                            <p>鎮守の森 城山どんぐり保育園</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13">
                                <g id="Group_82" data-name="Group 82" transform="translate(-627 -5691)">
                                    <g id="Rectangle_46" data-name="Rectangle 46" transform="translate(631 5691)"
                                        fill="none" stroke="#000" stroke-width="1.5">
                                        <rect width="13" height="9" rx="2" stroke="none" />
                                        <rect x="0.75" y="0.75" width="11.5" height="7.5" rx="1.25" fill="none" />
                                    </g>
                                    <g id="Rectangle_45" data-name="Rectangle 45" transform="translate(627 5695)"
                                        fill="#f5f5f5" stroke="#000" stroke-width="1.5">
                                        <rect width="13" height="9" rx="2" stroke="none" />
                                        <rect x="0.75" y="0.75" width="11.5" height="7.5" rx="1.25" fill="none" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="nursary_right">
                        <div class="sp-only">
                            <div class="nursary_heading">
                                <span></span>
                                <h2>提携保育園のご案内</h2>
                            </div>
                            <h3 class="nursary_title">
                                鎮守の森城山どんぐり保育園
                            </h3>
                        </div>
                        <picture>
                            <source media="(max-width: 1023px)" data-srcset="<?= get_template_directory_uri() ?>/assets/images/home/">
                            <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/home" alt="" draggable="false" width="540"
                                height="392">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!-- //nursary -->

        <!-- contact// -->
        <?php include 'components/contact.php'; ?>
        <!-- //contact -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>