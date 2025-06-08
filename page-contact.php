<?php 
    global $black_header;
    $black_header = true;
    
    get_header(); 
?>

    <!-- @main -->
    <main class="contactpage">
        <!-- contact// -->
        <section class="contact" data-offset-top>
            <div class="contact_container u-wrapper">
                <div class="contact_wrapper u-wrapper">
                    <div class="c-heading --big" data-fadein>
                        <h2>見学お申し込み/お問い合わせ</h2>
                        <p>CONTACT FORM</p>
                    </div>
                    <div class="contact_form" data-form data-fadein>
                        <?php echo do_shortcode('[contact-form-7 id="7372836" title="Contact"]') ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- //contact -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>