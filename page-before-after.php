<?php
/*
  Template Name: NEW before after
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content row nopad w1000">
    <div class="headline">

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
            <span itemprop="name">空き家再生</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>

    </div>
</section>

<!-- ここにスライダ -->
<section class="section section-hero ">
  <div class="section-content">
    <!--  swiper -->
    <div class="baSwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide01.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide02.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide03.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide04.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide05.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide06.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide07.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide08.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide09.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide10.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide11.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide12.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide13.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide14.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide15.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide16.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide17.jpg" alt="スライド"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/baSlide/baSlide18.jpg" alt="スライド"></div>
      </div>
    </div>
  </div>
</section>

<section class="section section-static" id="section-static">
  <div class="section-content row w1000">
    <div class="static">

      <div class="static-contents before-after">

        <h2 class="ba__title">あなたの空き家からワクワクする未来へ</h2>

        <!-- living -->
        <section class="example">
          <div class="example-mainImgs">

            <!-- 本当にgoならb/a画像別け字をtxtに、>疑似要素で -->
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/living/living01.jpg" alt="">
            </div>
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/living/living02.jpg" alt="">
            </div>
          </div>

          <div class="example-texts">
            <h3 class="example__title">リビングルーム<span>- LIVING ROOM -</span></h3>
            <p class="example__text">ご家族が集う大切な空間を、心地よく温かな雰囲気に仕立て上げます。毎日を過ごす場所だからこそ、どんな風に過ごしたいのか、どんな時間を大切にしたいのか、ご家族一人一人の想いに寄り添ったリフォームをご提案いたします。</p>
            <p class="example__text"> 「みんなが集まる場所をもっと居心地よく」といったご要望に合わせて、細部にまでこだわり、より快適で豊かな時間を提供する空間作りをお手伝いします。
            </p>

            <div class="example-subImgs">
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/living/living01a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/living/living02a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/living/living03a.jpg" alt="">
              </div>
            </div>
          </div>
        </section>

        <!-- kitchen -->
        <section class="example">
          <div class="example-mainImgs">
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/kitchen/kitchen01.jpg" alt="">
            </div>
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/kitchen/kitchen02.jpg" alt="">
            </div>
          </div>
          <div class="example-texts">
            <h3 class="example__title">キッチン<span>- KITCHEN -</span></h3>
            <p class="example__text">お料理をする人が、毎日をもっと楽しく、もっと快適に過ごせるように。そんな思いを込めて、使い勝手の良さと美しさを兼ね備えた空間にリフォームいたします。</p>
            <p class="example__text">システムキッチンの導入はもちろん、収納力たっぷりのカップボードや便利な食洗器の設置など、お客様のライフスタイルにぴったりのカスタマイズが可能です。</p>
            <p class="example__text">お料理の時間がワクワクするような動線を考えたデザインで、家族みんなが集まりたくなる温かな雰囲気を作り出し、毎日の料理がもっと愛されるひとときに変わります。</p>

            <div class="example-subImgs">
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/kitchen/kitchen01a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/kitchen/kitchen02a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/kitchen/kitchen03a.jpg" alt="">
              </div>
            </div>
          </div>
        </section>

        <!-- wash -->
        <section class="example">
          <div class="example-mainImgs">
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash01.jpg" alt="">
            </div>
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash02.jpg" alt="">
            </div>
          </div>
          <div class="example-texts">
            <h3 class="example__title">洗面所<span>- WASH ROOM -</span></h3>
            <p class="example__text">毎日の忙しい時間の中で、最初と最後に訪れる大切な空間だからこそ、使い勝手の良さが何よりも大切です。デザイン性と機能性を絶妙に融合させた、心地よく、そして効率的な洗面所へとリフォームいたします。</p>
            <p class="example__text">広がりを感じさせる収納力や、使いやすい洗面台、鏡の配置にまでこだわり、毎日の支度やお手入れがよりスムーズに、そして快適に。美しさと機能が調和した空間で、家族みんなが心地よく使える洗面所をご提供します。</p>

            <div class="example-subImgs">
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash01a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash02a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash03a.jpg" alt="">
              </div>
            </div>
          </div>
        </section>

        <!-- bath wc -->
        <section class="example">
          <div class="example-mainImgs">
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/bath/bath01.jpg" alt="">
            </div>
            <div class="example__mainImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/bath/bath02.jpg" alt="">
            </div>


          </div>
          <div class="example-texts">
            <h3 class="example__title">浴室・トイレ<span>- BATH & WC -</span></h3>
            <p class="example__text">毎日の生活に欠かせない大切な空間だからこそ、もっと快適で心地よい空間にしたい。その想いに寄り添い、理想を形にするリフォームをご提案いたします。</p>
            <p class="example__text">お客様のご要望に合わせたデザインで、シンプルで美しいものから、機能性に優れたものまで、細部にまでこだわりのあるリフォームを実現します。</p>
            <p class="example__text">浴室は、心からリラックスできる温もりと安らぎに満ちた空間へ、トイレは、清潔感あふれる毎日が気持ちよく過ごせるような空間へと生まれ変わります。</p>
            <!-- <div class="example-subImgs">
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash01a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash02a.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/wash/wash03a.jpg" alt="">
              </div>
            </div> -->

            <div class="example-mainImgs">
              <div class="example__mainImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/bath/wc01.jpg" alt="">
              </div>
              <div class="example__mainImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/bath/wc02.jpg" alt="">
              </div>
            </div>

          </div>
        </section>

        <!-- etc -->
        <section class="example">

          <div class="example-subImgs multiline">
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room01.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room02.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room03.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room04.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room05.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room06.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room07.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room08.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room09.jpg" alt="">
            </div>

            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room10.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room11.jpg" alt="">
            </div>
            <div class="example__subImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room12.jpg" alt="">
            </div>
          </div>

          <div class="example-texts">
            <h3 class="example__title">その他リフォーム<span>- Various Reform -</span></h3>
            <p class="example__text">家族のライフスタイルや暮らしの変化に合わせて、間取り変更や和室から洋室への変更など、多彩なリフォームも承ります。家全体の雰囲気を一新し、家族みんなが心地よく過ごせる、もっと自由で快適な生活空間をお届けします。</p>

            <div class="example-subImgs multiline">

              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room13.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room14.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room15.jpg" alt="">
              </div>

              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room16.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room17.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room18.jpg" alt="">
              </div>

              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room19.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room20.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room21.jpg" alt="">
              </div>

              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room22.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room23.jpg" alt="">
              </div>
              <div class="example__subImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/room/room24.jpg" alt="">
              </div>
            </div>


          </div>
        </section>



      </div>
      <!-- /contents -->

    </div>
  </div>
</section>

<?php get_footer(); ?>