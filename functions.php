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

function piano_school_enqueue_archive_assets() {
    if (is_page_template('page-news.php') || is_page('news')) {
        wp_enqueue_style('piano-school-archive', get_template_directory_uri() . '/assets/css/page-news-archive.css');
    }
}
add_action('wp_enqueue_scripts', 'piano_school_enqueue_archive_assets');

// カスタム投稿タイプ「コース」の登録
function register_course_post_type() {
    $labels = array(
        'name'               => 'コース',
        'singular_name'      => 'コース',
        'menu_name'          => 'コース管理',
        'add_new'            => '新規コース追加',
        'add_new_item'       => '新規コースを追加',
        'edit_item'          => 'コースを編集',
        'new_item'           => '新規コース',
        'view_item'          => 'コースを表示',
        'search_items'       => 'コースを検索',
        'not_found'          => 'コースが見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱にコースはありません',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'courses' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'course_custom', $args );
}
add_action( 'init', 'register_course_post_type' );

// FAQカスタム投稿タイプの登録
function register_faq_post_type() {
    $labels = array(
        'name'               => 'よくある質問',
        'singular_name'      => 'よくある質問',
        'menu_name'          => 'よくある質問',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しい質問を追加',
        'edit_item'          => '質問を編集',
        'new_item'           => '新しい質問',
        'view_item'          => '質問を表示',
        'search_items'       => '質問を検索',
        'not_found'          => '質問が見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱に質問はありません',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'faq' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-editor-help',
        'supports'           => array( 'title', 'editor' ),
    );

    register_post_type( 'faq', $args );
}
add_action( 'init', 'register_faq_post_type' );

function get_faqs($faq_page_id = null, $top_only = false) {
    if (!$faq_page_id) {
        // FAQページを検索
        $faq_pages = get_posts(array(
            'post_type' => 'faq',
            'posts_per_page' => 1,
            'post_status' => 'publish'
        ));
        
        if (empty($faq_pages)) {
            return array();
        }
        
        $faq_page_id = $faq_pages[0]->ID;
    }
    
    $faqs = array();
    
    // 10個のFAQを処理
    for ($i = 1; $i <= 10; $i++) {
        $question = get_field('faq_question_' . $i, $faq_page_id);
        $answer = get_field('faq_answer_' . $i, $faq_page_id);
        $show_top = get_field('faq_show_top_' . $i, $faq_page_id);
        
        // 質問と回答の両方が入力されている場合のみ追加
        if (!empty($question) && !empty($answer)) {
            // トップページ用フィルタ
            if ($top_only && !$show_top) {
                continue;
            }
            
            $faqs[] = array(
                'question' => $question,
                'answer' => $answer,
                'show_top' => $show_top
            );
        }
    }
    
    return $faqs;
}

// FAQフィールドグループの登録（ACF無料版対応）
function register_faq_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_faq_page',
            'title' => 'FAQ設定',
            'fields' => array(
                array(
                    'key' => 'field_faq_section_title',
                    'label' => 'セクションタイトル',
                    'name' => 'faq_section_title',
                    'type' => 'text',
                    'default_value' => 'よくあるQ＆A',
                ),
                // 1つ目のFAQ
                array(
                    'key' => 'field_faq_question_1',
                    'label' => '質問 1',
                    'name' => 'faq_question_1',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_1',
                    'label' => '回答 1',
                    'name' => 'faq_answer_1',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_1',
                    'label' => 'トップページに表示 1',
                    'name' => 'faq_show_top_1',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 1,
                ),
                // 2つ目のFAQ
                array(
                    'key' => 'field_faq_question_2',
                    'label' => '質問 2',
                    'name' => 'faq_question_2',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_2',
                    'label' => '回答 2',
                    'name' => 'faq_answer_2',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_2',
                    'label' => 'トップページに表示 2',
                    'name' => 'faq_show_top_2',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 1,
                ),
                // 3つ目のFAQ
                array(
                    'key' => 'field_faq_question_3',
                    'label' => '質問 3',
                    'name' => 'faq_question_3',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_3',
                    'label' => '回答 3',
                    'name' => 'faq_answer_3',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_3',
                    'label' => 'トップページに表示 3',
                    'name' => 'faq_show_top_3',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 1,
                ),
                // 4つ目のFAQ
                array(
                    'key' => 'field_faq_question_4',
                    'label' => '質問 4',
                    'name' => 'faq_question_4',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_4',
                    'label' => '回答 4',
                    'name' => 'faq_answer_4',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_4',
                    'label' => 'トップページに表示 4',
                    'name' => 'faq_show_top_4',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 1,
                ),
                // 5つ目のFAQ
                array(
                    'key' => 'field_faq_question_5',
                    'label' => '質問 5',
                    'name' => 'faq_question_5',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_5',
                    'label' => '回答 5',
                    'name' => 'faq_answer_5',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_5',
                    'label' => 'トップページに表示 5',
                    'name' => 'faq_show_top_5',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 1,
                ),
                // 6つ目のFAQ
                array(
                    'key' => 'field_faq_question_6',
                    'label' => '質問 6',
                    'name' => 'faq_question_6',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_6',
                    'label' => '回答 6',
                    'name' => 'faq_answer_6',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_6',
                    'label' => 'トップページに表示 6',
                    'name' => 'faq_show_top_6',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 0,
                ),
                // 7つ目のFAQ
                array(
                    'key' => 'field_faq_question_7',
                    'label' => '質問 7',
                    'name' => 'faq_question_7',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_7',
                    'label' => '回答 7',
                    'name' => 'faq_answer_7',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_7',
                    'label' => 'トップページに表示 7',
                    'name' => 'faq_show_top_7',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 0,
                ),
                // 8つ目のFAQ
                array(
                    'key' => 'field_faq_question_8',
                    'label' => '質問 8',
                    'name' => 'faq_question_8',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_8',
                    'label' => '回答 8',
                    'name' => 'faq_answer_8',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_8',
                    'label' => 'トップページに表示 8',
                    'name' => 'faq_show_top_8',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 0,
                ),
                // 9つ目のFAQ
                array(
                    'key' => 'field_faq_question_9',
                    'label' => '質問 9',
                    'name' => 'faq_question_9',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_9',
                    'label' => '回答 9',
                    'name' => 'faq_answer_9',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_9',
                    'label' => 'トップページに表示 9',
                    'name' => 'faq_show_top_9',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 0,
                ),
                // 10つ目のFAQ
                array(
                    'key' => 'field_faq_question_10',
                    'label' => '質問 10',
                    'name' => 'faq_question_10',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_faq_answer_10',
                    'label' => '回答 10',
                    'name' => 'faq_answer_10',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_faq_show_top_10',
                    'label' => 'トップページに表示 10',
                    'name' => 'faq_show_top_10',
                    'type' => 'true_false',
                    'ui' => 1,
                    'default_value' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'faq_page',
                    ),
                ),
            ),
            'style' => 'seamless',
            'label_placement' => 'top',
        ));
    }
}
add_action('acf/init', 'register_faq_acf_fields');

if (function_exists('acf_add_options_page')) {
    // サイト全体の設定ページを追加
    acf_add_options_page(array(
        'page_title'    => 'サイト全体設定',
        'menu_title'    => 'サイト設定',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    // サブページとしてトップページコース設定を追加
    acf_add_options_sub_page(array(
        'page_title'    => 'トップページコース設定',
        'menu_title'    => 'トップページコース',
        'parent_slug'   => 'theme-general-settings',
    ));
}

if (function_exists('acf_add_options_page')) {
    // 既存のオプションページに追加（サイト設定がある場合）
    
    acf_add_options_page(array(
        'page_title'    => 'よくあるQ&A設定',
        'menu_title'    => 'よくあるQ&A',
        'menu_slug'     => 'theme-faq-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
