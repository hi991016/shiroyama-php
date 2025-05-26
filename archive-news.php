<?php 
    global $black_header;
    $black_header = true;

    get_header();
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
                                <a href="<?= home_url(); ?>/news/" class="--active">All</a>
                                <a href="<?= home_url(); ?>/news/info/">Info</a>
                                <a href="<?= home_url(); ?>/news/event/">Event</a>
                                <a href="<?= home_url(); ?>/news/admission">Admission</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news_list">
                    <div class="c-news">
                        <div class="c-news_list">
                        <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $args = [
                            'post_type' => 'news',
                            'post_status' => 'publish',
                            'posts_per_page' => 20,
                            'order' => 'DESC',
                            'orderby' => 'date',
                            'paged' => $paged
                        ];
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                                $cate = get_the_terms(get_the_ID(), 'news_tax');
                                $p = !empty($cate) && is_array($cate) ? $cate[0] : null;
                        ?>
                            <div data-fadein>
                                <a href="<?php the_permalink(); ?>" class="c-news_items">
                                    <div class="c-news_group">
                                        <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                                        <p class="category --<?php echo $p ? $p->slug : 'default'; ?>">
                                            <?php echo $p ? $p->name : 'Chưa có danh mục'; ?>
                                        </p>
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
                            <?php   
                                    endwhile;
                                    wp_reset_postdata();
                                endif; 
                            ?>
                        </div>
                    </div>
                </div>

                <div class="news_controls" data-fadein>
                    <?php echo news_pagination($the_query->max_num_pages, $paged, home_url('/news')); ?>
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