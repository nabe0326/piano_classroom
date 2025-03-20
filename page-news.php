<?php

/**
 * Template Name: お知らせ一覧ページ
 * 
 * このテンプレートは固定ページとしてお知らせ一覧を表示します
 */

get_header();
?>

<main class="site-main">
    <?php get_template_part('template-parts/page-header'); ?>

    <!-- お知らせ一覧セクション -->
    <section class="section news-archive">
        <div class="container">
            <div class="news-archive-container">
                <div class="news-archive-main">
                    <?php
                    // 1ページに表示する投稿数
                    $posts_per_page = 10;

                    // 現在のページ番号を取得
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // 投稿クエリのパラメータ
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => $posts_per_page,
                        'paged'          => $paged,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );

                    // 投稿クエリを実行
                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                    ?>
                        <div class="news-archive-list">
                            <?php
                            while ($news_query->have_posts()) :
                                $news_query->the_post();

                                // 30日以内の投稿に「NEW」ラベルを表示
                                $post_date = get_the_time('U');
                                $current_time = current_time('timestamp');
                                $days_diff = ($current_time - $post_date) / (60 * 60 * 24);
                                $is_new = $days_diff < 30;
                            ?>
                                <article class="news-archive-item <?php echo $is_new ? 'is-new' : ''; ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="news-thumbnail">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="news-thumbnail">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamahaLessons.webp" alt="デフォルト画像">
                                        </div>
                                    <?php endif; ?>

                                    <div class="news-item-content">
                                        <div class="news-meta">
                                            <span class="news-date"><?php echo get_the_date('Y.m.d'); ?></span>

                                        </div>

                                        <h2 class="news-item-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>

                                        <div class="news-item-excerpt">
                                            <?php
                                            if (has_excerpt()) {
                                                the_excerpt();
                                            } else {
                                                echo '<p>' . get_the_content() . '</p>';
                                            }
                                            ?>
                                        </div>

                                        <!-- <a href="<//?php the_permalink(); ?>" class="news-read-more">続きを読む →</a> -->
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <!-- ページネーション -->
                        <div class="news-pagination">
                            <?php
                            echo paginate_links(array(
                                'base'         => get_pagenum_link(1) . '%_%',
                                'format'       => 'page/%#%/',
                                'current'      => $paged,
                                'total'        => $news_query->max_num_pages,
                                'prev_text'    => '<span class="pagination-arrow">&laquo;</span> 前へ',
                                'next_text'    => '次へ <span class="pagination-arrow">&raquo;</span>',
                                'type'         => 'list',
                            ));
                            ?>
                        </div>

                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <div class="news-empty">
                            <p>現在お知らせはありません。</p>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- サイドバー -->
                <div class="news-archive-sidebar">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">最近のお知らせ</h3>
                        <ul class="recent-posts">
                            <?php
                            $recent_posts = new WP_Query(array(
                                'post_type'      => 'post',
                                'posts_per_page' => 5,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                            ));

                            if ($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post();
                            ?>
                                    <li>
                                        <?php the_title(); ?><br>
                                        <span class="recent-post-date"><?php echo get_the_date('Y.m.d'); ?></span>
                                    </li>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>

                    <!-- レッスン申し込みバナー -->
                    <div class="sidebar-cta">
                        <h3 class="cta-title">体験レッスン受付中</h3>
                        <p class="cta-text">ピアノを始めたい方、音楽の楽しさを体験したい方は、お気軽に体験レッスンにお申し込みください。</p>
                        <a href="<?php echo home_url('/contact/'); ?>" class="btn cta-btn">体験レッスンに申し込む</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>