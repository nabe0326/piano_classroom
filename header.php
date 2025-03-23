<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="container">
            <div class="header-inner">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_black.png" alt="logo">
                </a>
                <!-- <button class="nav-toggle">≡</button> -->
                <button class="nav-toggle">
                    <svg viewBox="0 0 100 100" width="24" height="24">
                        <rect y="20" width="100" height="3"></rect>
                        <rect y="50" width="100" height="3"></rect>
                        <rect y="80" width="100" height="3"></rect>
                    </svg>
                </button>

                <?php
                // メニューがある場合は表示
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                    ));
                } else {
                    // デフォルトメニュー
                    echo '<ul class="nav-menu">';
                    echo '<li><a href="' . home_url('/#courses') . '">レッスンコース</a></li>';
                    echo '<li><a href="' . home_url('/#teacher-home') . '">講師・教室紹介</a></li>';
                    echo '<li><a href="' . home_url('/#access-parts') . '">アクセス</a></li>';
                    echo '<li><a href="' . home_url('/#news-home') . '">トピックス</a></li>';
                    echo '<li><a href="' . home_url('/#contact-parts') . '">お問い合わせ</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
    </header>