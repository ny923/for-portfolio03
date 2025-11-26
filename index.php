<?php
/*
  Template Name: index
*/
?>
<?php get_header(); ?>

<!-- lower -->
<section class="section section-hero ">
  <div class="section-content">

    <!-- add swiper -->
    <div class="topSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/slide01.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/slide02.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/slide03.jpg" alt="スライド"></div>
      </div>
    </div>

    <div class="catch-texts">
      <h2 class="catch__headline">中古物件の売買は<br>
        <span>ステッチにおまかせ！</span>
      </h2>
      <p class="catch__text">あなたにぴったりの物件を<br>
        多彩な情報<small>から</small>簡単検索</p>
    </div>
	</div>
</section>


<section class="section section-buyOrSell" id="section-buyOrSell">

  <div class="section-content ">
    <div class="content">
      <div class="catch" id="catch" data-aos="fade-up" anchor="#section-buyOrSell" data-aos-once="true" data-aos-duration="300">
        <div class="catch-titti">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/titti-white.svg" alt="titti">
        </div>
        <p class="catch__lead">物件選びは大きな決断。<br>
          私たちのサービスでは、信頼できる情報と<br class="sp">専門家のアドバイスを通じて、<br>
          納得のいく物件選びをサポートします。</p>
      </div>
      <!-- //.catch -->

      <!-- (臨時)お知らせ --><!-- div.content 忘れ... 全部 -->
<!--       <section class="section section-info" id="section-info">
        <div class="section-content row w1000 " data-aos="fade-up" anchor="#section-buyOrSell" data-aos-once="true" data-aos-duration="300">
          
          <div class="info">
            <div class="headline">
              <h2 class="headline__title">夏季休業のお知らせと<br class="sp">対応について</h2>
            </div>

            <div class="info-texts">
              <p class="info__text">まことに勝手ながら弊社では下記の期間を夏季休業とさせていただきます。<br>
                ご不便をおかけいたしますが、何卒ご了承くださいますようお願い申し上げます。</p>
              <p class="info__text">なお、電話でのお問い合わせは休み関係なく対応させていただきます。</p>
              <p class="info__text emphasis">休業期間：2025年8月10日(日)〜<br class="sp">2025年8月17日(日)</p>
            </div>
          </div>
        </div>
      </section> -->




      <!-- ピックアップ物件 functions.phpに記述有り -->
      <section class="section section-pickup" id="section-pickup">
        <div class="headline">
          <h2 class="headline__title">ピックアップ物件</h2>
        </div>

        <!-- row w1000 -->
        <div class="section-content " data-aos="fade-up" anchor="#section-buyOrSell" data-aos-once="true" data-aos-duration="300">
          <!-- ↓ .pickupSwiper swiper動かず -->
          <div class="pickup property ">
            <!-- swiper→js使えず、手動は各セルにno.入れる必要あり無理… -->

            <?php wp_nav_menu(array(
              'menu' => 'pickup',
              'walker' => new Walker_Nav_Menu_Custom(),
              'container' => 'ul',
              // ↓ .swiper-wrapper
              'menu_class' => 'property-list ',
            )); ?>

          </div>
        </div>
      </section>


      <div class="crossroad-wrap new row w1000" data-aos="fade-up" anchor="#catch" data-aos-once="true" data-aos-duration="300">

        <div class="buy">
          <div class="buy__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/assessment-icon.webp" decoding="async">
          </div>
          <h3 class="buy__title">多彩な物件<small>から<br class="sp">
            </small><span>簡単検索</span></h3>
          <a href="/property_search/" class="solid-button">物件を<span>買いたい</span></a>
        </div>

        <div class="sell">
          <div class="sell__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/grepc-logo.webp" decoding="async">
          </div>
          <h3 class="sell__title">お手持ちの物件を<br>
            <span>株式会社ステッチ</span><small>が</small><br class="sp">
            査定いたします
          </h3>
          <a href="/contact/" class="solid-button">物件を<span>売りたい</span></a>
        </div>
      </div>

    </div>
</section>


<section class="section section-news" id="section-news">
  <div class="headline">
    <h2 class="headline__title">新着情報</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-news" data-aos-once="true" data-aos-duration="300">
    <div class="news simple">

      <?php
      $args = array(
        'post_type' => array('news_type', 'property', 'post'),
        'paged' => $paged,
        'posts_per_page' => 4,
      );
      $the_query = new WP_Query($args);
      ?>

      <ul class="news-list ">
        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <li class="news-item">
              <a href="<?php the_permalink(); ?>">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                  <div class="flex">
                    <p class="news__date"><?php echo get_the_date("Y.m.d"); ?></p>

                    <h2 class="news__title" itemprop="name headline">
                      <?php if (mb_strlen($post->post_title) > 30) {
                        $title = mb_substr($post->post_title, 0, 30);
                        echo $title . "…";
                      } else {
                        echo $post->post_title;
                      } ?></h2>
                  </div>

                </article>

              </a>
            </li>
          <?php endwhile;
        else : ?>
        <?php endif; ?>
      </ul>

      <?php wp_reset_postdata(); ?>

      <!-- /news_type/ -->
      <a class="more-link" href="/news/">一覧を見る</a>

    </div>
  </div>
</section>


<!-- 気になるリスト※チェック入れた物件一覧 -->
<section class="section section-favorite" id="section-favorite">
  <div class="headline">
    <h2 class="headline__title">あなたの気になる物件一覧</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-favorite" data-aos-once="true" data-aos-duration="300">
    <div class="favorite property">

      <!-- plugin -->
      <ul class="property-list">
        <?php
        $favorites = get_user_favorites();
        $args = array(
          'post__in' => $favorites,
          'post_type' => 'property',
          'posts_per_page' => 2,
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()): ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

            <li class="property-item">
              <div class="property-check">
                <p class="property__checkText">問い合わせ・気になる物件に</p>
              </div>
              <div class="category-wrap">

                <!-- カテゴリ -->
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
                  <h3 class="property__title" itemprop="name headline">
                    <?php if (mb_strlen($post->post_title) > 25) {
                      $title = mb_substr($post->post_title, 0, 25);
                      echo $title . "…";
                    } else {
                      echo $post->post_title;
                    } ?></h3>

                  <!-- 何か情報 戸建て…など -->
                  <p class="property__text"><?php echo SCF::get('catch'); ?></p>

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

                    <!-- evenly -->
                    <div class="flex">

                      <div class="amount-wrap">
                        <!-- 入力ある時のみ -->
                        <?php $value = get_post_meta($post->ID, 'amount-note', true); ?>
                        <?php if (empty($value)): ?>
                        <?php else: ?>
                          <p class="amount__note"><?php echo SCF::get('amount-note'); ?></p>
                        <?php endif; ?>

                        <p class="property__amount">
                          <?php $num = get_post_meta($post->ID, 'amount', true); ?>
                          <?php if (empty($num)): ?>
                            <span class="comming-soon">近日公開</span>
                          <?php else: ?>
                            <span><?php echo number_format($num); ?></span>万円(税込)
                          <?php endif; ?>

                        </p>
                      </div>

                      <!-- ローン -->
                      <div class="amount-wrap loan">
                        <p class="amount__note">月々の支払い目安額</p>
                        <p class="property__amount">
                          <?php $num = get_post_meta($post->ID, 'loan', true); ?>
                          <?php if (empty($num)): ?>
                            <span> - </span>
                          <?php else: ?>
                            <span><?php echo number_format($num); ?></span>円(税込)／月
                          <?php endif; ?>
                        </p>
                      </div>
                    </div>

                    <!-- 間取、土地、建物 -->
                    <p class="property__text">間取：<?php echo SCF::get('floor-plan'); ?><br>
                      土地：<?php echo SCF::get('land-area'); ?><br>
                      建物：<?php echo SCF::get('building-area'); ?></p>
                  </div>


                  <!-- 会員のみ表示 -->
                  <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo home_url() . '/contact/?propertyName=' . esc_attr(get_the_title()); ?>" class="solid-button">見学予約・お問い合わせ(無料)</a>
                  <?php else: ?>
                    <div class="member-only">
                      <a href="<?php echo home_url() . '/contact/?propertyName=' . esc_attr(get_the_title()); ?>" class="solid-button">見学予約・お問い合わせ(無料)</a>
                      <p class="property-subscribe">会員登録されました事業者様は<br>
                        <a href="/regist-profile/">こちらからログイン</a>
                      </p>
                    </div>
                  <?php endif; ?>
                </article>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <p>まだチェックいただいた物件はございません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
</section>


<!-- このようなお悩みはありませんか？ -->
<section class="section section-concern" id="section-concern">
  <div class="headline">
    <h2 class="headline__title">このようなお悩みはありませんか？</h2>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-concern" data-aos-once="true" data-aos-duration="300">
    <div class="concern">

      <picture class="concern__img">
        <source media="(min-width: 897px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/cont01-02.webp" loading="lazy" decoding="async">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/cont01-02_sp.webp" loading="lazy" decoding="async">
      </picture>

      <div class="texts-wrap">
        <p class="concern__text">そのお悩み<span>株式会社ステッチ</span>に<br>
          <strong>お任せください！</strong>
        </p>

        <section>
          <h3 class="concern__headline">当社が選ばれる5つの理由</h3>
          <p class="concern__text">「株式会社ステッチ」は<br>
            <strong>ニーズに合わせた提案</strong>が可能です
          </p>

          <ul class="concern-list">
            <li class="concern-item">最短2日で現金化！</li>
            <li class="concern-item">建物・古屋の解体不要！</li>
            <li class="concern-item">訳アリ物件でも買取可能</li>
            <li class="concern-item">お荷物はそのままでOK</li>
            <li class="concern-item">士業や専門家とのネットワーク</li>
          </ul>
          <p class="concern__text">まずはお気軽にご相談ください！</p>
        </section>

      </div>
    </div>
  </div>
</section>

<section class="section section-column" id="section-column">
  <div class="headline ">
    <h2 class="headline__title">不動産売却コラム</h2>
    <h3 class="headline__lead">不動産の売却に関する豆知識をご紹介</h3>
  </div>

  <div class="section-content row w1000" data-aos="fade-up" anchor="#section-column" data-aos-once="true" data-aos-duration="300">
    <div class="column">

      <?php
      $args = array(
        'post_type' => 'post',
        'paged' => $paged,
        'posts_per_page' => 4,
      );
      $the_query = new WP_Query($args);
      ?>

      <ul class="column-list">
        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="column-item">
              <a href="<?php the_permalink(); ?>">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                  <div class="flex">
                    <div class="column__thumbnail">
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

                    <div class="column-headline">
                      <h2 class="column__title" itemprop="name headline">
                        <?php if (mb_strlen($post->post_title) > 25) {
                          $title = mb_substr($post->post_title, 0, 25);
                          echo $title . "…";
                        } else {
                          echo $post->post_title;
                        } ?></h2>

                      <ul class="column-categories">
                        <?php
                        $cats = get_the_category();
                        foreach ($cats as $cat):
                          $cat_name = $cat->name;
                          $cat_url = get_category_link($cat->term_id);
                        ?>
                          <li class="column__category">

                            <?php echo $cat_name; ?>

                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>

                  <div itemprop="articleBody" class="column-texts">
                    <p class="column__text">
                      <?php if (mb_strlen($post->post_content) > 48) {
                        $content = mb_substr(strip_tags(apply_filters('the_content', $post->post_content)), 0, 48);
                        echo $content . "…";
                      } else {
                        echo $post->post_content;
                      } ?>
                    </p>
                  </div>
                </article>
              </a>
            </li>
          <?php endwhile;
        else : ?>
        <?php endif; ?>
      </ul>
      <?php wp_reset_postdata(); ?>

      <a class="more-link" href="/column/">一覧を見る</a>
    </div>
  </div>
</section>


<?php get_footer(); ?>