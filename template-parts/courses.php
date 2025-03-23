<!-- Courses Section -->
<section class="section courses" id="courses">
    <div class="container">
        <h2 class="section-title">レッスンコース</h2>

        <div class="courses-grid">
            <!-- ピアノ個人コース -->
            <div class="course-card">
                <div class="course-header">
                    <h3>ピアノ個人コースA</h3>
                </div>
                <div class="course-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateLessonsA.webp" alt="ピアノ個人レッスン" />
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
                    <h3>ピアノ個人コースB</h3>
                </div>
                <div class="course-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateLessonsB.webp" alt="幼児コース" />
                </div>
                <div class="course-content">
                    <div class="course-price">月3回/30分 6,000円～</div>
                    <p class="course-short-desc">個人コースAと違い担任制で月3回のコースです。</p>
                    <a href="<?php echo site_url('/course'); ?>" class="course-more-link">詳細を見る →</a>
                </div>
            </div>
            
            <!-- YAMAHAコース -->
            <div class="course-card">
                <div class="course-header">
                    <h3>YAMAHAコース</h3>
                </div>
                <div class="course-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamaha.webp" alt="YAMAHAコース" />
                </div>
                <div class="course-content">
                    <div class="course-price">月3回/30分 6,000円～</div>
                    <p class="course-short-desc">楽譜なしで音楽を楽しむ力を身につけます。YAMAHAグレード資格も取得できます。</p>
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
                <li><a href="<?php echo site_url('/course'); ?>">幼児音感グループコース</a></li>
            </ul>
            <a href="<?php echo site_url('/course'); ?>" class="btn course-all-btn">全コースを見る</a>
        </div>
    </div>
</section>