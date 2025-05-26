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