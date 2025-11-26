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

            <span itemprop="name">物件一覧</span>

            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div> -->

      <h1 class="headline__title">物件一覧</h1>

    </div>
</section>

<section class="section section-property" id="section-property">

  <div class="section-content row w1000">
    <div class="property">
      <ul class="property-list">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'property',
          'paged' => $paged,
          'posts_per_page' => 6,
        );
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="property-item">
              <div class="property-check">
                <p class="property__checkText">問い合わせ・気になる物件に</p>
              </div>

              <div class="category-wrap">


                <!-- 物件用カテゴリ -->
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

                  <!-- <div class="flex column"> -->
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

                        <?php $value = get_post_meta($post->ID, 'amount-note', true); ?>
                        <?php if (empty($value)): ?>
                        <?php else: ?>
                          <p class="amount__note"><?php echo SCF::get('amount-note'); ?></p>
                        <?php endif; ?>

                        <p class="property__amount"><span>
                            <?php $num = get_post_meta($post->ID, 'amount', true); ?>
                            <?php if (empty($num)): ?>
                              <span class="comming-soon">近日公開</span>
                            <?php else: ?>
                              <?php echo number_format($num); ?>
                            <?php endif; ?>
                          </span>万円(税込)</p>
                      </div>

                      <!-- ローン -->
                      <div class="amount-wrap loan">
                        <p class="amount__note">月々の支払い目安額</p>
                        <p class="property__amount"><span>
                            <?php $num = get_post_meta($post->ID, 'loan', true); ?>
                            <?php if (empty($num)): ?>
                              -
                            <?php else: ?>
                              <?php echo number_format($num); ?>
                            <?php endif; ?>
                          </span>円(税込)／月</p>
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
          <!-- <?php _e('No posts found.'); ?> -->
          <p>申し訳ございませんが該当の物件がまだありません。</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

      </ul>

    </div>
  </div>
</section>


<?php get_footer(); ?>