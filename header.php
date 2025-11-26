<!DOCTYPE html>
<html lang="ja">

<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZCFMGPMCE6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-ZCFMGPMCE6');
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
    })(window, document, 'script', 'dataLayer', 'GTM-PBLL2W3Z');
  </script>
  <!-- End Google Tag Manager -->

  <!-- aos.js用 -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title(' | ', true, 'right');
          bloginfo('name'); ?></title>
  <meta name="keywords" content="群馬, 不動産, 買取, 売却, 相続, 物件, 中古, 新築, 土地, 売買, 高崎, 前橋, ステッチ">
  <meta name="description" content="「株式会社ステッチ 不動産事業部」は群馬県に特化した不動産買取専門店です。地域密着型企業として、様々な企業とのネットワークを活かしたお客様に最適なご提案が可能です。">

  <link rel="canonical" href="<?= site_url(); ?>/">
  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />

  <?php if (is_front_page()): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" />

  <?php elseif (is_page('property_search')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/search.css" />

    <!-- form類共通 contact, assessment, member -->
  <?php elseif (is_page('contact') || is_page('contact-confirm') || is_page('assessment') || is_page('assessment-confirm') || is_page('regist-profile') || is_page('create-account') || is_page('thanks')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/form.css" />

    <!-- 物件一覧・個別、周辺情報 || is_search() -->
  <?php elseif (is_post_type_archive('property') || is_singular('property') || is_tax('district') || is_post_type_archive('nearby') || is_singular('nearby') || is_page('search-property-amount')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/property.css" />

    <!-- コラム、約款類、404等ページ -->
  <?php elseif (is_post_type_archive('column') || is_singular() || is_404()): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/column.css" />

  <?php elseif (is_post_type_archive('news_type') || is_singular('news_type')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css" />
  <?php endif; ?>

  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">

  <!-- og関連 -->
  <meta property="og:url" content="<?php the_permalink(); ?>/" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="「株式会社ステッチ」は群馬県に特化した不動産買取専門店です。地域密着型企業として、様々な企業とのネットワークを活かしたお客様に最適なご提案が可能です。" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.webp" />
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
          "@type": "RealEstateAgent",
          "name": "株式会社ステッチ 不動産事業部",
          "description": "「株式会社ステッチ」は群馬県に特化した不動産買取専門店です。地域密着型企業として、様々な企業とのネットワークを活かしたお客様に最適なご提案が可能です。",
          "image": "https://gunmakaitori.com/wp-content/themes/gunmakaitori/assets/img/common/ogp.webp",
          "@id": "https://gunmakaitori.com/",
          "url": "https://gunmakaitori.com/",
          "telephone": "027-225-5100",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "広瀬町3-2-15",
            "addressLocality": "前橋市",
            "addressRegion": "群馬県",
            "postalCode": "371-0812",
            "addressCountry": "JP"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 36.3572,
            "longitude": 139.1122
          },
          "openingHoursSpecification": [{
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Thursday",
                "Friday",
                "Saturday"
              ],
              "opens": "10:00",
              "closes": "18:00"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Wednesday", "Sunday"],
              "opens": "00:00",
              "closes": "00:00"
            }
          ],
          "priceRange": "応相談",
          "sameAs": [
            "https://www.athome.co.jp/ahst/stitch-f.html",
            "https://realestate-od.jp/partner/gunma/detail3899"
          ]
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "ホーム",
          "url": "https://gunmakaitori.com/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "不動産買取について",
          "url": "https://gunmakaitori.com/about/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "相続した方へ",
          "url": "https://gunmakaitori.com/inherit/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "空き家再生",
          "url": "https://gunmakaitori.com/before-after/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "不動産売却コラム一覧",
          "url": "https://gunmakaitori.com/column/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "会社概要",
          "url": "https://gunmakaitori.com/company/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "お問い合わせ",
          "url": "https://gunmakaitori.com/contact/"
        }
      ]
    }
  </script>

  <!-- コラムページ用json ld -->
  <?php
  if (is_single()) {
    // 記事のタイトルを取得
    $headline = get_the_title();

    // 記事の説明を取得（120文字に制限）
    $description = wp_strip_all_tags(get_the_excerpt());
    if (strlen($description) > 120) {
      $description = substr($description, 0, 117) . '...';
    }

    // サムネイル画像のURLを取得
    $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : '';

    // 記事の投稿日と更新日を取得
    $date_published = get_the_date('c');
    $date_modified = get_the_modified_date('c');

    // ブログ名を取得
    $blog_name = get_bloginfo('name');

    // サイトアイコンのURLを取得
    $site_icon_id = get_option('site_icon');
    $site_icon_url = $site_icon_id ? wp_get_attachment_url($site_icon_id) : '';

    // 著者名を取得
    $author_name = get_the_author();

    // JSON-LDデータを配列にまとめる
    $json_ld_data = [
      '@context' => 'http://schema.org',
      '@type' => 'Article',
      'headline' => $headline ? $headline : '',
      'description' => $description ? $description : '',
      'image' => $thumbnail_url ? [$thumbnail_url] : [],
      'datePublished' => $date_published ? $date_published : '',
      'dateModified' => $date_modified ? $date_modified : '',
      'publisher' => [
        '@type' => 'Organization',
        'name' => $blog_name ? $blog_name : '',
        'logo' => [
          '@type' => 'ImageObject',
          'url' => $site_icon_url ? $site_icon_url : ''
        ]
      ],
      'author' => [
        '@type' => 'Person',
        'name' => $author_name ? $author_name : ''
      ]
    ];

    // JSON-LDをスクリプトタグとして出力
    echo '<script type="application/ld+json">' . json_encode($json_ld_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
    //もしJSON-LDが出力されない場合はjson_encode()内に『 | JSON_INVALID_UTF8_SUBSTITUTE』を追加してください。
  }
  ?>

</head>

<body ontouchstart="" class="<?php if (is_front_page()) {
                                echo 'is-top';
                              } else if (is_page(41) || is_search() || is_category()) {
                                echo 'is-column'; //'post' 'column' コラム一覧、検索結果一覧
                              } else if (is_post_type_archive('property') || is_tax('district') || is_post_type_archive('nearby')) {
                                echo 'is-property';
                              } else if (is_singular('property') || is_singular('nearby')) {
                                echo 'is-property detail';
                              } else if (is_page('159')) {
                                echo 'is-property_search';
                              } else if (is_post_type_archive('news_type')) {
                                echo 'is-news_type'; //news一覧
                              } else if (is_singular('news_type')) {
                                echo 'is-news_type detail'; //news詳細
                              } else if (is_page(array('43', '44', '47'))) {
                                echo 'is-contact'; //問合
                              } else if (is_page(array('160', '161'))) {
                                echo 'is-member'; //会員プロフ(+login)161, 新規登録(+ユーザーページ)160
                              } else if (is_page(array('157', '158'))) {
                                echo 'is-assessment'; //査定form
                              } else if (is_single() || is_page('post') || is_page(array('2', '40', '42')) || is_archive() || is_404()) {
                                echo 'is-column detail'; //コラム詳細、約款等idで指定※page()は他にも影響
                              } else if (is_page(array('163', '178'))) {
                                echo 'is-column detail tac'; //約款
                              } ?>">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBLL2W3Z"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="wrap">
    <header class="site-header" id="site-header">
      <div class="masthead new">

        <div class="logo-wrap">
          <a href="<?= site_url(); ?>/" itemprop="url">
            <div class="brand-logo">
              <picture class="brand-logo__img">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/stitch-icon.svg" alt="株式会社ステッチ">
              </picture>

              <p class="brand__title">株式会社ステッチ不動産事業部<br>
              </p>
            </div>

          </a>
        </div>

        <nav class="globalnav" id="js-globalnav">
          <input type="checkbox" id="nav-toggle" class="sp">
          <label for="nav-toggle" class="nav-button sp">
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
            <span class="nav-bar"></span>
          </label>

          <div class="globalnav-inner">

            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu' => 'header',
              'container' => 'ul',
              'menu_class' => 'globalnav-list',
              'before' => '<li class="globalnav__item" itemprop="name">',
              'after' => '</li>',
            )); ?>

          </div>

          <!-- <div class="globalnav__ribbon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ribbon.svg" alt="ステッチリボン" decoding="async">
          </div> -->
        </nav>

      </div>
    </header>

    <main class="site-main" id="site-main">
      <!-- header.php ここまで -->