<?php 
    global $black_header;
    $black_header = true;

    get_header(); 
?>

    <!-- @main -->
    <main class="errorpage">
        <!-- notfound// -->
        <section class="notfound">
            <div class="notfound_container">
                <h2 class="notfound_heading">404</h2>
                <div class="notfound_sub">
                    <h3>This page could not be found.</h3>
                </div>
            </div>
        </section>
        <!-- //notfound -->

        <!-- bnr// -->
        <div class="c-bnr" data-offset-top>
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