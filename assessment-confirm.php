<?php
/*
  Template Name: assessment-confirm
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
            <a itemprop="item" href="<?= site_url("assessment"); ?>/">
              <span itemprop="name">簡単査定フォーム</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url("assessment-confirm"); ?>/">
              <span itemprop="name"><?php echo get_the_title(); ?></span>
            </a>
            <meta itemprop="position" content="3" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php echo get_the_title(); ?></h1>

    </div>
</section>

<section class="section section-assessment" id="section-assessment">

  <div class="section-content row w1000">
    <div class="assessment form confirm">

      <?php echo do_shortcode('[contact-form-7 id="7bad7d8" title="簡単査定フォーム入力確認用"]'); ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>