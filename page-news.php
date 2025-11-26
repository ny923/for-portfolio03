<?php
/*
  Template Name: archive-news
*/
?>
<?php get_header(); ?>

<!-- news 一覧 -->

<section class="section section-hero lower">
  <div class="section-content">
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
            <span itemprop="name">新着情報</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>
      <!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if (function_exists('bcn_display')) {
    bcn_display();
  } ?>
</div> -->

      <h1 class="headline__title">新着情報</h1>

    </div>
</section>

<section class="section section-news" id="section-news">

  <div class="section-content row w1000">
    <div class="news">
      <ul class="news-list">


        <?php
        $paged = (int) get_query_var('paged');
        $args = array(
          'paged' => $paged,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_status' => 'publish',
          'posts_per_page' => 10,
          // 'news_type',
          'post_type' => array('property', 'post'),
        );
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="news-item">
              <a href="<?php the_permalink(); ?>">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                  <div class="flex">
                    <div class="news__thumbnail">
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
                    <div class="news-headline">
                      <h2 class="news__title" itemprop="name headline">
                        <?php if (mb_strlen($post->post_title) > 30) {
                          $title = mb_substr($post->post_title, 0, 30);
                          echo $title . "…";
                        } else {
                          echo $post->post_title;
                        } ?></h2>

                      <p class="news__date"><?php echo get_the_date("Y.m.d"); ?></p>
                    </div>
                  </div>

                  <div itemprop="articleBody" class="news-texts">
                    <p class="news__text">
                      <?php if (mb_strlen($post->post_content) > 48) {
                        $content = mb_substr(strip_tags(apply_filters('the_content', $post->post_content)), 0, 48);
                        echo $content . "…";
                      } else {
                        echo $post->post_content;
                      } ?>
                    </p>
                  </div>

                </article>
              </a>
            </li>
          <?php endwhile; ?>

        <?php else : ?>
          <p><?php _e('No posts found.'); ?></p>
        <?php endif; ?>


        <!-- ページネーション -->
        <div class="pagination">
          <?php
          if ($the_query->max_num_pages > 1) {
            echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%/',
              'current' => max(1, $paged),
              'total' => $the_query->max_num_pages
            ));
          } ?>
        </div>




        <?php wp_reset_postdata(); ?>

      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>