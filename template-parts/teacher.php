<?php
/**
 * 講師紹介セクションのテンプレートパーツ
 */
?>
<!-- Teacher Section -->
<section class="section teacher" id="teacher">
    <div class="container">
        <h2 class="section-title">講師紹介</h2>
        <div class="teacher-profile">
            <div class="teacher-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-main.jpg" alt="講師写真" />
            </div>
            <div class="teacher-info">
                <h3 class="teacher-name">中村 真子</h3>
                <p class="teacher-quote">「子どもたちの笑顔と成長が私の原動力です」</p>
                <p>東京音楽大学ピアノ科卒業。20年以上の指導経験を持ち、幼児から大人まで幅広い年齢層の生徒を指導しています。</p>
                <p>特に子どもたちの可能性を引き出すレッスンを得意とし、一人ひとりに合わせた指導で多くの生徒の成長をサポートしてきました。</p>
                <p>全日本ピアノ指導者協会会員。定期的に研修に参加し、常に新しい教育法を取り入れています。</p>
            </div>
        </div>
        
        <h3 style="text-align: center; margin-bottom: 30px;">講師陣</h3>
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 20px;">
            <div style="text-align: center; width: 200px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-1.jpg" alt="井本裕美講師" style="border-radius: 50%; border: 3px solid var(--light-bg);" />
                <h4 style="margin-top: 10px; color: var(--accent-red);">井本 裕美</h4>
                <p>【複数コース担当】</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-2.jpg" alt="出野真子講師" style="border-radius: 50%; border: 3px solid var(--light-bg);" />
                <h4 style="margin-top: 10px; color: var(--accent-red);">出野 真子</h4>
                <p>【幼児・受験コース担当】</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-3.jpg" alt="西田夫佐講師" style="border-radius: 50%; border: 3px solid var(--light-bg);" />
                <h4 style="margin-top: 10px; color: var(--accent-red);">西田 夫佐</h4>
                <p>【YAMAHAコース担当】</p>
            </div>
            <div style="text-align: center; width: 200px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/teacher-4.jpg" alt="細見麻里子講師" style="border-radius: 50%; border: 3px solid var(--light-bg);" />
                <h4 style="margin-top: 10px; color: var(--accent-red);">細見 麻里子</h4>
                <p>【ボイストレーニング担当】</p>
            </div>
        </div>
    </div>
</section>