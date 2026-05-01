<?php
/*
  Template Name: single-property
*/
?>


<?php get_header(); ?>

<main class="site-main" id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-property" id="section-property">
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
                  <a itemprop="item" href="<?= site_url("property"); ?>/">
                    <span itemprop="name">買いたい物件検索</span>
                  </a>
                  <meta itemprop="position" content="2" />
                </li>
                <li itemprop="itemListElement" itemscope
                  itemtype="http://schema.org/ListItem">
                  <span itemprop="name"><?php echo get_post_meta(get_the_ID(), 'property_name', true); ?></span>
                  <meta itemprop="position" content="3" />
                </li>
              </ol>
            </div>

            <div class="flex">

              <?php
              // 1. 表示用のラベル（中古マン、売地など）を取得
              $property_label = get_post_meta(get_the_ID(), 'property_type', true);

              // 2. クラス名として使うカテゴリーのスラッグを取得
              $categories = get_the_category();
              $added_class = '';

              if ($categories) {
                foreach ($categories as $cat) {
                  // プラグインで設定している4つのスラッグのいずれかを持っていれば、それをクラスにする
                  $target_slugs = array('new-house', 'used-house', 'land', 'mansion');
                  if (in_array($cat->slug, $target_slugs)) {
                    $added_class = $cat->slug;
                    break; // 該当するものが見つかったらループを抜ける
                  }
                }
              }
              ?>
              <p class="headline__category <?php echo esc_attr($added_class); ?>">
                <?php echo esc_html($property_label); ?>
              </p>
              <?php get_template_part('template-parts/hero-numProperty'); ?>
            </div>

            <div class="headline__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php echo get_the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image" decoding="async">
              <?php endif; ?>
            </div>

          </div>
          <div class="content">
            <div class="property">

              <div class="flex">
                <div class="headline-texts">
                  <h1 class="headline__title"><?php echo get_post_meta(get_the_ID(), 'property_name', true); ?></h1>

                  <p class="headline__price">
                    <?php
                    $price = get_post_meta(get_the_ID(), 'price', true);
                    if (!empty($price) && is_numeric($price)) {
                      if ($price >= 10000) {
                        // 1万以上の場合、1万で割って「万」をつける
                        $man_price = $price / 10000;
                        echo number_format($man_price) . '<span>万';
                      } else {
                        // 1万未満の場合はそのまま表示
                        echo number_format($price);
                      }
                    }
                    ?>円</span>
                  </p>

                </div>
                <?php echo do_shortcode('[favorite_button]'); ?>
              </div>



              <!-- 種別で出し分け -->
              <?php
              // 現在の投稿に付いているカテゴリーのスラッグを判定
              if (has_category('new-house')) {
                // 「新築戸建」グループの場合
                get_template_part('template-parts/overview', 'new');
              } elseif (has_category('used-house')) {
                // 「中古戸建」グループの場合
                get_template_part('template-parts/overview', 'used');
              } elseif (has_category('land')) {
                // 「土地」グループの場合
                get_template_part('template-parts/overview', 'land');
              } elseif (has_category('mansion')) {
                // 「マンション」グループ（中古マン、新築マン等を含む）の場合
                get_template_part('template-parts/overview', 'mansion');
              } else {
                // それ以外（デフォルト）
                get_template_part('template-parts/overview', 'default');
              }
              ?>

              <div class="images-wrap">
                <div class="images">
                  <div class="swiper swiper-main">
                    <div class="swiper-wrapper">
                      <?php
                      $gallery = get_post_meta(get_the_ID(), '_property_images', true);
                      if (!empty($gallery) && is_array($gallery)) {
                        foreach ($gallery as $item) {
                          $image_id = is_array($item) ? $item['id'] : $item;
                          $img_url  = wp_get_attachment_url($image_id);
                          $comment  = !empty($item['comment']) ? esc_html($item['comment']) : '';

                          if ($img_url) {
                            echo '<div class="swiper-slide">';
                            echo '<img src="' . esc_url($img_url) . '" alt="' . $comment . '">';
                            if ($comment) {
                              echo '<p class="swiper__text">' . $comment . '</p>';
                            }
                            echo '</div>';
                          }
                        }
                      }
                      ?>
                    </div>
                    <div class="swiper-buttons">
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                    </div>
                  </div>
                  <div class="swiper swiper-thumbnail">
                    <div class="swiper-wrapper">
                      <?php
                      if (!empty($gallery) && is_array($gallery)) {
                        foreach ($gallery as $item) {
                          // IDを抽出（配列なら id キー、そうでなければそのまま ID とみなす）
                          $image_id = is_array($item) ? $item['id'] : $item;

                          if ($image_id) {
                            echo '<div class="swiper-slide">';
                            // wp_get_attachment_image の第1引数は ID である必要があります
                            echo wp_get_attachment_image($image_id, 'thumbnail');
                            echo '</div>';
                          }
                        }
                      }
                      ?>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                  </div>
                </div>

                <div class="madori js-modal-wrapper">
                  <div class="js-modal-open">
                    <?php
                    $madori_id = get_post_meta(get_the_ID(), 'madori', true);
                    if ($madori_id) {
                      echo wp_get_attachment_image($madori_id, 'full');
                    }
                    ?>
                  </div>

                  <!-- modal中身 -->
                  <div class="modal js-modal">
                    <div class="modal-container">
                      <?php
                      $madori_id = get_post_meta(get_the_ID(), 'madori', true);
                      if ($madori_id) {
                        echo wp_get_attachment_image($madori_id, 'full');
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>

              <!-- カテゴリ別にtable出し分け -->
              <?php
              // 現在の投稿に付いているカテゴリーのスラッグを判定
              if (has_category('new-house')) {
                // 「新築戸建」グループの場合
                get_template_part('template-parts/table', 'new');
              } elseif (has_category('used-house')) {
                // 「中古戸建」グループの場合
                get_template_part('template-parts/table', 'used');
              } elseif (has_category('land')) {
                // 「土地」グループの場合
                get_template_part('template-parts/table', 'land');
              } elseif (has_category('mansion')) {
                // 「マンション」グループ（中古マン、新築マン等を含む）の場合
                get_template_part('template-parts/table', 'mansion');
              } else {
                // それ以外（デフォルト）
                get_template_part('template-parts/table', 'default');
              }
              ?>


              <!-- 所在map -->
              <?php $location = get_post_meta(get_the_ID(), 'location', true); ?>

              <?php if (!empty($location)) : ?>
                <?php if (! is_single(14512)): ?>
                  <div class="property-map">
                    <h2 class="property__title">アクセスマップ</h2>
                    <?php
                    if ($location) :
                      $map_query = ''; // 初期化
                      $parts = explode('/', $location);

                      if (count($parts) === 2) {
                        $lat_raw = $parts[0]; // 例: 36.20.34.657
                        $lng_raw = $parts[1]; // 例: 139.1.27.631

                        $lat_d = explode('.', $lat_raw);
                        $lng_d = explode('.', $lng_raw);

                        if (count($lat_d) >= 3 && count($lng_d) >= 3) {
                          // 度° 分' 秒" の形に整形
                          // 4つ目の要素（ミリ秒相当）があればドットで繋いで秒に含める
                          $lat_sec = $lat_d[2] . (isset($lat_d[3]) ? "." . $lat_d[3] : "");
                          $lng_sec = $lng_d[2] . (isset($lng_d[3]) ? "." . $lng_d[3] : "");

                          $formatted_lat = $lat_d[0] . '°' . $lat_d[1] . "'" . $lat_sec . '"N';
                          $formatted_lng = $lng_d[0] . '°' . $lng_d[1] . "'" . $lng_sec . '"E';

                          $map_query = $formatted_lat . ' ' . $formatted_lng;
                        } else {
                          // ドット分割が期待通りでない場合は元の値をそのまま使う
                          $map_query = $location;
                        }
                      } else {
                        // スラッシュ分割が期待通りでない場合は元の値をそのまま使う
                        $map_query = $location;
                      }

                      if ($map_query) : ?>
                        <iframe
                          width="100%"
                          height="350"
                          frameborder="0"
                          style="border:0"
                          src="https://www.google.com/maps?output=embed&q=<?php echo urlencode($map_query); ?>&z=15"
                          allowfullscreen>
                        </iframe>
                    <?php
                      endif;
                    endif;
                    ?>
                  </div>
                <?php endif; ?>
              <?php endif; ?>





            </div>
          </div>
      </section>

      <!-- 各物件用問い合わせform -->
      <section class="section section-contact" id="section-contact">
        <div class="section-content row w1000">

          <div class="content">
            <div class="contact">
              <h2 class="headline__title">この物件へのお問い合わせ</h2>

              <?php echo do_shortcode('[contact-form-7 id="fcbe52e" title="この物件へのお問い合わせ"  html_class="h-adr"]'); ?>
            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>