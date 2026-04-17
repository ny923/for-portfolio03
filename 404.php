<?php
/*
  Template Name: not found 404
*/
?>
<?php get_header(); ?>

<main class="site-main" id="site-main">

  <section class="section section-hero lower" id="hero">
    <div class="section-content row w1000">
      <div class="content">
        <div class="hero">
          <h1 class="hero__catch"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-notFound" id="section-notFound">
    <div class="section-content row w1000">
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
        <section class="column">
          <h2 class="column__title">お探しのページは見つかりませんでした。</h2>
          <p class="column__text">誠に恐れ入りますが、お客様がアクセスされたページは、削除されたかURLが変更された可能性がございます。</p>
          <p class="column__text">お手数ですが、下記のボタンよりトップページへ戻るか、物件検索・コラム一覧よりお探しください。</p>

          <a class="text__link02" href="<?= site_url(); ?>">トップページへ戻る</a>

          <a class="text__link02" href="<?= site_url(); ?>/property/">物件一覧を見る</a>

          <a class="text__link02" href="<?= site_url(); ?>/column/">コラム一覧を見る</a>
        </section>
      </div>

    </div>
  </section>

  <?php get_footer(); ?>