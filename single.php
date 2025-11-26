<?php
/*
  Template Name: single
*/
?>
<?php get_header(); ?>

<!-- コラム詳細用 -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                <a itemprop="item" href="<?= site_url("column"); ?>/">
                  <span itemprop="name">不動産売却コラム</span>
                </a>
                <meta itemprop="position" content="2" />
              </li>
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <span itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="3" />
              </li>
            </ol>
          </div>

          <!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
</div> -->
          <div class="column__category"><?php the_category(); ?></div>
          <h1 class="headline__title"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section section-column" id="section-column">
      <div class="section-content row w1000">
        <div class="column">

          <!-- 追加日／更新日
          <p><time datetime=""><?php the_time('Y/m/d'); ?></time></p>
          <p><time datetime=""><?php the_modified_date('Y/m/d') ?></time></p>-->

          <div class="column__thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="column-contents">
            <?php the_content(); ?>

            <div class="common-texts">
              <p class="common__text">不動産の買取に関して、弊社はかつ迅速なプロセスを無料で提供しています。査定から始まり、お客様のご要望に基づいた適切な価格での買取を実現します。専門の査定士が物件を詳細に調査、市場動向や土地の特性を考慮した上で最適な価格を提案いたします。</p>
              <p class="common__text">また、手続き全般においてスムーズかつ透明性のある対応を心がけており、信頼性の高いサービスを提供しています。</p>
              <p class="common__text">不動産の売却に関するご質問やご質問がございましたら、いつでもお気軽にご相談ください。</p>
            </div>

          </div>

      <?php endwhile;
  endif; ?>

        </div>
      </div>
    </section>

    <?php get_footer(); ?>