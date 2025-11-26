<?php
/*
  Template Name: contact-confirm
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
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url("contact"); ?>/">
              <span itemprop="name">お問い合わせ</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">

            <span itemprop="name"><?php echo get_the_title(); ?></span>

            <meta itemprop="position" content="3" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php echo get_the_title(); ?></h1>

    </div>
</section>

<section class="section section-contact" id="section-contact">

  <div class="section-content row w1000">
    <div class="contact form confirm">

      <?php echo do_shortcode('[contact-form-7 id="aeb9d90" title="お問い合わせ入力確認用"]'); ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>