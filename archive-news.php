<?php
/*
  Template Name: 汎用archive
*/
?>
<?php get_header(); ?>

<main class="site-main archive" id="site-main">

  <section class="section section-hero lower" id="hero">
    <div class="section-content">
      <div class="content">
        <div class="hero">
          <h1 class="hero__catch">News<br><span>お知らせ一覧</span></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-column" id="section-column">
    <div class="section-content row w1100">
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
              <span itemprop="name">お知らせ</span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>

      </div>
      <div class="content">
        <div class="news">

          <ul class="news-list">

            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'paged' => $paged,
              'post_type' => 'news',
              'posts_per_page' => 9,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); ?>

                <li class="news-item">
                  <a href="<?php the_permalink(); ?>" class="">
                    <!-- <div class="news-texts"> -->
                    <time class="news__time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <h3 class="news__title"><?php echo get_the_title(); ?></h3>
                    <!-- </div> -->
                  </a>
                </li>

            <?php endwhile;
              wp_reset_postdata();
            endif; ?>

          </ul>

          <!-- ページネーション -->
          <?php if ($query->max_num_pages > 1) : ?>
            <div class="pagination">
              <?php
              echo paginate_links(array(
                'total' => $query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'prev_text' => __('＜'),
                'next_text' => __('＞'),
              ));
              ?>
            </div>
          <?php endif; ?>

        </div>

      </div>
  </section>


  <?php get_footer(); ?>