<?php
/*
  Template Name: thanks
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">

      <div class="breadcrumbs">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url(); ?>/">
              <span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <!-- <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url("contact"); ?>/">
              <span itemprop="name">お問い合わせ</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url("contact-confirm"); ?>/">
              <span itemprop="name">お問い合わせ入力ご確認</span>
            </a>
            <meta itemprop="position" content="3" />
          </li> -->
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">

            <span itemprop="name"><?php the_title(); ?></span>

            <meta itemprop="position" content="4" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>

    </div>
</section>

<section class="section section-contact" id="section-contact">

  <div class="section-content row w1000">
    <div class="contact form">

      <p class="form__text">お問い合わせ誠にありがとうございます。<br>
        担当の者が確認の上〇〇営業日以内に返信いたしますので
        今しばらくお待ちください。</p>

    </div>
  </div>
</section>

<?php get_footer(); ?>