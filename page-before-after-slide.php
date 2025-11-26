<?php
/*
  Template Name: before after slide
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


<section class="section section-static" id="section-static">
  <div class="section-content row w1000">
    <div class="static">

      <div class="static-contents before-after">

        <!--to slide 即席 -->
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <style>
          .swiper-button-prev,
          .swiper-button-next {
            color: #fff;
          }
        </style>

        <section class="image-compare-wrap">

          <div class="swiper" id="ba01">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before00.jpg" /></div>
              <div class="swiper-slide"><img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after00.jpg" /></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

          <script>
            const swiper = new Swiper('.swiper', {
              loop: true,
              autoplay: {
                delay: 3000,
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
          </script>

          <!-- <div id="image-compare" class="image-compare">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before00.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after00.jpg" />
          </div>

          <div id="image-compare" class="image-compare">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before01.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after01.jpg" />
          </div> -->

          <div class="compare-texts">
            <h2 class="compare__title">外観</h2>
            <p class="compare__text">経年劣化で汚れた外壁を、クリーム系の色に塗装いたしました。破損していた雨どいの交換を行い、屋根はミルクチョコレートのような色に塗装いたしました。シャッターの洗浄も行っております。</p>
          </div>
        </section>


        <!--
        <section class="image-compare-wrap">
          <div id="image-compare" class="image-compare">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before02.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after02.jpg" />
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">リビング</h2>
            <p class="compare__text">アコーディオンカーテンで仕切られていた空間を、繋げて一部屋にいたしました。ゆったりとした空間に変わり、ダイニングセットやソファが楽々置けるようになりました。壁紙と床の張替えを行い、シンプルな雰囲気に。大きめの掃き出し窓からは柔らかな日差しが差し込みます。</p>
          </div>
        </section>

        <section class="image-compare-wrap">
          <div id="image-compare" class="image-compare">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before03.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after03.jpg" />
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">キッチン</h2>
            <p class="compare__text">古いキッチンは取り外し、新品へ交換いたしました。色はグレー系で統一し、モダンな雰囲気へ。独立型キッチンのため、お料理のニオイがリビングへ広がりづらいです。</p>
          </div>
        </section>

        <section class="image-compare-wrap">
          <div id="image-compare" class="image-compare">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before04.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after04.jpg" />
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">洗面所</h2>
            <p class="compare__text">傷んでしまった洗面台を取り外し、三面鏡付き洗面化粧台へ交換いたしました。鏡の裏は収納になっているので、整髪料や化粧水などの生活用品をしまうことができます。洗濯機置き場の横にあった壁は取り外し、圧迫感の無いように変更。アクセントクロスにストーン調のものを取り入れ、スッキリとした雰囲気へ生まれ変わりました。洗面台の横には、棚などを取り付けることのできるスペースをご用意いたしました。</p>
          </div>
        </section>

        <section class="image-compare-wrap">
          <div id="image-compare" class="image-compare">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before05.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after05.jpg" />
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">浴室</h2>
            <p class="compare__text">タイル張りの古い浴槽を取り外し、システムバスへ変更いたしました。カウンターは取り外して丸洗いすることが可能なので、お掃除もしやすくなりました。ディープグレーの床は、すべりにくい構造になっています。</p>
          </div>
        </section>

        <section class="image-compare-wrap">
          <div class="abreast">
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before06.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after06.jpg" />
            </div>
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before14.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after14.jpg" />
            </div>
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">トイレ</h2>
            <p class="compare__text">1階、2階ともに新品へ交換いたしました。壁紙と床の張替えを行い、清潔感のある明るい空間に変化いたしました。ウォシュレット機能付きです。</p>
          </div>
        </section>

        <section class="image-compare-wrap">
          <div id="image-compare" class="image-compare">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before07.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after07.jpg" />
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">居室</h2>
            <p class="compare__text">2階の和室は洋室へと変更いたしました。隣の和室とつながった構造になっていたのを、壁を造作し2部屋に仕切りました。北側には収納を設置。扉は自由に動かせる仕様になっているので、大きめの荷物も楽々収納できます。</p>
          </div>
        </section>

        <section class="image-compare-wrap">
          <div id="image-compare" class="image-compare ">
            <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before15.jpg" />
            <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after15.jpg" />
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">間取り</h2>
            <p class="compare__text">一部間取り変更を行いました。リビングや寝室は仕切りを外し、一つの広い空間へ。2階の和室は洋室へ変更いたしました。</p>
          </div>
        </section>

        <section class="image-compare-wrap">
          <div class="abreast">
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before08.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after08.jpg" />
            </div>
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before09.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after09.jpg" />
            </div>
          </div>
          <div class="compare-texts">
            <h2 class="compare__title">1階和室</h2>
            <p class="compare__text">畳表替え、壁紙張替え、建具補修</p>
          </div>
        </section>

        <div class="abreast">
          <section class="image-compare-wrap">
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before10.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after10.jpg" />
            </div>
          </section>
          <section class="image-compare-wrap">
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before11.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after11.jpg" />
            </div>
          </section>
        </div>

        <div class="abreast">
          <section class="image-compare-wrap">
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before12.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after12.jpg" />
            </div>
          </section>
          <section class="image-compare-wrap">
            <div id="image-compare" class="image-compare">
              <img class="before" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/before13.jpg" />
              <img class="after" src="<?php echo get_template_directory_uri(); ?>/assets/img/before-after/after13.jpg" />
            </div>
          </section>
        </div> -->

      </div>
      <!-- /contents -->

    </div>
  </div>
</section>

<?php get_footer(); ?>