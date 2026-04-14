<?php
/*
  Template Name: process-sale
*/
?>
<?php get_header(); ?>

<!-- editでは無理あるのでべた書き -->
<!-- 売却までの流れ 用 -->
<main class="site-main process-sale" id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-hero lower" id="hero">
        <div class="section-content">
          <div class="content">
            <div class="hero">
              <div class="hero__thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                  <?php echo get_the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image" decoding="async">
                <?php endif; ?>
              </div>
              <h1 class="hero__catch"><?php the_title(); ?></h1>
            </div>
            <?php get_template_part('template-parts/category-list'); ?>
          </div>
        </div>
      </section>

      <section class="section section-column" id="section-column">
        <div class="section-content row w960">
          <div class="headline">

            <div class="breadcrumbs">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope
                  itemtype="http://schema.org/ListItem">
                  <a itemprop="item" href="<?= site_url(); ?>/">
                    <span itemprop="name">ホーム</span></a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemprop="itemListElement" itemscope
                  itemtype="http://schema.org/ListItem">
                  <span itemprop="name"><?php the_title(); ?></span>
                  <meta itemprop="position" content="2" />
                </li>
              </ol>
            </div>
          </div>

          <div class="content">
            <div class="column">

              <!-- 追加日／更新日
          <p class="column__time"><time datetime="<?php the_time(); ?>"><?php the_time('Y/m/d'); ?></time></p>
          <p class="column__time"><time datetime="<?php the_modified_date() ?>"><?php the_modified_date('Y/m/d') ?></time></p>
          <div class="column__category"><?php the_category(); ?></div>
          -->

              <!-- <div class="column__thumbnail">
                <?php the_post_thumbnail(); ?>
              </div> -->

              <!-- <div class="column-contents">
                  <?php the_content(); ?>
                </div> -->

              <div class="column-texts section">
                <p class="column__text"><b>「大切にしてきたマイホーム、そろそろ手放そうかな…」</b><br>
                  そう考え始めたとき、頭に浮かぶのは「いくらで売れるんだろう？」「近所に知られずに進められる？」「いつまでに売れるかな？」といった、たくさんの不安ではないでしょうか。</p>

                <p class="column__text">不動産の売却は、人生の中でもそう何度も経験することではありません。だからこそ、ステッチ不動産事業部では、単に物件を売るだけでなく、売主様の**「これから」の人生に寄り添うこと**を一番大切にしています。</p>

                <p class="column__text">「高く売りたい」「急いで売りたい」「誰にも知られずに売りたい」——。
                  そんなお一人おひとりの本音にお応えするための、当事業部ならではのサポート体制や販売プランについてご紹介します。納得のいく売却への第一歩を、私たちと一緒に踏み出してみませんか？</p>
              </div>

              <section class="section section02">
                <h2 class="column__title">売主様の「こうしたい！」に合わせた販売スタイル</h2>
                <p class="column__text">売主様が大切にされてきたお住まいだからこそ、ご希望やご事情を丁寧に伺います。そのうえで、お一人おひとりにぴったりの売却方法をご提案いたします。</p>

                <div class="flex section">
                  <section class="flex">
                    <div class="column__img thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img02-1.png" alt="情報完全公開型">
                    </div>
                    <div class="column-texts">
                      <h3 class="column__title">しっかりアピール！「情報完全公開型」</h3>
                      <p class="column__text">ステッチ不動産事業部の宣伝パワーをフル活用！インターネットやチラシ、地域情報誌、店頭でのご紹介など、あらゆるメディアを使って、購入希望の方へスピーディーに情報を届けます。</p>
                    </div>
                  </section>
                  <section class="flex">
                    <div class="column__img thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img02-2.png" alt="限定公開型">
                    </div>
                    <div class="column-texts">
                      <h3 class="column__title">こっそり安心！「限定公開型」</h3>
                      <p class="column__text">「ご近所に知られずに売りたい」という方もご安心ください。一般への広告は出さず、当事業部にすでにお問い合わせいただいている「家を探している方」だけに直接ご紹介するので、秘密を守って売却を進められます。</p>
                    </div>
                  </section>
                </div>
              </section>

              <section class="section section03">
                <h2 class="column__title">ステッチ不動産事業部の「納得」査定</h2>
                <p class="column__text">査定額は、高ければ高いほど良いというわけではありません。大切なのは「いつまでに、いくらで売りたいか」。豊富な実績と最新のデータをもとに、現実的で誠実な査定をお届けします。</p>

                <div class="flex">
                  <section>
                    <div class="column__img thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img03-1.png" alt="情相場価格による査定">
                    </div>
                    <h3 class="column__title">相場に合わせた安心査定</h3>
                    <p class="column__text">これまでのたくさんの仲介実績をもとに、スムーズに売却が決まりやすい「ちょうどいい価格」をご提示します。</p>
                  </section>
                  <section>
                    <div class="column__img thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img03-2.png" alt="近隣事例大公開">
                    </div>
                    <h3 class="column__title">近隣の事例も包み隠さずお伝えします</h3>
                    <p class="column__text">「近所でいくらで売れたのか？」「今ライバルになる物件はいくらか？」など、気になる周辺データをオープンにご説明します。</p>
                  </section>
                  <section>
                    <div class="column__img thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img03-3.png" alt="お客様のご要望に応じた価格提示">
                    </div>
                    <h3 class="column__title">ご希望に合わせた価格のご提案</h3>
                    <p class="column__text">「急いで売りたい」「時間はかかっても高く売りたい」など、お客様のライフプランに合わせた最適な売り出し価格を一緒に考えていきましょう。</p>
                  </section>
                  <section>
                    <div class="column__img thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img03-4.png" alt="買取査定">
                    </div>
                    <h3 class="column__title">直接買い取る「買取査定」</h3>
                    <p class="column__text">仲介で買い手を探すのではなく、当社が直接買い取る場合の価格もご提示できます。期限が決まっている時などに心強い味方になりますよ。</p>
                  </section>
                </div>
              </section>

              <section class="section section04">
                <h2 class="column__title">買い主さまのニーズに合わせた多彩なプラン！</h2>
                <p class="column__text">私たちの役割は、購入希望の方に「ここに住みたい！」と思っていただくこと。今の住まいの魅力を引き出すのはもちろん、もっと素敵に見せるためのいろんなプランをご用意しています。</p>

                <div class="flex">
                  <section class="plan-normal">
                    <div class=" column__img thumbnail">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img04-1.png" alt="現状販売プラン">
                    </div>
                    <h3 class="column__title">現状販売プラン</h3>
                    <p class="column__text">今のままの良さを活かして販売する、一番スタンダードな方法です。</p>
                  </section>

                  <div class="plan-diverse">
                    <section class="flex">
                      <div class="column__img thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img04-2.jpg" alt="建て替え提案プラン">
                      </div>
                      <div>
                        <h3 class="column__title">新築イメージが湧く！「建て替え提案プラン」</h3>
                        <p class="column__text">新築用地として魅力的な場合は、あらかじめ「こんな家が建ちますよ」というプランをご用意。買い主さまが決まってから新しく建ててお渡しする、ワクワクする提案です。</p>
                      </div>
                    </section>

                    <section class="flex">
                      <div class="column__img thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img04-3.jpg" alt="リフォーム提案プラン">
                      </div>
                      <div>
                        <h3 class="column__title">変身後を見せる「リフォーム提案プラン」</h3>
                        <p class="column__text">「リフォームでこんなに変わるんだ！」と感じていただけるよう、間取り変更や最新設備へのリニューアル案をセットにして、お家の可能性を広げます。</p>
                      </div>
                    </section>

                    <section class="flex">
                      <div class="column__img thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/img04-4.png" alt="売り土地プラン">
                      </div>
                      <div>
                        <h3 class="column__title">土地として届ける「売り土地プラン」</h3>
                        <p class="column__text">建物を解体してスッキリ更地にしたり、古家付きの土地として販売したりと、その場所が一番輝く形で見せ方を変えていきます。</p>
                      </div>
                    </section>

                  </div>
                </div>
              </section>

              <section class="section section05">
                <h2 class="column__title">契約書の種類について：<br>
                  「媒介契約」は安心のパートナーシップ</h2>
                <p class="column__text">不動産の売却を任せていただく際、売主様と私たちの間で結ぶのが「媒介契約」です。これは、私たちが責任を持って売却をお手伝いさせていただく、信頼の証でもあります。</p>

                <table class="column-table">
                  <thead>
                    <tr>
                      <th class="table__title contract01">専属専任媒介契約</th>
                      <th class="table__title contract02">専任媒介契約</th>
                      <th class="table__title contract03">一般媒介契約</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="2">
                        <p class="hukidasi">(広告・調査・買い主さま探し)<br>
                          私たちが売主様のたった一つの窓口になります。<br>
                          やり取りはステッチ不動産事業部とだけで完結するので、手間もかかりません！<br>
                          「専属専任媒介」なら1週間に1回以上、「専任媒介」なら2週間に1回以上、<br>
                          今どんな状況なのかをしっかりご報告させていただきます。
                        </p>

                        <div class="column__img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/table01.png" alt="窓口が1カ所">
                        </div>

                        <dl>
                          <dt class="merit">メリット</dt>
                          <dd>
                            <ul class="merit-list">
                              <li>依頼先が1社のみなので、不動産会社も熱心になる。</li>
                              <li>窓口が一つなので管理（把握）しやすい。</li>
                              <li>専属専任の場合は1週間に1回以上、専任の場合は2週間に1回以上、販売活動の進捗状況が報告される。</li>
                            </ul>
                          </dd>
                          <dt class="demerit">デメリット</dt>
                          <dd>
                            <ul class="demerit-list">
                              <li>1社しか依頼できないため、業者の力に依存する傾向がある。</li>
                            </ul>
                          </dd>
                        </dl>
                      </td>
                      <td>

                        <div class="column__img multiple">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sell/table02.png" alt="窓口が複数">
                        </div>

                        <dl>
                          <dt class="merit">メリット</dt>
                          <dd>
                            <ul class="list-merit">
                              <li>複数の不動産会社に依頼ができる。</li>
                              <li>広い地域に情報を発信できる。</li>
                            </ul>
                          </dd>
                          <dt class="demerit">デメリット</dt>
                          <dd>
                            <ul class="list-demerit">
                              <li>不動産会社が複数いるので、各社の営業に力が入らない。</li>
                              <li>複数の会社から連絡が来るため管理（把握）しづらい。</li>
                            </ul>
                          </dd>
                        </dl>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="exclusive">媒介系契約締結後<strong>5日以内</strong>に<br>レインズへ登録</td>
                      <td class="agreement">媒介系契約締結後<strong>7日以内</strong>に<br>レインズへ登録</td>
                      <td class="general">レインズへの登録は売主様の任意</td>
                    </tr>
                    <tr>
                      <td class="exclusive">不動産会社から売主様へ<br><strong>1週間に1回以上</strong>販売状況を報告</td>
                      <td class="agreement">不動産会社から売主様へ<br><strong>2週間に1回以上</strong>販売状況を報告</td>
                      <td class="general">不動産会社から報告義務なし</td>
                    </tr>
                    <tr>
                      <td class="exclusive">売主様の自己発見取引は不可</td>
                      <td colspan="2" class="general">売主様の自己発見取引は可能</td>
                    </tr>
                  </tfoot>
                </table>
              </section>

              <section class="section section06">
                <h2 class="column__title">ご売却の流れ</h2>

                <table class="column-table">
                  <tbody>
                    <tr>
                      <th class="column-title" width="30%">
                        <h3 class="flow__title">売却のご相談</h3>
                        <p class="free">無料</p>
                      </th>
                      <td class="arrow arrow01" width="40px">
                      </td>
                      <td width="65%">「いつまでに」「いくらで」「だれに」「どのように」売却すればいいのか、お持ちの不安や疑問を全てお聞かせください！</td>
                    </tr>
                    <tr>
                      <th class="column-title">
                        <h3 class="flow__title">基礎的物件調査</h3>
                        <p class="free">無料</p>
                      </th>
                      <td class="arrow arrow01"></td>
                      <td>売却希望物件の基礎的な調査を行います。実際に現地にご訪問する他、法務局などに問合せ、物件の履歴書を調べたりなどします。</td>
                    </tr>
                    <tr>
                      <th class="column-title">
                        <h3 class="flow__title">価格査定報告</h3>
                        <p class="free">無料</p>
                      </th>
                      <td class="arrow arrow01"></td>
                      <td>基礎的物件調査に基づいた価格を査定させていただきます。</td>
                    </tr>
                    <tr>
                      <th class="column-title">
                        <h3 class="flow__title">販売計画の提案</h3>
                        <p class="free">無料</p>
                      </th>
                      <td class="arrow arrow01"></td>
                      <td>ご成約までの販売計画を作成し、お客様にご提案いたします。</td>
                    </tr>
                    <tr>
                      <th class="column-title">
                        <h3 class="flow__title">媒介契約の締結</h3>
                        <p class="free">無料</p>
                      </th>
                      <td class="arrow arrow01"></td>
                      <td>今後は私たちに、お任せください！</td>
                    </tr>
                    <tr>
                      <th class="column-title">
                        <h3 class="flow__title">ご売却までの各種販売活動</h3>
                        <p class="free">無料</p>
                      </th>
                      <td class="arrow arrow01 last"></td>
                      <td>計画書に沿った販売活動、また相場や時期柄、購入希望様者のご要望に合わせて販売計画を都度ご相談させていただきます。</td>
                    </tr>
                    <tr>
                      <th class="column-title">
                        <h3 class="flow__title">不動産売買契約</h3>
                        <p class="cost">仲介手数料のお支払</p>
                        <p class="receive">手付金の拝受</p>
                      </th>
                      <td class="arrow arrow02"></td>
                      <td>売却価格、条件、共にご納得いただける購入希望者様と合意に至りましたら、売買に関する契約を取り交わします。</td>
                    </tr>
                    <tr>
                      <th class="column-title">
                        <h3 class="flow__title">引渡し準備・各種手続き</h3>
                        <p class="cost">売却にかかる必要経費のお支払</p>
                        <p class="receive">残代金の拝受</p>
                      </th>
                      <td class="arrow arrow03"></td>
                      <td>
                        <ul class="flow-list">
                          <li class="flow__item">購入者様から残代金の拝受</li>
                          <li class="flow__item">売却にかかる必要経費のお支払</li>
                          <li class="flow__item">名義変更などの各種法的手続き</li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <p class="flow__finish">ご売却完了</p>

                <a href="#" class="primary-btn">無料査定依頼はこちらから</a>

              </section>


            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>