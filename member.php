<?php
/*
  Template Name: member
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

<section class="section section-member" id="section-member">

  <div class="section-content row w1000">
    <div class="member form">

      <?php the_content(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>