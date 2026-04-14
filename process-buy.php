<?php
/*
  Template Name: process-buy
*/
?>
<?php get_header(); ?>

<!-- 購入までの流れ 用 -->
<main class="site-main process-buy" id="site-main">

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

              <section class="section">
                <h2 class="column__title">物件を買う前に知ってほしいこと。<br>
                  あなたの人生に寄り添う一軒を、私たちが全力で応援します！</h2>
                <p class="column__text">住まいの購入は、人生で何度も経験することではありませんよね。だからこそ、失敗したくないというのが本音ではないでしょうか。<br>
                  「この家にしてよかった！」と思える物件に出会うためのコツをご紹介します。<br>
                  ネットの情報だけでなく、ときには現地を散歩して、周辺環境をチェックするのも大切なポイントですよ。</p>
              </section>

              <section class="section">
                <h2 class="headline__title">失敗しない中古物件選びのポイント</h2>
                <ul class="column-list">
                  <li class="column__item">ライフスタイルへの適合性（戸建て vs マンション）</li>
                  <li class="column__item">営業担当者の誠実さと専門知識</li>
                  <li class="column__item">書類上のスペックと現況の不整合の有無</li>
                  <li class="column__item">周辺相場と比較した価格の妥当性</li>
                  <li class="column__item">長期的な返済計画の実現可能性</li>
                  <li class="column__item">住宅性能（採光、断熱、耐震、セキュリティ等）の充足</li>
                  <li class="column__item">教育・医療・レジャー施設など周辺環境の質</li>
                  <li class="column__item">公共交通機関へのアクセスと通勤利便性</li>
                  <li class="column__item">将来の家族構成・生活変化への対応力</li>
                </ul>
              </section>

              <!-- 物件購入の流れ -->
              <section class="section">
                <h2 class="column__title">物件購入の流れ</h2>
                <p class="column__text">物件探しからお引渡しまで、スムーズに進めば「約2カ月」が目安となります。</p>

                <table class="column-table">
                  <tbody>
                    <tr>
                      <td class="arrow" width="20px">
                        <div class="icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/icon01.png" alt="">
                        </div>
                      </td>
                      <td width="60px" class="spacer"></td>
                      <th>
                        <h3 class="flow__title"><span>STEP1</span>理想の物件を探そう</h3>
                        <p class="flow__text">まずは、検索サイトで自分たちに合うものを探したり、不動産会社に希望を伝えてプロの目線で探してもらったりしましょう。<br>
                          大切なのは、家族みんなで「これだけは譲れない！」という条件を話し合い、優先順位を決めておくこと。<br>
                          中古物件は売主さまが居住中のケースも多いので、気になる家があれば早めに内見の予約を入れるのがおすすめです。<br>
                          お家の中はもちろん、周りの雰囲気や近くの施設など、街の様子も歩いて確かめてみてくださいね。</p>
                      </th>
                    </tr>

                    <tr>
                      <td class="arrow">
                        <!-- start -->
                        <div class="icon progress">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/start.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th></th>
                    </tr>

                    <tr>
                      <td class="arrow">
                        <div class="icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/icon02.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th>
                        <h3 class="flow__title"><span>STEP2</span>資金計画を立てよう</h3>
                        <p class="flow__text">後悔しないためにも、お金のシミュレーションは早めに行っておくのが正解です！<br>
                          年収や今の貯金、毎月の返済額、そして完済時の年齢などを考えて、無理なく払っていけるかじっくり判断しましょう。<br>
                          事前に予算が見えてくると、物件選びの条件もぐっと絞りやすくなりますよ。<br>
                          物件の価格以外に、税金や手数料などの「諸費用」も必要になるので、その点も忘れずにチェックしておきましょう。</p>
                      </th>
                    </tr>

                    <tr>
                      <td class="arrow ">
                        <div class="icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/icon03.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th>
                        <h3 class="flow__title"><span>STEP3</span>物件の決定・お申込み</h3>
                        <p class="flow__text">たくさんの情報を集めて現地を見て、資金面もクリアできたら、いよいよ「この家にする！」という決断の時です。<br>
                          条件の良い物件はすぐに他の方で決まってしまうこともあるので、時には思い切りも必要。迷ったときは私たちがしっかりサポートします！<br>
                          心が決まったら、書面で購入の意思を伝える「購入申込み」を行いましょう。</p>
                      </th>
                    </tr>

                    <tr>
                      <td class="arrow">
                        <!-- 0.5カ月  -->
                        <div class="icon progress">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/progress01.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th></th>
                    </tr>

                    <tr>
                      <td class="arrow ">
                        <div class="icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/icon04.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th>
                        <h3 class="flow__title"><span>STEP4</span>ローンの事前相談・仮申込み</h3>
                        <p class="flow__text">物件が決まったら、次は住宅ローンの準備。一般的には、購入の申込みと一緒に「事前審査」を受けます。<br>
                          リフォームやリノベーションを考えているなら、このタイミングで一緒にプランを立てるのがベストです！<br>
                          ローンの選び方や銀行のご紹介も、私たちにお任せください。今のお住まいの住み替えや、ローンの借り換えについても、無理のない方法を一緒に考えていきましょう。</p>
                      </th>
                    </tr>

                    <tr>
                      <td class="arrow">
                        <!-- 1.5カ月 -->
                        <div class="icon progress">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/progress02.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th></th>
                    </tr>

                    <tr>
                      <td class="arrow">
                        <div class="icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/icon05.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th>
                        <h3 class="flow__title"><span>STEP5</span>売買契約・ローンの本申込み</h3>
                        <p class="flow__text">利用するローンに目処がついたら、いよいよ正式な売買契約を結びます。<br>
                          難しい言葉が出てくる契約書や重要事項説明書ですが、内容をしっかり理解することが大切。疑問に思ったことは遠慮なく何でも聞いてくださいね。<br>
                          このとき、手付金（代金の10％程度が目安）の支払いが必要になります。<br>
                          契約がすべて完了したら、住宅ローンの本申込みへと進みます。</p>
                      </th>
                    </tr>

                    <tr>
                      <td class="arrow ">
                        <div class="icon last">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy/icon06.png" alt="">
                        </div>
                      </td>
                      <td class="spacer"></td>
                      <th>
                        <h3 class="flow__title"><span>STEP6</span>お引渡し・お引っ越し</h3>
                        <p class="flow__text">代金のお支払いと同時に、お家の持ち主をあなたに変更する「所有権移転」の手続きを行い、ついに鍵の受け取り（お引渡し）となります！<br>
                          条件によっては、不動産取得税などの税金が安くなるケースも。そうした手続きのサポートも最後までしっかり行いますので、安心してお引っ越しの準備を進めてくださいね。</p>
                      </th>
                    </tr>

                  </tbody>
                </table>

              </section>


            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>