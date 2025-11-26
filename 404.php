<?php
/*
  Template Name: not found 404
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
              <span itemprop="name">ホーム</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <span itemprop="name">404(該当ページなし)</span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div> <!-- /breadcrumbs -->

      <h1 class="headline__title"><b>404 NOT FOUND</b><small>該当リンクなし</small></h1>

    </div>
</section>

<section class="section section-notFound" id="section-notFound">
  <div class="section-content row w1000">

    <div class="column-contents notFound">

      <h2 class="column__title">あなたがアクセスしようとしたページは削除されたか<br class="pc">URLが変更されています。</h2>

      <div class="notFound__titti">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/titti-bow.svg" alt="チッチ" decoding="async">
      </div>

      <p class="notFound__text">いつも当サイトをご覧頂きありがとうございます。<br>
        大変申し訳ないのですが、あなたがアクセスしようとしたページは削除されたかURLが変更されています。<br>
        お手数をおかけしますが、以下の方法からもう一度目的のページをお探し下さい。</p>

      <ol class="column-list">
        <li class="column-item">
          <p class="notFound__text"><a href="<?= site_url(); ?>">トップページへ戻る</a></p>
          <p>リンクをクリックしてトップページからお探しください。</p>
        </li>
        <li class="column-item">
          <p class="notFound__text">検索して見つける</p>
          <p class="notFound__text">検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
          <div class="notFound-search">
            <?php get_search_form(); ?>
          </div>
        </li>

        <li class="column-item">
          <p class="notFound__text">最新コラムを閲覧する</p>


          <?php query_posts('posts_per_page=4&paged=' . $paged); ?>

          <ul class="in-column-list">
            <?php if (have_posts()) :
              while (have_posts()) : the_post();
            ?>
                <li class="in-column-item">
                  <a href="<?php the_permalink(); ?>">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
                          <h3 class="column__title" itemprop="name headline">
                            <?php if (mb_strlen($post->post_title) > 25) {
                              $title = mb_substr($post->post_title, 0, 25);
                              echo $title . "…";
                            } else {
                              echo $post->post_title;
                            } ?></h3>

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
                          } ?></p>
                      </div>

                    </article>
                  </a>
                </li>
              <?php endwhile;
            else : ?>
              <p class="notFound__text">最新コラムがありませんでした</p>
            <?php endif;
            ?>
          </ul>
          <?php wp_reset_query(); ?>
        </li>
      </ol>
      <a class="more-link" href="/column/">一覧を見る</a>

    </div>
  </div>
</section>

<?php get_footer(); ?>