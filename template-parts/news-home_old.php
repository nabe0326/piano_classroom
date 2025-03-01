<?php
/**
 * トップページ用のお知らせセクション (改善版)
 */
?>
<!-- News Section for Homepage -->
<section class="section news-home" id="news-home">
    <div class="container">
        <h2 class="section-title">お知らせ</h2>
        
        <div class="news-home-content">
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
                <div class="news-list">
                    <?php 
                    while ($news_query->have_posts()) : 
                        $news_query->the_post();
                        
                        // 7日以内の投稿に「NEW」ラベルを表示
                        $post_date = get_the_time('U');
                        $current_time = current_time('timestamp');
                        $days_diff = ($current_time - $post_date) / (60 * 60 * 24);
                        $is_new = $days_diff < 7;
                    ?>
                        <article class="news-item <?php echo $is_new ? 'is-new' : ''; ?>">
                            <div class="news-date">
                                <span class="news-date-text"><?php echo get_the_date('Y.m.d'); ?></span>
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="news-excerpt">
                                    <?php 
                                    // 抜粋があれば表示、なければ本文から自動生成
                                    if (has_excerpt()) {
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                    } else {
                                        echo '<p>' . wp_trim_words(get_the_content(), 40, '...') . '</p>';
                                    }
                                    ?>
                                </div>
                                <a href="<?php echo site_url('/news'); ?>" class="news-more-link">続きを読む →</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <div class="news-home-button">
                    <a href="<?php echo site_url('/news'); ?>" class="btn news-btn">お知らせ一覧を見る</a>
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