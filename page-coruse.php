<?php
/**
 * Template Name: レッスンコース/料金ページ
 */

get_header();
?>

<main class="site-main">
    <!-- ページヘッダー -->
    <?php get_template_part('template-parts/page-header'); ?>
    <!-- イントロダクション -->
    <section class="section course-intro">
        <div class="container">
            <div class="intro-content">
                <h2 class="intro-title">一人ひとりに合わせた<br>丁寧な指導を心がけています</h2>
                <div class="intro-text">
                    <p>ピアノ専科では、子どもたちの「できた！」という喜びを大切にしながら、それぞれの成長段階や目標に合わせた多彩なコースをご用意しています。</p>
                    <p>初めてピアノに触れるお子様から、音楽を深く学びたい方、趣味として楽しみたい大人の方まで、幅広いニーズに対応したレッスンをご提供します。</p>
                </div>
            </div>
            <div class="free-trial-banner">
                <div class="banner-icon">🎵</div>
                <div class="banner-content">
                    <h3>まずは無料体験レッスンをお試しください</h3>
                    <p>実際のレッスンの雰囲気や教室の様子を体験していただけます</p>
                </div>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn trial-btn">体験レッスン申し込み</a>
            </div>
        </div>
    </section>

    <!-- メインコース一覧 -->
    <section class="section main-courses" id="main-courses">
        <div class="container">
            <h2 class="section-title">レッスンコース</h2>
            
            <!-- ピアノ個人コース -->
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">ピアノ個人コース</h3>
                    <span class="course-badge">人気</span>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateLessons.webp" alt="ピアノ個人レッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-overview">
                            <div class="info-group">
                                <h4 class="info-title">料金</h4>
                                <p class="info-content primary-text">年間42回/30分 6,500円～</p>
                                <p class="info-note">※テキスト代別途</p>
                            </div>
                            <div class="info-group">
                                <h4 class="info-title">対象</h4>
                                <p class="info-content">4歳～大人</p>
                            </div>
                            <div class="info-group">
                                <h4 class="info-title">担当講師</h4>
                                <p class="info-content">井本裕美講師</p>
                            </div>
                        </div>
                        <div class="course-description">
                            <h4 class="desc-title">コース内容</h4>
                            <p>初心者から上級者まで幅広く対応します。講師力に合わせ入門したての方も安心して受講できます。個人のレベルに合わせたレッスンを提供し、進度などのアンサンブルで共演可能性を高める工夫も行っています。大人ピアノコースも対応。</p>
                            <ul class="course-features">
                                <li>一人ひとりのペースに合わせたカリキュラム</li>
                                <li>基礎からしっかり学べる丁寧な指導</li>
                                <li>年2回の発表会で成果を発揮できる機会あり</li>
                                <li>各種コンクールへの参加サポート</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            
            <!-- 幼児2年間コース -->
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">幼児2年間コース</h3>
                    <span class="course-badge">おすすめ</span>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/infantLessons.webp" alt="幼児コース">
                    </div>
                    <div class="course-info">
                        <div class="course-overview">
                            <div class="info-group">
                                <h4 class="info-title">料金</h4>
                                <p class="info-content primary-text">月3回/個人30分 6,000円</p>
                                <p class="info-content">グループ40分 5,000円</p>
                                <p class="info-note">※テキスト代別途</p>
                            </div>
                            <div class="info-group">
                                <h4 class="info-title">対象</h4>
                                <p class="info-content">3～6歳</p>
                            </div>
                            <div class="info-group">
                                <h4 class="info-title">担当講師</h4>
                                <p class="info-content">出野真子講師</p>
                            </div>
                        </div>
                        <div class="course-description">
                            <h4 class="desc-title">コース内容</h4>
                            <p>音楽は子供の脳に良い影響を与えます。左脳（考える）右脳（イメージ）の連携に優れた効果があります。リズム・聴音・読譜を使って基礎を完成していきます。音符の高低や位置を捉える力も身につけます。</p>
                            <ul class="course-features">
                                <li>遊びの要素を取り入れた楽しいレッスン</li>
                                <li>五感を使って音楽の基礎を学ぶ</li>
                                <li>挨拶や姿勢などの礼儀作法も同時に習得</li>
                                <li>個人レッスンとグループレッスンの選択可</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            
            <!-- YAMAHAコース -->
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">YAMAHAコース</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamahaLessons.webp" alt="YAMAHAコース">
                    </div>
                    <div class="course-info">
                        <div class="course-overview">
                            <div class="info-group">
                                <h4 class="info-title">料金</h4>
                                <p class="info-content primary-text">月3回/個人30分 6,000円</p>
                                <p class="info-content">グループ40分 5,000円</p>
                                <p class="info-note">※テキスト代別途</p>
                            </div>
                            <div class="info-group">
                                <h4 class="info-title">対象</h4>
                                <p class="info-content">5歳～中学生</p>
                            </div>
                            <div class="info-group">
                                <h4 class="info-title">担当講師</h4>
                                <p class="info-content">西田夫佐講師</p>
                            </div>
                        </div>
                        <div class="course-description">
                            <h4 class="desc-title">コース内容</h4>
                            <p>家庭でも音楽を楽しむ方を対象にします。メロディーを知っている曲なら作曲も可能です。即興アレンジやオリジナル作品を作る喜びも体験できます。個人指導とグループレッスンの良さを活かしたYAMAHAグレードに挑戦できます。</p>
                            <ul class="course-features">
                                <li>YAMAHA公式教材を使用したレッスン</li>
                                <li>作曲やアレンジの楽しさを体験</li>
                                <li>グレード試験対策も万全</li>
                                <li>仲間と一緒に学ぶ楽しさも体験</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 専門コース一覧 -->
    <section class="section special-courses" id="special-courses">
        <div class="container">
            <h2 class="section-title">専門コース</h2>
            
            <div class="special-courses-grid">
                <!-- ボイストレーニングコース -->
                <div class="special-course-card">
                    <div class="course-icon">🎤</div>
                    <h3 class="special-course-name">ボイストレーニングコース</h3>
                    <div class="special-course-price">月2回/30分 4,000円～</div>
                    <div class="special-course-desc">
                        <p>歌の好きな方、人前で歌えるようになりたい方、ピアノの方、合唱団などで歌われている方も歓迎します。お子さまと二人でも対応可能です。</p>
                    </div>
                    <div class="special-course-teacher">担当：細見麻里子講師</div>
                    <a href="<?php echo home_url('/contact/'); ?>" class="special-course-link">詳細を問い合わせる →</a>
                </div>
                
                <!-- ソルフェージュコース -->
                <div class="special-course-card">
                    <div class="course-icon">🎼</div>
                    <h3 class="special-course-name">ソルフェージュコース</h3>
                    <div class="special-course-price">1回/30分 2,000円～</div>
                    <div class="special-course-desc">
                        <p>ソルフェージュは音楽をより深く理解し、読譜力ある演奏を示す大事な力です。小学生初期から表記ある演奏を丁寧に指導していきます。</p>
                    </div>
                    <div class="special-course-teacher">担当：井本裕美講師</div>
                    <a href="<?php echo home_url('/contact/'); ?>" class="special-course-link">詳細を問い合わせる →</a>
                </div>
                
                <!-- 受験コース -->
                <div class="special-course-card">
                    <div class="course-icon">🏆</div>
                    <h3 class="special-course-name">受験コース</h3>
                    <div class="special-course-price">月3回/30分 9,000円～</div>
                    <div class="special-course-desc">
                        <p>コンクールや大学受験に向いており、熱意が求められます。計画的に準備を進め、24年間で全国大会入賞多数の実績があります。</p>
                    </div>
                    <div class="special-course-teacher">担当：出野真子講師</div>
                    <a href="<?php echo home_url('/contact/'); ?>" class="special-course-link">詳細を問い合わせる →</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- レッスン料金表 -->
    <section class="section price-table" id="price">
        <div class="container">
            <h2 class="section-title">レッスン料金一覧</h2>
            
            <div class="price-table-container">
                <table class="price-list-table">
                    <thead>
                        <tr>
                            <th>コース名</th>
                            <th>レッスン形態</th>
                            <th>料金</th>
                            <th>対象</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ピアノ個人コース</td>
                            <td>年間42回/30分</td>
                            <td>6,500円～/月</td>
                            <td>4歳～大人</td>
                        </tr>
                        <tr>
                            <td rowspan="2">幼児2年間コース</td>
                            <td>月3回/個人30分</td>
                            <td>6,000円/月</td>
                            <td rowspan="2">3～6歳</td>
                        </tr>
                        <tr>
                            <td>月3回/グループ40分</td>
                            <td>5,000円/月</td>
                        </tr>
                        <tr>
                            <td rowspan="2">YAMAHAコース</td>
                            <td>月3回/個人30分</td>
                            <td>6,000円/月</td>
                            <td rowspan="2">5歳～中学生</td>
                        </tr>
                        <tr>
                            <td>月3回/グループ40分</td>
                            <td>5,000円/月</td>
                        </tr>
                        <tr>
                            <td>ボイストレーニングコース</td>
                            <td>月2回/30分</td>
                            <td>4,000円～/月</td>
                            <td>小学生～大人</td>
                        </tr>
                        <tr>
                            <td>ソルフェージュコース</td>
                            <td>1回/30分</td>
                            <td>2,000円～/回</td>
                            <td>小学生～大人</td>
                        </tr>
                        <tr>
                            <td>受験コース</td>
                            <td>月3回/30分</td>
                            <td>9,000円～/月</td>
                            <td>中学生～大人</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="price-notes">
                <h3 class="notes-title">料金に関する注意事項</h3>
                <ul class="notes-list">
                    <li>表示料金はすべて税込です</li>
                    <li>テキスト代、教材費は別途必要です</li>
                    <li>入会金：5,000円（ご家族2人目以降は半額）</li>
                    <li>発表会参加費：5,000円（年1回・希望者のみ）</li>
                    <li>振替レッスンは月内に限り可能です（事前連絡必須）</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- FAQ -->
    <section class="section faq" id="faq">
        <div class="container">
            <h2 class="section-title">よくあるご質問</h2>
            
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>何歳からレッスンを始められますか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>基本的には3歳からのレッスンが可能です。幼児コースでは、楽しく音楽に触れることから始め、徐々にピアノの基礎へと進みます。お子様の発達状況に合わせた指導を心がけていますので、ご不安な点はお気軽にご相談ください。</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>ピアノは自宅に必要ですか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>レッスンの効果を高めるためには、自宅での練習が重要ですので、ピアノまたは電子ピアノのご用意をおすすめします。ただし、最初は様子を見たいという方は、まずは体験レッスンから始めていただき、継続される場合に購入をご検討いただくことも可能です。購入のアドバイスも承ります。</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>大人でも初めてピアノを習うことはできますか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>もちろん可能です！当教室では大人の初心者の方も多く通われています。音楽を楽しみたい、趣味を持ちたいなど、目的に合わせたレッスンをご提供しています。仕事帰りの夜間レッスンも対応可能ですので、お気軽にご相談ください。</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>発表会はありますか？参加は必須ですか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>年1回、春に発表会を開催しています。目標を持って練習に取り組む良い機会となりますが、参加は任意です。初めての方や人前で演奏することに不安のある方には、小さなミニ発表会なども開催していますので、段階的にチャレンジしていただけます。</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>レッスンを休んだ場合の振替はできますか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>事前にご連絡いただいた場合は、月内での振替レッスンが可能です。ただし、講師のスケジュールによりご希望の日時に添えない場合もございますので、あらかじめご了承ください。急な体調不良などの場合も、できるだけ早めにご連絡いただければ対応いたします。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- お問い合わせ/申し込み -->
    <?php get_template_part('template-parts/contact-parts'); ?>
</main>

<?php get_footer(); ?>