<?php

/**
 * 物件一覧・検索結果用 ソートテンプレート
 */
// 現在のクエリ情報を取得
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
                <option value="" disabled <?php echo !in_array($_GET['sort'] ?? '', ['date_desc', 'modified_desc']) ? 'selected' : ''; ?>>新着・更新順</option>
                <option value="date_desc" <?php selected($_GET['sort'] ?? '', 'date_desc'); ?>>新着順</option>
                <option value="modified_desc" <?php selected($_GET['sort'] ?? '', 'modified_desc'); ?>>更新順</option>
            </select>
        </div>

        <div class="sort-item">
            <select name="sort" class="js-sort-select" onchange="submitSortForm(this)">
                <option value="" disabled <?php echo !in_array($_GET['sort'] ?? '', ['price_asc', 'price_desc']) ? 'selected' : ''; ?>>価格順</option>
                <option value="price_asc" <?php selected($_GET['sort'] ?? '', 'price_asc'); ?>>安い順</option>
                <option value="price_desc" <?php selected($_GET['sort'] ?? '', 'price_desc'); ?>>高い順</option>
            </select>
        </div>

        <div class="sort-item">
            <select name="sort" class="js-sort-select" onchange="submitSortForm(this)">
                <option value="" disabled <?php echo !in_array($_GET['sort'] ?? '', ['age_asc', 'age_desc']) ? 'selected' : ''; ?>>築年数</option>
                <option value="age_asc" <?php selected($_GET['sort'] ?? '', 'age_asc'); ?>>古い順</option>
                <option value="age_desc" <?php selected($_GET['sort'] ?? '', 'age_desc'); ?>>新しい順</option>
            </select>
        </div>

        <div class="sort-item">
            <select name="member_only" onchange="this.form.submit()">
                <option value="" disabled <?php echo !isset($_GET['member_only']) || $_GET['member_only'] === '' ? 'selected' : ''; ?>>会員限定</option>
                <option value="1" <?php selected($_GET['member_only'] ?? '', '1'); ?>>会員限定のみ</option>
                <option value="0" <?php selected($_GET['member_only'] ?? '', '0'); ?>>すべて表示</option>
            </select>
        </div>

    </div>

    <?php
    // その他の検索条件（エリア・間取りなど）を引き継ぐ
    foreach ($_GET as $key => $value) {
        // すでに隠し要素やセレクトボックスで存在しているキーはスキップ
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
        /**
         * 同じ 'name="sort"' を持つセレクトボックスが複数あるため、
         * 送信直前に選択されていない方の name を消去して重複を防ぐ処理
         */
        function submitSortForm(ele) {
            const selects = document.querySelectorAll('.js-sort-select');
            selects.forEach(sel => {
                if (sel !== ele) {
                    sel.name = ""; // 変更されていないセレクトボックスのnameを一時的に消す
                }
            });
            ele.form.submit();
        }
    </script>
</form>