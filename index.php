<?php
/*
Template Name:front-page
*/
?>

<?php get_header(); ?>

<main class="site-main" id="site-main">

  <section class="section section-hero" id="hero">
    <div class="section-content row w1300">
      <div class="content">
        <div class="hero">

          <picture class="hero__img">
            <source
              srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/hero-top_sp.png"
              media="(max-width:760px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/hero-top.png" alt="" />
          </picture>

          <?php get_template_part('template-parts/hero-numProperty'); ?>

        </div>
      </div>
    </div>
  </section>

  <section class="section section-news" id="news">
    <div class="section-content row w1100">
      <div class="flex">
        <div class="headline">
          <h2 class="headline__title">お知らせ</h2>
        </div>
        <div class="content">
          <div class="news">
            <ul class="news-list">
              <?php
              $args = array(
                'posts_per_page' => 2, // 表示する投稿数
                'post_type' => array('news'), // 取得する投稿タイプのスラッグ
                'orderby' => 'date', //日付で並び替え
                'order' => 'DESC' // 降順DESC or 昇順ASC
              );
              $my_posts = get_posts($args);
              ?>
              <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                <li class="news-item">
                  <a href="<?php the_permalink(); ?>" class="flex">
                    <time class="news__time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <h3 class="news__title"><?php echo get_the_title(); ?></h3>
                  </a>
                </li>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
      </div>
      <a href="<?= site_url(); ?>/news/" class="more-link">過去のお知らせはこちら</a>
    </div>
  </section>
  <?php get_template_part('template-parts/category-list'); ?>

  <a href="<?= site_url(); ?>/?post_type=property&s=&min_price=&max_price=&member_only=1" class="primary02-btn arrow ar02">
    <div class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
        <path class="st0" d="M458,168.9h-63.4v-30c0-3.5-.2-6.9-.4-10.4h.4C389.4,56.8,329.3,0,256.2,0h-.4C182.7,0,122.6,56.8,117.3,128.5h.4c-.2,3.4-.4,6.9-.4,10.4v30h-63.4c-22.7,0-40.8,19-39.6,41.7l14.4,263.7c1.1,21.1,18.5,37.7,39.6,37.7h375.3c21.1,0,38.6-16.6,39.6-37.7l14.4-263.7c1.2-22.7-16.9-41.7-39.6-41.7h0ZM276.6,341.8v57.5c0,9.9-8.1,18-18,18h0c-9.9,0-18-8.1-18-18v-57.5c-11.6-6.4-19.5-18.6-19.5-32.7,0-20.7,16.8-37.5,37.5-37.5s37.5,16.8,37.5,37.5-7.9,26.3-19.5,32.7h0ZM339.3,168.9h-166.7v-30c0-46,37.4-83.4,83.3-83.5,46,.1,83.3,37.5,83.3,83.5v30h0Z" />
      </svg>
    </div>会員様物件情報
  </a>

  <section class="section section-pickup" id="pickup">
    <div class="section-content row w1100 swiper-wrap">
      <div class="headline">
        <h2 class="headline__title">ピックアップ</h2>
      </div>
      <div class="content">

        <div class="swiper-buttons sp">
          <div class="swiper-button-prev pickup"></div>
          <div class="swiper-button-next pickup"></div>
        </div>
        <div class="property swiper pickup">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'post_type'      => array('property'),
              'post__in'       => array(7067, 6960, 6959, 7080, 6961, 6999), // 投稿ID
              'orderby'        => 'post__in', // 指定したIDの配列の順序で表示
              'posts_per_page' => -1,
            );

            $my_posts = get_posts($args);

            foreach ($my_posts as $post) : setup_postdata($post);
              $categories = get_the_category();
              $type_classes = array();

              if (!empty($categories)) {
                foreach ($categories as $cat) {
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
              $type_class_attr = implode(' ', array_unique($type_classes));
            ?>
              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?><?php echo '?propertyName=' . esc_attr(get_the_title()); ?>" class="swiper-slide-item">
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
                  <?php
                  $post_time = get_the_time('U');
                  $one_month_ago = strtotime('-1 month');
                  if ($post_time > $one_month_ago) {
                    echo '<p class="new">NEW</p>';
                  }
                  ?>

                  <div class="property-texts">
                    <p class="classify <?php echo esc_attr($type_class_attr); ?>"><?php echo get_post_meta(get_the_ID(), 'property_type', true); ?></p>
                    <p class="traffic"><?php echo get_post_meta(get_the_ID(), 'list_traffic', true); ?></p>
                    <p class="address"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></p>
                    <p class="price">
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
                    <?php echo do_shortcode('[favorite_button]'); ?>
                  </div>
                </a>
              </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="swiper-pagination sp"></div>

        </div>
      </div>
    </div>
  </section>

  <!-- キャンペーンバナー -->
  <section class="section section-campaign" id="campaign">
    <div class="section-content row w1100">
      <div class="headline">
        <h2 class="headline__title">ステッチコラム</h2>
      </div>
      <div class="content">
        <a href="<?= site_url(); ?>/空き家再生の舞台裏/">
          <div class="campaign">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner01.png" alt="hogeキャンペーン" />
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- 新着 -->
  <section class="section section-arrival" id="arrival">
    <div class="section-content row w1100 swiper-wrap">
      <div class="headline">
        <h2 class="headline__title">新着物件</h2>
      </div>
      <div class="content">

        <div class="swiper-buttons">
          <div class="swiper-button-prev arrival"></div>
          <div class="swiper-button-next arrival"></div>
        </div>
        <div class="property swiper arrival">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'posts_per_page' => 9, // 表示する投稿数
              'post_type' => array('property'), // 取得する投稿タイプのスラッグ
              'orderby' => 'date', //日付で並び替え
              'order' => 'DESC', // 降順DESC or 昇順ASC

              // 1ヶ月以内の物件に絞る
              'date_query'     => array(
                array(
                  'after'     => '1 month ago', // 1ヶ月前より後の記事
                  'inclusive' => true,          // その日（ちょうど1ヶ月前）も含む
                ),
              ),
            );
            $my_posts = get_posts($args);

            foreach ($my_posts as $post) : setup_postdata($post);
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
              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?><?php echo '?propertyName=' . esc_attr(get_the_title()); ?>" class="swiper-slide-item">
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

                  <div class="property-texts">
                    <!-- カテゴリ色別 -->
                    <p class="classify <?php echo esc_attr($type_class_attr); ?>"><?php echo get_post_meta(get_the_ID(), 'property_type', true); ?></p>

                    <!-- 駅 -->
                    <p class="traffic"><?php echo get_post_meta(get_the_ID(), 'list_traffic', true); ?></p>

                    <p class="address"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></p>
                    <p class="price">
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

                    <!-- <p class="feature"><?php echo get_post_meta(get_the_ID(), 'feature', true); ?></p> -->
                    <!-- <p class="floor"><?php echo get_post_meta(get_the_ID(), 'floor', true); ?></p> -->

                    <!-- fav -->
                    <?php echo do_shortcode('[favorite_button]'); ?>

                  </div>
                </a>
              </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="swiper-pagination sp"></div>
        </div>
        <!--  -->
        <a href="<?= site_url(); ?>/property/" class="text__link02"><i class="arrow__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/arrow.svg" alt="">
          </i>新着物件検索</a>
      </div>
    </div>
  </section>

  <!-- おすすめ -->
  <section class="section section-recommend" id="recommend">
    <div class="section-content row w1100 swiper-wrap">
      <div class="headline">

        <h2 class="headline__title">おすすめ物件</h2>
      </div>
      <div class="content">
        <div class="swiper-buttons">
          <div class="swiper-button-prev recommend"></div>
          <div class="swiper-button-next recommend"></div>
        </div>

        <div class="property swiper recommend">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'posts_per_page' => 9, // 表示する投稿数
              'post_type' => array('property'), // 取得する投稿タイプのスラッグ
              'tag'       => 'recommend', // おすすめ用tag
              'orderby' => 'date', //日付で並び替え
              'order' => 'DESC' // 降順DESC or 昇順ASC
            );
            $my_posts = get_posts($args);
            foreach ($my_posts as $post) : setup_postdata($post);
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
              $type_class_attr = implode(' ', array_unique($type_classes));
            ?>
              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?><?php echo '?propertyName=' . esc_attr(get_the_title()); ?>" class="swiper-slide-item">
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
                  <?php
                  $post_time = get_the_time('U');
                  $one_month_ago = strtotime('-1 month');
                  if ($post_time > $one_month_ago) {
                    echo '<p class="new">NEW</p>';
                  }
                  ?>

                  <div class="property-texts">
                    <p class="classify <?php echo esc_attr($type_class_attr); ?>"><?php echo get_post_meta(get_the_ID(), 'property_type', true); ?></p>
                    <p class="traffic"><?php echo get_post_meta(get_the_ID(), 'list_traffic', true); ?></p>
                    <p class="address"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></p>
                    <p class="price">
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
                    <?php echo do_shortcode('[favorite_button]'); ?>
                  </div>
                </a>
              </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="swiper-pagination sp"></div>
        </div>
        <a href="<?= site_url(); ?>/property/" class="text__link02"><i class="arrow__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/arrow.svg" alt="">
          </i>新着物件検索</a>
      </div>
    </div>
  </section>

  <!-- キャンペーンバナー -->
  <section class="section section-helpful" id="helpful">
    <div class="section-content row w1100">
      <div class="headline">
        <h2 class="headline__title">お役立ち情報</h2>
      </div>
      <div class="content">
        <a href="<?= site_url(); ?>/相続した不動産、そのままになっていませんか？/">
          <div class="helpful">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/banner02.png" alt="hogeキャンペーン" />
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="section section-column" id="column">
    <div class="section-content row w1100">
      <div class="headline">
        <h2 class="headline__title">ステッチコラム</h2>
        <a href="<?= site_url(); ?>/column/" class="text__link02"><i class="arrow__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/arrow.svg" alt="">
          </i>コラム一覧</a>
      </div>
      <div class="content">

        <div class="column">
          <ul class="column-list">
            <?php
            $args = array(
              'posts_per_page' => 10, // 表示する投稿数
              'post_type' => array('post'), // 取得する投稿タイプのスラッグ
              'orderby' => 'date', //日付で並び替え
              'order' => 'DESC' // 降順DESC or 昇順ASC
            );
            $my_posts = get_posts($args);
            ?>
            <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
              <li class="column-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="column__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php echo get_the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image" decoding="async">
                    <?php endif; ?>
                  </div>
                  <div class="column-texts">

                    <h3 class="column__title"><?php echo get_the_title(); ?></h3>
                    <!-- <p class="column__text">
                      <?php if (mb_strlen($post->post_content) > 30) {
                        $content = mb_substr(strip_tags(apply_filters('the_content', $post->post_content)), 0, 30);
                        echo $content . "…";
                      } else {
                        echo $post->post_content;
                      } ?></p> -->
                    <p class="classify"><?php the_category(); ?></p>
                    <!-- <time class="column__time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time> -->
                  </div>
                </a>
              </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- <section class="section section-useful" id="useful">
    <div class="section-content">
      <div class="headline">
        <h2 class="headline__title">お役立ち情報</h2>
      </div>
      <div class="content">
        <div class="useful flex">

          <section class="buy">
            <h3 class="useful__tab">買いたい</h3>
            <ul class="useful-list">
              <li class="useful-item">
                <a href="/process-buy/">
                  <h4 class="useful__title"><?php echo get_the_title(80); ?></h4>
                  <p class="useful__text">住まいを購入するタイミングは、一生に一度、と言ってもいいくらい、そう何度も訪れるものではないですよね。だからこそです！<br>
                    間違いのない物件を選ぶために、いろんなことを考慮にいれておきたいもの。そのポイントをご紹介します！
                     <?php
                      $page_id = 80;
                      $page = get_post($page_id);
                      if ($page) {
                        $content = apply_filters('the_content', $page->post_content);
                        echo wp_trim_words($content, 60, '...');
                      }
                      ?> 
                  </p>
                </a>
              </li>
            </ul>
          </section>
          <section class="sell">
            <h3 class="useful__tab">売りたい</h3>
            <ul class="useful-list">
              <li class="useful-item">
                <a href="/process-sale/">
                  <h4 class="useful__title"><?php echo get_the_title(82); ?></h4>
                  <p class="useful__text">
                    「大切にしてきたマイホーム、そろそろ手放そうかな…」<br>
                    そう考え始めたとき、頭に浮かぶのは「いくらで売れるんだろう？」「近所に知られずに進められる？」「いつまでに売れるかな？」といった、たくさんの不安ではないでしょうか。
                    不動産の売却は、人生の中でもそう何度も…
                     <?php
                      $page_id = 82;
                      $page = get_post($page_id);
                      if ($page) {
                        $content = apply_filters('the_content', $page->post_content);
                        echo wp_trim_words($content, 60, '...');
                      }
                      ?> 
                  </p>
                </a>
              </li>

            </ul>
          </section>

        </div>


      </div>
    </div>
  </section> -->

  <?php get_footer(); ?>