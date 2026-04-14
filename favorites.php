<?php
/*
  Template Name: favorites
*/
?>
<?php get_header(); ?>

<main class="site-main archive" id="site-main">

  <section class="section section-hero lower" id="hero">
    <div class="section-content">
      <div class="content">
        <div class="hero">

          <h1 class="hero__catch"><?php the_title(); ?></h1>
        </div>

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
              <span itemprop="name"><?php the_title(); ?></span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>

        <!-- <h1 class="headline__title"><?php the_title(); ?></h1> -->

      </div>
      <div class="content">
        <div class="property">

          <a href="javascript:void(0);" class="primary-btn" id="send-to-contact">チェックした物件をまとめてお問い合わせ</a>

          <ul class="property-list">
            <?php
            $favorites = get_user_favorites();
            if (!empty($favorites)) {
              $args = array(
                'post__in' => $favorites,
                'post_type' => 'property',
                'posts_per_page' => 9,
              );
              $query = new WP_Query($args);
            ?>
              <?php if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post(); ?>

                  <?php $categories = get_the_category();
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

                    <div class="flex">
                      <input type="checkbox" class="post-checker" value="<?php echo get_post_meta(get_the_ID(), 'property_name', true); ?>">
                      <label>「<?php echo get_post_meta(get_the_ID(), 'property_name', true); ?>」について問い合わせる</label>
                    </div>

                    <!-- swiper-slide-item -->
                    <a href="<?php the_permalink(); ?><?php echo '?propertyName=' . esc_attr(get_the_title()); ?>" class="">

                      <div class="property__img">
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
                      <!-- １ヶ月以内ならnew -->
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
            <?php endwhile;
                wp_reset_postdata();
              else :
                echo '<p>お気に入りの物件が見つかりませんでした。</p>';
              endif;
            } else {
              echo '<p>お気に入りに登録されている物件はありません。</p>';
            } ?>
          </ul>
          <!-- ページネーション -->
          <?php if (isset($query) && is_object($query) && $query->max_num_pages > 1): ?>
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

    </div>
  </section>

  <script>
    document.getElementById('send-to-contact').addEventListener('click', function() {
      const selectedTitles = [];
      const checkboxes = document.querySelectorAll('.post-checker:checked');

      checkboxes.forEach((checkbox) => {
        selectedTitles.push(checkbox.value);
      });

      if (selectedTitles.length > 0) {
        // タイトルをカンマ区切りにしてURLパラメータにする
        const params = encodeURIComponent(selectedTitles.join('、'));
        // 問い合わせページへ遷移（例: /contact/?items=記事A、記事B）
        window.location.href = `/contact/?items=${params}`;
      } else {
        alert('物件を選択してください');
      }
    });
  </script>

  <?php get_footer(); ?>