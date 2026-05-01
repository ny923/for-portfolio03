<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>
    <?php
    if (is_singular('property')) {
      // 投稿タイプ「property」の詳細ページの場合
      $custom_title = get_post_meta(get_the_ID(), 'property_name', true);

      if (! empty($custom_title)) {
        // カスタムフィールドに値があればそれを表示
        echo esc_html($custom_title) . ' | ' . get_bloginfo('name');
      } else {
        // 空の場合は通常のタイトルを表示
        wp_title(' | ', true, 'right');
        bloginfo('name');
      }
    } else {
      // それ以外のページ（トップ、固定ページ、通常の投稿など）
      wp_title(' | ', true, 'right');
      bloginfo('name');
    }
    ?>
  </title>
  <meta name="description" content="ここはステッチ不動産事業部のサイトです。">
  <meta name="keywords" content="ステッチ, stitch, 不動産, 新築, 中古, 土地, 戸建, マンション, 売買, 売りたい, 買いたい">
  <link rel="canonical" href="<?= site_url(); ?>/">

  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />

  <?php if (is_front_page()): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" />

  <?php elseif (is_post_type_archive('property') || is_singular('property') || is_category() || is_page('favorites') || is_search()): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/property.css" />

  <?php elseif (is_page('uritai')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/uritai.css" />

  <?php elseif (is_page('company')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/company.css" />

  <?php elseif (is_single() || is_page() || is_archive('column')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/column.css" />
  <?php endif; ?>

  <?php if (isset($favicon_img)): ?>
    <link rel="shortcut icon" href="<?php echo wp_get_attachment_url($favicon_img); ?>">
    <link rel="apple-touch-icon" href="<?php echo wp_get_attachment_url($favicon_img); ?>">
  <?php endif; ?>

  <!-- og関連 -->
  <meta property="og:url" content="<?= site_url(); ?>/" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="ここはステッチ不動産事業部のサイトです。" />
  <meta property="og:title" content="<?php wp_title(' | ', true, 'right');
                                      bloginfo('name'); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>のWebサイト" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.webp" />
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.webp">
  <!-- <meta property="fb:app_id" content="123********" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  wp_deregister_style('wp-block-library');
  wp_head();
  ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
          "@type": "Organization",
          "name": "Stitch Co., Ltd.",
          "url": "https://stitch-home.jp/",
          "logo": "https://stitch-home.jp/wp-content/themes/stitch/img/common/logo.png",
          "description": "ここはステッチ不動産事業部のサイトです。",
          "image": "https://stitch-home.jp/wp-content/themes/stitch/assets/img/common/ogp.jpg",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "広瀬町３丁目２−１５",
            "addressLocality": "前橋市",
            "addressRegion": "群馬県",
            "postalCode": "371-0812",
            "addressCountry": "JP"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 36.357221916024486,
            "longitude": 139.11217906312106
          },
          "sameAs": ["https://www.athome.co.jp/ahst/stitch-f.html"]
        },
        "contactPoint": {
          "@type": "ContactPoint",
          "contactType": "real estate",
          "areaServed": "JP",
          "availableLanguage": "Japanese",
          "telephone": "+81-027-289-3315",
          "email": "info@e-stitch.jp"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "ホーム",
          "url": "https://stitch-home.jp/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "会社概要",
          "url": "https://stitch-home.jp/company/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "お問い合わせ",
          "url": "https://stitch-home.jp/contact/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "買いたい",
          "url": "https://stitch-home.jp/property/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "売りたい",
          "url": "https://stitch-home.jp/consult/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "会員登録",
          "url": "https://stitch-home.jp/create-account/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "ログイン",
          "url": "https://stitch-home.jp/login/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "無料査定",
          "url": "https://stitch-home.jp/assessment/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "お気に入り物件",
          "url": "https://stitch-home.jp/favorites/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "お知らせ",
          "url": "https://stitch-home.jp/news/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "コラム一覧",
          "url": "https://stitch-home.jp/column/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "「新築戸建」の物件一覧",
          "url": "https://stitch-home.jp/category/new-house/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "「中古戸建」の物件一覧",
          "url": "https://stitch-home.jp/category/used-house/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "「土地」の物件一覧",
          "url": "https://stitch-home.jp/category/land/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "「マンション」の物件一覧",
          "url": "https://stitch-home.jp/category/mansion/"
        }
      ]
    }
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2038DG7RVM"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2038DG7RVM');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NNDGDXN8');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body ontouchstart="" class=" <?php if (is_front_page()) {
                                echo 'is-top';
                              } else if (is_post_type_archive('property') || is_singular('property')) {
                                echo 'is-property';
                              } else if (is_page(array('contact', 'contact-confirm', 'contact-thanks', 'consult', 'consult-confirm', 'consult-thanks', 'assessment'))) {
                                echo 'is-contact';
                              } else if (is_page('uritai')) {
                                echo 'is-uritai';
                              } else if (is_page('privacy-policy')) {
                                echo 'is-team';
                              } else if (! is_page('uritai') || is_single() || is_page() || is_archive('column')) {
                                echo 'is-column';
                              } else if (is_category()) {
                                echo 'is-category';
                              } else if (is_page('faq')) {
                                echo 'is-faq';
                              }
                              ?>">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNDGDXN8"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php if (! is_page('uritai')): ?>
    <div class="wrap flex">
      <header class="site-header" id="site-header">
        <div class="masthead">

          <?php if (is_front_page()) : ?>
            <h1 class="brand-logo">
              <a href="<?= site_url(); ?>/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="Stitch">
                <span>株式会社ステッチ</span>
              </a>
            </h1>
          <?php else: ?>
            <div class="brand-logo">
              <a href="<?= site_url(); ?>/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="Stitch">
                <span>株式会社ステッチ</span>
              </a>
            </div>
          <?php endif; ?>

          <nav class="globalnav" id="js-globalnav">

            <input type="checkbox" id="nav-toggle" class="pad">
            <label for="nav-toggle" class="nav-button pad">
              <div class="nav-bar-wrap">
                <span class="nav-bar"></span>
                <span class="nav-bar"></span>
                <span class="nav-bar"></span>
              </div>
              <p class="nav-bar-text">メニュー</p>
            </label>

            <div class="globalnav-inner">

              <div class="globalnav__logo pad">
                <a href="<?= site_url(); ?>">
                  <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" alt="">
                </a>
              </div>

              <ul class="globalnav-list">
                <li class="globalnav__item" itemprop="name">
                  <a href="<?= site_url(); ?>/property/" class="buy"><span>戸建 土地 マンションを</span>
                    買いたい</a>
                </li>
                <li class="globalnav__item" itemprop="name">
                  <a href="<?= site_url(); ?>/uritai/" class="sell"><span>戸建 土地 マンションを</span>
                    売りたい</a>
                </li>
                <?php wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'menu' => 'header',
                  'container'      => false,
                  'items_wrap'     => '%3$s',
                )); ?>

                <li class="globalnav__item pad" itemprop="name">
                  <a href="<?= site_url(); ?>/company/" class="">
                    会社概要</a>
                </li>

              </ul>
            </div>

            <div class="icon-links">
              <a href="mailto:re@e-stitch.jp" class="icon-link mail">
                <div class="icon__img mail">
                  <svg id="" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
                    <path class="" d="M510.7,112.3c-2.3-11.6-7.5-22.3-14.7-31.1-1.5-1.9-3.1-3.6-4.8-5.3-12.8-12.8-30.7-20.8-50.2-20.8H71c-19.6,0-37.4,8-50.2,20.8-1.7,1.7-3.3,3.4-4.8,5.3-7.2,8.8-12.4,19.4-14.6,31.1-.9,4.5-1.4,9.1-1.4,13.8v259.8c0,10,2.1,19.5,5.9,28.2,3.5,8.3,8.7,15.7,14.9,22,1.6,1.6,3.2,3,4.9,4.5,12.3,10.2,28.1,16.3,45.3,16.3h370c17.2,0,33.1-6.1,45.3-16.4,1.7-1.4,3.3-2.8,4.9-4.4,6.3-6.3,11.4-13.7,15-22h0c3.8-8.7,5.8-18.2,5.8-28.2V126.1c0-4.7-.5-9.3-1.3-13.8ZM46.5,101.6c6.3-6.3,14.9-10.2,24.5-10.2h370c9.6,0,18.2,3.8,24.5,10.2,1.1,1.1,2.2,2.4,3.1,3.6l-193.9,169c-5.3,4.7-12,7-18.7,7s-13.3-2.3-18.7-7L43.5,105.1c.9-1.2,1.9-2.4,3-3.6ZM36.3,385.9v-243.2l140.3,122.4-140.3,122.3c0-.5,0-1,0-1.5ZM441,420.6H71c-6.3,0-12.2-1.7-17.2-4.6l148-129,13.8,12c11.6,10,26,15.1,40.4,15.1s28.9-5.1,40.4-15.1l13.8-12,147.9,129c-5,2.9-10.9,4.6-17.2,4.6ZM475.7,385.9c0,.5,0,1.1,0,1.5l-140.3-122.2,140.3-122.4v243.1Z" />
                  </svg>
                </div>
                <p class="icon__text">メールでの<br>お問い合わせ</p>
              </a>
              <a href="<?= site_url(); ?>/assessment/" class="icon-link satei">
                <div class="icon__img satei">
                  <svg id="_x32_" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
                    <path class="st0" d="M449.9,87.9c-3.8-8.9-10-16.4-17.9-21.8-7.9-5.3-17.5-8.5-27.7-8.5h-42.7v-7.4h-61.8c.3-2,.4-4.1.4-6.1,0-24.3-19.8-44.1-44.2-44.1s-44.2,19.8-44.2,44.2.2,4.1.4,6.1h-61.8v7.4h-42.7c-6.8,0-13.4,1.4-19.3,3.9-8.9,3.8-16.4,10-21.8,17.9-5.3,7.9-8.5,17.5-8.5,27.7v355.2c0,6.8,1.4,13.3,3.9,19.3,3.8,8.9,10,16.4,17.9,21.8,7.9,5.3,17.5,8.5,27.7,8.5h296.5c6.8,0,13.4-1.4,19.3-3.9,8.9-3.8,16.5-10,21.8-17.9s8.5-17.5,8.5-27.7V107.2c0-6.8-1.4-13.4-3.9-19.3h.1ZM256,27.8c9,0,16.4,7.4,16.4,16.4s-.4,4.2-1.2,6.1h-30.4c-.8-1.9-1.2-4-1.2-6.1,0-9,7.4-16.4,16.4-16.4h0ZM424.3,462.5c0,2.8-.6,5.4-1.6,7.8-1.5,3.6-4.1,6.7-7.3,8.9-3.2,2.2-7,3.4-11.2,3.4H107.8c-2.8,0-5.4-.6-7.8-1.6-3.6-1.5-6.7-4.1-8.8-7.3-2.2-3.2-3.4-7-3.4-11.2V107.2c0-2.8.6-5.4,1.6-7.8,1.5-3.6,4.1-6.7,7.3-8.8,3.2-2.2,7-3.4,11.2-3.4h42.7v6.1c0,11.5,9.3,20.9,20.9,20.9h169.4c11.5,0,20.9-9.3,20.9-20.9v-6.1h42.7c2.8,0,5.4.6,7.8,1.6,3.6,1.5,6.7,4.1,8.8,7.3s3.4,7,3.4,11.2v355.2h-.2Z" />
                    <rect class="st0" x="156.1" y="170.7" width="31.6" height="31.6" />
                    <rect class="st0" x="225.5" y="170.7" width="130.4" height="31.6" />
                    <rect class="st0" x="156.1" y="264.1" width="31.6" height="31.6" />
                    <rect class="st0" x="225.5" y="264.1" width="130.4" height="31.6" />
                    <rect class="st0" x="156.1" y="357.6" width="31.6" height="31.6" />
                    <rect class="st0" x="225.5" y="357.6" width="130.4" height="31.6" />
                  </svg>
                </div>

                <p class="icon__text">無料査定</p>
              </a>
              <a href="<?= site_url(); ?>/favorites/" class="icon-link fav">
                <div class="icon__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fav.svg" alt="お気に入り">
                </div>
                <p class="icon__text ">お気に入り<br class="pad">物件</p>
              </a>
            </div>
            <a href="<?= site_url(); ?>/company/" class="company">
              <div class="arrow__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/arrow.svg" alt="">
              </div>
              会社概要
            </a>
          </nav>

          <div class="contact">
            <div class="contact-split">
              <p class="contact__text">お電話でのお問い合わせ</p>
              <p class="contact__tel">027-225-5100</p>
            </div>
            <div class="contact-split">
              <p class="contact__info">営業時間：10:00～18:00<br>
                定休日：水・日曜日・祝、年末年始<br>
                群馬県知事(1)第8001号</p>
            </div>
          </div>
          <p class="copyright pc">©Copyright STITCH CO.,Ltd. All rights reserved</p>
        </div>
      </header>
    <?php endif; ?>