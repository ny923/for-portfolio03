<?php
/*
  Template Name: archive-property
*/
?>
<?php get_header(); ?>
<!-- 物件一覧だが実質検索ページ -->
<main class="site-main archive" id="site-main">
  <section class="section section-hero lower" id="hero">
    <div class="section-content row w1000">
      <div class="content">
        <div class="hero">

          <h1 class="hero__catch">買いたい<br><span>物件検索</span></h1>
          <?php get_template_part('template-parts/hero-numProperty'); ?>
        </div>

      </div>
    </div>
  </section>

  <section class="section section-property" id="section-property">

    <div class="section-content row w1000">
      <div class="headline">

        <!-- パンくず -->
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
              <span itemprop="name">買いたい物件検索</span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>
      </div>
      <div class="content ">

        <!-- このページ全体がsearchformになる -->
        <?php get_template_part('template-parts/searchform');
        ?>

      </div>
  </section>


  <?php get_footer(); ?>