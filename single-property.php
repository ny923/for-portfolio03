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
              <?php $location = get_post_meta(get_the_ID(), 'location', true);
              $map_query = ''; ?>
              <?php if (!empty($location)) : ?>
                <?php if (! is_single(14512)): ?>
                  <div class="property-map">
                    <h2 class="property__title">アクセスマップ</h2>

                    <?php
                    if ($location) :
                      $parts = explode('/', $location);
                      if (count($parts) === 2) {
                        // 1. 文字列から数値を抽出（度・分・秒・ミリ秒）
                        $lat_d = explode('.', $parts[0]);
                        $lng_d = explode('.', $parts[1]);

                        // 要素が3つ以上（度・分・秒）あるかチェック
                        if (isset($lat_d[0], $lat_d[1], $lat_d[2]) && isset($lng_d[0], $lng_d[1], $lng_d[2])) {
                          $lat_sec = (float)$lat_d[2] . (isset($lat_d[3]) ? "." . $lat_d[3] : "");
                          $lng_sec = (float)$lng_d[2] . (isset($lng_d[3]) ? "." . $lng_d[3] : "");

                          $raw_lat = (float)$lat_d[0] + ((float)$lat_d[1] / 60) + ($lat_sec / 3600);
                          $raw_lng = (float)$lng_d[0] + ((float)$lng_d[1] / 60) + ($lng_sec / 3600);

                          // 変換の為の計算式
                          // 1. 上下（垂直方向）の調整： $wgs_lat の数値をいじる
                          // 北（上）に動かしたい： 数値を大きくする（例：0.003089 → 0.003100）
                          // 南（下）に動かしたい： 数値を小さくする（例：0.003089 → 0.003000）

                          // 2. 左右（水平方向）の調整： $wgs_lng の数値をいじる
                          // 東（右）に動かしたい： 数値を大きくする（例：-0.003165 → -0.003100 ※マイナスなので数値が「0」に近づくほど右に動きます）
                          // 西（左）に動かしたい： 数値を小さくする（例：-0.003165 → -0.003200）
                          $wgs_lat = $raw_lat + 0.003150; //緯度 上下
                          $wgs_lng = $raw_lng - 0.003180; //経度 左右
                          $map_query = $wgs_lat . ',' . $wgs_lng;

                          // 補正計算をコメントアウトした場合下記を使用
                          //$map_query = $raw_lat . ',' . $raw_lng;
                        } else {
                          $map_query = $location;
                        }
                      } else {
                        $map_query = $location;
                      }


                      if ($map_query) : ?>
                        <iframe
                          width="100%"
                          height="350"
                          style="border:0"
                          src="https://maps.google.co.jp/maps?q=<?php echo urlencode($map_query); ?>&z=17&output=embed"
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