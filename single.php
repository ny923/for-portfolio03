<?php
/*
  Template Name: single
*/
?>
<?php get_header(); ?>

<!-- 投稿 column 用 -->
<main class="site-main " id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-hero lower" id="hero">
        <div class="section-content row w1000">
          <div class="content">
            <div class="hero">
              <p class="hero__catch pc">ステッチコラム</p>
            </div>
          </div>
        </div>
      </section>

      <div class="flex">
        <section class="section section-column" id="section-column">
          <div class="section-content row w760">
            <div class="headline">
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
                    <a itemprop="item" href="<?= site_url("column"); ?>/">
                      <span itemprop="name">ステッチコラム</span>
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
            </div>
            <div class="content">

              <div class="column">
                <div class="column__thumbnail">
                  <?php the_post_thumbnail(); ?>
                </div>

                <!-- 追加日／更新日-->
                <p class="column__time">公開日：<time datetime="<?php the_time(); ?>"><?php the_time('Y/m/d'); ?></time>　更新日：<time datetime="<?php the_modified_date() ?>"><?php the_modified_date('Y/m/d') ?></time></p>

                <h1 class="column__title"><?php the_title(); ?></h1>
                <p class="category"><?php
                                    $categories = get_the_category();
                                    if (! empty($categories)) {
                                      echo esc_html(implode(' ', wp_list_pluck($categories, 'name')));
                                    }
                                    ?></p>
                <div class="column-contents">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </div>


          <div class="column-contents fixed">


            <div class="column-texts">
              <p class="column__text"> 不動産の買取に関して、弊社はかつ迅速なプロセスを無料で提供しています。査定から始まり、お客様のご要望に基づいた適切な価格での買取を実現します。専門の査定士が物件を詳細に調査、市場動向や土地の特性を考慮した上で最適な価格を提案いたします。</p>
              <p class="column__text">また、手続き全般においてスムーズかつ透明性のある対応を心がけており、信頼性の高いサービスを提供しています。</p>
              <p class="column__text">不動産の売却に関するご質問やご質問がございましたら、いつでもお気軽にご相談ください。</p>
            </div>
          </div>

        </section>

        <div class="sidebar">
          <!-- <h2 class="sidebar__title">記事カテゴリー</h2> -->
          <ul class="sidebar-list">
            <?php
            $args = array(
              'title_li' => '',
              'show_count' => true
            );
            wp_list_categories($args);
            ?>
          </ul>

          <!-- <h2 class="sidebar__title">新着記事</h2> -->
          <?php
          $args = array(
            'posts_per_page' => 3,
            'post_type' => array('post'),
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $my_posts = get_posts($args);
          ?>
          <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
            <!-- <a href="<?php the_permalink(); ?>" class="sidebar-link">
              <h3 class="column__title"><?php echo get_the_title(); ?></h3>

              <time class="column__time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
            </a> -->
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>

      </div>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>