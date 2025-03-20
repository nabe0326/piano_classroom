<?php

/**
 * トップページ用のお知らせセクション (改善版)
 */
?>
<!-- News Section for Homepage -->
<section class="section news-home" id="news-home">
    <div class="container">
        <h2 class="section-title">トピックス</h2>

        <div class="">
            <?php
            // 最新の投稿3件を取得
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) :
            ?>
                <div class="courses-grid">
                    <?php
                    while ($news_query->have_posts()) :
                        $news_query->the_post();

                        // 7日以内の投稿に「NEW」ラベルを表示
                        $post_date = get_the_time('U');
                        $current_time = current_time('timestamp');
                        $days_diff = ($current_time - $post_date) / (60 * 60 * 24);
                        $is_new = $days_diff < 7;
                    ?>
                        <!-- ピアノ個人コース -->
                        <div class="course-card">
                            <div class="course-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamahaLessons.webp" alt="news">
                            </div>
                            <div class="course-content">
                                <div class="course-price"><?php the_title(); ?></div>
                                <p class="course-short-desc"><?php echo wp_trim_words(get_the_content(), 35, '...'); ?></p>
                                <div class="news_date">
                                    <p><?php echo get_the_date('Y.m.d'); ?></p>
                                </div>
                                <a href="<?php echo site_url('/news'); ?>" class="course-more-link">詳細を見る →</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="news-home-button">
                    <a href="<?php echo site_url('/news'); ?>" class="btn news-btn">トピックス一覧を見る</a>
                </div>

                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <div class="news-empty">
                    <p>現在お知らせはありません。</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>