<?php
/*
  Template Name: about
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content row nopad w1000">
    <div class="headline">

      <div class="breadcrumbs">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url(); ?>/">
              <span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <span itemprop="name">不動産買取について</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>
      <p class="headline__lead">不動産の「買取」と「仲介」の<br class="sp">メリット・デメリットとは</p>

    </div>
</section>


<section class="section section-static" id="section-static">
  <div class="section-content row w1000">
    <div class="static">

      <div class="column__thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>

      <div class="static-contents about">

        <p class="lead">不動産を売却をする方法として、主に「買取」と「仲介」の二つの方法があります。<br>それぞれ特徴やメリット・デメリットがあり、売主様のご都合やご要望によって選択することが可能です。<br>不動産買取専門店である弊社では、お客様のご要望に合わせた幅広いご提案をしております。</p>

        <section>
          <h2>不動産買取とは？</h2>

          <p>不動産買取とは、不動産会社が買主となり売主様から直接物件を買取る仕組みをいいます。<br>「不動産を早く売却したい」「近所に知られず売却したい」「売却後の契約不適合責任を負いたくない」<br>といったようなお悩みを持つ方にお勧めな方法です。</p>
        </section>

        <section>
          <h2>不動産買取と仲介の違い</h2>
          <p>買取と仲介はどちらも「所有している不動産を売る」という点では同じですが、様々なメリット・デメリットがあります。</p>

          <ul class="flex">
            <li class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/cont02-01.webp" alt="買取の場合" loading="lazy" decoding="async" />
            </li>
            <li class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/cont02-02.webp" alt="仲介の場合" loading="lazy" decoding="async" />
            </li>
          </ul>

          <table>
            <tr>
              <th>&nbsp;</th>
              <th>
                <h3>買取</h3>
              </th>
              <th>
                <h3>仲介</h3>
              </th>
            </tr>
            <tr>
              <th>価格</th>
              <td>「株式会社ステッチは現金買取専門店」<br>
                だから通常の買取相場よりも高値傾向</td>
              <td>査定価格と売却価格が異なる傾向</td>
            </tr>
            <tr>
              <th>仲介手数料</th>
              <td>不要</td>
              <td>価格の3％+6万(別税)</td>
            </tr>
            <tr>
              <th>期間</th>
              <td>最短10日で現金決済が可能</td>
              <td>不明(一般的に半年～1年程度)</td>
            </tr>
            <tr>
              <th>瑕疵担保責任</th>
              <td>なし</td>
              <td>あり(引き渡し後白紙解約あり)</td>
            </tr>
            <tr>
              <th>事前のリフォーム</th>
              <td>不要</td>
              <td>状況に応じて必要</td>
            </tr>
            <tr>
              <th>営業電話</th>
              <td>なし</td>
              <td>複数から殺到</td>
            </tr>
            <tr>
              <th>内覧対応</th>
              <td>不動産会社による1回のみ</td>
              <td>買主様が決まるまで対応</td>
            </tr>
            <tr>
              <th>プライバシー</th>
              <td>誰にも知られずに売却が可能</td>
              <td>広告などにより周囲の方に知られる</td>
            </tr>
          </table>
        </section>


        <section>
          <h2>不動産買取のメリット</h2>

          <div class="flex">

            <div class="purchase">
              <h3>買取</h3>

              <section>
                <div class="img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/merit.webp" alt="メリット" loading="lazy" decoding="async" />
                </div>

                <ul>
                  <li>買い取り業者が直接買い取りの為、<span class="emphasis">仲介手数料が無料</span></li>
                  <li>売却までのスピードが早い</li>
                  <li>瑕疵担保責任が免責となる<small>［2020年以降、契約不適合責任］</small></li>
                  <li>近隣にばれずに売却しやすい</li>
                  <li>資金計画・スケジュールが組みやすい</li>
                </ul>
              </section>

              <section>
                <div class="img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/demerit.webp" alt="デメリット" loading="lazy" decoding="async" />
                </div>

                <ul>
                  <li>仲介より売却価格が低くなりやすい</li>
                  <li>物件により買取できないケースがある</li>
                </ul>
              </section>

            </div>

            <div class="mediation">
              <h3>仲介</h3>

              <section>
                <div class="img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/merit.webp" alt="メリット" loading="lazy" decoding="async" />
                </div>
                <ul>
                  <li>買取より高値で売れる可能性が高い</li>
                </ul>
              </section>

              <section>
                <div class="img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/demerit.webp" alt="デメリット" loading="lazy" decoding="async" />
                </div>
                <ul>
                  <li>仲介手数料がかかる</li>
                  <li>売出価格で売れないケースがある</li>
                  <li>瑕疵担責任を負う</li>
                  <li>売却に時間がかかる</li>
                  <li>内覧の手間がかかる</li>
                </ul>
              </section>
            </div>
          </div>
        </section>

        <section>
          <h2>「株式会社ステッチ」は不動産買取の専門店です！<br>買取専門店ならではの強みがたくさん！</h2>

          <div class="flex">
            <div>
              <p>「株式会社ステッチ」は買取専門店として、お陰様でたくさんのお客様に選ばれています。</p>
              <p>その理由は、“買取に強い”から。買取専門店の強みを生かすことで即断・即決でのスピード買取が可能であり、最短2日での現金化にも対応できます。</p>
              <p>また、通常は相場よりもやや安い価格で売却することになる「買取」ですが、当社では、相場や競合他社で提示される金額より安く買取することはほとんどありませんので、まずはお気軽にご相談ください。</p>
            </div>

            <div class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/cont04.webp" alt="お気軽にご相談ください" loading="lazy" decoding="async" />
            </div>
          </div>

        </section>


      </div>
      <!-- /contents -->

    </div>
  </div>
</section>

<?php get_footer(); ?>