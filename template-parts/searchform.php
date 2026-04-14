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
            <h3 class="search__sub-title">エリアで探す</h3>
            <ul class="search-list area">
                <?php
                $terms = get_terms('area');
                $selected_areas = (array)($_GET['area'] ?? []);
                foreach ($terms as $term) {
                    $checked = in_array($term->slug, $selected_areas) ? ' checked' : '';
                    echo '<li class="search-item">';
                    echo '<input type="checkbox" name="area[]" value="' . esc_attr($term->slug) . '" id="area-' . esc_attr($term->slug) . '"' . $checked . '>';
                    echo '<label for="area-' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</label>';
                    echo '</li>';
                }
                ?>
            </ul>
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