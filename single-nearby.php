<?php
/*
  Template Name: single-nearby
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <section class="section section-hero lower">
      <div class="section-content row w1000">
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
                <a itemprop="item" href="<?= site_url("nearby"); ?>/">
                  <span itemprop="name">周辺施設一覧</span>
                </a>
                <meta itemprop="position" content="2" />
              </li>
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <span itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="3" />
              </li>
            </ol>
          </div>

          <!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
              bcn_display();
            } ?>
          </div> -->

          <div class="property__category">
            <!-- WPカテゴリ -->
            <?php the_category(); ?>

            <!-- taxo -->
            <ul class="">
              <?php
              $terms = wp_get_post_terms(get_the_ID(), 'district');
              foreach ($terms as $term):
                $term_name = $term->name;
                $term_url = get_term_link($term->term_id);
              ?>
                <li class=""><a href="<?php echo esc_url($term_url); ?>"><?php echo esc_html($term_name); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- タイトル（物件名） -->
          <h1 class="headline__title"><?php the_title(); ?></h1>

        </div>
    </section>

    <section class="section section-property" id="section-property">

      <div class="section-content w1000 row nopad">
        <div class="property">
          <div class="overview-wrap">

            <!-- newスライダ pc -->
            <div class="swiper-wrap">

              <!-- 記事サムネイルの方 -->
              <div class="swiper-slide">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                  <!-- 画像キャプション -->
                  <div class="swiper-caption"><?php the_excerpt(); ?></div>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no-image.webp" alt="no image" decoding="async">
                <?php endif; ?>
              </div>

              <!-- modal open + サムネ用
              <?php $fields = SCF::get('facility-imgs'); ?>
              <?php $index = 0; // インデックスの初期値
              ?>
              <?php foreach ($fields as $field): ?>
                <?php if (!empty($field['facility-img'])): ?>
                  <div class="js-open-modal" data-slide-index="<?php echo $index; ?>">
                    <img src="<?php echo wp_get_attachment_url($field['facility-img']); ?>" alt="物件の外観・内観画像" decoding="async">
                  </div>
                  <?php $index++; // インデックスを増やす
                  ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </div> -->

              <!-- モーダル -->
              <div class="modal" id="modal">
                <div class="modal__overlay js-close-modal"></div>
                <div class="modal__content">
                  <button class="modal__close-btn js-close-modal" aria-label="閉じる">×</button>

                  <!-- mainスライダー(swiper + SCF + modal) -->
                  <div class="swiper main-slide modal__slider">
                    <div class="swiper-wrapper">

                      <?php $fields = SCF::get('facility-imgs'); ?>
                      <?php foreach ($fields as $field): ?>
                        <?php if ($field['facility-img']): ?>
                          <div class="swiper-slide modal__slide"><img src="<?php echo wp_get_attachment_url($field['facility-img']); ?>" alt="物件の外観・内観画像" decoding="async"></div>
                        <?php else: ?>
                          <div class="swiper-slide modal__slide"><img src="<?php echo esc_url(get_theme_file_uri('assets/img/common/no-image.webp')); ?>" alt="no image" decoding="async"></div>
                        <?php endif; ?>
                      <?php endforeach; ?>

                    </div>
                    <div class="swiper-button__wrap">
                      <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper-button__wrap">
                      <div class="swiper-button-next"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- //.property-inner -->
            </div>

            <div class="property-inner">
              <table class="property-table nearby">
                <tbody>
                  <tr>
                    <th class="property__th">所在地</th>
                    <td class="property__td"><?php echo SCF::get('address'); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>

          <!-- <div class="property-inner"> -->
          <!-- map -->
          <div class="property-map">
            <h3 class="property-map__title">地図</h3>
            <iframe class="property__map" src="<?php echo SCF::get('map'); ?>" width="999" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- </div> -->

      <?php endwhile;
  endif; ?>


        </div>
    </section>

    <?php get_footer(); ?>