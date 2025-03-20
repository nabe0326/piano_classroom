<?php

/**
 * Template Name: お問い合わせページ
 */

get_header();
?>

<main class="site-main">
    <?php get_template_part('template-parts/page-header'); ?>

    <section class="section contact-section">
        <div class="container">
            <!-- <div class="contact-intro">
                <p>ピアノ専科へのお問い合わせは、下記フォームまたはお電話でお気軽にご連絡ください。<br>体験レッスンのお申し込みも受け付けております。</p>

                <div class="contact-methods">
                    <div class="contact-method-card">
                        <div class="method-icon">📞</div>
                        <h3>お電話でのお問い合わせ</h3>
                        <p class="phone-number">080-2402-9157</p>
                        <p class="contact-hours">受付時間: 平日10:00〜18:00</p>
                    </div>

                    <div class="contact-method-card">
                        <div class="method-icon">✉️</div>
                        <h3>メールでのお問い合わせ</h3>
                        <p>下記フォームからお問い合わせください</p>
                        <p class="response-time">※ 24時間以内にご返信いたします</p>
                    </div>
                </div>
            </div> -->

            <div class="contact-form-container">
                <h2 class="form-title">お問い合わせフォーム</h2>
                <div class="form-description">
                    <p>以下のフォームに必要事項をご入力の上、「送信する」ボタンをクリックしてください。<br>
                        <span class="required-mark">必須</span> の項目は必ずご入力ください。
                    </p>
                </div>

                <div class="contact-form">
                    <?php
                    // Contact Form 7のショートコードを出力
                    if (function_exists('wpcf7_contact_form')) {
                        echo do_shortcode('[contact-form-7 id="bc48f51" title="contact"]');
                    } else {
                        echo '<p>Contact Form 7プラグインが有効化されていません。</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // FAQアコーディオン
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');

            question.addEventListener('click', () => {
                // 現在のアイテムの状態を切り替え
                item.classList.toggle('active');

                // 他のアイテムを閉じる
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
            });
        });
    });
</script>

<?php get_footer(); ?>