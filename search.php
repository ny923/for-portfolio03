<?php
/*
  Template Name: archive-property
*/
?>

<?php get_header(); ?>
<!-- 検索結果一覧※実質物件一覧ページ -->
<main class="site-main archive" id="site-main">

  <section class="section section-hero lower" id="hero">
    <div class="section-content">
      <div class="content">
        <div class="hero">
          <h1 class="hero__catch"><span>買いたい</span><br>物件検索</h1>
          <?php get_template_part('template-parts/hero-numProperty'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-property" id="section-property">
    <!-- w960 -->
    <div class="section-content row ">
      <div class="headline">

        <!-- パンくず -->
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
              <span itemprop="name">買いたい物件検索</span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </div>
      </div>

      <div class="content">
        <div class="property">

          <?php if (have_posts()) : ?>

            <!-- ソート 検索結果用はべた書き -->
            <?php
            $search_query = get_search_query();
            $post_type = get_query_var('post_type') ? get_query_var('post_type') : 'property';
            ?>

            <form method="get" action="<?php echo esc_url(home_url('/')); ?>" class="sort" id="sort-form">
              <input type="hidden" name="s" value="<?php echo esc_attr($search_query); ?>">
              <input type="hidden" name="post_type" value="<?php echo esc_attr($post_type); ?>">

              <div class="sort-container">
                <span class="sort-label">並び替え</span>

                <div class="sort-item">
                  <select name="sort" class="js-sort-select" onchange="submitSortForm(this)">
                    <option value="" disabled <?php echo !isset($_GET['sort']) ? 'selected' : ''; ?>>新着・更新順</option>
                    <option value="date_desc" <?php selected($_GET['sort'] ?? '', 'date_desc'); ?>>新着順</option>
                    <option value="modified_desc" <?php selected($_GET['sort'] ?? '', 'modified_desc'); ?>>更新順</option>
                  </select>
                </div>

                <div class="sort-item">
                  <select name="sort" class="js-sort-select" onchange="submitSortForm(this)">
                    <option value="" disabled <?php echo !isset($_GET['sort']) ? 'selected' : ''; ?>>価格順</option>
                    <option value="price_asc" <?php selected($_GET['sort'] ?? '', 'price_asc'); ?>>安い順</option>
                    <option value="price_desc" <?php selected($_GET['sort'] ?? '', 'price_desc'); ?>>高い順</option>
                  </select>
                </div>

                <div class="sort-item">
                  <select name="sort" class="js-sort-select" onchange="submitSortForm(this)">
                    <option value="" disabled <?php echo !isset($_GET['sort']) ? 'selected' : ''; ?>>築年数</option>
                    <option value="age_asc" <?php selected($_GET['sort'] ?? '', 'age_asc'); ?>>古い順</option>
                    <option value="age_desc" <?php selected($_GET['sort'] ?? '', 'age_desc'); ?>>新しい順</option>
                  </select>
                </div>

                <div class="sort-item">
                  <select name="member_only" onchange="this.form.submit()">
                    <option value="" disabled <?php echo !isset($_GET['sort']) ? 'selected' : ''; ?>>会員限定</option>
                    <option value="1" <?php selected($_GET['member_only'] ?? '', '1'); ?>>会員限定のみ</option>
                    <option value="0" <?php selected($_GET['member_only'] ?? '', '0'); ?>>すべて表示</option>
                  </select>
                </div>
              </div>

              <?php
              // 他の検索条件を引き継ぐ処理はそのまま
              foreach ($_GET as $key => $value) {
                if (in_array($key, ['s', 'post_type', 'sort', 'member_only']) || empty($value)) continue;
                if (is_array($value)) {
                  foreach ($value as $v) {
                    echo '<input type="hidden" name="' . esc_attr($key) . '[]" value="' . esc_attr($v) . '">';
                  }
                } else {
                  echo '<input type="hidden" name="' . esc_attr($key) . '" value="' . esc_attr($value) . '">';
                }
              }
              ?>

              <script>
                function submitSortForm(currentSelect) {
                  // 全てのソート用セレクトボックスを取得
                  const selects = document.querySelectorAll('.js-sort-select');

                  selects.forEach(select => {
                    // 現在操作したもの「以外」で、かつ値が空のものの name を消す
                    // これにより、URLに余分な sort= が付かなくなります
                    if (select !== currentSelect) {
                      select.name = "";
                    }
                  });

                  // フォームを送信
                  currentSelect.form.submit();
                }
              </script>
            </form>

            <ul class="property-list">
              <?php while (have_posts()) : the_post(); ?>

                <?php
                // --- ランダム人間の設定 ---
                // 1〜8は画像あり、9〜12は「なし」にする（「なし」の確率を調整できます）
                $random_num = rand(1, 20);
                $human_class = '';

                if ($random_num <= 8) {
                  // 2桁揃え（human01, human02...）にするなら sprintf を使うと便利です
                  $human_class = 'is-human-' . sprintf('%02d', $random_num);
                } else {
                  $human_class = 'is-human-none';
                }
                ?>

                <?php $categories = get_the_category();
                $type_classes = array();
                if (!empty($categories)) {
                  foreach ($categories as $cat) {
                    // カテゴリー名（またはスラッグ）で判定
                    $cat_name = $cat->name;
                    if ($cat_name === '新築戸建') {
                      $type_classes[] = 'new-house';
                    } elseif ($cat_name === '中古戸建') {
                      $type_classes[] = 'used-house';
                    } elseif ($cat_name === '土地') {
                      $type_classes[] = 'land';
                    } elseif ($cat_name === 'マンション') {
                      $type_classes[] = 'mansion';
                    }
                  }
                }
                // 2. 配列を半角スペースで区切った文字列に変換
                $type_class_attr = implode(' ', array_unique($type_classes));
                ?>

                <li class="property-item" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
                  <a href="<?php the_permalink(); ?>" class="swiper-slide-item">
                    <div class="property__img <?php echo $human_class; ?>">

                      <!-- 限定のみに鍵アイコン -->
                      <?php if (in_category(10)) : ?>
                        <div class="icon-only">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-only.png" alt="members only">
                        </div>
                      <?php endif; ?>

                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dammy.jpg" alt="no image">
                      <?php endif; ?>
                    </div>
                    <?php
                    $post_time = get_the_time('U');
                    $one_month_ago = strtotime('-1 month');
                    if ($post_time > $one_month_ago) {
                      echo '<p class="new">NEW</p>';
                    }
                    ?>
                    <div class="property-texts">
                      <p class="classify <?php echo esc_attr($type_class_attr); ?>"><?php echo get_post_meta(get_the_ID(), 'property_type', true); ?></p>

                      <p class="name"><?php echo get_post_meta(get_the_ID(), 'property_name', true); ?></p>

                      <table class="property-detail">
                        <tbody>
                          <tr>
                            <th class=" property__title">住所</th>
                            <td class="property__detail"><?php echo get_post_meta(get_the_ID(), 'address', true); ?></td>
                          </tr>
                          <tr>
                            <th class="property__title">価格</th>
                            <td class="property__detail">
                              <p class=" price">
                                <?php
                                $price = get_post_meta(get_the_ID(), 'price', true);
                                if (!empty($price) && is_numeric($price)) {
                                  if ($price >= 10000) {
                                    $man_price = $price / 10000;
                                    echo number_format($man_price) . '<span>万</span>';
                                  } else {
                                    echo number_format($price);
                                  }
                                }
                                ?><span>円</span></p>
                            </td>
                          </tr>
                          <tr>
                            <th class="property__title">間取</th>
                            <td class="property__detail"><?php echo get_post_meta(get_the_ID(), 'floor', true); ?></td>
                          </tr>
                          <tr>
                            <th class="property__title">築年</th>
                            <td class="property__detail"><?php echo get_post_meta(get_the_ID(), 'property_age', true); ?></td>
                          </tr>
                        </tbody>
                      </table>

                      <div class="flex">
                        <!-- 「中庭」…等は一旦保留 -->
                        <ul>
                          <li></li>
                        </ul>
                        <?php echo do_shortcode('[favorite_button]'); ?>
                      </div>

                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php else : ?>
              <p>現在、該当する物件はございません。</p>
            <?php endif; ?>
            </ul>

            <!-- ページネーション -->
            <div class="pagination">
              <?php
              echo paginate_links(array(
                'total' => $wp_query->max_num_pages,
                'prev_text' => '＜',
                'next_text' => '＞',
              ));
              ?>
            </div>


            <a class="back-btn" href="<?= site_url(); ?>/property/">検索に戻る</a>
        </div>
      </div>
  </section>


  <?php get_footer(); ?>