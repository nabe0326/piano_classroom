<?php

/**
 * Template Name: 講師・教室紹介ページ
 */

get_header();
?>

<main class="site-main">
    <!-- ページヘッダー -->
    <?php get_template_part('template-parts/page-header'); ?>
    <!-- 講師紹介セクション -->
    <section class="section teacher-profile-section" id="teacher-profile">
        <div class="container">
            <h2 class="section-title">講師紹介</h2>

            <div class="main-teacher-profile">
                <div class="teacher-biography">
                    <div class="teacher-certifications">
                        <h3 class="teacher-name">出野 貴子</h3>
                        <p class="teacher-name-en">いでの たかこ</p>
                        <h4>経歴・資格等</h4>
                        <ul>
                            <li>県立西宮高校音楽科卒業</li>
                            <li>大阪音楽大学器楽学科ピアノ専攻卒業</li>
                            <li>大阪音楽大学音楽学部専攻科修了</li>
                            <li>中森千鶴、吉田順子、片岡みどり、石井なをみ、梅本俊和、板谷久美路、ヤブオンスキー、ロジェブートリーの各氏に師事</li>
                            <li>大阪音楽大学推薦演奏会 奨励賞・和歌山音楽コンクール2位（1位なし）</li>
                            <li>リトルカメリア音楽祭 奨励賞・吹田音楽コンクール デュオ部門3位（1、2位なし）</li>
                            <li>21世紀ピアノコンクール2位（1位なし）</li>
                            <li>第20回日本クラシック音楽コンクール全国大会入選</li>
                            <li>全日本演奏家協会オーディション合格</li>
                            <li>第20回グレンツェンコンクール指導者賞受賞</li>
                            <li>ピアラグレード審査員</li>
                            <li>日本クラシック音楽コンクール審査員</li>
                            <li>丹波篠山市教育委員、兵庫県女性教育委員代表幹事歴任</li>
                            <li>現在 ピアノ専科主宰</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="main-teacher-profile">
                <div class="teacher-biography">
                    <div class="teacher-certifications">
                        <h3 class="teacher-name">井本 裕美</h3>
                        <p class="teacher-name-en">いもと ひろみ</p>
                        <h4>経歴・資格等</h4>
                        <ul>
                            <li>大阪音楽大学音楽学部器楽学科ピアノ専攻卒業</li>
                            <li>飛弾裕子、波部香代子、植田定和、故 松浦豊明、板谷久美路の各氏に師事</li>
                            <li>93～07年、女声合唱団ささゆり常任ピアニスト</li>
                            <li>02年、ミュンヘン国立音楽大学サマーアカデミーにてヨハネスフィッシャー教授に師事</li>
                            <li>09年、メロマン室内管弦楽団とモーツアルト「ピアノ協奏曲第23番」を演奏</li>
                            <li>ソロや伴奏・アンサンブルなど幅広く活動中</li>
                            <li>現在、女声コーラスあじさい、童謡唱歌グループなどで、伴奏をつとめる</li>
                            <li>若葉会会員</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="main-teacher-profile">
                <div class="teacher-biography">
                    <div class="teacher-certifications">
                        <h3 class="teacher-name">西田 夫佐</h3>
                        <p class="teacher-name-en">にしだ ふさ</p>
                        <h4>経歴・資格等</h4>
                        <ul>
                            <li>神戸大学教育学部(現:発達科学部)中等教育系音楽科 声楽専攻卒業、主にフランス歌曲を学ぶ</li>
                            <li>ソロでのシンセサイザー弾き語りやエレクトーン演奏、P&Eユニット「TA-FU」、アカペラグループ「Blue Voices」、JAZZバンド「Gentle Jazz Friends」のVocal、和太鼓&シンセサイザーユニット「守破離」、キーボードアンサンブル「ふらうむじーく」、イベントサークル「ピン ポンパン」音楽付き読み聞かせ活動</li>
                            <li>高齢者大学での歌唱指導、セレモニープレイヤー</li>
                            <li>たんば広報スタッフとして、或いはフリーでイベントの司会 やナレーションなどの活動</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="main-teacher-profile">
                <div class="teacher-biography">
                    <div class="teacher-certifications">
                        <h3 class="teacher-name">細見 麻里子</h3>
                        <p class="teacher-name-en">ほそみ まりこ</p>
                        <h4>経歴・資格等</h4>
                        <ul>
                            <li>大阪音楽大学音楽学部声楽学科声楽専攻卒業</li>
                            <li>在学中で音楽療法サークル「てんとうむし」（障害児）老人施設に勤務しながら、音楽療法の勉強を始め、現在に至る</li>
                            <li>芸術会館 音楽療法コース受講</li>
                            <li>ささやま医療センター季節のコンサート・丹波篠山さくらまつり・市民オペラに出演・ 「プレジール」で施設やイベントで演奏活動</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 講師陣紹介 -->
            <!-- <div class="teaching-staff">
                <h3 class="staff-title">講師陣</h3>

                <div class="staff-grid">
                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacherMain.webp" alt="井本裕美先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">井本 裕美</h4>
                            <p class="staff-position">ピアノ個人コース・ソルフェージュ担当</p>
                            <p class="staff-bio">東京芸術大学卒業。コンクール入賞多数。丁寧な基礎指導と温かい人柄で幅広い年齢の生徒から信頼を得ています。</p>
                        </div>
                    </div>

                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacherMain.webp" alt="出野真子先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">出野 真子</h4>
                            <p class="staff-position">幼児コース・受験コース担当</p>
                            <p class="staff-bio">桐朋学園大学卒業。幼児教育のスペシャリストとして、楽しく基礎から指導。受験対策も得意としています。</p>
                        </div>
                    </div>

                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacherMain.webp" alt="西田夫佐先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">西田 夫佐</h4>
                            <p class="staff-position">YAMAHAコース担当</p>
                            <p class="staff-bio">武蔵野音楽大学卒業。ヤマハ認定講師。創造性豊かなレッスンが特徴で、作曲やアレンジも指導しています。</p>
                        </div>
                    </div>

                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacherMain.webp" alt="細見麻里子先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">細見 麻里子</h4>
                            <p class="staff-position">ボイストレーニングコース担当</p>
                            <p class="staff-bio">声楽専攻。ミュージカル出演経験あり。歌うことの楽しさを伝え、表現力豊かな歌声を引き出します。</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- 教室案内セクション -->

    <!-- 本校スタジオ紹介 -->
    <section class="section studio-photos-section" id="main-studio">
        <div class="container">
            <h2 class="section-title">教室紹介</h2>

            <div class="studio-description">
                <p>ピアノ専科では、技術面の成長を通じて「達成感」「楽しさ」等、心の成長も大切にする指導体制です。<br>また技術だけでなく「礼儀礼節」を重んじ、人間力を育てます。</p>
                <p>＜レッスンルールの設備＞</p>
                <p>第1教室　YAMAHAグランドピアノ2台　エレクトーン2台</p>
                <p>第2教室　YAMAHAグランドピアノ1台　電子ピアノ1台</p>
                <p>第3教室　YAMAHAアップライトピアノ1台</p>
                <p>全教室とも冷暖房完備</p>
            </div>

            <div class="studio-gallery">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studioImage1.webp" alt="第1教室その1">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studioImage2.webp" alt="第1教室その2">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studioImage3.webp" alt="第2教室">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/studioImage4.webp" alt="第3教室">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/about'); ?>

    <!-- お問い合わせへの導線 -->
    <?php get_template_part('template-parts/contact-parts'); ?>
</main>

<?php get_footer(); ?>