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
                <h2 class="intro-title">レッスンコース紹介</h2>
                <div class="intro-text">
                    <p>お一人お一人の目標や成長に合わせたコースを用意しています。</p>
                    <p>どのコースが向いているのか、始めたらいいのか、どんな雰囲気なのか等、無料体験レッスンも実施しておりますのでお気軽にお問合せください。</p>
                </div>
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
                    <h3 class="course-name">ピアノ個人コースＡ（年間42回コース）</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateLessonsA.webp" alt="ピアノ個人レッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-description">
                            <p>初心者から上級者まで、誰もが目標をもって楽しく学べます。読譜力に力を入れており、自分で譜を読み演奏する力を伸ばします。個人のレベルに合わせたレッスンを行っています。連弾などのアンサンブルで共演者との協調性も高めます。</p>
                            <p>ピアノ専科講師陣の複数指導で可能性を伸ばすコースです。<br>大人ピアノコースも歓迎しております。</p>
                        </div>

                        <div class="price-section">
                            <h4 class="price-title">料金表</h4>
                            <div class="price-table">
                                <div class="price-row">
                                    <div class="price-level">バイエル導入</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">6,500円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">バイエル（上）程度</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">7,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">バイエル（下）程度</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">7,500円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">40分</div>
                                    <div class="price-amount">8,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ツェルニー100・ブルクミュラー程度</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">8,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">40分</div>
                                    <div class="price-amount">8,500円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ツェルニー30番・バッハ・ソナチネ</div>
                                    <div class="price-time">40分</div>
                                    <div class="price-amount">9,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ツェルニー40番・バッハ・ソナタ</div>
                                    <div class="price-time">40分</div>
                                    <div class="price-amount">10,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ショパンエチュード・ロマン派・古典派</div>
                                    <div class="price-time">40分</div>
                                    <div class="price-amount">11,000円</div>
                                </div>
                            </div>
                            <p class="price-note">※各リハーサル・秋の審査会は無料で参加頂けます。</p>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">ピアノ個人コースＢ（月3回コース）</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateLessonsB.webp" alt="ピアノ個人レッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-description">
                            <p>初心者から上級者まで、誰もが目標をもって楽しく学べます。読譜力に力を入れており、自分で譜を読み演奏する力を伸ばします。個人のレベルに合わせたレッスンを行っています。連弾などのアンサンブルで共演者との協調性も高めます。</p>
                            <p>大人ピアノコースも歓迎しております。</p>
                        </div>

                        <div class="price-section">
                            <h4 class="price-title">料金表</h4>
                            <div class="price-table">
                                <div class="price-row">
                                    <div class="price-level">バイエル導入</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">6,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">バイエル（上）程度</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">6,500円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">バイエル（下）程度</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">7,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ツェルニー100・ブルクミュラー程度</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">7,500円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ツェルニー30番・バッハ・ソナチネ</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">8,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ツェルニー40番・バッハ・ソナタ</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">8,500円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ショパンエチュード・ロマン派・古典派</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">9,000円</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">幼児音感グループコース（月3回）</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateLessons_cild.jpg" alt="幼児音感レッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-description">
                            <p>音楽は子供の脳に良い影響を与えます。左脳（考える）右脳（イメージ）の発達に力を入れてます。ひらがな演習・作曲家暗唱・リズム・絵音符等を使って楽器演奏など、総合的な音楽力を独自のカリキュラムでお子様の発育をサポートします。</p>
                        </div>

                        <div class="price-section">
                            <h4 class="price-title">料金表</h4>
                            <div class="price-table">
                                <div class="price-row">
                                    <div class="price-level">1年目音感コース</div>
                                    <div class="price-time">2名40分・3名45分</div>
                                    <div class="price-amount">4,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">2年目音感コース</div>
                                    <div class="price-time">2名40分・3名45分</div>
                                    <div class="price-amount">4,500円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ピアノグループ(2名以上)</div>
                                    <div class="price-time">2名40分・3名45分</div>
                                    <div class="price-amount">5,000円</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">YAMAHAコース（月3回）</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yamaha.webp" alt="YAMAHAコースレッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-description">
                            <p>楽譜無しで音楽を楽しむ力を身につけます。メロディーを知っている曲なら伴奏をつけて両手で演奏することが出来るようになります。即興曲アレンジやオリジナル作曲が出来るようになります。</p>
                            <p>YAMAHAグレードに挑戦できます。</p>
                        </div>

                        <div class="price-section">
                            <h4 class="price-title">料金表</h4>
                            <div class="price-table">
                                <div class="price-row">
                                    <div class="price-level">ヤマハグレード6級まで</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">6,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">45分</div>
                                    <div class="price-amount">9,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">ヤマハグレード5級以上</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">9,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">45分</div>
                                    <div class="price-amount">13,500円</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">ボイストレーニングコース</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice.jpg" alt="ボイストレーニングレッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-description">
                            <p>歌の好きな方、人前で歌えるようになりたい方、シニアの方、合唱団員さん、募集中です。歌いたい楽譜をお持ちください。お友達とお二人でもお気軽にお問合せください。当コースから2023年歌手デビュー！</p>
                        </div>

                        <div class="price-section">
                            <h4 class="price-title">料金表</h4>
                            <div class="price-table">
                                <div class="price-row">
                                    <div class="price-level">発声・楽曲（月１回）</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">2,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">45分</div>
                                    <div class="price-amount">3,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">発声・楽曲（月２回）</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">4,000円</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">ソルフェージュコース（月３回）</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solfeggio.jpg" alt="ソルフェージュレッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-description">
                            <p>ソルフェージュは音楽をより深く理解し説得力ある演奏に不可欠です。小学生初級ソルフェージュから受験対応までしております。音楽高校、音楽大学へ多数合格実績あります。</p>
                        </div>

                        <div class="price-section">
                            <h4 class="price-title">料金表</h4>
                            <div class="price-table">
                                <div class="price-row">
                                    <div class="price-level">ソルフェージュ</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">6,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">45分</div>
                                    <div class="price-amount">9,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">60分</div>
                                    <div class="price-amount">12,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level"></div>
                                    <div class="price-time">90分</div>
                                    <div class="price-amount">18,000円</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
            <div class="course-detail-card">
                <div class="course-header">
                    <h3 class="course-name">受験コース</h3>
                </div>
                <div class="course-body">
                    <div class="course-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/exam.jpg" alt="受験コースレッスン">
                    </div>
                    <div class="course-info">
                        <div class="course-description">
                            <p>コンクール・大学受験は高い緊張感と集中力が求められます。その為の十分な準備を計画的に進める力、継続する力を養います。24年間、各コンクールに連続出場者を輩出、全国大会連続出場中です。</p>
                        </div>

                        <div class="price-section">
                            <h4 class="price-title">料金表</h4>
                            <div class="price-table">
                                <div class="price-row">
                                    <div class="price-level">月３回</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">9,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">月４回</div>
                                    <div class="price-time">30分</div>
                                    <div class="price-amount">12,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">月３回</div>
                                    <div class="price-time">45分</div>
                                    <div class="price-amount">12,000円</div>
                                </div>
                                <div class="price-row">
                                    <div class="price-level">月４回</div>
                                    <div class="price-time">45分</div>
                                    <div class="price-amount">16,000円</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-footer">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn course-contact-btn">このコースについて問い合わせる</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section faq" id="faq">
        <div class="container">
            <h2 class="section-title">よくあるQ＆A</h2>

            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>ピアノ専科に入会するにはどうしたらいいですか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>お電話もしくはサイトの問い合わせから申し込みください。<br>体験レッスンを受けてからの入会も可能です。<br>入会時には入会金として3,000円を別途頂戴しています。</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>レッスン日の変更は可能ですか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>レッスン日の変更は原則出来かねます。生徒さん都合で欠席となる場合は振替なしとしておりますので予めご了承願います。<br>
                            尚、講師の都合でレッスン日時を変更する時は、早めに伝えて年間でレッスンを調整します。<br>
                            ※お休みされる場合や遅刻の時は、必ず担当講師へ連絡して下さい。</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>レッスン料金の支払いは現金のみですか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>冠婚葬祭だけでなく日本の風習の中には現金を包む慣行があるため、基本所作を身につけておくことを想定して現金支払いをお願いしています。</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>ピアノ専科の音楽祭（発表会）は出ないといけませんか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>
                        年に一度、たんば田園交響ホールにおいて専科生対象の音楽祭を開催します。<br>
                        原則、生徒の皆さんには参加いただきます。（外部の方はご遠慮いただいております）<br>
                        生徒の成長の発表という位置づけであり、目標に向かって努力する事を体感することで心の成長を育成しますので参加をお願いしております。<br>
                        練習不足など曲の仕上がり状況によりチケット補習レッスンを入れて調整も可能です。
                        </p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>音楽祭（発表会）以外にイベントはありますか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>
                        ・リハーサル<br>
                        音楽祭の前にリハーサルを開催しております。<br>
                        リハーサルを通して曲の仕上がりの状況確認ができるのと、人前で演奏する予行演習を行い自信へとつなげていきます。<br><br>
                        ・審査会<br>
                        年に一度、技術面の向上を目指して開催しています。<br>
                        全生徒の前で演奏することと聴くことを体験して具体的に目標を見つけて今後の取り組みに活かします。<br>
                        ※リハーサル、審査会はレッスン一回分の料金を別途ご負担いただきます。（但し、個人レッスン年42回コースはリハーサル、審査会とも必須のためコース料金に含まれています。）
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>コンクールに出場できますか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>
                        各々が高い目標に向かって邁進する事を大いに受け入れ、各生徒の未来への挑戦は大いに<br>
                        歓迎します。その為にもコンクール挑戦はすすめています。<br>
                        コンクール課題曲は講師の判断で生徒の技量や表現力に合った曲を慎重に判断するため<br>
                        専科内で課題曲が重なる事もあり得ますが他人の発言で曲の変更は一切無いものとします。<br>
                        我々はコンクール受験を目標に更に高い技術面向上は勿論大切ですが、その事よりも<br>
                        精神面での向上を大切に育てて行きたく思います。<br>
                        コンクールは人との比較では無く、自己を越える真の強さを目的にしています。<br>
                        ピアノ専科は、複数の講師で運営し合同リハーサル、弾き合い会、生徒発表会を行います。<br>
                        課題曲が重なる事もあり得ます。コンクール出場、発表会出演申込判断は、保護者の責任で提出して下さい。仕上がりの状況により、チケット補習レッスンを入れて調整します。
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>駐車場はありますか？</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>
                        教室前に５台スペースがあります。停める箇所はこちらで決めますので指定の箇所に駐車願います。
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>遅刻について</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>
                        決められた時間に必ず間に合うよう教室に入りましょう。早すぎは前の生徒さんの<br>
                        レッスンの妨げになります。定刻まで教室の外で待機しましょう。<br>
                        レッスンの都合上、多少時間が延びることがあります。ご理解いただきます様お願いします。
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="q-mark">Q</span>
                        <h3>面談について</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <span class="a-mark">A</span>
                        <p>
                        生徒さんの心身の成長をともに育むことを心掛けていますので、保護者様と生徒さんとの三者面談を行い、保護者様との連携を常に心掛けています。<br>
                        実施時期は各講師によるものとします。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- お問い合わせ/申し込み -->
    <?php get_template_part('template-parts/contact-parts'); ?>
</main>

<?php get_footer(); ?>