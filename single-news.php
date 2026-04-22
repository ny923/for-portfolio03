<?php
/*
  Template Name: single
*/
?>
<?php get_header(); ?>

<!-- news用 -->
<main class="site-main news" id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-hero lower" id="hero">
        <div class="section-content row w1000">
          <div class="content">
            <div class="hero">
              <p class="hero__catch">News<br><span>お知らせ</span></p>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-column" id="section-column">
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
                  <a itemprop="item" href="<?= site_url("news"); ?>/">
                    <span itemprop="name">お知らせ一覧</span>
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
          </div>
          <div class="content">

            <div class="column">
              <div class="column__thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>

              <!-- 追加日／更新日-->
              <p class="column__time">公開日：<time datetime="<?php the_time(); ?>"><?php the_time('Y/m/d'); ?></time>　更新日：<time datetime="<?php the_modified_date() ?>"><?php the_modified_date('Y/m/d') ?></time></p>

              <h1 class="column__title"><?php the_title(); ?></h1>
              <p class="category"><?php
                                  $categories = get_the_category();
                                  if (! empty($categories)) {
                                    echo esc_html(implode(' ', wp_list_pluck($categories, 'name')));
                                  }
                                  ?></p>
              <div class="column-contents">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>