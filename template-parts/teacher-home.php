<?php
/**
 * トップページ用の講師紹介セクション
 */
?>
<!-- Teacher Introduction Section for Homepage -->
<section class="section teacher-home" id="teacher-home">
    <div class="container">
        <h2 class="section-title">講師紹介</h2>
        
        <div class="teacher-home-content">
            <div class="teacher-home-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacherMain.webp" alt="中村真子先生">
                <div class="teacher-home-info">
                    <h3 class="teacher-home-name">中村 真子<span class="teacher-position">主任講師</span></h3>
                </div>
            </div>
            
            <div class="teacher-home-profile">
                <div class="teacher-home-message">
                    <p class="message-quote">「子どもたちの笑顔と成長が私の原動力です」</p>
                    <p>東京音楽大学ピアノ科卒業。20年以上の指導経験を持ち、幼児から大人まで幅広い年齢層の生徒を指導しています。特に子どもたちの可能性を引き出すレッスンを得意とし、一人ひとりに合わせた指導で多くの生徒の成長をサポートしてきました。</p>
                    <p>全日本ピアノ指導者協会会員。「できた！」という喜びと成長に合わせた自立心を大切にするレッスンを心がけています。</p>
                    
                    <div class="teacher-certifications-mini">
                        <h4>資格・経歴</h4>
                        <ul>
                            <li>東京音楽大学ピアノ科卒業</li>
                            <li>全日本ピアノ指導者協会会員</li>
                            <li>ヤマハ音楽教室システム講師資格</li>
                            <li>○○ピアノコンクール審査員</li>
                        </ul>
                    </div>
                    
                    <div class="teacher-more-link">
                        <a href="<?php echo home_url('/teacher-studio/'); ?>" class="btn teacher-btn">講師紹介・教室案内を見る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>