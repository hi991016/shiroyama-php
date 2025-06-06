<?php 
    /*
    Template Name: Contact -Confirm-
    */

    global $black_header;
    $black_header = true;
    
    get_header(); 
?>
    <!-- @main -->
    <main class="contactpage">
        <!-- contact// -->
        <section class="contact confirm" data-offset-top>
            <div class="contact_container u-wrapper">
                <div class="contact_wrapper u-wrapper">
                    <div class="c-heading --big" data-fadein>
                        <h2>見学お申し込み/お問い合わせ</h2>
                        <p>CONTACT FORM</p>
                    </div>
                    <div class="contact_confirm" data-fadein>
                        <form action="">
                            <!-- inquiry -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="your-subject">お問い合わせ種別</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">園見学のお申し込み</p>
                                </div>
                            </div>
                            <!-- name -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="your-name">お名前</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">福田</p>
                                    <p class="val">晋也</p>
                                </div>
                            </div>
                            <!-- child -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="childfn">お子様のお名前</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">福田</p>
                                    <p class="val">太郎</p>
                                </div>
                            </div>
                            <!-- birthday -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="birthday">お子様の生年月日</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">2023 年</p>
                                    <p class="val">6 月</p>
                                    <p class="val">1 日</p>
                                </div>
                            </div>
                            <!-- postcode -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="postcode">郵便番号</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">174-0056</p>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="your-email">メールアドレス</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">info@studio1014.jp</p>
                                </div>
                            </div>
                            <!-- phone -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="phone">お電話番号</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">090 6482 2585</p>
                                </div>
                            </div>
                            <!-- nursery -->
                            <div class="contact_line">
                                <div class="contact_label">
                                    <label for="phone">当園を知ったきっかけ</label>
                                </div>
                                <div class="contact_field">
                                    <p class="val">その他（内容が入ります内容が入ります内容が入ります）</p>
                                </div>
                            </div>

                            <!-- submit -->
                            <div class="contact_btn">
                                <input type="button" value="修正する" />
                                <input class="is-submit active" type="submit" value="送信する" data-form-submit />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- //contact -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>