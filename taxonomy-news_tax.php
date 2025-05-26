<?php 
    global $black_header;
    $black_header = true;

    get_header();

    $current_slug = get_queried_object()->slug;
    $current_name = get_queried_object()->name;
?>

    <!-- @main -->
    <main class="newspage">
        <!-- news// -->
        <section class="news" data-offset-top>
            <div class="news_container u-wrapper">
                <div class="news_heading" data-fadein>
                    <div class="c-heading --big">
                        <h2>おしらせ</h2>
                        <p>NEWS</p>
                    </div>
                    <div class="news_category" data-news-category>
                        <p class="pc-only">Category :</p>
                        <div class="sp-only btn-category" data-news-btn>
                            <p>Category</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12.828" height="7.828"
                                viewBox="0 0 12.828 7.828">
                                <g id="Group_313" data-name="Group 313" transform="translate(-236.586 -299.586)">
                                    <line id="Line_24" data-name="Line 24" x2="5" y2="5" transform="translate(238 301)"
                                        fill="none" stroke="#000" stroke-linecap="square" stroke-width="2" />
                                    <line id="Line_25" data-name="Line 25" x1="5" y2="5" transform="translate(243 301)"
                                        fill="none" stroke="#000" stroke-linecap="square" stroke-width="2" />
                                </g>
                            </svg>

                        </div>
                        <div class="news_group" data-news-group>
                            <div class="nav">
                                <a href="<?= home_url(); ?>/news/" class="<?= $current_slug == '' ? '--active' : '' ?>">All</a>
                                <a href="<?= home_url(); ?>/news/info/" class="<?= $current_slug == 'info' ? '--active' : '' ?>">Info</a>
                                <a href="<?= home_url(); ?>/news/event/" class="<?= $current_slug == 'event' ? '--active' : '' ?>">Event</a>
                                <a href="<?= home_url(); ?>/news/admission" class="<?= $current_slug == 'admission' ? '--active' : '' ?>">Admission</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news_list">
                    <div class="c-news">
                        <div class="c-news_list">
                            <?php
                                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'news',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'news_tax',
                                            'field' => 'slug',
                                            'terms' => array( get_queried_object()->slug ),
                                            'operator' => 'IN'
                                        )
                                    ),
                                    'order' => 'DESC',
                                    'paged' => $paged,
                                );
                                $the_query = new WP_Query( $args );           
                            ?>

                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div data-fadein>
                                    <a href="<?php the_permalink(); ?>" class="c-news_items">
                                        <div class="c-news_group">
                                            <p class="date"><?= get_the_date('Y.m.d'); ?></p>
                                            <p class="category --<?= $current_slug; ?>"><?= $current_name; ?></p>
                                        </div>
                                        <div class="c-news_title">
                                            <p class="title"><?php the_title(); ?></p>
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
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="news_controls" data-fadein>
                    <div class="news_pager newer">
                        <a href="#">＜　新しい記事</a>
                    </div>
                    <div class="news_center">
                        <a href="#" class="--active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <p>...</p>
                        <a href="#">99</a>
                    </div>
                    <div class="news_pager older">
                        <a href="#">古い記事　＞</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //news -->

        <!-- bnr// -->
        <div class="c-bnr">
            <div class="c-bnr_container">
                <?php include 'components/bnr.php'; ?>
            </div>
        </div>
        <!-- //bnr -->

        <!-- // -->
        <div class="c-line"><span></span></div>
        <!-- // -->

        <!-- contact// -->
        <?php include 'components/contact.php'; ?>
        <!-- //contact -->
    </main>
    <!-- @@main -->


<?php get_footer(); ?>