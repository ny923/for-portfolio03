<?php
/*
  Template Name:category
*/
?>
<?php get_header(); ?>

<main class="site-main archive" id="site-main">

  <?php
  $current_term = get_queried_object();
  ?>

  <section class="section section-hero lower" id="hero">
    <div class="section-content">
      <div class="content">
        <div class="hero">
          <h1 class="hero__catch">「<?php echo esc_html($current_term->name); ?>」の物件一覧</h1>
        </div>
        <?php get_template_part('template-parts/hero-numProperty'); ?>
      </div>
    </div>
  </section>

  <section class="section section-property" id="section-property">
    <!-- w960 -->
    <div class="section-content row ">
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

              <span itemprop="name">「<?php echo esc_html($current_term->name); ?>」の物件一覧</span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>
        <!-- <p class="headline__lead"><?php echo $wp_query->found_posts; ?>件</p> -->
      </div>

      <div class="content ">
        <div class="property">
          <?php if (have_posts()) : ?>

            <!-- 物件一覧用ソート -->
            <?php get_template_part('template-parts/sort');
            ?>

            <ul class="property-list">
              <?php while (have_posts()) : the_post(); ?>

                <?php
                // --- ランダム人間の設定 ---
                // 1〜8は画像あり、9〜12は「なし」にする（「なし」の確率を調整できます）
                $random_num = rand(1, 20);
                $human_class = '';

                if ($random_num <= 8) {
                  // 2桁揃え（human01, human02...）にするなら sprintf を使うと便利です
                  $human_class = 'is-human-' . sprintf('%02d', $random_num);
                } else {
                  $human_class = 'is-human-none';
                }

                $categories = get_the_category();
                $type_classes = array();

                if (!empty($categories)) {
                  foreach ($categories as $cat) {
                    // カテゴリー名（またはスラッグ）で判定
                    $cat_name = $cat->name;
                    if ($cat_name === '新築戸建') {
                      $type_classes[] = 'new-house';
                    } elseif ($cat_name === '中古戸建') {
                      $type_classes[] = 'used-house';
                    } elseif ($cat_name === '土地') {
                      $type_classes[] = 'land';
                    } elseif ($cat_name === 'マンション') {
                      $type_classes[] = 'mansion';
                    }
                  }
                }

                // 2. 配列を半角スペースで区切った文字列に変換
                $type_class_attr = implode(' ', array_unique($type_classes));
                ?>

                <li class="property-item" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                  <a href="<?php the_permalink(); ?><?php echo '?propertyName=' . esc_attr(get_the_title()); ?>" class="swiper-slide-item">

                    <div class="property__img">

                      <!-- 限定のみに鍵アイコン -->
                      <?php if (in_category(10)) : ?>
                        <div class="icon-only">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-only.png" alt="members only">
                        </div>
                      <?php endif; ?>

                      <?php if (has_post_thumbnail()) : ?>
                        <?php echo get_the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image" decoding="async">
                      <?php endif; ?>
                    </div>

                    <?php
                    $post_time = get_the_time('U');
                    $one_month_ago = strtotime('-1 month');
                    if ($post_time > $one_month_ago) {
                      echo '<p class="new">NEW</p>';
                    }
                    ?>
                    <?php echo do_shortcode('[favorite_button]'); ?>

                    <div class="property-texts">
                      <p class="classify <?php echo esc_attr($type_class_attr); ?>"><?php echo get_post_meta(get_the_ID(), 'property_type', true); ?></p>
                      <p class="name"><?php echo get_post_meta(get_the_ID(), 'property_name', true); ?></p>

                      <table class="property-detail">
                        <tbody>
                          <tr>
                            <th class=" property__title">住所</th>
                            <td class="property__detail"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></td>
                          </tr>
                          <tr>
                            <th class="property__title">価格</th>
                            <td class="property__detail">
                              <p class=" price">
                                <?php
                                $price = get_post_meta(get_the_ID(), 'price', true);
                                if (!empty($price) && is_numeric($price)) {
                                  if ($price >= 10000) {
                                    $man_price = $price / 10000;
                                    echo number_format($man_price) . '<span>万</span>';
                                  } else {
                                    echo number_format($price);
                                  }
                                }
                                ?><span>円</span></p>
                            </td>
                          </tr>
                          <tr>
                            <th class="property__title">間取</th>
                            <td class="property__detail"><?php echo get_post_meta(get_the_ID(), 'floor', true); ?></td>
                          </tr>
                          <tr>
                            <th class="property__title">築年</th>
                            <td class="property__detail"><?php echo get_post_meta(get_the_ID(), 'property_age', true); ?></td>
                          </tr>
                        </tbody>
                      </table>

                      <div class="flex">
                        <!-- 「中庭」…等は一旦保留 -->
                        <ul>
                          <li></li>
                        </ul>
                        <?php echo do_shortcode('[favorite_button]'); ?>
                      </div>

                    </div>
                  </a>
                </li>

              <?php endwhile; ?>
            </ul>

            <!-- ページネーション -->
            <div class="pagination">
              <?php
              echo paginate_links(array(
                'prev_text' => '＜',
                'next_text' => '＞',
              ));
              ?>
            </div>
          <?php else : ?>
            <p>現在、該当する物件はございません。</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
  </section>

  <?php get_footer(); ?>