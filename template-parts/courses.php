<!-- Courses Section -->
<section class="section courses" id="courses">
    <div class="container">
        <h2 class="section-title">レッスンコース</h2>
        
        <div class="enrollment-banner">
            <h3>生徒募集中</h3>
            <p>ピアノ専科では、子どもの「できた！」を大切にする指導を行っています</p>
        </div>

        <div class="courses-grid">
            <!-- ピアノ個人コース -->
            <div class="course-card">
                <div class="course-header">
                    <h3>ピアノ個人コース</h3>
                </div>
                <div class="course-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateLessons.webp" alt="ピアノ個人レッスン" />
                </div>
                <div class="course-content">
                    <div class="course-price">年間42回/30分 6,500円～</div>
                    <p class="course-short-desc">初心者から上級者まで幅広く対応。個人のレベルに合わせたレッスンを提供します。</p>
                    <a href="<?php echo site_url('/course'); ?>" class="course-more-link">詳細を見る →</a>
                </div>
            </div>
            
            <!-- 幼児2年間コース -->
            <div class="course-card">
                <div class="course-header">
                    <h3>幼児2年間コース</h3>
                </div>
                <div class="course-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/infantLessons.webp" alt="幼児コース" />
                </div>
                <div class="course-content">
                    <div class="course-price">月3回/30分 6,000円～</div>
                    <p class="course-short-desc">お子様の脳の発達を促し、音楽の基礎を楽しく身につけられるコースです。</p>
                    <a href="<?php echo site_url('/course'); ?>" class="course-more-link">詳細を見る →</a>
                </div>
            </div>
            
            <!-- YAMAHAコース -->
            <div class="course-card">
                <div class="course-header">
                    <h3>YAMAHAコース</h3>
                </div>
                <div class="course-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamahaLessons.webp" alt="YAMAHAコース" />
                </div>
                <div class="course-content">
                    <div class="course-price">月3回/30分 6,000円～</div>
                    <p class="course-short-desc">グループレッスンと個人指導を組み合わせ、YAMAHAグレードに挑戦できます。</p>
                    <a href="<?php echo site_url('/course'); ?>" class="course-more-link">詳細を見る →</a>
                </div>
            </div>
        </div>
        
        <!-- その他のコース -->
        <div class="other-courses">
            <h3>その他のコース</h3>
            <ul class="other-courses-list">
                <li><a href="<?php echo site_url('/course'); ?>">ボイストレーニングコース</a></li>
                <li><a href="<?php echo site_url('/course'); ?>">ソルフェージュコース</a></li>
                <li><a href="<?php echo site_url('/course'); ?>">受験コース</a></li>
            </ul>
            <a href="<?php echo site_url('/course'); ?>" class="btn course-all-btn">全コースを見る</a>
        </div>
    </div>
</section>