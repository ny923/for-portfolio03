<?php
/*
  Template Name:category
*/
?>
<?php get_header(); ?>

<!-- 物件用カテゴリ別一覧 -->

<?php
$category = get_queried_object(); // 現在のカテゴリオブジェクトを取得
$category_id = $category->term_id; // カテゴリ ID を取得
$taxonomy = $category->taxonomy; // タクソノミー名を動的に取得
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
  'post_type' => 'property',
  'paged' => get_query_var('paged', 1), // ページングする場合には記載
  'posts_per_page' => 6,
  'order' => 'DESC', // 降順
  'orderby' => 'date', // 日付でソート
  'tax_query' => array(
    array(
      'taxonomy' => $taxonomy, // 動的に取得したタクソノミー名を使用
      'field' => 'term_id', // 'term_id' を指定して ID を使用
      'terms' => $category_id, // 絞り込むカテゴリ ID またはスラッグ
    ),
  ),
);

$the_query = new WP_Query($args);
?>

<!-- 物件用のカテゴリの場合 -->
<section class="section section-property" id="section-property">

  <div class="section-content row w1000">
    <div class="property">
      <ul class="property-list">

        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="property-item">
              <div class="property-check">
                <p class="property__checkText">問い合わせ・気になる物件に</p>
              </div>

              <div class="category-wrap">

                <!-- カテゴリ -->
                <ul class="">
                  <?php
                  $cats = get_the_category();
                  foreach ($cats as $cat):
                    $cat_name = $cat->name;
                    $cat_url = get_category_link($cat->term_id);

                    // 親カテゴリIDが58のカテゴリを除外
                    if ($cat->parent == 58) {
                      continue;
                    }
                  ?>
                    <li class="property__category">
                      <a href="<?php echo esc_url($cat_url); ?>">
                        <?php echo esc_html($cat_name); ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>


                <div class="favorite_button">
                  <!-- plugin -->
                  <?php echo get_favorites_button(get_the_ID()); ?>
                </div>
              </div>

              <a href="<?php the_permalink(); ?>">
                <article class="property-item__inner" id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                  <!-- 物件名 -->
                  <h2 class="property__title" itemprop="name headline">
                    <?php if (mb_strlen($post->post_title) > 25) {
                      $title = mb_substr($post->post_title, 0, 25);
                      echo $title . "…";
                    } else {
                      echo $post->post_title;
                    } ?></h2>

                  <!-- 何か情報 戸建て…など -->
                  <p class="property__text"><?php echo SCF::get('catch'); ?></p>

                  <!-- <div class="flex"> -->
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
                    <div class="flex evenly">
                      <!-- 金額 -->
                      <div class="amount-wrap">
                        <p class="amount__note">リフォーム費用を含む</p>
                        <p class="property__amount">
                          <?php $num = get_post_meta($post->ID, 'amount', true); ?>
                          <?php if (empty($num)): ?>
                            <span class="comming-soon">近日公開</span>
                          <?php else: ?>
                            <span><?php echo number_format($num); ?></span>万円(税込)
                          <?php endif; ?>

                        </p>
                      </div>

                      <!-- ローン -->
                      <div class="amount-wrap loan">
                        <p class="amount__note">月々の支払い目安額</p>
                        <p class="property__amount">
                          <?php $num = get_post_meta($post->ID, 'loan', true); ?>
                          <?php if (empty($num)): ?>
                            <span> - </span>
                          <?php else: ?>
                            <span><?php echo number_format($num); ?></span>円(税込)／月
                          <?php endif; ?>
                        </p>
                      </div>
                    </div>
                    <!-- 間取、土地、建物 -->
                    <p class="property__text">間取：<?php echo SCF::get('floor-plan'); ?><br>
                      土地：<?php echo SCF::get('land-area'); ?><br>
                      建物：<?php echo SCF::get('building-area'); ?></p>
                  </div>
                  <!-- </div> -->

                  <!-- 会員のみ表示 -->
                  <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo home_url() . '/contact/?propertyName=' . esc_attr(get_the_title()); ?>" class="solid-button">見学予約・お問い合わせ(無料)</a>
                  <?php else: ?>
                    <div class="member-only">
                      <p class="property__point"><?php echo SCF::get('point'); ?></p>
                      <a href="<?php echo home_url() . '/contact/?propertyName=' . esc_attr(get_the_title()); ?>" class="solid-button">見学予約・お問い合わせ(無料)</a>
                      <p class="property-subscribe">会員登録されました仲介業者様は<br>
                        <a href="/regist-profile/">こちらからログイン</a>
                      </p>
                    </div>
                  <?php endif; ?>

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
          <p>申し訳ございませんがまだ該当の物件がありません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </ul>
    </div>
  </div>
</section>




<?php get_footer(); ?>