<?php 
    get_header(); 
?>

    <!-- @main -->
    <main class="dailypage">
        <!-- thumbnail// -->
        <section class="c-thumbnail">
            <picture>
                <source media="(max-width: 1023px)" data-srcset="<?= get_template_directory_uri() ?>/assets/images/daily/daily_thumb_sp.webp">
                <img class="lazy" draggable="false" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/daily_thumb.webp" alt="園の生活"
                    width="1300" height="550">
            </picture>
            <div class="c-thumbnail_heading">
                <h2>園の生活</h2>
                <p>DAILY LIFE</p>
            </div>
        </section>
        <!-- //thumbnail -->

        <!-- daily// -->
        <section class="daily" data-offset-top>
            <div class="daily_container u-wrapper">
                <div class="daily_intro c-introduce">
                    <h2 data-fadein>
                        コピーが入ります <br />
                        コピーが入ります
                    </h2>
                    <div class="c-introduce_content">
                        <p data-fadein>
                            テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります（200字程度）
                        </p>
                    </div>
                </div>
                <div data-fadein>
                    <div class="daily_swiper" data-basic-swiper>
                        <div class="daily_swiper_wrapper swiper-wrapper">
                            <div class="daily_swiper_slide swiper-slide">
                                <figure>
                                    <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily" alt="靴を揃える" draggable="false"
                                        width="340" height="227">
                                </figure>
                                <h3>靴を揃える</h3>
                                <p>
                                    テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                </p>
                            </div>
                            <div class="daily_swiper_slide swiper-slide">
                                <figure>
                                    <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily" alt="挨拶をする" draggable="false"
                                        width="340" height="227">
                                </figure>
                                <h3>挨拶をする</h3>
                                <p>
                                    テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                </p>
                            </div>
                            <div class="daily_swiper_slide swiper-slide">
                                <figure>
                                    <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily" alt="整理整頓" draggable="false"
                                        width="340" height="227">
                                </figure>
                                <h3>整理整頓</h3>
                                <p>
                                    テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="daily_tabs" data-fadein>
                    <div class="daily_tabs_list">
                        <ul data-tabs>
                            <li class="--active" data-tabs-items>
                                <div class="c-textcircle">
                                    <p>園の一日</p>
                                </div>
                            </li>
                            <li data-tabs-items>
                                <div class="c-textcircle">
                                    <p>年間行事</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="daily_tabs_group">
                        <div class="daily_tabs_content daily_timeline --active" data-tabs-content>
                            <div class="daily_timeline_list">
                                <!-- 7:39 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>7:30</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">早朝お預かり保育 <span>（有料/希望者のみ）</span></h4>
                                            <div class="desc">
                                                <p>通常の保育前、7:30からお預かりが可能です。</p>
                                                <a href="<?= home_url(); ?>/support/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <g id="Group_58" data-name="Group 58"
                                                            transform="translate(-80 -650)">
                                                            <path id="Polygon_1" data-name="Polygon 1" d="M3,0,6,5H0Z"
                                                                transform="translate(91 655) rotate(90)"
                                                                fill="#a99055" />
                                                            <g id="Ellipse_2" data-name="Ellipse 2"
                                                                transform="translate(80 650)" fill="none"
                                                                stroke="#a99055" stroke-width="1">
                                                                <circle cx="8" cy="8" r="8" stroke="none" />
                                                                <circle cx="8" cy="8" r="7.5" fill="none" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <p>詳細はこちら</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 8:50 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>8:50</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">登園</h4>
                                            <div class="desc">
                                                <p>「おはようございます！」の元気な挨拶で幼稚園の1日が始まります。</p>
                                                <p>全員の先生に挨拶をしたら、お部屋に入って活動の支度をします。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 9:00 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>9:00</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">お支度 ＆ 自由遊び</h4>
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="お支度＆自由遊び"
                                                    draggable="false" width="665" height="444">
                                            </figure>
                                            <div class="desc">
                                                <p>
                                                    ホワイトボードに書かれた先生からのメッセージを読んでから身支度を始めます。<br class="pc-only" />
                                                    シール帳にシールを貼ることが日課の一つ。貼り終わったら着替えをします。<br class="pc-only" />
                                                    着替えの終わった子から元気よく自由遊びに出ていきます。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 9:20 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>9:20</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">ラジオ体操 ＆ 朝かけっこ</h4>
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="ラジオ体操＆朝かけっこ"
                                                    draggable="false" width="665" height="444">
                                            </figure>
                                            <div class="desc">
                                                <p>
                                                    自由遊びの片付け後、ラジオ体操を行い、音楽と同時にかけっこスタート！<br class="pc-only" />
                                                    朝から脳を活性化し、集中力アップ！毎日走ることにより腰骨が立ち、<br class="pc-only" />
                                                    姿勢が良くなると共に、体力を少しずつつけていきます。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 10:00 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>10:00</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">活動</h4>
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="活動"
                                                    draggable="false" width="665" height="444">
                                            </figure>
                                            <div class="desc">
                                                <p>
                                                    「読み・書き・計算・体操・かけっこ・音楽」を毎日10分〜20分ずつ行います。幼児期に毎日継続して行うことにより、「自ら学び、自ら考え、自ら行動する力」の基礎を固めていきます。
                                                </p>
                                                <a href="<?= home_url(); ?>/education/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <g id="Group_58" data-name="Group 58"
                                                            transform="translate(-80 -650)">
                                                            <path id="Polygon_1" data-name="Polygon 1" d="M3,0,6,5H0Z"
                                                                transform="translate(91 655) rotate(90)"
                                                                fill="#a99055" />
                                                            <g id="Ellipse_2" data-name="Ellipse 2"
                                                                transform="translate(80 650)" fill="none"
                                                                stroke="#a99055" stroke-width="1">
                                                                <circle cx="8" cy="8" r="8" stroke="none" />
                                                                <circle cx="8" cy="8" r="7.5" fill="none" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <p>詳細はこちら</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 12:00 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>12:00</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">お昼</h4>
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="お昼"
                                                    draggable="false" width="665" height="444">
                                            </figure>
                                            <div class="desc">
                                                <p>
                                                    食べる前に、作ってくれて人や食べ物に対する感謝の気持ちを込めて「いただきますの言葉」を心を揃えて唱和します。当日の朝に給食を注文することも可能です。城山幼稚園では、毎週木曜日に全員給食を取り入れています。
                                                </p>
                                                <a href="<?= home_url(); ?>/support/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <g id="Group_58" data-name="Group 58"
                                                            transform="translate(-80 -650)">
                                                            <path id="Polygon_1" data-name="Polygon 1" d="M3,0,6,5H0Z"
                                                                transform="translate(91 655) rotate(90)"
                                                                fill="#a99055" />
                                                            <g id="Ellipse_2" data-name="Ellipse 2"
                                                                transform="translate(80 650)" fill="none"
                                                                stroke="#a99055" stroke-width="1">
                                                                <circle cx="8" cy="8" r="8" stroke="none" />
                                                                <circle cx="8" cy="8" r="7.5" fill="none" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <p>詳細はこちら</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 13:00 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>13:00</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">自由遊び or 主活動</h4>
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="自由遊び or 主活動"
                                                    draggable="false" width="665" height="444">
                                            </figure>
                                            <div class="desc">
                                                <p>
                                                    お昼ご飯を食べた後は、基本的に自由時間となります。ボール遊びをしている子、体操をしている子、本を読んでいる子と、活動の様子は子どもによって様々です。<br
                                                        class="pc-only" />
                                                    時期によって、季節・行事に関する製作や、発表会前の練習などをすることもあります。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 14:00 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>14:00</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">降園 <span>（14:30まで/14:40閉門）</span></h4>
                                            <div class="desc">
                                                <p>
                                                    担任が、保護者の方にその日の出来事をお伝えしています。お子さまについての不安や心配なこと等は、その日のうちに担任と相談することができます。（水曜日のみ13:00〜13:30降園/13:40閉門）
                                                </p>
                                            </div>
                                        </div>
                                        <div class="daily_timeline_group">
                                            <h4 class="title">放課後お預かり保育 <span>（有料/希望者のみ）</span></h4>
                                            <div class="desc">
                                                <p>
                                                    通常の保育後、19:00までお預かりが可能です。お申込みはネットから24時間可能です。（当日のお昼12時まで）ただし、行事等でお預かりを行っていない日もあります。掲示板、お手紙等で事前にお知らせしますのでご確認ください。（水曜日のみ13:00～19:00）
                                                </p>
                                                <a href="<?= home_url(); ?>/support/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <g id="Group_58" data-name="Group 58"
                                                            transform="translate(-80 -650)">
                                                            <path id="Polygon_1" data-name="Polygon 1" d="M3,0,6,5H0Z"
                                                                transform="translate(91 655) rotate(90)"
                                                                fill="#a99055" />
                                                            <g id="Ellipse_2" data-name="Ellipse 2"
                                                                transform="translate(80 650)" fill="none"
                                                                stroke="#a99055" stroke-width="1">
                                                                <circle cx="8" cy="8" r="8" stroke="none" />
                                                                <circle cx="8" cy="8" r="7.5" fill="none" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <p>詳細はこちら</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="daily_timeline_group">
                                            <h4 class="title">課外教室 <span>（有料/希望者のみ）</span></h4>
                                            <div class="desc">
                                                <p>
                                                    魅力的な課外教室がたくさんあるので、どれにしようか悩んでしまうかも（笑）<br class="pc-only" />
                                                    お預かり保育と組み合わせてのご利用も可能です。
                                                </p>
                                                <a href="<?= home_url(); ?>/support/after-school-activities/">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <g id="Group_58" data-name="Group 58"
                                                            transform="translate(-80 -650)">
                                                            <path id="Polygon_1" data-name="Polygon 1" d="M3,0,6,5H0Z"
                                                                transform="translate(91 655) rotate(90)"
                                                                fill="#a99055" />
                                                            <g id="Ellipse_2" data-name="Ellipse 2"
                                                                transform="translate(80 650)" fill="none"
                                                                stroke="#a99055" stroke-width="1">
                                                                <circle cx="8" cy="8" r="8" stroke="none" />
                                                                <circle cx="8" cy="8" r="7.5" fill="none" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <p>詳細はこちら</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 19:00 -->
                                <div class="daily_timeline_items">
                                    <div class="daily_timeline_time">
                                        <div class="rounder">
                                            <p>19:00</p>
                                        </div>
                                        <span class="line"></span>
                                    </div>
                                    <div class="daily_timeline_content">
                                        <div class="daily_timeline_group">
                                            <h4 class="title">お預かり終了</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="daily_tabs_content daily_event" data-tabs-content>
                            <div class="daily_event_list">
                                <!-- 4月/5月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <div class="daily_event_month">
                                                <span></span>
                                                <p>4月</p>
                                            </div>
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="入園式・進級式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>入園式・進級式</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <div class="daily_event_month">
                                                <span></span>
                                                <p>5月</p>
                                            </div>
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="子どもの日集会"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>子どもの日集会</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 6月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>6月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="入園式・進級式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>入園式・進級式</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="子どもの日集会"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>子どもの日集会</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 7月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>7月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="七夕集会"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>七夕集会</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="熊野カップ"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>熊野カップ</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="1学期終業式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>1学期終業式</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="お泊り保育（年長）"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>お泊り保育（年長）</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="夏期保育（前期）"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>夏期保育（前期）</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="夕涼み会"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>夕涼み会</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 8月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>8月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="夏期保育（後期）"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>夏期保育（後期）</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 9月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>9月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="2学期始業式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>2学期始業式</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="神輿担ぎ"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>神輿担ぎ</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="城山祭り（観劇会）"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>城山祭り（観劇会）</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 10月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>10月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="合同運動会（城山カップ）"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>合同運動会（城山カップ）</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="秋の遠足"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>秋の遠足</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 11月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>11月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="参観日"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>参観日</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="大根掘り"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>大根掘り</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 12月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>12月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="おもちつき"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>おもちつき</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="2学期終業式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>2学期終業式</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>1月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="3学期始業式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>3学期始業式</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="熊野カップ"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>熊野カップ</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>2月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="豆まき集会"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>豆まき集会</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="学習発表会"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>学習発表会</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3月 -->
                                <div class="daily_event_items">
                                    <div class="daily_event_month">
                                        <span></span>
                                        <p>3月</p>
                                    </div>
                                    <div class="daily_event_inner">
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="卒園遠足（年長）"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>卒園遠足（年長）</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="3学期修了式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>3学期修了式</h4>
                                        </div>
                                        <div class="daily_event_content">
                                            <figure>
                                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/images/daily/" alt="卒園式"
                                                    draggable="false" width="255" height="171">
                                            </figure>
                                            <h4>卒園式</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //daily -->

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