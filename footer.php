<footer>
    <div class="container">
        <div class="footer-inner">
            <div class="footer-info">
                <div class="footer-logo"><?php bloginfo('name'); ?></div>
                <p>〒123-4567<br>丹波篠山市山内町64<br>TEL: 080-2402-9157</p>
                <div class="footer-social">
                    <a href="#" aria-label="Twitter">T</a>
                    <a href="#" aria-label="Facebook">F</a>
                    <a href="#" aria-label="Instagram">I</a>
                </div>
            </div>
            <div class="footer-nav">
                <h4>教室案内</h4>
                <ul class="footer-links">
                    <li><a href="#about">教室紹介</a></li>
                    <li><a href="#teacher">講師紹介</a></li>
                    <li><a href="#access">アクセス</a></li>
                    <li><a href="#">よくある質問</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <h4>レッスン</h4>
                <ul class="footer-links">
                    <li><a href="#courses">レッスンコース</a></li>
                    <li><a href="#">レッスン料金</a></li>
                    <li><a href="#">発表会情報</a></li>
                    <li><a href="#">生徒の声</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <h4>お役立ち情報</h4>
                <ul class="footer-links">
                    <li><a href="#">ブログ・お知らせ</a></li>
                    <li><a href="#">ピアノ練習法</a></li>
                    <li><a href="#">楽譜・教材紹介</a></li>
                    <li><a href="#">コンクール情報</a></li>
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