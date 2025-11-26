<?php
/*
  Template Name: assessment
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content">
    <div class="headline">

      <!-- パンくず -->
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

            <span itemprop="name"><?php echo get_the_title(); ?></span>

            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>
      <h1 class="headline__title"><?php echo get_the_title(); ?></h1>
    </div>
</section>

<section class="section section-assessment" id="section-assessment">
  <div class="section-content row w1000">
    <div class="assessment form">

      <?php echo do_shortcode('[contact-form-7 id="9259d0c" title="簡単査定フォーム" html_class="h-adr"]'); ?>

      <a href="/privacy-policy/" class="form__textLink">個人情報の取り扱いについて</a>


    </div>
  </div>
</section>

<?php get_footer(); ?>