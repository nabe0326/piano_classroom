<?php
/**
 * Template Name: 講師・教室紹介ページ
 */

get_header();
?>

<main class="site-main">
    <!-- ページヘッダー -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">講師・教室紹介</h1>
            <div class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">ホーム</a> &gt; 講師・教室紹介
            </div>
        </div>
    </section>

    <!-- 講師紹介セクション -->
    <section class="section teacher-profile-section" id="teacher-profile">
        <div class="container">
            <h2 class="section-title">講師紹介</h2>
            
            <div class="main-teacher-profile">
                <div class="teacher-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-main.jpg" alt="中村真子先生">
                    <div class="teacher-name-plate">
                        <h3 class="teacher-name">中村 真子</h3>
                        <p class="teacher-name-en">Mako Nakamura</p>
                    </div>
                </div>
                
                <div class="teacher-biography">
                    <p class="biography-lead">幼い頃のピアノとの出会いから音楽の喜びを伝え続けています。</p>
                    
                    <p>東京音楽大学ピアノ科卒業。20年以上の指導経験を持ち、幼児から大人まで幅広い年齢層の生徒を指導しています。特に子どもたちの可能性を引き出すレッスンを得意とし、一人ひとりに合わせた指導で多くの生徒の成長をサポートしてきました。</p>
                    
                    <p>ピアノは人生の長い旅路の友です。単なる技術指導ではなく、音楽を通して「感じる心」「表現する喜び」「挑戦する勇気」を育てることを大切にしています。レッスンでは、基礎をしっかり身につけながらも、生徒さん一人ひとりの個性や才能を尊重し、「弾けた！」という喜びと達成感を大切にしています。</p>
                    
                    <p>幼い頃からクラシックに親しんでいた経験を活かし、音楽の楽しさと素晴らしさを次世代に伝えることが私の使命だと考えています。熱意ある指導と温かい雰囲気づくりで、生徒さんが安心して学べる環境を心がけています。</p>
                    
                    <div class="teacher-certifications">
                        <h4>経歴・資格等</h4>
                        <ul>
                            <li>東京音楽大学ピアノ科卒業、同大学研究科修了</li>
                            <li>全日本ピアノ指導者協会（ピティナ）会員</li>
                            <li>○○ピアノコンクール審査員</li>
                            <li>ヤマハ音楽教室システム講師資格</li>
                            <li>日本メンタルピアノ教育研究所認定講師</li>
                            <li>第○回全日本学生音楽コンクールピアノ部門入賞</li>
                            <li>多数の発表会、コンサート企画・開催</li>
                            <li>海外音楽研修（ウィーン、パリ）経験あり</li>
                            <li>TV・ラジオでの演奏経験</li>
                        </ul>
                    </div>

                    <div class="teacher-message">
                        <h4>生徒・保護者へのメッセージ</h4>
                        <p>「音楽を楽しむ心」を大切に、それぞれのペースで確実に成長していけるよう、ひとりひとりに合わせたレッスンを心がけています。ピアノを通して、音楽だけでなく、集中力や忍耐力、表現力など、人生の様々な場面で役立つ力を身につけていただければと思います。まずは気軽に体験レッスンにお越しください。皆様とお会いできるのを楽しみにしています。</p>
                    </div>
                </div>
            </div>
            
            <!-- 講師陣紹介 -->
            <div class="teaching-staff">
                <h3 class="staff-title">講師陣</h3>
                
                <div class="staff-grid">
                    <!-- 講師1 -->
                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-1.jpg" alt="井本裕美先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">井本 裕美</h4>
                            <p class="staff-position">ピアノ個人コース・ソルフェージュ担当</p>
                            <p class="staff-bio">東京芸術大学卒業。コンクール入賞多数。丁寧な基礎指導と温かい人柄で幅広い年齢の生徒から信頼を得ています。</p>
                        </div>
                    </div>
                    
                    <!-- 講師2 -->
                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-2.jpg" alt="出野真子先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">出野 真子</h4>
                            <p class="staff-position">幼児コース・受験コース担当</p>
                            <p class="staff-bio">桐朋学園大学卒業。幼児教育のスペシャリストとして、楽しく基礎から指導。受験対策も得意としています。</p>
                        </div>
                    </div>
                    
                    <!-- 講師3 -->
                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-3.jpg" alt="西田夫佐先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">西田 夫佐</h4>
                            <p class="staff-position">YAMAHAコース担当</p>
                            <p class="staff-bio">武蔵野音楽大学卒業。ヤマハ認定講師。創造性豊かなレッスンが特徴で、作曲やアレンジも指導しています。</p>
                        </div>
                    </div>
                    
                    <!-- 講師4 -->
                    <div class="staff-card">
                        <div class="staff-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-4.jpg" alt="細見麻里子先生">
                        </div>
                        <div class="staff-info">
                            <h4 class="staff-name">細見 麻里子</h4>
                            <p class="staff-position">ボイストレーニングコース担当</p>
                            <p class="staff-bio">声楽専攻。ミュージカル出演経験あり。歌うことの楽しさを伝え、表現力豊かな歌声を引き出します。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 教室案内セクション -->
    <section class="section studio-info-section" id="studio-info">
        <div class="container">
            <h2 class="section-title">教室案内・アクセス</h2>
            
            <div class="studio-overview">
                <div class="studio-info-box">
                    <table class="studio-details">
                        <tr>
                            <th>教室名</th>
                            <td>ピアノ専科 スタジオ ドルチェ（Studio Dolce）</td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td>
                                〒123-4567<br>
                                丹波篠山市山内町64<br>
                                （○○駅から徒歩5分・○○バス停すぐ）
                            </td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td>
                                火〜土曜日 10:00〜19:00<br>
                                （日・月曜日、祝日はお休み）
                            </td>
                        </tr>
                        <tr>
                            <th>電話</th>
                            <td>080-2402-9157</td>
                        </tr>
                        <tr>
                            <th>設備環境</th>
                            <td>
                                グランドピアノ（スタインウェイ）2台<br>
                                アップライトピアノ 3台<br>
                                待合室・保護者控室完備
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="access-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.5780275019066!2d135.2191613157252!3d35.06119537253615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e49d3eb6ed47%3A0x77df3ce6f07c1f6d!2z5LiJ5pif5Lql5Y-45Z2C5Lya!5e0!3m2!1sja!2sjp!4v1677217651387!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- 本校スタジオ紹介 -->
    <section class="section studio-photos-section" id="main-studio">
        <div class="container">
            <h2 class="section-title">ピアノ専科 スタジオ ドルチェ 本校</h2>
            
            <div class="studio-description">
                <p>明るく開放的な空間で、集中してレッスンに取り組めるよう環境を整えています。スタインウェイのグランドピアノでの演奏体験は、生徒の皆様の演奏技術向上と音楽性を育むために欠かせない要素です。保護者の方がお待ちいただける控え室も完備しております。</p>
            </div>
            
            <div class="studio-gallery">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-main-1.jpg" alt="本校スタジオ外観">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-main-2.jpg" alt="本校レッスンルーム">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-main-3.jpg" alt="本校グランドピアノ">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-main-4.jpg" alt="本校待合室">
                </div>
            </div>
        </div>
    </section>

    <!-- 分校スタジオ紹介 -->
    <section class="section studio-photos-section" id="branch-studio">
        <div class="container">
            <h2 class="section-title">ピアノ専科 スタジオ ドルチェ 四ツ谷教室</h2>
            
            <div class="studio-description">
                <p>四ツ谷駅から徒歩3分の好立地にある教室です。グランドピアノとアップライトピアノを備え、アットホームな雰囲気でレッスンを行っています。都心にありながら、静かな環境で集中してレッスンを受けていただけます。</p>
            </div>
            
            <div class="studio-gallery">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-branch-1.jpg" alt="分校レッスンルーム1">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-branch-2.jpg" alt="分校グランドピアノ">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-branch-3.jpg" alt="分校レッスンルーム2">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/studio-branch-4.jpg" alt="分校待合室">
                </div>
            </div>
            
            <div class="studio-info-box branch-info">
                <table class="studio-details">
                    <tr>
                        <th>住所</th>
                        <td>
                            〒160-0004<br>
                            東京都新宿区四谷1-2-3 ○○ビル3F<br>
                            （四ツ谷駅徒歩3分）
                        </td>
                    </tr>
                    <tr>
                        <th>営業時間</th>
                        <td>
                            月〜土曜日 12:00〜20:00<br>
                            （日曜日、祝日はお休み）
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- お問い合わせへの導線 -->
    <section class="section contact-cta-section">
        <div class="container">
            <div class="contact-cta-box">
                <h2 class="cta-title">体験レッスンのお申し込み・お問い合わせ</h2>
                <p class="cta-text">各教室では随時、無料体験レッスンを実施しております。<br>ピアノを始めたい方、教室の雰囲気を知りたい方は、お気軽にお問い合わせください。</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn cta-btn">お問い合わせ</a>
                    <a href="tel:080-2402-9157" class="btn phone-btn">お電話でのお問い合わせ</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>