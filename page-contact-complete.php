<?php 
    /*
    Template Name: Contact -Complete-
    */

    global $black_header;
    $black_header = true;

    get_header(); 
?>

    <!-- @main -->
    <main class="contactpage">
        <!-- contact// -->
        <section class="contact complete" data-offset-top>
            <div class="contact_container u-wrapper">
                <div class="contact_wrapper u-wrapper">
                    <div class="c-heading --big" data-fadein>
                        <h2>見学お申し込み/お問い合わせ</h2>
                        <p>CONTACT FORM</p>
                    </div>
                    <div class="contact_complete" data-fadein>
                        <div class="contact_complete_content">
                            <p>フォームの送信が完了いたしました。</p>
                            <p>
                                近日中に園よりご連絡させていただきますので、今しばらくお待ちください。<br class="pc-only" />
                                なお、1週間経っても連絡がない場合はメールアドレスの誤入力の可能性もございますので、<br class="pc-only" />
                                お手数ですが再度お問い合わせいただくか、お電話にてご連絡をお願い致します。
                            </p>
                            <p>&nbsp;</p>
                            <p>TEL / 03 3966 5262（9:00-16:30）</p>
                        </div>
                        <div class="contact_complete_btn">
                            <a href="<?= home_url(); ?>" class="c-btn">
                                <p>トップに戻る</p>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.828" viewBox="0 0 27.414 12.828">
                                    <g id="Group_61" data-name="Group 61" transform="translate(-1332 -606.586)">
                                        <line id="Line_3" data-name="Line 3" x2="25" transform="translate(1333 613)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></line>
                                        <line id="Line_4" data-name="Line 4" x1="5" y1="5" transform="translate(1353 608)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></line>
                                        <line id="Line_5" data-name="Line 5" y1="5" x2="5" transform="translate(1353 613)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"></line>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //contact -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>