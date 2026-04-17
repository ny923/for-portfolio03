<?php
/*
  Template Name: 汎用archive
*/
?>
<?php get_header(); ?>

<main class="site-main archive" id="site-main">

  <section class="section section-column" id="section-column">

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
              <span itemprop="name">ステッチコラム</span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- swiper -->
  <section class="section section-swiper" id="swiper">
    <div class="section-content row w1000">
      <div class="content">
        <div class="swiper-buttons">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="column swiper">

          <div class="swiper-wrapper">
            <?php
            $args = array(
              'posts_per_page' => 9, // 表示する投稿数
              'post_type' => array('post'), // 取得する投稿タイプのスラッグ
              'orderby' => 'date', //日付で並び替え
              'order' => 'DESC' // 降順DESC or 昇順ASC
            );
            $my_posts = get_posts($args);
            ?>
            <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?>" class="swiper-slide-item">
                  <div class="column__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php echo get_the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image" decoding="async">
                    <?php endif; ?>
                  </div>
                  <div class="column-texts">
                    <p class="classify">おすすめコラム</p>
                    <time class="column__time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <h3 class="column__title"><?php echo get_the_title(); ?></h3>
                    <p class="category"><?php
                                        $categories = get_the_category();
                                        if (! empty($categories)) {
                                          echo esc_html(implode(' ', wp_list_pluck($categories, 'name')));
                                        }
                                        ?></p>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-column" id="section-column">
    <div class="section-content row w1000">

      <div class="headline">
        <h1 class="headline__title">ステッチコラム</h1>
      </div>
      <div class="content">
        <div class="column">

          <ul class="column-list">

            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'paged' => $paged,
              'post_type' => 'post', //column
              'posts_per_page' => 12,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); ?>

                <li class="column-item">
                  <a href="<?php the_permalink(); ?>" class="">
                    <div class="column__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php echo get_the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image" decoding="async">
                      <?php endif; ?>
                    </div>

                    <div class="column-texts">
                      <time class="column__time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
                      <h3 class="column__title"><?php echo get_the_title(); ?></h3>
                      <p class="category"><?php
                                          $categories = get_the_category();
                                          if (! empty($categories)) {
                                            echo esc_html(implode(' ', wp_list_pluck($categories, 'name')));
                                          }
                                          ?></p>
                    </div>
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