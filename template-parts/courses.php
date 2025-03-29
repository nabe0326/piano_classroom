<!-- Courses Section -->
<section class="section courses" id="courses">
    <div class="container">
        <h2 class="section-title">レッスンコース</h2>

        <div class="courses-grid">
            <?php
            // 特集コースを取得（ACFフィールドから）
            $featured_courses = get_field('featured_courses');
            
            // 特集コースが設定されていない場合はデフォルトで3つのコースを表示
            if (!$featured_courses || empty($featured_courses)) {
                // コースをデフォルト順で取得
                $featured_courses_query = new WP_Query([
                    'post_type' => 'course_custom',
                    'posts_per_page' => 3,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'meta_query' => [
                        [
                            'key' => 'show_on_top',
                            'value' => '1',
                            'compare' => '='
                        ]
                    ]
                ]);
                
                if ($featured_courses_query->have_posts()) {
                    while ($featured_courses_query->have_posts()) {
                        $featured_courses_query->the_post();
                        $course_id = get_the_ID();
                        $course_title = get_field('course_title', $course_id);
                        $course_image = get_field('course_image', $course_id);
                        $short_desc = get_field('course_short_desc', $course_id);
                        $simple_price = get_field('course_simple_price', $course_id);
                        
                        // デフォルト値の設定
                        if (!$course_title) {
                            $course_title = get_the_title();
                        }
                        if (!$course_image) {
                            $course_image = get_template_directory_uri() . '/assets/images/default-course.jpg';
                        }
                        if (!$short_desc) {
                            $course_description = get_field('course_description', $course_id);
                            $short_desc = wp_trim_words($course_description, 30, '...');
                        }
                        if (!$simple_price) {
                            // 料金情報から簡易表示を自動生成
                            $simple_price = '';
                            for ($i = 1; $i <= 10; $i++) {
                                $time = get_field('price_time_' . $i, $course_id);
                                $amount = get_field('price_amount_' . $i, $course_id);
                                if (!empty($time) && !empty($amount)) {
                                    $simple_price = $time . ' ' . $amount . '～';
                                    break;
                                }
                            }
                        }
                        ?>
                        
                        <div class="course-card">
                            <div class="course-header">
                                <h3><?php echo esc_html($course_title); ?></h3>
                            </div>
                            <div class="course-img">
                                <img src="<?php echo esc_url($course_image); ?>" alt="<?php echo esc_attr($course_title); ?>" />
                            </div>
                            <div class="course-content">
                                <div class="course-price"><?php echo esc_html($simple_price); ?></div>
                                <p class="course-short-desc"><?php echo esc_html($short_desc); ?></p>
                                <a href="<?php echo site_url('/course'); ?>" class="course-more-link">詳細を見る →</a>
                            </div>
                        </div>
                        
                        <?php
                    }
                    wp_reset_postdata();
                }
            } else {
                // ACFの特集コース設定から表示
                foreach ($featured_courses as $featured) {
                    $course_id = $featured['course'];
                    $course_title = get_field('course_title', $course_id);
                    $course_image = get_field('course_image', $course_id);
                    $short_desc = $featured['short_description'];
                    $simple_price = $featured['simple_price'];
                    
                    // コース情報からデフォルト値を取得
                    if (!$short_desc) {
                        $short_desc = get_field('course_short_desc', $course_id);
                        if (!$short_desc) {
                            $course_description = get_field('course_description', $course_id);
                            $short_desc = wp_trim_words($course_description, 30, '...');
                        }
                    }
                    
                    if (!$simple_price) {
                        $simple_price = get_field('course_simple_price', $course_id);
                    }
                    
                    if (!$course_image) {
                        $course_image = get_template_directory_uri() . '/assets/images/default-course.jpg';
                    }
                    ?>
                    
                    <div class="course-card">
                        <div class="course-header">
                            <h3><?php echo esc_html($course_title); ?></h3>
                        </div>
                        <div class="course-img">
                            <img src="<?php echo esc_url($course_image); ?>" alt="<?php echo esc_attr($course_title); ?>" />
                        </div>
                        <div class="course-content">
                            <div class="course-price"><?php echo esc_html($simple_price); ?></div>
                            <p class="course-short-desc"><?php echo esc_html($short_desc); ?></p>
                            <a href="<?php echo site_url('/course'); ?>" class="course-more-link">詳細を見る →</a>
                        </div>
                    </div>
                    
                    <?php
                }
            }
            ?>
        </div>
        
        <!-- その他のコース -->
        <div class="other-courses">
            <?php
            $other_courses_heading = get_field('other_courses_heading');
            if (!$other_courses_heading) {
                $other_courses_heading = 'その他のコース';
            }
            ?>
            <h3><?php echo esc_html($other_courses_heading); ?></h3>
            
            <ul class="other-courses-list">
                <?php
                $other_courses = get_field('other_courses');
                
                if (!$other_courses || empty($other_courses)) {
                    // その他コースが設定されていない場合、特集コースに含まれていないコースを取得
                    $featured_ids = [];
                    
                    if ($featured_courses && !empty($featured_courses)) {
                        foreach ($featured_courses as $featured) {
                            $featured_ids[] = $featured['course'];
                        }
                    } else {
                        $featured_query = new WP_Query([
                            'post_type' => 'course_custom',
                            'posts_per_page' => 3,
                            'fields' => 'ids',
                            'meta_query' => [
                                [
                                    'key' => 'show_on_top',
                                    'value' => '1',
                                    'compare' => '='
                                ]
                            ]
                        ]);
                        
                        if ($featured_query->have_posts()) {
                            $featured_ids = $featured_query->posts;
                        }
                    }
                    
                    $other_courses_query = new WP_Query([
                        'post_type' => 'course_custom',
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'post__not_in' => $featured_ids
                    ]);
                    
                    if ($other_courses_query->have_posts()) {
                        while ($other_courses_query->have_posts()) {
                            $other_courses_query->the_post();
                            $course_id = get_the_ID();
                            $course_title = get_field('course_title', $course_id);
                            if (!$course_title) {
                                $course_title = get_the_title();
                            }
                            ?>
                            <li><a href="<?php echo site_url('/course'); ?>"><?php echo esc_html($course_title); ?></a></li>
                            <?php
                        }
                        wp_reset_postdata();
                    }
                } else {
                    // ACFで選択されたその他コースを表示
                    foreach ($other_courses as $course_id) {
                        $course_title = get_field('course_title', $course_id);
                        if (!$course_title) {
                            $course_title = get_the_title($course_id);
                        }
                        ?>
                        <li><a href="<?php echo site_url('/course'); ?>"><?php echo esc_html($course_title); ?></a></li>
                        <?php
                    }
                }
                ?>
            </ul>
            
            <?php
            $all_courses_button_text = get_field('all_courses_button_text');
            if (!$all_courses_button_text) {
                $all_courses_button_text = '全コースを見る';
            }
            
            $all_courses_url = get_field('all_courses_url');
            if (!$all_courses_url) {
                $all_courses_url = site_url('/course');
            }
            ?>
            <a href="<?php echo esc_url($all_courses_url); ?>" class="btn course-all-btn"><?php echo esc_html($all_courses_button_text); ?></a>
        </div>
    </div>
</section>