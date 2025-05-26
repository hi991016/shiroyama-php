<?php 
    global $black_header;
    $black_header = true;

    get_header();
    
    $news = get_field('news_fields');
    $tax_name = 'news_tax';
    $default_id = get_the_ID();

    $category = get_the_terms($default_id, $tax_name); 
    $projects_posts1 = array(
        'post_type' => 'news',
        'posts_per_page' => -1,
        'order'             => 'DESC',
    );
    $projects_posts = new WP_Query( $projects_posts1 );
    $arr_posts = $projects_posts->posts;
    $index = "";
    foreach ( $arr_posts as $key => $element ) {
        if ( $element->ID  == $default_id ) {
            $index = $key;
        }
    }
?>

    <!-- @main -->
    <main class="newspage">
        <!-- details// -->
        <section class="news detail" data-offset-top>
            <div class="news_container detail_container u-wrapper">
                <div class="detail_inner u-wrapper">
                    <div class="detail_heading">
                        <h2 class="title"><?= the_title(); ?></h2>
                        <div class="group">
                            <p class="date"><?= get_the_date('Y.m.d'); ?></p>
                            <a href="<?= home_url(); ?>/news/<?= $category[0]->slug; ?>" class="category --<?= $category[0]->slug; ?>"><?= $category[0]->name ?></a>
                        </div>
                    </div>

                    <div class="detail_entry">
                        <?php if(!empty($news['entry'])) : ?>
                            <?= $news['entry']; ?>
                        <?php else : ?>
                            <p>THIS CONTENT IS NOT AVAILABLE</p>
                        <?php endif; ?>
                    </div>

                    <div class="news_controls" data-fadein>
                        <div class="news_pager newer">
                            <?php
                                if(isset($arr_posts[$index - 1])) :
                                    $next_post = $arr_posts[$index - 1];
                            ?>
                            <a href="<?= get_permalink($next_post->ID); ?>">＜　新しい記事</a>
                            <?php endif; ?>
                        </div>
                        <div class="news_center">
                            <a href="<?= home_url(); ?>/news/" class="--back">一覧に戻る</a>
                        </div>
                        <div class="news_pager older">
                            <?php
                                if(isset($arr_posts[$index + 1])) :
                                    $prev_post = $arr_posts[$index + 1];
                            ?>
                            <a href="<?= get_permalink($prev_post->ID); ?>">古い記事　＞</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //details -->

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