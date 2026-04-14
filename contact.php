<?php
/*
Template Name:contact
*/
?>
<?php get_header(); ?>

<main class="site-main" id="site-main">

  <section class="section section-hero lower" id="hero">
    <div class="section-content">
      <div class="content">
        <div class="hero">

          <h1 class="hero__catch"><?php the_title(); ?></h1>
        </div>

      </div>
    </div>
  </section>

  <section class="section section-contact" id="section-contact">
    <div class="section-content row w960">
      <div class="headline">

        <!-- パンくず -->
        <div class="breadcrumbs">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope
              itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?= site_url(); ?>/">
                <span itemprop="name">ホーム</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope
              itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?php the_permalink(); ?>/">
                <span itemprop="name"><?php the_title(); ?></span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>

        <!-- <h1 class="headline__title"><?php the_title(); ?></h1> -->

      </div>

      <div class="content">
        <div class="contact">
          <?php the_content();
          ?>
        </div>
      </div>
  </section>

  <!-- お気に入り物件用 -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // 1. URLのパラメータ（?items=...）を取得
      const urlParams = new URLSearchParams(window.location.search);
      const items = urlParams.get('items'); // 'items' という名前のパラメータを探す

      if (items) {
        // 2. CF7のテキストエリア（id="selected-posts"）を取得
        const textArea = document.getElementById('selected-posts');

        if (textArea) {
          // 3. デコードしてテキストエリアに流し込む
          // カンマを改行に変換すると見やすくなります
          textArea.value = decodeURIComponent(items).replace(/、/g, '\n');
        }
      }
    });
  </script>

  <?php get_footer(); ?>