<?php
/**
 * お問い合わせセクションのテンプレートパーツ
 */
?>
<!-- Contact Section -->
<section class="section contact" id="contact">
    <div class="container">
        <div class="contact-inner">
            <h2 class="section-title">お問い合わせ</h2>
            <p class="contact-desc">体験レッスンや教室に関するお問い合わせはこちらからお気軽にどうぞ。<br>24時間以内に返信いたします。</p>
            <a href="#" class="btn">無料体験レッスンに申し込む</a>
            
            <div class="contact-methods">
                <div class="contact-method">
                    <div class="contact-icon">📞</div>
                    <h4>お電話</h4>
                    <p>080-2402-9157</p>
                    <p><small>受付時間: 平日10時〜18時</small></p>
                </div>
                <div class="contact-method">
                    <div class="contact-icon">✉️</div>
                    <h4>メール</h4>
                    <p>pianosenka@gmail.com</p>
                    <p><small>24時間受付中</small></p>
                </div>
            </div>
            
            <?php
            // お問い合わせフォームがあればここに表示
            if (function_exists('the_content')) {
                the_content();
            }
            ?>
        </div>
    </div>
</section>