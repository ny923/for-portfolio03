<!-- 物件一覧ページ全体に出す -->
<section class="search">

    <form role="search" method="get" id="search-form" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="hidden" name="post_type" value="property">

        <section class="section google flex">
            <h3 class="search__sub-title">キーワード検索</h3>
            <input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="キーワードを入力">
            <input type="submit" class="search-btn" value="検索">
        </section>

        <section class="section">
            <h3 class="search__sub-title">種別で探す</h3>
            <ul class="search-list">
                <?php
                $selected_types = (array)($_GET['property_types'] ?? []);
                $types = [
                    '新築戸建'   => 'new-house',
                    '中古戸建'   => 'used-house',
                    '土地'       => 'land',
                    'マンション' => 'mansion'
                ];
                foreach ($types as $label => $slug) :
                    $icon_url = get_template_directory_uri() . "/assets/img/common/icon_{$slug}.png";
                ?>
                    <li class="search-item icon">
                        <input
                            name="property_types[]"
                            id="type-<?php echo $slug; ?>"
                            type="checkbox"
                            value="<?php echo $slug; ?>"
                            <?php checked(in_array($slug, $selected_types)); ?>>
                        <label for="type-<?php echo $slug; ?>">
                            <?php echo $label; ?><br class="pc">
                            <span class="icon-wrapper">
                                <img src="<?php echo $icon_url; ?>" alt="" class="search-icon">
                            </span>
                        </label>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="section">
            <h3 class="search__sub-title">市町村で探す</h3>

            <?php
            $terms = get_terms('area');
            $selected_areas = (array)($_GET['area'] ?? []);

            // $specific_targets = ['吾妻郡高山村', '甘楽郡甘楽町']; // 抜き出したい名前を指定

            // --- 1. リネーム設定（元の名前 => 表示したい名前） ---
            $rename_map = [
                '吾妻郡高山村' => '吾妻郡',
                '甘楽郡甘楽町' => '甘楽郡'
            ];

            $specific_areas = []; // 特定エリア用
            $cities = [];         // 市用
            $towns = [];          // その他（町）用

            // --- 2. 振り分けロジック ---
            foreach ($terms as $term) {
                if (isset($rename_map[$term->name])) {
                    // 特定エリア（リネーム対象）
                    $specific_areas[] = $term;
                } elseif (preg_match('/市$/u', $term->name)) {
                    // 市
                    $cities[] = $term;
                } else {
                    // その他（町）
                    $towns[] = $term;
                }
            }
            ?>

            <ul class="search-list area">
                <?php if (!empty($cities)) : ?>
                    <!-- 市 -->
                    <?php foreach ($cities as $term) :
                        $checked = in_array($term->slug, $selected_areas) ? ' checked' : ''; ?>
                        <li class="search-item">
                            <input type="checkbox" name="area[]" value="<?php echo esc_attr($term->slug); ?>" id="area-<?php echo esc_attr($term->slug); ?>" <?php echo $checked; ?>>
                            <label for="area-<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></label>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>


                <!-- 群 -->
                <?php foreach ($specific_areas as $term) :
                    $checked = in_array($term->slug, $selected_areas) ? ' checked' : '';
                    // リネーム用配列に名前があれば書き換え、なければそのまま
                    $display_name = $rename_map[$term->name] ?? $term->name;
                ?>
                    <li class="search-item">
                        <input type="checkbox" name="area[]" value="<?php echo esc_attr($term->slug); ?>" id="area-<?php echo esc_attr($term->slug); ?>" <?php echo $checked; ?>>
                        <label for="area-<?php echo esc_attr($term->slug); ?>"><?php echo $display_name; ?></label>
                    </li>
                <?php endforeach; ?>
            </ul>

            <?php if (!empty($towns)) : ?>
                <h3 class="search__sub-title">町名で探す</h3>
                <ul class="search-list area">
                    <?php foreach ($towns as $term) :
                        $checked = in_array($term->slug, $selected_areas) ? ' checked' : ''; ?>
                        <li class="search-item">
                            <input type="checkbox" name="area[]" value="<?php echo esc_attr($term->slug); ?>" id="area-<?php echo esc_attr($term->slug); ?>" <?php echo $checked; ?>>
                            <label for="area-<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        </section>

        <section class="section">
            <h3 class="search__sub-title">価格で探す</h3>
            <div class="flex">
                <div class="search-price">
                    <input name="min_price" type="number" value="<?php echo isset($_GET['min_price']) && !is_array($_GET['min_price']) ? esc_attr($_GET['min_price']) : ''; ?>">
                    <span>万円〜</span>
                </div>
                <div class="search-price">
                    <input name="max_price" type="number" value="<?php echo isset($_GET['max_price']) && !is_array($_GET['max_price']) ? esc_attr($_GET['max_price']) : ''; ?>">
                    <span>万円</span>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="search-member-only">
                <input type="checkbox" name="member_only" id="member_only" value="1" <?php checked($_GET['member_only'] ?? '', '1'); ?>>
                <label for="member_only">会員限定物件</label>
            </div>
        </section>

        <input type="submit" class="search-btn" value="検索">
    </form>

</section>