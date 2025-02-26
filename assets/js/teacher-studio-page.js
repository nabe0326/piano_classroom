/**
 * 講師・教室紹介ページのJavaScript
 */
document.addEventListener('DOMContentLoaded', function() {
    // ギャラリー画像のライトボックス効果
    const galleryItems = document.querySelectorAll('.gallery-item img');
    
    if (galleryItems.length > 0) {
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                // ライトボックスを表示する処理
                // 実装例: 簡易的なライトボックス
                const overlay = document.createElement('div');
                overlay.className = 'gallery-overlay';
                
                const imageContainer = document.createElement('div');
                imageContainer.className = 'overlay-image-container';
                
                const image = document.createElement('img');
                image.src = this.src;
                image.className = 'overlay-image';
                
                const closeBtn = document.createElement('button');
                closeBtn.className = 'overlay-close';
                closeBtn.innerHTML = '&times;';
                
                imageContainer.appendChild(image);
                imageContainer.appendChild(closeBtn);
                overlay.appendChild(imageContainer);
                document.body.appendChild(overlay);
                
                // スクロール禁止
                document.body.style.overflow = 'hidden';
                
                // 閉じるボタン動作
                closeBtn.addEventListener('click', function() {
                    document.body.removeChild(overlay);
                    document.body.style.overflow = '';
                });
                
                // オーバーレイクリックで閉じる
                overlay.addEventListener('click', function(e) {
                    if (e.target === overlay) {
                        document.body.removeChild(overlay);
                        document.body.style.overflow = '';
                    }
                });
            });
        });
        
        // ライトボックス用のスタイルを動的に追加
        const style = document.createElement('style');
        style.textContent = `
            .gallery-overlay {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                cursor: pointer;
            }
            
            .overlay-image-container {
                position: relative;
                max-width: 90%;
                max-height: 90%;
            }
            
            .overlay-image {
                max-width: 100%;
                max-height: 90vh;
                display: block;
                box-shadow: 0 5px 30px rgba(0, 0, 0, 0.3);
            }
            
            .overlay-close {
                position: absolute;
                top: -40px;
                right: 0;
                background: transparent;
                border: none;
                color: white;
                font-size: 30px;
                cursor: pointer;
            }
        `;
        document.head.appendChild(style);
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