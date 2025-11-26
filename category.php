<?php
/*
  Template Name:category
*/
?>
<?php get_header(); ?>

<!-- コラム用カテゴリ別一覧 -->

<?php
$category = get_queried_object(); // 現在のカテゴリオブジェクトを取得
$category_id = $category->term_id; // カテゴリ ID を取得
?>

<section class="section section-hero lower">
  <div class="section-content row w1000">
    <div class="headline">

      <div class="breadcrumbs">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url(); ?>">
              <span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <span itemprop="name">カテゴリ「<?php single_cat_title(); ?>」での一覧</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>
      <h1 class="headline__title">カテゴリ「<?php single_cat_title(); ?>」での一覧</h1>
      <!-- <p class="headline__lead"><?php echo $wp_query->found_posts; ?>件</p> -->
    </div>
</section>

<?php
$args = array(
  'post_type' => 'post', //post
  'paged' => $paged,
  'posts_per_page' => 1,
  'cat' => $category_id, // カテゴリ ID で絞り込み
);
$the_query = new WP_Query($args);
?>

<!-- コラム用のカテゴリの場合 -->
<section class="section section-column" id="section-column">

  <div class="section-content row w1000">
    <div class="column">
      <ul class="column-list">

        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="column-item">

              <a href="<?php the_permalink(); ?>">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                  <div class="flex">
                    <div class="column__thumbnail">
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

                    <div class="column-headline">
                      <h2 class="column__title" itemprop="name headline">
                        <?php if (mb_strlen($post->post_title) > 25) {
                          $title = mb_substr($post->post_title, 0, 25);
                          echo $title . "…";
                        } else {
                          echo $post->post_title;
                        } ?></h2>

                      <ul class="column-categories">
                        <?php
                        $cats = get_the_category();
                        foreach ($cats as $cat):
                          $cat_name = $cat->name;
                          $cat_url = get_category_link($cat->term_id);
                        ?>
                          <li class="column__category">
                            <?php echo $cat_name; ?>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>

                  <div itemprop="articleBody" class="column-texts">
                    <p class="column__text">
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
          <?php the_posts_pagination(); // ページネーション
          ?>
        <?php else : ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>