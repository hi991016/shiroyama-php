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
                    <div class="contact_form" data-fadein>
                        <form action="">
                            <!-- inquiry -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="inquiry">お問い合わせ種別</label>
                                </div>
                                <div class="contact_field">
                                    <select id="inquiry" name="your-subject">
                                        <option value="" disabled="">選択してください</option>
                                        <option value="園見学のお申し込み">園見学のお申し込み</option>
                                        <option value="お問い合わせ">お問い合わせ</option>
                                    </select>
                                </div>
                            </div>
                            <!-- name -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="your-name">お名前</label>
                                </div>
                                <div class="contact_field">
                                    <div class="contact_group">
                                        <input size="40" maxlength="400"  value="" type="text" placeholder="姓" name="lastname">
                                        <input size="40" maxlength="400"  value="" type="text" placeholder="名" name="your-name">
                                    </div>
                                </div>
                            </div>
                            <!-- child -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="childfn">お名前</label>
                                </div>
                                <div class="contact_field">
                                    <div class="contact_group">
                                        <input size="40" maxlength="400"  value="" type="text" placeholder="姓" name="childln">
                                        <input size="40" maxlength="400"  value="" type="text" placeholder="名" name="childfn">
                                    </div>
                                </div>
                            </div>
                            <!-- child date of birth -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="date">お子様の生年月日</label>
                                </div>
                                <div class="contact_field">
                                    <div class="contact_group col3">
                                        <input size="40" maxlength="400"  value="" type="text" placeholder="年" name="year">
                                        <select class="select_date" name="month"><option value="" disabled="">月</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
                                        <select class="select_date" name="day"><option value="" disabled="">日</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                                    </div>
                                </div>
                            </div>
                            <!-- postcode -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="postcode">郵便番号</label>
                                </div>
                                <div class="contact_field">
                                    <div class="contact_group">
                                        <input size="40" maxlength="400"  value="" type="text" placeholder="例）174-0056" name="postcode">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="your-email">メールアドレス</label>
                                </div>
                                <div class="contact_field">
                                    <input size="40" maxlength="400"  value="" type="email" name="your-email">
                                </div>
                            </div>
                            <!-- phone -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="phone">お電話番号</label>
                                </div>
                                <div class="contact_field">
                                    <input size="40" maxlength="400"  value="" placeholder="日中繋がりやすいお電話番号をご記入ください" type="tel" name="phone">
                                </div>
                            </div>
                            <!-- nursery -->
                            <div class="contact_line">
                                <div class="contact_label req">
                                    <label for="nursery">当園を知ったきっかけ</label>
                                </div>
                                <div class="contact_field">
                                    <select name="nursery">
                                        <option value="" disabled="">選択してください</option>
                                        <option value="ウェブ検索">ウェブ検索</option>
                                        <option value="広告">広告</option>
                                        <option value="知人の紹介">知人の紹介</option>
                                        <option value="その他">その他</option>
                                    </select>
                                </div>
                            </div>
                            <div class="contact_line is-top">
                                <div></div>
                                <div class="contact_field">
                                    <input size="40" maxlength="400"  value="" type="text" placeholder="その他の場合はこちらにご記入ください" name="others">
                                </div>
                            </div>

                            <!-- policy -->
                            <div class="contact_policy">
                                <div class="contact_policy_content">
                                    <h3>プライバシーポリシー</h3>
                                    
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>学校法人石川キンダー学園では、本ホームページにおける個人情報の収集・利用・管理及び廃棄について、次のとおり個人情報保護方針を定め、収集した個人情報を取扱目的の範囲内で適切に取り扱います。</p>
                                    
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>第1条　個人情報の意義</p>
                                    <p>&nbsp;</p>
                                    <p>「個人情報」とは、本ホームページを通じて当法人が提供を受けた、個人に関する情報（住所、氏名、電話番号、E-mailアドレスなど）であって、特定の個人を識別できるものをいい、他の情報と照合することで識別することができる情報を含みます。</p>
                                    
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    
                                    <p>第2条　個人情報の収集</p>
                                    <p>&nbsp;</p>
                                    <p>1. 本ホームページを通じて当法人が個人情報を収集する場合は、利用者ご本人からの情報の提供を原則とします。</p>
                                    <p>2.個人情報を収集する際は、あらかじめ個人情報を取り扱う目的を明確にした上、その取扱目的を達成するために必要な範囲内で適正に行います。</p>
                                    <p>3. 提供いただく個人情報は、個人情報の正確性及び安全性確保のために、暗号化技術（SSL）を使用するなど、セキュリティーの確保に努めます。</p>

                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>第3条　個人情報の取扱目的</p>
                                    <p>&nbsp;</p>
                                    <p>当法人では、提供（登録）いただいた個人情報を、本ホームページにおいてするサービス（御祈祷の受付や御品物の発送のみならず、ホームページによる情報提供、メール配信、各種意見の受付など）の提供、当法人からのご連絡や業務のご案内、ご質問に対する回答及び資料の送付その他の目的に利用いたします。</p>

                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>第4条　個人情報の利用及び提供の制限</p>
                                    <p>&nbsp;</p>
                                    <p>1. 提供（登録）いただいた個人情報は、あらかじめ明示した取扱目的の範囲内で利用又は提供いたします。</p>
                                    <p>2. 当法人では、次に掲げる場合を除き、収集した個人情報を取扱目的以外のために自ら利用し、又は第三者に提供いたしません。ただし、統計的に処理された情報、公表を前提として収集した意見は個人情報を除き、必要に応じて公表することがありますので、ご了承ください。</p>
                                    <p>&nbsp;</p>
                                    <ul>
                                        <li><p>(1) 法令等の規定に基づく場合</p></li>
                                        <li><p>(2) 利用者ご本人の同意がある場合</p></li>
                                        <li><p>(3) 不正アクセスがあった場合</p></li>
                                        <li><p>(4) 脅迫等の違法行為があった場合</p></li>
                                        <li><p>(5) 利用者が希望するサービスを行うために当法人が業務を委託する業者に対して開示する場合</p></li>
                                        <li><p>(6) その他提供することについて特別な理由がある場合</p></li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p>3. 当法人では、個人情報の取扱いの全部又は一部を第三者に委託する場合は、当該第三者について適正な調査を行い、取扱いを委託された個人情報の安全管理が図れるよう当該第三者に対する必要かつ適正な監督を行います。</p>

                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>第5条　個人情報の適正管理</p>
                                    <p>&nbsp;</p>
                                    <p>1. 収集しました個人情報については、管理者が、個人情報への不正アクセス、紛失、破損、漏洩、流用、改竄などの防止その他の個人情報の安全管理のために必要かつ適切な措置を講じます。</p>
                                    <p>2. 取扱目的に関し保有の必要がなくなった個人情報については、速やかに、かつ、確実に消去し、廃棄します。</p>

                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>第6条　本人の照会、修正及び削除</p>
                                    <p>&nbsp;</p>
                                    <p>当法人が保有する個人情報については、利用者ご本人が個人情報の照会・修正・削除などを希望される場合には、ご本人であることを確認の上、速やかに対応いたします。その際、ご本人であることが確認できない場合には、これらの請求に応じません。</p>
                                    
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>第7条　法令、規範の遵守と見直し</p>
                                    <p>&nbsp;</p>
                                    <p>当法人は、保有する個人情報に関して適用される日本の法令その他の規範を遵守するとともに、本プライバシーポリシーの内容を適宜見直し、必要に応じて改定することがあります。</p>
                                
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                
                                    <p>第8条　お問い合わせ</p>
                                    <p>&nbsp;</p>
                                    <p>当法人の個人情報の取扱いに関するお問合わせは下記までご連絡ください。</p>
                                    <p>学校法人 石川キンダー学園</p>
                                    <p>〒174-0056 東京都板橋区坂下2-22-10</p>
                                    <p>03-3966-5262 / info@shiroyamagroup.jp</p>

                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>

                                    <p>制定・施行： 2022年4月8日</p>
                                </div>
                                <div class="contact_policy_check">
                                    <input data-checkbox name="checkbox" type="checkbox">
                                    <div><p>プライバシーポリシーに同意する</p></div>
                                </div>
                            </div>

                            <!-- submit -->
                            <div class="contact_btn">
                                <button type="button" data-form-clear>クリア</button>
                                <input class="is-submit is-disabled" type="submit" value="入力内容のご確認" data-form-submit />
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