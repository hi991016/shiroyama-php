<?php 
    get_header(); 
?>

    <!-- @main -->
    <main class="admissionpage">
        <!-- thumbnail// -->
        <section class="c-thumbnail">
            <picture>
                <source media="(max-width: 1023px)" data-srcset="<?= get_template_directory_uri() ?>/assets/images/admission/admission_thumb_sp.webp">
                <img class="lazy" draggable="false" data-src="<?= get_template_directory_uri() ?>/assets/images/admission/admission_thumb.webp"
                    alt="入園のご案内" width="1300" height="550">
            </picture>
            <div class="c-thumbnail_heading">
                <h2>入園のご案内</h2>
                <p>ADMISSION</p>
            </div>
        </section>
        <!-- //thumbnail -->

        <!-- admission// -->
        <section class="admission" data-offset-top>
            <div class="admission_container">
                <div class="admission_intro c-introduce u-wrapper">
                    <h2 data-fadein>
                        まずは園見学にお越しください。<br />
                        前年の9月までに見学いただくと、<br />
                        園選びがスムーズです。
                    </h2>
                    <div class="c-introduce_content">
                        <p data-fadein>
                            テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります（200字程度）
                        </p>
                        <div class="c-introduce_btn" data-fadein>
                            <a href="#" class="c-btn">募集要項 (PDF)</a>
                            <a href="#" class="c-btn">
                                <p>2歳児クラスをご検討の方はこちら</p>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.828"
                                    viewBox="0 0 27.414 12.828">
                                    <g id="Group_575" data-name="Group 575" transform="translate(-1332 -606.586)">
                                        <line id="Line_3" data-name="Line 3" x2="25" transform="translate(1333 613)"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" />
                                        <line id="Line_4" data-name="Line 4" x1="5" y1="5"
                                            transform="translate(1353 608)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-width="2" />
                                        <line id="Line_5" data-name="Line 5" y1="5" x2="5"
                                            transform="translate(1353 613)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-width="2" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="admission_list">
                    <div class="admission_items" data-fadein>
                        <div class="c-feature">
                            <div class="c-feature_inner">
                                <div class="c-feature_left">
                                    <h3 class="is-pad-sp">
                                        保育見学会、未就園児イベントのほか、<br class="sp-only">個別の見学も受け付けています。
                                    </h3>
                                    <div class="is-padl-sp">
                                        <figure class="c-feature_figure sp-only">
                                            <img class="lazy" draggable="false"
                                                data-src="<?= get_template_directory_uri() ?>/assets/images/admission/admission_01.webp"
                                                alt="保育見学会、未就園児イベントのほか、個別の見学も受け付けています。" width="720" height="480">
                                        </figure>
                                    </div>
                                    <div class="is-pad-sp">
                                        <p class="desc">
                                            保育見学会や未就園児イベントについては随時Webサイトでご案内しています。ご都合が合わない方は、個別の見学を申し込みいただくことができますので、園に直接ご連絡ください。
                                        </p>
                                        <a href="<?= home_url(); ?>/admission/tour/" class="c-btn">
                                            <p>園見学について</p>
                                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="27.414"
                                                height="12.828" viewBox="0 0 27.414 12.828">
                                                <g id="Group_61" data-name="Group 61"
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
                                        </a>
                                    </div>
                                </div>
                                <div class="c-feature_right pc-only">
                                    <figure class="c-feature_figure">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/admission/admission_01.webp"
                                            alt="保育見学会、未就園児イベントのほか、個別の見学も受け付けています。" width="720" height="480">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="admission_items" data-fadein>
                        <div class="c-feature --reverse">
                            <div class="c-feature_inner">
                                <div class="c-feature_left">
                                    <h3 class="is-pad-sp">
                                        放課後保育や課外教室などの<br />
                                        子育てサポートが充実しています。
                                    </h3>
                                    <div class="is-padl-sp">
                                        <figure class="c-feature_figure sp-only">
                                            <img class="lazy" draggable="false"
                                                data-src="<?= get_template_directory_uri() ?>/assets/images/admission/admission_02.webp"
                                                alt="放課後保育や課外教室などの子育てサポートが充実しています。" width="720" height="480">
                                        </figure>
                                    </div>
                                    <div class="is-pad-sp">
                                        <p class="desc">
                                            城山幼稚園を含む石川キンダー学園は、働く保護者の方が区内で一番多い幼児教育施設です。忙しい保護者の方をさまざまな子育てサポートで応援しています。
                                        </p>
                                        <a href="<?= home_url(); ?>/support/" class="c-btn">
                                            <p>子育てサポート</p>
                                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="27.414"
                                                height="12.828" viewBox="0 0 27.414 12.828">
                                                <g id="Group_61" data-name="Group 61"
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
                                        </a>
                                    </div>
                                </div>
                                <div class="c-feature_right pc-only">
                                    <figure class="c-feature_figure">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/admission/admission_02.webp"
                                            alt="放課後保育や課外教室などの子育てサポートが充実しています。" width="720" height="480">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="admission_items" data-fadein>
                        <div class="c-feature">
                            <div class="c-feature_inner">
                                <div class="c-feature_left">
                                    <h3 class="is-pad-sp">
                                        板橋区の「私立幼稚園保護者補助金」など、<br class="sp-only">各種補助金を利用できます。
                                    </h3>
                                    <div class="is-padl-sp">
                                        <figure class="c-feature_figure sp-only">
                                            <img class="lazy" draggable="false"
                                                data-src="<?= get_template_directory_uri() ?>/assets/images/admission/admission_03.webp"
                                                alt="板橋区の「私立幼稚園保護者補助金」など、各種補助金を利用できます。" width="720" height="480">
                                        </figure>
                                    </div>
                                    <div class="is-pad-sp">
                                        <p class="desc">
                                            板橋区では「私立幼稚園保護者補助金」など、私立幼稚園に通う保護者を対象とした補助金が充実しています。園見学では、補助金の金額やご利用の条件についてもご説明しています。
                                        </p>
                                        <p class="notes">＊板橋区以外に在住の方、制度について詳しく知りたい方は各自治体の情報をご確認ください。</p>
                                    </div>
                                </div>
                                <div class="c-feature_right pc-only">
                                    <figure class="c-feature_figure">
                                        <img class="lazy" draggable="false"
                                            data-src="<?= get_template_directory_uri() ?>/assets/images/admission/admission_03.webp"
                                            alt="板橋区の「私立幼稚園保護者補助金」など、各種補助金を利用できます。" width="720" height="480">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="admission_process u-wrapper">
                    <div class="admission_process_title c-textcircle" data-fadein>
                        <p>入園までの流れ</p>
                    </div>
                    <div class="admission_process_desc" data-fadein>
                        城山幼稚園にご興味を持たれたら、園見学にお越しください。<br />
                        お子さまに合った園を選び、手続きをスムーズに行っていただくためにも、早めの見学をおすすめしています。
                    </div>
                    <div class="admission_process_list">
                        <div class="admission_process_items" data-fadein>
                            <div class="admission_process_type">
                                <h5>01</h5>
                                <p>園見学</p>
                            </div>
                            <div class="admission_process_content">
                                <p>保育見学会、未就園児向けのイベント、個別見学のいずれかにお越しください。</p>
                            </div>
                        </div>
                        <div class="admission_process_items" data-fadein>
                            <div class="admission_process_type">
                                <h5>02</h5>
                                <p>入園説明会</p>
                            </div>
                            <div class="admission_process_content">
                                <p>入園手続きについてご説明いたします。</p>
                            </div>
                        </div>
                        <div class="admission_process_items" data-fadein>
                            <div class="admission_process_type">
                                <h5>03</h5>
                                <p>入園選考</p>
                            </div>
                            <div class="admission_process_content">
                                <p>お子さまと保護者の方にご来園いただき、面接いたします。</p>
                            </div>
                        </div>
                        <div class="admission_process_items" data-fadein>
                            <div class="admission_process_type">
                                <h5>04</h5>
                                <p>選考結果発表</p>
                            </div>
                            <div class="admission_process_content">
                                <p>Webサイトのニュースにて発表いたします。</p>
                            </div>
                        </div>
                        <div class="admission_process_items" data-fadein>
                            <div class="admission_process_type">
                                <h5>05</h5>
                                <p>入園</p>
                            </div>
                            <div class="admission_process_content">
                                <p>テキストが入りますテキストが入りますテキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="admission_process_btn" data-fadein>
                        <a href="<?= home_url(); ?>/admission/faq/" class="c-btn">
                            <p>よくあるご質問はこちら</p>
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
                <div class="admission_recruit">
                    <div class="admission_recruit_wrapper u-wrapper">
                        <div class="admission_recruit_title c-textcircle" data-fadein>
                            <p>見学お申し込み</p>
                        </div>
                        <div class="admission_recruit_desc" data-fadein>
                            <p>
                                テキストが入りますテキストが入りますテキストが入りますテキストが入ります <br class="pc-only" />
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります <br class="pc-only" />
                                テキストが入りますテキストが入ります（100字程度）
                            </p>
                        </div>
                        <a href="<?= home_url(); ?>/contact/" class="admission_recruit_btn c-btn" data-fadein>
                            <p>お申し込み</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.414" height="12.828"
                                viewBox="0 0 27.414 12.828">
                                <g id="Group_546" data-name="Group 546" transform="translate(-1332 -606.586)">
                                    <line id="Line_3" data-name="Line 3" x2="25" transform="translate(1333 613)"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_4" data-name="Line 4" x1="5" y1="5" transform="translate(1353 608)"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                    <line id="Line_5" data-name="Line 5" y1="5" x2="5" transform="translate(1353 613)"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //admission -->

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