<?php
/**
 * 下層ページヘッダーのテンプレートパーツ
 */

// ページタイトルを取得
$page_title = get_the_title();

// 親ページがある場合はその情報を取得
$parent_title = '';
$parent_link = '';
if ($post->post_parent) {
    $parent_title = get_the_title($post->post_parent);
    $parent_link = get_permalink($post->post_parent);
}
?>

<section class="page-header">
    <div class="header-notes header-note-1">♪</div>
    <div class="header-notes header-note-2">♫</div>
    
    <div class="container">
        <div class="page-header-content">
            <h1 class="page-title"><?php echo esc_html($page_title); ?></h1>
        </div>
    </div>
</section>