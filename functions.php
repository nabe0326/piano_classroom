<?php
/**
 * Piano School Theme functions and definitions
 */


// テーマのセットアップ
function piano_school_setup() {
    // タイトルタグのサポート
    add_theme_support('title-tag');
    
    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');
    
    // HTML5のサポート
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    
    // メニュー登録
    register_nav_menus(array(
        'primary' => 'メインメニュー',
        'footer' => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'piano_school_setup');

// スクリプトとスタイルの読み込み
function piano_school_scripts() {
    // テーマのスタイルシート
    wp_enqueue_style('piano-school-main', get_template_directory_uri() . '/assets/css/main.css');
    
    // JavaScriptファイル
    wp_enqueue_script('piano-school-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'piano_school_scripts');

/**
 * レッスンコース/料金ページのスタイルとスクリプトを読み込む
 */
function piano_school_enqueue_course_assets() {
    // 現在の投稿/ページがコースページかチェック
    if (is_page_template('page-templates/page-course.php') || is_page('course')) {
        // CSS読み込み
        wp_enqueue_style('piano-school-course', get_template_directory_uri() . '/assets/css/page-course.css', array(), '1.0.0');
        
        // JS読み込み
        wp_enqueue_script('piano-school-course', get_template_directory_uri() . '/assets/js/course-page.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'piano_school_enqueue_course_assets');

// 講師・教室紹介ページのアセットを読み込む
function piano_school_enqueue_teacher_studio_assets() {
    if (is_page_template('/page-teacher-studio.php') || is_page('teacher-studio')) {
        wp_enqueue_style('piano-school-teacher-studio', get_template_directory_uri() . '/assets/css/page-teacher-studio.css');
        wp_enqueue_script('piano-school-teacher-studio', get_template_directory_uri() . '/assets/js/teacher-studio-page.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'piano_school_enqueue_teacher_studio_assets');

function piano_school_enqueue_contact_assets() {
    if (is_page_template('page-contact.php') || is_page('contact')) {
        wp_enqueue_style('piano-school-contact', get_template_directory_uri() . '/assets/css/contact.css');
    }
}
add_action('wp_enqueue_scripts', 'piano_school_enqueue_contact_assets');

// カスタム投稿タイプ: コース
function piano_school_register_post_types() {
    register_post_type('course', array(
        'labels' => array(
            'name' => 'コース',
            'singular_name' => 'コース',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));
}
add_action('init', 'piano_school_register_post_types');