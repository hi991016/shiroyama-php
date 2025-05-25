<?php 
    global $black_header;
    $black_header = true;

    get_header(); 
?>

    <!-- @main -->
    <main class="accesspage">
        <!-- access// -->
        <section class="access" data-offset-top>
            <div class="access_container u-wrapper">
                <div class="c-heading --big" data-fadein>
                    <h2>アクセス</h2>
                    <p>ACCESS</p>
                </div>
                <div class="access_map" data-fadein>
                    <div class="access_map_container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1618.4952542467797!2d139.6871224!3d35.7756095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018eccdb665c9a9%3A0xca1868434b45397b!2sIshikawa%20Kinder%20Campus%20Shiroyama%20Kindergarten!5e0!3m2!1sen!2s!4v1747795187357!5m2!1sja!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="access_map_address">
                        <p>〒174-0056 東京都板橋区志村2丁目16-2</p>
                        <p>「志村三丁目駅」より徒歩約6分</p>
                    </div>
                </div>
                <div class="access_list">
                    <div class="access_items">
                        <div class="access_title" data-fadein>
                            <div class="c-textcircle">
                                <p>駐車場 / 駐輪場について</p>
                            </div>
                        </div>
                        <div class="access_group">
                            <div class="access_content" data-fadein>
                                <p>[ 駐車場 ]</p>
                                <p>&nbsp;</p>
                                <p>
                                    当園は駐車可能ですが、10台程度とスペースに限りがありますので、譲り合ってご利用下さい。また、駐車スペースは神社の境内にありますので、参拝者の迷惑にならないようご協力をお願いします。
                                </p>
                                <p class="notes">※ 駐車スペースに入る際は「左折出庫/左折入庫」をお願いしています</p>
                            </div>
                            <div class="access_content" data-fadein>
                                <p>[ 駐輪場 ]</p>
                                <p>&nbsp;</p>
                                <p>
                                    参道に駐輪するようお願いします。登園後は、参道を使用することもありますので、空けて頂きますようご協力をお願いします。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="access_items" data-fadein>
                        <div class="c-textcircle">
                            <p>通園バスについて</p>
                        </div>
                    </div>
                    <div class="access_group col4">
                        <div class="access_content" data-fadein>
                            <p>
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります（150字程度）
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //access -->

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