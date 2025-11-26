<?php
/*
  Template Name: souzoku inherit
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
            <span itemprop="name">相続した方へ</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>
    </div>
</section>

<section class="section section-static" id="section-static">
  <div class="section-content row w1000">
    <div class="static">

      <div class="column__thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>

      <div class="static-contents inherit">

        <section>
          <h2>相続した不動産、<b class="emphasis">そのままになっていませんか？</b></h2>

          <p>「実家を相続したけど別の場所に住んでおり放置している」「不動産を相続したけど、何をすれば良いかわからない」など、<br class="pc">相続した物件を放置している方はとても多いです。<br class="pc">不動産を放置すると様々なリスクが伴います。今回は相続した不動産の買取について、詳しくご紹介します。</p>

          <h3>このようなことで<b class="emphasis">お困りではありませんか？</b></h3>

          <ul class="flex">
            <li class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont01-01.webp" alt="相続した物件が遠方のため、維持・管理が難しい" loading="lazy" decoding="async" />
            </li>
            <li class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont01-02.webp" alt="複数の相続人が存在するため、なかなか話がまとまらない" loading="lazy" decoding="async" />
            </li>
            <li class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont01-03.webp" alt="相続した不動産の価値がどれくらいあるのか知りたい" loading="lazy" decoding="async" />
            </li>
            <li class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont01-04.webp" alt="相続した空き家・空地を放置しており固定資産税を払い続けている" loading="lazy" decoding="async" />
            </li>
            <li class="img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont01-05.webp" alt="相続した不動産を売って現金化したいがその方法がわからない" loading="lazy" decoding="async" />
            </li>
          </ul>

          <p>不動産を相続したものの、なんとなく放置していませんか？<br class="pc">ただ持っているだけでは、税金を払い続けるだけでなく、資産価値も下落してしまいますので、<br class="pc">放置せずきちんと有効活用して資産につなげていく事が重要です。</p>
        </section>

        <section>
          <h2>相続した不動産を売却する際の流れ</h2>

          <ol>
            <li>
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont02-01.webp" alt="step1" loading="lazy" decoding="async" />
              </div>
              <p>遺産分割協議をする<br>相続人の間で遺産の分け方を決める</p>
            </li>
            <li>
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont02-02.webp" alt="step2" loading="lazy" decoding="async" />
              </div>
              <p>相続登記をする<br>相続財産の名義を変更する</p>
            </li>
            <li>
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont02-03.webp" alt="step3" loading="lazy" decoding="async" />
              </div>
              <p>相続不動産の売却をする<br>不動産会社に依頼するなどして不動産を売る</p>
            </li>
            <li>
              <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont02-04.webp" alt="step4" loading="lazy" decoding="async" />
              </div>
              <p>現金を分割する<br>不動産を売却して得たお金を相続人で分割する</p>
            </li>
          </ol>
        </section>

        <section>
          <h2>不動産相続は<b class="emphasis">「株式会社ステッチ」にご相談ください</b></h2>

          <h3>不動産相続の手続き・税金対策・財産分与の<br class="sp"><b class="emphasis">ご相談は当社にお任せください。</b></h3>

          <picture>
            <source media="(min-width: 897px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont03.webp" loading="lazy" decoding="async">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inherit/cont03_sp.webp" loading="lazy" decoding="async">
          </picture>

          <p>「株式会社ステッチ」は不動産買取専門店として、相続不動産の買取に関する様々なご相談を数多くいただいております。<br>司法書士や弁護士などの専門家とのネットワークがありますので、どんなご相談でも対応が可能です。<br>不動産を相続した際は放置するのではなく、まずはお気軽にお問い合わせください。</p>
        </section>

      </div>
      <!-- /contents -->

    </div>
  </div>
</section>

<?php get_footer(); ?>