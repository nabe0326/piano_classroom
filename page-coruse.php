<?php

/**
 * Template Name: レッスンコース/料金ページ
 */

get_header();
?>

<main class="site-main">
    <!-- ページヘッダー -->
    <?php get_template_part('template-parts/page-header'); ?>
    <!-- イントロダクション -->
    <!-- <section class="section course-intro">
        <div class="container">
            <div class="intro-content">
                <h2 class="intro-title">レッスンコース紹介</h2>
                <div class="intro-text">
                    <p>お一人お一人の目標や成長に合わせたコースを用意しています。</p>
                    <p>どのコースが向いているのか、始めたらいいのか、どんな雰囲気なのか等、無料体験レッスンも実施しておりますのでお気軽にお問合せください。</p>
                </div>
            </div>
        </div>
    </section> -->

    <?php
    // コースの一覧を取得
    $args = array(
        'post_type' => 'course_custom',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $courses = new WP_Query($args);
    ?>

    <section class="section main-courses" id="main-courses">
        <div class="container">
            <h2 class="section-title">レッスンコース</h2>

            <?php if ($courses->have_posts()) : while ($courses->have_posts()) : $courses->the_post();
                    // ACFフィールドから情報を取得
                    $course_title = get_field('course_title');
                    $course_description = get_field('course_description');
                    $course_image = get_field('course_image');
                    $price_note = get_field('price_note');

                    // 画像がない場合はデフォルト画像を使用
                    if (!$course_image) {
                        $course_image = get_template_directory_uri() . '/assets/images/default-course.jpg';
                    }

                    // 料金表データを配列に格納
                    $price_table = array();
                    for ($i = 1; $i <= 10; $i++) {
                        $level = get_field('price_level_' . $i);
                        $time = get_field('price_time_' . $i);
                        $amount = get_field('price_amount_' . $i);

                        // 少なくとも時間か金額がある場合のみ配列に追加
                        if (!empty($time) || !empty($amount)) {
                            $price_table[] = array(
                                'price_level' => $level,
                                'price_time' => $time,
                                'price_amount' => $amount
                            );
                        }
                    }
            ?>
                    <div class="course-detail-card">
                        <div class="course-header">
                            <h3 class="course-name"><?php echo esc_html($course_title); ?></h3>
                        </div>
                        <div class="course-body">
                            <div class="course-image">
                                <img src="<?php echo esc_url($course_image); ?>" alt="<?php echo esc_attr($course_title); ?>">
                            </div>
                            <div class="course-info">
                                <div class="course-description">
                                    <?php echo wpautop($course_description); ?>
                                </div>

                                <?php if (!empty($price_table)) : ?>
                                    <div class="price-section">
                                        <h4 class="price-title">料金表</h4>
                                        <div class="price-table">
                                            <?php foreach ($price_table as $price_row) : ?>
                                                <div class="price-row">
                                                    <div class="price-level"><?php echo esc_html($price_row['price_level']); ?></div>
                                                    <div class="price-time"><?php echo esc_html($price_row['price_time']); ?></div>
                                                    <div class="price-amount"><?php echo esc_html($price_row['price_amount']); ?></div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php if ($price_note) : ?>
                                            <p class="price-note"><?php echo esc_html($price_note); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="course-footer">
                            <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </section>

    <?php
// FAQセクションを表示
$faqs = get_faqs(null, true); // トップページ用のFAQのみ取得
if (!empty($faqs)) :
    $faq_pages = get_posts(array(
        'post_type' => 'faq',
        'posts_per_page' => 1
    ));
    $faq_section_title = get_field('faq_section_title', $faq_pages[0]->ID);
?>
<section class="section faq" id="faq">
    <div class="container">
        <h2 class="section-title"><?php echo esc_html($faq_section_title ?: 'よくあるQ＆A'); ?></h2>

        <div class="faq-list">
            <?php foreach ($faqs as $faq) : ?>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3><?php echo esc_html($faq['question']); ?></h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p><?php echo nl2br(esc_html($faq['answer'])); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>

    <!-- お問い合わせ/申し込み -->
    <?php get_template_part('template-parts/contact-parts'); ?>
</main>

<?php get_footer(); ?>