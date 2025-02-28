<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">
        <div class="header-inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <?php bloginfo('name'); ?>
            </a>
            <button class="nav-toggle">≡</button>
            
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
                echo '<li><a href="/#about">教室紹介</a></li>';
                echo '<li><a href="/#courses">レッスンコース</a></li>';
                echo '<li><a href="/#teacher-home">講師紹介</a></li>';
                echo '<li><a href="/#access-parts">アクセス</a></li>';
                echo '<li><a href="/#contact-parts">お問い合わせ</a></li>';
                echo '</ul>';
            }
            ?>
        </div>
    </div>
</header>