<?php
/**
 * メインテンプレートファイル
 * 各セクションを個別のテンプレートパーツとして読み込みます
 */

get_header(); ?>

<main>
    <?php
    // ヒーローセクション
    get_template_part('template-parts/hero');

    // ニュースセクション
    get_template_part('template-parts/news-home');
    
    // コースセクション
    get_template_part('template-parts/courses');
    
    // 講師紹介セクション
    get_template_part('template-parts/teacher-home');
    
    // アクセスセクション
    get_template_part('template-parts/access-parts');

    // お問い合わせセクション
    get_template_part('template-parts/contact-parts');
    ?>
</main>

<?php get_footer(); ?>