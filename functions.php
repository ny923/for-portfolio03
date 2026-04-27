<?php
add_theme_support('post-thumbnails');
add_filter('wp_calculate_image_srcset_meta', '__return_null');
//画像アップロード時サムネイルを作らない
function not_create_image($sizes)
{
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  unset($sizes['medium_large']);
  unset($sizes['large']);
  unset($sizes['post-thumbnail']); # 1200x800
  unset($sizes['1536x1536']);
  unset($sizes['twentytwenty-fullscreen']); # 1980x1320
  unset($sizes['2048x2048']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');


//タグごと一覧表示
global $tag_id_list;

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'column'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// アーカイブページ（カテゴリ一覧）にカスタム投稿タイプ「property」を含める
function add_property_to_category_archive($query)
{
  if (! is_admin() && $query->is_main_query() && $query->is_category()) {
    $query->set('post_type', array('post', 'property'));
  }
}
add_action('pre_get_posts', 'add_property_to_category_archive');

// 郵便番号で自動入力
wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);


// メールアドレスフィールドのバリデーションを追加
add_filter('wpcf7_validate_email', 'custom_email_confirmation_validation', 10, 2);
add_filter('wpcf7_validate_email*', 'custom_email_confirmation_validation', 10, 2);

function custom_email_confirmation_validation($result, $tag)
{

  // フォームタグの名前を確認して、確認用メールアドレスフィールドのバリデーションを行う
  if ($tag->name == 'confirm-email') {
    // メインのメールアドレスと確認用メールアドレスを取得
    $your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
    $confirm_email = isset($_POST['confirm-email']) ? trim($_POST['confirm-email']) : '';

    // メールアドレスが一致しない場合、エラーメッセージを追加
    if ($your_email !== $confirm_email) {
      $result->invalidate($tag, 'メールアドレスが一致しません');
    }
  }
  return $result;
}


// 表示中の投稿のカスタムフィールド「property_name」をContact Form 7の項目に自動セット
function my_form_tag_filter($tag)
{
  if (! is_array($tag)) {
    return $tag;
  }

  // フォーム側の項目名が「propertyName」の場合に処理を実行
  if ($tag['name'] == 'propertyName') {
    // 現在表示している投稿のIDを取得
    $post_id = get_the_ID();

    if ($post_id) {
      // カスタムフィールド「property_name」の値を取得
      $custom_value = get_post_meta($post_id, 'property_name', true);

      // 値が存在する場合、フォームの初期値としてセット
      if ($custom_value) {
        $tag['values'] = (array) $custom_value;
      }
    }
  }

  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 11);


// 投稿・固定ページ一覧にアイキャッチカラムを追加
function add_columns_thumbnail($columns)
{
  $columns['thumbnail'] = "アイキャッチ";
  echo '<style>.fixed .column-thumbnail img {width: 100%; height: auto;}</style>';
  return $columns;
}

// アイキャッチカラムに画像を表示
function add_column_row_thumbnail($column_name, $post_id)
{
  if ($column_name == 'thumbnail') {
    if (has_post_thumbnail($post_id)) {
      echo get_the_post_thumbnail($post_id, array(60, 60)); // サムネイルサイズ
    } else {
      echo '―'; // アイキャッチ未設定の場合
    }
  }
}

// カスタム投稿タイプの場合
add_filter('manage_property_posts_columns', 'add_columns_thumbnail');
add_action('manage_property_posts_custom_column', 'add_column_row_thumbnail', 10, 2);


// WP-Members同期補助用
/**
 * 物件の公開ステータスをWP-Membersの制限に強制反映させる補助関数
 */
function sync_property_access_locks()
{
  $args = array(
    'post_type'      => 'property',
    'posts_per_page' => -1,
    'post_status'    => 'any'
  );
  $properties = get_posts($args);

  foreach ($properties as $post) {
    // 例：「一般公開物件」という名前のタームを持っているかチェック
    if (has_term('一般公開物件', 'category', $post->ID)) {
      update_post_meta($post->ID, '_wpmembers_block', '0'); // 開錠
    } else {
      update_post_meta($post->ID, '_wpmembers_block', '1'); // 施錠
    }
  }
}
// WP-Members同期補助用ここまで


/**
 * Contact Form 7 特定の選択肢で住所を必須にする
 */
add_filter('wpcf7_validate_text', 'custom_address_validation', 20, 2);
add_filter('wpcf7_validate_text*', 'custom_address_validation', 20, 2);

function custom_address_validation($result, $tag)
{
  $name = $tag->name;

  // 「ご住所」の項目名（address）に合わせる
  if ($name == 'address') {
    // ラジオボタンの項目名（about）と選択値を取得
    $radio_value = isset($_POST['about']) ? $_POST['about'] : '';
    $address_value = isset($_POST['address']) ? $_POST['address'] : '';

    // 「売却の相談をしたい」が選択されていて、住所が空の場合
    if ($radio_value == '売却の相談をしたい' && empty($address_value)) {
      $result->invalidate($tag, "売却の相談をご希望の場合は、ご住所を入力してください。");
    }
  }

  return $result;
}


/**
 * 1. 検索キーワードの対象を拡張
 */
function my_posts_search($search, $wp_query)
{
  global $wpdb;

  // 管理画面やメインクエリ以外、検索ではない場合は何もしない
  if (!$wp_query->is_main_query() || !$wp_query->is_search() || is_admin()) {
    return $search;
  }

  $s = $wp_query->get('s');
  if (empty($s)) return $search;

  $search = "";
  // 全角スペースを半角に変換して分割
  $keywords = explode(' ', str_replace('　', ' ', $s));

  foreach ($keywords as $keyword) {
    if (!empty($keyword)) {
      $esc_keyword = '%' . $wpdb->esc_like($keyword) . '%';
      $search .= " AND (
                {$wpdb->posts}.post_title LIKE '{$esc_keyword}'
                OR {$wpdb->posts}.post_content LIKE '{$esc_keyword}'
                OR {$wpdb->posts}.post_excerpt LIKE '{$esc_keyword}'
                OR EXISTS (
                    SELECT 1 FROM {$wpdb->postmeta}
                    WHERE {$wpdb->postmeta}.post_id = {$wpdb->posts}.ID
                    AND meta_value LIKE '{$esc_keyword}'
                    AND meta_key NOT LIKE '\_%'
                )
            )";
    }
  }

  return $search;
}
add_filter('posts_search', 'my_posts_search', 10, 2);


/**
 * 2. 物件検索およびアーカイブのクエリ設定（絞り込みロジック）
 */
function my_property_query_settings($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  // 検索結果または物件アーカイブページの場合
  if ($query->is_search() || is_post_type_archive('property')) {

    $query->set('post_type', 'property');
    $query->set('posts_per_page', 9);

    $meta_query = array('relation' => 'AND');
    $tax_query = array('relation' => 'AND');

    // 1. 物件種別（カテゴリースラッグで判定：土地、マンション等にまとめるため）
    if (!empty($_GET['property_types'])) {
      $tax_query[] = array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => (array)$_GET['property_types'],
        'operator' => 'IN',
      );
    }

    // 2. エリア（タクソノミー：area）
    if (!empty($_GET['area'])) {
      $tax_query[] = array(
        'taxonomy' => 'area',
        'field'    => 'slug',
        'terms'    => (array)$_GET['area'],
        'operator' => 'IN',
      );
    }

    // 3. 間取り（カスタムフィールド：floor）
    if (!empty($_GET['floors'])) {
      $meta_query[] = array(
        'key'     => 'floor',
        'value'   => (array)$_GET['floors'],
        'compare' => 'IN',
      );
    }

    // 4. 価格（カスタムフィールド：price）
    $min = !empty($_GET['min_price']) ? intval($_GET['min_price']) * 10000 : 0;
    $max = !empty($_GET['max_price']) ? intval($_GET['max_price']) * 10000 : 0;
    if ($min > 0 || $max > 0) {
      $price_q = array('key' => 'price', 'type' => 'NUMERIC');
      if ($min > 0 && $max > 0) {
        $price_q['value'] = array($min, $max);
        $price_q['compare'] = 'BETWEEN';
      } elseif ($min > 0) {
        $price_q['value'] = $min;
        $price_q['compare'] = '>=';
      } else {
        $price_q['value'] = $max;
        $price_q['compare'] = '<=';
      }
      $meta_query[] = $price_q;
    }

    // 5. 会員限定物件
    if (!empty($_GET['member_only'])) {
      $meta_query[] = array(
        'key'     => '_wpmembers_block',
        'value'   => '1',
        'compare' => '=',
      );
    }

    // 6. ソート設定
    $sort = $_GET['sort'] ?? '';
    switch ($sort) {
      case 'price_asc':
        $query->set('meta_key', 'price');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        break;
      case 'price_desc':
        $query->set('meta_key', 'price');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'DESC');
        break;
      case 'age_asc':  // 築年古い順
        $query->set('meta_key', 'property_age');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'ASC');
        break;
      case 'age_desc':  // 築年新しい順
        $query->set('meta_key', 'property_age');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'DESC');
        break;
      // case 'date_desc': // 新着順
      //   $query->set('orderby', 'date');
      //   $query->set('order', 'DESC');
      //   break;
      case 'modified_desc': // 更新順
        $query->set('orderby', 'modified');
        $query->set('order', 'DESC');
        break;
      default:
        $query->set('orderby', 'date');
        $query->set('order', 'DESC');
        break;
    }
    // 最後に中身がある場合のみクエリをセット
    if (count($tax_query) > 1) {
      $query->set('tax_query', $tax_query);
    }
    if (count($meta_query) > 1) {
      $query->set('meta_query', $meta_query);
    }

    // 検索キーワード(s)がある場合、投稿タイプを強制的に property に固定
    if ($query->is_search()) {
      $query->set('post_type', 'property');
    }
  }
}
add_action('pre_get_posts', 'my_property_query_settings');
// 検索用コードここまで



// mp-members 会員登録画面からユーザー名を取り除く
add_filter('wpmem_register_form_rows', function ($rows) {
  unset($rows['username']);
  return $rows;
});

// メールアドレスからユーザー名を作成する
add_filter('wpmem_pre_validate_form', function ($fields) {

  // ユーザー名としてメールの先頭を抽出
  $parts = explode("@", $fields['user_email']);
  $fields['username'] = $parts[0];
  return $fields;
});

// 登録者(購読者)のログインを禁止にする
add_action('auth_redirect', 'subscriber_go_to_home');
function subscriber_go_to_home($user_id)
{
  $user = get_userdata($user_id);
  if (!$user->has_cap('edit_posts')) {
    wp_redirect(get_home_url());
    exit();
  }
}

// 登録者(購読者) WPバーを出させない
if (! current_user_can('delete_users')) {
  show_admin_bar(false);
}


// WP members 新規登録通知を鳥居塚さん達へ
/**
 * This is a single email example.  To change the
 * notification address just return the filtered result.
 */
add_filter('wpmem_notify_addr', function ($email) {
  return 'f.toriizuka@e-stitch.jp';
});


// 物件詳細 zipから住所を出す
/**
 * 郵便番号から住所を取得する関数
 */
function get_address_by_zip($zip_code)
{
  if (empty($zip_code)) return '郵便番号が未入力です';

  // ハイフンを除去して数字のみにする
  $zip_code = str_replace('-', '', $zip_code);

  // APIのURL（zipcloudを利用）
  $url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . esc_attr($zip_code);

  // APIからデータを取得
  $response = wp_remote_get($url);

  // エラーチェック
  if (is_wp_error($response)) {
    return '住所を取得できませんでした';
  }

  $body = wp_remote_retrieve_body($response);
  $data = json_decode($body, true);

  // 住所が見つかった場合
  if (!empty($data['results'])) {
    $res = $data['results'][0];
    // 都道府県 + 市区町村 + 町域名 を結合
    return $res['address1'] . $res['address2'] . $res['address3'];
  }

  return '該当する住所が見つかりませんでした';
}


// wp members
add_action('template_redirect', function () {
  // WP-Membersが有効であり、かつ現在のページに「制限(Block)」がかかっているか確認
  if (function_exists('wpmem_is_blocked') && wpmem_is_blocked()) {

    // ユーザーがログインしていない場合
    if (! is_user_logged_in()) {

      // --- 設定エリア ---
      $redirect_url = home_url('/create-account/'); // リダイレクト先のURL（例：ログインページ）
      // -----------------

      wp_redirect($redirect_url);
      exit;
    }
  }
});
