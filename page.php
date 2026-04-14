<?php
/*
  Template Name: page
*/
?>
<?php get_header(); ?>

<!-- 固定ページ、ログイン等memberページ -->

<main class="site-main" id="site-main">

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