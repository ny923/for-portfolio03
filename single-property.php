<?php
/*
  Template Name: single-property
*/
?>
<?php get_header(); ?>

<!-- ここは詳細！ -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- 下部ついてくるボタン -->
    <div class="property-contact">

      <a href="<?php echo home_url() . '/contact/?propertyName=' . esc_attr(get_the_title()); ?>" class="solid-button">お問い合せ(無料)</a>

      <a href="tel:0272255100" class="border-button">通話はこちら(無料)</a>
    </div>

    <section class="section section-hero lower">
      <div class="section-content row nopad w1000">
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
                <a itemprop="item" href="<?= site_url("property"); ?>/">
                  <span itemprop="name">物件一覧</span>
                </a>
                <meta itemprop="position" content="2" />
              </li>
              <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <span itemprop="name"><?php the_title(); ?></span>
                <meta itemprop="position" content="3" />
              </li>
            </ol>
          </div>

          <!-- カテゴリ -->
          <ul class="">
            <?php
            $cats = get_the_category();
            foreach ($cats as $cat):
              $cat_name = $cat->name;
              $cat_url = get_category_link($cat->term_id);

              // 親カテゴリIDが58のカテゴリを除外
              if ($cat->parent == 58) {
                continue;
              }
            ?>
              <li class="property__category">
                <!-- <a href="<?php echo esc_url($cat_url); ?>"> -->
                <?php echo esc_html($cat_name); ?>
                <!-- </a> -->
              </li>
            <?php endforeach; ?>
          </ul>
          <h1 class="headline__title"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section section-property" id="section-property">

      <div class="section-content w1000 row nopad">
        <div class="property">
          <div class="overview-wrap">

            <!-- newスライダ pc -->
            <div class="swiper-wrap">
              <!-- 20250331 modalに変更 -->
              <!-- modal open + サムネ用 -->
              <?php $fields = SCF::get('property-imgs'); ?>
              <?php $index = 0; // インデックスの初期値
              ?>
              <?php foreach ($fields as $field): ?>
                <?php if (!empty($field['property-img'])): ?>
                  <!-- swiper-slide -->
                  <div class="js-open-modal" data-slide-index="<?php echo $index; ?>">
                    <img src="<?php echo wp_get_attachment_url($field['property-img']); ?>" alt="物件の外観・内観画像" decoding="async">
                  </div>
                  <?php $index++; // インデックスを増やす
                  ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>

            <!-- モーダル -->
            <div class="modal" id="modal">
              <div class="modal__overlay js-close-modal"></div>
              <div class="modal__content">
                <button class="modal__close-btn js-close-modal" aria-label="閉じる">×</button>

                <!-- mainスライダー(swiper + SCF + modal) -->
                <div class="swiper main-slide modal__slider">
                  <div class="swiper-wrapper">

                    <?php $fields = SCF::get('property-imgs'); ?>
                    <?php foreach ($fields as $field): ?>
                      <?php if ($field['property-img']): ?>
                        <div class="swiper-slide modal__slide"><img src="<?php echo wp_get_attachment_url($field['property-img']); ?>" alt="物件の外観・内観画像" decoding="async"></div>
                      <?php else: ?>
                        <div class="swiper-slide modal__slide"><img src="<?php echo esc_url(get_theme_file_uri('assets/img/common/no-image.webp')); ?>" alt="no image" decoding="async"></div>
                      <?php endif; ?>
                    <?php endforeach; ?>

                  </div>
                  <div class="swiper-button__wrap">
                    <div class="swiper-button-prev"></div>
                  </div>
                  <div class="swiper-button__wrap">
                    <div class="swiper-button-next"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="property-inner">
              <!-- 何か情報 戸建て…など -->
              <p class="property__text"><?php echo SCF::get('catch'); ?></p>
              <!-- 金額 -->
              <div class="amount-wrap flex">

                <?php $value = get_post_meta($post->ID, 'amount-note', true); ?>
                <?php if (empty($value)): ?>
                <?php else: ?>
                  <p class="amount__note"><?php echo SCF::get('amount-note'); ?></p>
                <?php endif; ?>

                <p class="property__amount">
                  <span>
                    <?php $num = get_post_meta($post->ID, 'amount', true); ?>
                    <?php if (empty($num)): ?>
                      <span class="comming-soon">近日公開</span>
                    <?php else: ?>
                      <?php echo number_format($num); ?>
                    <?php endif; ?>
                  </span>万円(税込)
                </p>

              </div>

              <div class="property-points">
                <h2 class="property-point__title">ここがポイント</h2>
                <p class="property__point"><?php echo SCF::get('point'); ?></p>
              </div>

              <!-- ローン -->
              <div class="amount-wrap loan flex">
                <div class="loan-wrap">
                  <p class="amount__note">月々の支払い例</p>
                  <p class="property__amount"><span>
                      <?php $num = get_post_meta($post->ID, 'loan', true); ?>
                      <?php if (empty($num)): ?>
                        -
                      <?php else: ?>
                        <?php echo number_format($num); ?>
                      <?php endif; ?>
                    </span>円<br class="sp">(税込)／月</p>
                </div>

                <div class="estimate-wrap flex">
                  <div class="estimate-baloon">
                    <p>ローンの試算は<br class="sp">コチラ</p>
                  </div>

                  <div>
                    <input type="checkbox" id="toggle">
                    <label class="toggle" for="toggle">
                      <img src="<?php echo esc_url(get_theme_file_uri('assets/img/common/calc.svg')); ?>" alt="試算"></label>
                    <form method="post" target="_top" name="loan" class="estimate">
                      <label class="close__btn" for="toggle">×</label>
                      <table>
                        <tr>
                          <th>借入金額</th>
                          <td><input name="pv" id="pv" value="4000" size="" min="1">万円</td>
                        </tr>
                        <tr>
                          <th>融資金利</th>
                          <td><input type="number" name="ir" id="ir" value="0.625" size="" min="0.3">%</td>
                        </tr>
                        <tr>
                          <th>返済期間(年数)</th>
                          <td><input type="number" name="np" id="np" value="50" size="" min="1" max="50">ヶ年</td>
                        </tr>
                      </table>
                      <button type="button" class="square_btn" onclick="a.value = PMT ();">計算</button>
                      <table>
                        <tr>
                          <th>返済年額</th>
                          <td><input name="a" class="satei_result" value="(計算結果)"><span class="red">円</span></td>
                        </tr>
                      </table>
                    </form>
                  </div>

                </div>

              </div>

              <!-- 但し書き -->
              <ul class="amount-cautions">
                <li class="amount__caution">※月々の支払い額は物件価格に対して地方都市銀行【金利：0.85%(変動金利)】【返済期間：35年】【ボーナス払い：なし】【頭金なし】で借り入れをした場合の金額となります。詳しくは弊社スタッフにご相談ください。</li>
                <li class="amount__caution">※諸費用別途</li>
                <li class="amount__caution">※諸費用として融資保証料(フラット35の場合手数料)、登記費用、固定資産税、都市計画税、火災保険料、追加工事費用等が発生致します。詳しくは弊社スタッフにご確認ください。</li>
                <li class="amount__caution">※金利変動により月々の返済額が上下する恐れがあります。</li>
              </ul>

              <div class="member-only">
                <!-- 会員のみ表示 -->
                <?php if (is_user_logged_in()) : ?>

                  <!-- 個々でdlする用 -->
                  <div class="download">
                    <p class="download__text">下記より個々にダウンロードできます(無料)</p>
                    <div class="flex">
                      <?php
                      $resources = SCF::get('each-resources');
                      foreach ($resources as $fields) {
                        // ファイルのURLを取得
                        $url = wp_get_attachment_url($fields['resource']);
                        // ファイル名を取得
                        $file_title = get_the_title($fields['resource']);
                        echo '<a class="download__link" href="' . esc_url($url) . '">' . esc_html($file_title) . '</a>';
                      }
                      ?>
                    </div>
                  </div>

                  <!-- 一式dl -->
                  <?php $fields = SCF::get('resources'); ?>
                  <?php if ($fields): ?>
                    <a href="<?php echo wp_get_attachment_url($fields); ?>" class="solid-button download">資料を一括ダウンロード(無料)</a>
                  <?php else: ?>
                    <!-- 無い時は何も出さない -->
                    <!-- <p class="no-resource">申し訳ございませんが本物件の資料がありません</p> -->
                  <?php endif; ?>

                <?php else: ?>
                  <p class="property-subscribe">会員登録されました仲介業者様は<br>
                    <a href="/regist-profile/">こちらからログイン</a>
                  </p>
                <?php endif; ?>
              </div>

              <div class="property-tel">
                <div class="property__titti">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-titti.webp" alt="お気軽にお問い合わせください" loading="lazy" decoding="async">
                </div>
                <p class="property__text">お問い合わせは下記よりお電話<br>
                  もしくはフォームより</p>
                <a href="tel:0272255100" class="property__number">027-225-5100</a>
              </div>
            </div>
            <!-- //.property-inner -->
          </div>

          <div class="property-inner">
            <section class="property-detail">
              <h2 class="property__title">物件概要</h2>

              <div class="flex">
                <table class="property-table overview">
                  <tbody>
                    <tr>
                      <th class="property__th">間取り</th>
                      <td class="property__td"><?php echo SCF::get('floor-plan'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">土地面積</th>
                      <td class="property__td"><?php echo SCF::get('land-area'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">建物面積</th>
                      <td class="property__td"><?php echo SCF::get('building-area'); ?></td>
                    </tr>

                    <tr>
                      <th class="property__th">交通</th>
                      <td class="property__td"><?php echo SCF::get('access'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">接道状況</th>
                      <td class="property__td"><?php echo SCF::get('road-access'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">私道面積</th>
                      <td class="property__td"><?php echo SCF::get('private-road'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">セットバック</th>
                      <td class="property__td"><?php echo SCF::get('setback'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">階建 / 階</th>
                      <td class="property__td"><?php echo SCF::get('floor'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">国土法提出</th>
                      <td class="property__td"><?php echo SCF::get('land-law'); ?></td>
                    </tr>


                    <tr>
                      <th class="property__th">都市計画</th>
                      <td class="property__td"><?php echo SCF::get('urban-plan'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">周辺施設</th>
                      <td class="property__td"><?php echo SCF::get('nearby'); ?></td>
                    </tr>

                  </tbody>
                </table>

                <table class="property-table overview">
                  <tbody>
                    <tr>
                      <th class="property__th">駐車場</th>
                      <td class="property__td"><?php echo SCF::get('parking'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">車庫区分</th>
                      <td class="property__td"><?php echo SCF::get('garage'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">建ぺい率／容積率</th>
                      <td class="property__td"><?php echo SCF::get('coverage'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">土地権利</th>
                      <td class="property__td"><?php echo SCF::get('land-rights'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">地目</th>
                      <td class="property__td"><?php echo SCF::get('land-use'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">築年月</th>
                      <td class="property__td">
                        <?php echo SCF::get('construction'); ?>
                      </td>
                    </tr>
                    <tr>
                      <th class="property__th">取引態様</th>
                      <td class="property__td"><?php echo SCF::get('transaction'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">引渡可能時期</th>
                      <td class="property__td"><?php echo SCF::get('delivery-possible'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">現況</th>
                      <td class="property__td"><?php echo SCF::get('current'); ?></td>
                    </tr>

                    <tr>
                      <th class="property__th">総棟数</th>
                      <td class="property__td"><?php echo SCF::get('total-building'); ?></td>
                    </tr>
                    <tr>
                      <th class="property__th">建築確認番号</th>
                      <td class="property__td"><?php echo SCF::get('building-num'); ?></td>
                    </tr>

                    <tr>
                      <th class="property__th">その他法令上の制限</th>
                      <td class="property__td"><?php echo SCF::get('restriction'); ?></td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="flex">
                <!-- 設備（カテゴリ） -->
                <div class="property-category">
                  <h3 class="property-category__title">設備</h3>

                  <!-- 20250707 fix -->
                  <?php
                  $post_categories = get_the_category(); // 現在の投稿に紐づくカテゴリを取得
                  $filtered_categories = [];

                  foreach ($post_categories as $cat) {
                    if ($cat->parent == 58) { // 親カテゴリIDが58の子カテゴリだけをフィルター
                      $filtered_categories[] = $cat;
                    }
                  }

                  foreach ($filtered_categories as $cat):
                  ?>
                    <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo esc_html($cat->name); ?></a>
                  <?php endforeach; ?>

                </div>

                <div class="property-notes">
                  <h3 class="property-notes__title">備考</h3>
                  <p class="property__note">
                    <?php echo nl2br(SCF::get('remark')); ?></p>
                </div>
              </div>

            </section>

            <!-- map -->
            <div class="property-map">
              <h3 class="property-map__title">地図</h3>
              <iframe class="property__map" src="<?php echo SCF::get('map'); ?>" width="999" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

      <?php endwhile;
  endif; ?>

        </div>
      </div>
    </section>

    <?php get_footer(); ?>