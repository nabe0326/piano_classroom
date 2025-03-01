<footer>
    <div class="container">
        <div class="footer-inner">
            <div class="footer-info">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
                </div>
                <p>〒123-4567<br>丹波篠山市山内町64<br>TEL: 080-2402-9157</p>
                <!-- <div class="footer-social">
                    <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div> -->
            </div>
            <div class="footer-nav">
                <h4>教室案内</h4>
                <ul class="footer-links">
                    <li><a href="/#about">教室紹介</a></li>
                    <li><a href="/#teacher-home">講師紹介</a></li>
                    <li><a href="/#access-parts">アクセス</a></li>
                    <li><a href="<?php echo home_url('/course/#faq'); ?>">よくある質問</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <h4>レッスン</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/course'); ?>">レッスンコース</a></li>
                    <li><a href="<?php echo home_url('/course/#price'); ?>">レッスン料金</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <h4>お役立ち情報</h4>
                <ul class="footer-links">
                    <li><a href="/#news-home">ブログ・お知らせ</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.
        </div>
    </div>
</footer>

<script>
    // ナビゲーションの挙動
    document.addEventListener('DOMContentLoaded', function() {
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        if (navToggle && navMenu) {
            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });
            
            // ナビゲーションリンクをクリックしたときにメニューを閉じる
            const navLinks = document.querySelectorAll('.nav-menu a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navMenu.classList.remove('active');
                });
            });
        }
        
        // スムーススクロール
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const headerHeight = document.querySelector('header').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>