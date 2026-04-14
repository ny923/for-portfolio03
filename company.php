<?php
/*
  Template Name: company
*/
?>
<?php get_header(); ?>

<!-- 会社概要 -->
<main class="site-main company" id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-hero lower" id="hero">
        <div class="section-content">
          <div class="content">
            <div class="hero">

              <h1 class="hero__catch"><span><?php the_title(); ?></span></h1>
            </div>

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
              <!-- <div class="column__thumbnail">
                <?php the_post_thumbnail(); ?>
              </div> -->

              <table>
                <tr>
                  <th>名称</th>
                  <td>株式会社ステッチ</td>
                </tr>
                <tr>
                  <th>所在地</th>
                  <td>
                    <div>
                      本社：前橋市広瀬町3-2-15<br>
                      Tel：027-225-5100（不動産事業部 直通）<br>
                      Fax：027-289-3317<br>
                    </div>

                    <div>
                      東京営業所<br>
                      Tel：03-6228-4561<br>
                      Fax：03-6228-4519
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>代表取締役</th>
                  <td>星野　敏</td>
                </tr>
                <tr>
                  <th>設立</th>
                  <td>平成19年3月</td>
                </tr>
                <tr>
                  <th>資本金</th>
                  <td>1,000万円</td>
                </tr>
                <tr>
                  <th>事業内容</th>
                  <td>
                    <section>
                      <h3>【不動産事業】</h3>
                      <p>免許番号　群馬県知事（1）第8001号</p>
                      <ul>
                        <li>・不動産売買</li>
                        <li>・不動産コンサルティング</li>
                        <li>・空き家再生</li>
                        <li>・店舗開発</li>
                      </ul>
                    </section>
                    <section>
                      <h3>【建築・設計事業】</h3>
                      <p>免許番号　群馬県知事(特-6)第23981号<br>
                        登録番号　一級建築士事務所　群馬県知事登録 第4848号</p>
                      <ul>
                        <li>・住宅リフォーム工事全般（外装・内装・水廻り・外構等）</li>
                        <li>・商業施設における設計・デザイン・施行</li>
                        <li>・解体工事</li>
                      </ul>
                    </section>

                  </td>
                </tr>
                <tr>
                  <th>ホームページ</th>
                  <td><a href="https://e-stitch.jp/" target="_blank">https://e-stitch.jp/</a></td>
                </tr>
              </table>

              <!-- old -->
              <!-- <section class="section lead">
                <h2 class="column__title">ステッチ不動産事業部について</h2>
                <h3 class="column__catch">家族がいて、人生がある。その大切な舞台に不動産はあります。<br>
                  だからこそ私たちは、「人と人とのお付き合い」を第一に考えます。</h3>
                <p class="column__text">群馬県を拠点に、土地・建物・マンションなどの売買をメインに活動しているステッチ不動産事業部です。</p>
                <p class="column__text">不動産売買の背景には、お客様お一人おひとりの事情や願いがあり、正解は決して一つではありません。<br>
                  私たちが扱うのは「物」としての不動産ですが、その先にいるのは常に「人」です。<br>
                  お客様の人生に真摯に向き合い、住まいを通じて幸せに貢献できること。それが私たちの大きな喜びです。</p>
                <p class="column__text">人生を左右する大切な住まいを扱う責任を胸に、誠心誠意、スピーディーな対応でお応えします。<br>
                  「あなたに任せてよかった」という最高の褒め言葉をいただけるよう、日々邁進してまいります。</p>

                <div class="column__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/intro_illust.png" alt="">
                </div>
              </section>
              <section class=" section ">
                <h2 class=" column__title">ステッチ不動産事業部の特徴</h2>
                <div class="flex">

                  <section class="feature">
                    <div class="feature__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/feature01.jpg" alt="">
                    </div>
                    <div class="feature-texts">
                      <h3 class="feature__title">特徴01</h3>
                      <p class="feature__text">実務経験が豊富なスペシャリスト集団。<br>
                        得意分野が異なる少数精鋭で対応しています。</p>
                    </div>
                  </section>

                  <section class="feature">
                    <div class="feature__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/feature02.jpg" alt="">
                    </div>
                    <div class="feature-texts">
                      <h3 class="feature__title">特徴02</h3>
                      <p class="feature__text">弁護士、税理士などと連携。<br>
                        幅広い分野において、社内外のサポート体制を整えています。</p>
                    </div>
                  </section>

                  <section class="feature">
                    <div class="feature__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/feature03.jpg" alt="">
                    </div>
                    <div class="feature-texts">
                      <h3 class="feature__title">特徴03</h3>
                      <p class="feature__text">一人のお客様に対して、スタッフ全員でサポートします。<br>
                        つねに最善のご提案ができます。</p>
                    </div>
                  </section>

                </div>
              </section>
              <section class="section ">
                <h2 class="column__title">サービス一覧</h2>
                <div class="service">

                  <section class="service01">
                    <div class="service__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/service01.png" alt="">
                    </div>
                    <h3 class="service__title">不動産売買・仲介</h3>
                    <p class="service__text">土地、建物、戸建て住宅、マンションなどの売買・仲介</p>
                  </section>

                  <section class="service02">
                    <div class="service__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/service02.png" alt="">
                    </div>
                    <h3 class="service__title">リフォーム・リノベーション</h3>
                    <p class="service__text">戸建て、マンションのリフォーム・リノベーションについてもご相談いただけます。</p>
                  </section>

                  <section class="service03">
                    <div class="service__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/service03.png" alt="">
                    </div>
                    <h3 class="service__title">資産運用・コンサルティング</h3>
                    <p class="service__text">土地、戸建て、一棟マンションなど、収益を最大化するご提案をいたします。マンションの建設、リノベーション、賃貸管理など、幅広くサポートいたします。税理士や弁護士と連携を取り、お客様の利益を第一に考えた不動産コンサルティングをご提供します。</p>
                  </section>

                  <section class="service04">
                    <div class="service__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/service04.png" alt="">
                    </div>
                    <h3 class="service__title">税務相談</h3>
                    <p class="service__text">売却時の税金対策など、提携の税理士を交えてご相談を承ります。不動産売買や、資産運用など、専門家の見解をもとに、ベストな方法を探っていきます。</p>
                  </section>
                </div>
              </section>
              <section class="section ">
                <p class="column__text">ステッチ不動産事業部のスタッフは、業界問わずさまざまな経験をしている個性豊かなキャラクターが揃っています。<br>
                  得意分野はそれぞれにあるので、力を合わせて幅広いサポートができます。</p>
                <a href="" class="primary-btn">スタッフ紹介</a>
              </section> -->

            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>