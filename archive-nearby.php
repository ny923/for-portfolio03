<?php
/*
  Template Name: archive-property
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">

      <!-- パンくず -->
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
            <span itemprop="name">周辺施設一覧</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div> -->

      <h1 class="headline__title">周辺施設一覧</h1>

    </div>
</section>

<section class="section section-property" id="section-property">

  <div class="section-content row w1000">
    <div class="property">
      <ul class="property-list">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'nearby',
          'paged' => $paged,
          'posts_per_page' => 8,
        );
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="property-item">

              <a href="<?php the_permalink(); ?>">
                <article class="property-item__inner" id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                  <div class="flex">
                    <div class="property__thumbnail">
                      <?php
                      if (has_post_thumbnail()) {
                        $post_title = get_the_title();
                        the_post_thumbnail('custom', array('alt' => mb_substr($post->post_title, 0, 20),));
                      } else {
                      ?>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/common/no-image.webp" alt="no image" loading="lazy" decoding="async" />
                      <?php
                      }
                      ?>
                    </div>

                    <div class="property-overview">
                      <!-- カテゴリ -->
                      <ul class="property-categories">
                        <?php
                        $terms = wp_get_post_terms(get_the_ID(), 'district');
                        foreach ($terms as $term):
                          $term_name = $term->name;
                          $term_url = get_term_link($term->term_id);
                        ?>
                          <li class="property__category">
                            <!-- <a href="<?php echo esc_url($term_url); ?>"> -->
                            <?php echo esc_html($term_name); ?>
                            <!-- </a> -->
                          </li>
                        <?php endforeach; ?>
                      </ul>

                      <h2 class="property__title" itemprop="name headline">
                        <?php if (mb_strlen($post->post_title) > 25) {
                          $title = mb_substr($post->post_title, 0, 25);
                          echo $title . "…";
                        } else {
                          echo $post->post_title;
                        } ?></h2>
                      <p class="property__text">所在地：<?php echo SCF::get('address'); ?></p>

                    </div>
                  </div>

                </article>
              </a>

            </li>
          <?php endwhile; ?>
          <!-- ページネーション -->
          <?php if ($the_query->max_num_pages > 1) : ?>
            <div class="pagination">
              <?php
              echo paginate_links(array(
                'total' => $the_query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'format' => '?paged=%#%',
                'prev_text' => __('« Prev'),
                'next_text' => __('Next »'),
              ));
              ?>
            </div>
          <?php endif; ?>
        <?php else : ?>
          <p><?php _e('No posts found.'); ?></p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

      </ul>

    </div>
  </div>
</section>


<?php get_footer(); ?>