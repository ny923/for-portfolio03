<?php
/*
  Template Name: single-news
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="section section-hero lower">
      <div class="section-content row w1000">
        <div class="headline">

          <div class="breadcrumbs">
            <ul itemscope itemtype="http://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?= site_url(); ?>/">
                  <span itemprop="name">HOME</span></a>
                <meta itemprop="position" content="1" />
              </li>
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?= site_url("news_type"); ?>/">
                  <span itemprop="name">新着情報</span>
                </a>
                <meta itemprop="position" content="2" />
              </li>
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">

                <span itemprop="name"><?php echo get_the_title(); ?></span>

                <meta itemprop="position" content="3" />
              </li>
            </ul>
          </div>
          <!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
</div> -->
          <div class="news__category"><?php the_category(); ?></div>

          <h1 class="headline__title"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section section-column" id="section-column">
      <div class="section-content row w1000">
        <div class="news">

          <p class="news__date"><time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
          <p class="news__date"><time datetime="<?php the_modified_date('Y/m/d') ?>"><?php the_modified_date('Y/m/d') ?></time></p>


          <div class="news__thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>


          <div class="news-contents">
            <?php the_content(); ?>
          </div>

      <?php endwhile;
  endif; ?>

        </div>
      </div>
    </section>

    <?php get_footer(); ?>