<?php
/*
  Template Name: staff
*/
?>
<?php get_header(); ?>

<!-- スタッフ紹介用 -->
<main class="site-main staff" id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-hero lower" id="hero">
        <div class="section-content">
          <div class="content">
            <div class="hero">
              <!-- <div class="hero__thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                  <?php echo get_the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image" decoding="async">
                <?php endif; ?>
              </div> -->
              <h1 class="hero__catch"><?php the_title(); ?></h1>
            </div>

          </div>
        </div>
      </section>

      <section class="section section-column" id="section-column">
        <div class="section-content row w960">
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
                  <span itemprop="name"><?php the_title(); ?></span>
                  <meta itemprop="position" content="2" />
                </li>
              </ol>
            </div>
          </div>

          <div class="content">
            <div class="column">

              <!-- 追加日／更新日
          <p class="column__time"><time datetime="<?php the_time(); ?>"><?php the_time('Y/m/d'); ?></time></p>
          <p class="column__time"><time datetime="<?php the_modified_date() ?>"><?php the_modified_date('Y/m/d') ?></time></p>
          <div class="column__category"><?php the_category(); ?></div>
          -->

              <!-- 素材あれば -->
              <!-- <div class="column__thumbnail">
                <?php the_post_thumbnail(); ?>
              </div> -->

              <section class="section">
                <!-- <p class="column__text">ステッチ不動産事業部のスタッフは、業界問わずさまざまな経験をしている個性豊かなキャラクターが揃っています。<br>
                  得意分野はそれぞれにあるので、力を合わせて幅広いサポートができます。</p> -->
                <h2 class="column__title">ステッチ不動産事業部のスタッフ紹介</h2>

                <!-- <ul class="staff-list">
                  <li class="staff-item">
                    <a href="#staff01">
                      <div class="staff__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff/icon-staff01.jpg" alt="鳥居塚 史行">
                      </div>
                      <h3 class="staff__position">不動産事業部</h3>
                      <p class="staff__name">鳥居塚 史行</p>
                    </a>
                  </li>
                  <li class="staff-item">
                    <a href="#staff02">
                      <div class="staff__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff/icon-staff02.jpg" alt="阿部 日香里">
                      </div>
                      <h3 class="staff__position">不動産事業部</h3>
                      <p class="staff__name">阿部 日香里</p>
                    </a>
                  </li>
                </ul> -->

                <section class="staff-intro staff01" id="staff01">
                  <div class="staff__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff/staff01.jpg" alt="鳥居塚 史行">
                  </div>
                  <div class="staff-detail">
                    <h3 class="staff__position">不動産事業部</h3>
                    <p class="staff__name">鳥居塚 史行<span class="staff__ruby">TORIIDUKA HUMIYUKI</span></p>

                    <!-- <h3 class="staff__title">資格</h3>
                    <p class=" staff__text">サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>

                    <h3 class="staff__title">アピールポイント</h3>
                    <p class="staff__text">サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>-->

                    <h3 class="staff__title">お客様へのメッセージ</h3>
                    <p class="staff__text">サンプルテキストサンプルテキストサンプルテキストサンプルテキスト<br>
                      サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>

                    <!-- <h3 class="staff__title column">執筆コラム</h3>
                    <a href="#" class="text__link">コラムタイトルサンプルテキスト</a> -->

                  </div>
                </section>

                <section class="staff-intro staff02" id="staff02">
                  <div class="staff-detail">
                    <h3 class="staff__position">不動産事業部</h3>
                    <p class="staff__name">阿部 日香里<span class="staff__ruby">ABE HIKARI</span></p>

                    <!-- <h3 class="staff__title">資格</h3>
                    <p class=" staff__text">サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>

                    <h3 class="staff__title">アピールポイント</h3>
                    <p class="staff__text">サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>-->

                    <h3 class="staff__title">お客様へのメッセージ</h3>
                    <p class="staff__text">サンプルテキストサンプルテキストサンプルテキストサンプルテキスト<br>
                      サンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>

                    <!-- <h3 class="staff__title column">執筆コラム</h3>
                    <a href="#" class="text__link">コラムタイトルサンプルテキスト</a> -->
                  </div>
                  <div class="staff__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staff/staff02.jpg" alt="阿部 日香里">
                  </div>

                </section>



              </section>





            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>