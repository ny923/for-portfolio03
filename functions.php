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

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head',             'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles',     'print_emoji_styles');
remove_action('admin_print_styles',  'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('template_redirect', 'rest_output_link_header', 11);
add_filter('emoji_svg_url', '__return_false');
add_action('wp', function () {
  // if(is_home() || is_front_page()) return;
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_host_js');
  function my_deregister_scripts()
  {
    wp_deregister_script('wp-embed');
  }
  add_action('wp_footer', 'my_deregister_scripts');
});

// 今は不使用
// add_action('wp', function () {
//   if (is_page('contact'))
//     /*YubinBangoライブラリ*/
//     wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);
//   return;
//   add_filter('wpcf7_load_js', '__return_false');
//   add_filter('wpcf7_load_css', '__return_false');
// });

add_filter('auto_update_plugin', '__return_true');
add_filter('allow_major_auto_core_updates', '__return_true');


// add
//タグごと一覧表示
global $tag_id_list;

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'post'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// ショートコード[product_btn]を登録
add_shortcode('product_btn', 'my_product_btn');
// [product_btn] を返す関数
function my_product_btn()
{
  // 問い合わせフォーム先のURL
  $url = home_url() . '/contact/?productName=' . get_the_title();
  // 問い合わせボタンを返す
  return '<div class="text-center"><a href="' . esc_url($url) . '" class="btn btn-primary">この物件について問い合わせる</a></div>';
}

//自動で物件名が入るように Contact Form 7 のフックに登録
function my_form_tag_filter($tag)
{
  if (! is_array($tag)) {
    return $tag;
  }
  // propertyNameの値を受け取ってContactFormに投げる
  // 複数のパラメーターを受け取る場合は if (){} 部分を複製してパラメーター名を変更すればOK
  if (isset($_GET['propertyName'])) {
    $name = $tag['name'];
    if ($name == 'propertyName') {
      $tag['values'] = (array) $_GET['propertyName'];
    }
  }
  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 11);


//カスタム投稿タイプの検索
add_filter('template_include', 'custom_search_template');
function custom_search_template($template)
{
  if (is_search()) {
    $post_types = get_query_var('post_type');
    foreach ((array) $post_types as $post_type)
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search', $templates);
  }
  return $template;
}


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


/**
 * This is a multiple email example.  Note that your outgoing
 * mail server must support receiving multiple emails as
 * comma separated values for this to be supported.
 */
add_filter('wpmem_notify_addr', function ($email) {
  return 'f.toriizuka@e-stitch.jp, h.abe@e-stitch.jp, re@e-stitch.jp';
});


/**
 * Notification addresses can be changed based on your own
 * crititeria, supposing you know a little PHP.
 */
add_filter('wpmem_notify_addr', function ($email) {

  // Change the email based on your own custom logic.
  if ($some_criteria) {
    $email = 'f.toriizuka@e-stitch.jp';
  }

  return $email;
});


// topのpick up枠※物件 1つも選ばないと表示がバグる※枠が沢山出る
// js使うもの入れられない？機能せず
class Walker_Nav_Menu_Custom extends Walker_Nav_Menu
{
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $classes = empty($item->classes) ? array() : (array)$item->classes;
    $classes[] = 'menu-item-' . $item->ID;
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

    // 不要なIDを削除しliに任意のクラスをつける
    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
    $id = $id ? ' id="' . esc_attr($id) . '"' : '';
    // ↓ .swiper-slide swiper動かず
    $class_names = $class_names ? ' class="property-item "' : '';

    // fav btn 機能せず
    // $output .= $indent . '<li' . $class_names . '><div class="property-check"><p class="property__checkText">問い合わせ・気になる物件に</p></div>';


    $output .= $indent . '<li' . $class_names . '>';
    $atts = array();
    $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
    $atts['href'] = !empty($item->url) ? $item->url : '';
    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }
    $item_output = $args->before;

    // その中にお気に入りボタン※他と同じ作り
    $item_output .= '<div class="category-wrap"><ul class="property-category">';

    // fixカテゴリ 20250407
    $cats = get_the_category($item->object_id);
    foreach ($cats as $cat) {
      $parent_id = $cat->parent;
      if ($parent_id == 58) {
        continue; // 設備カテゴリは出さない
      }
      $item_output .= '<li class="property__category">' . esc_html($cat->name) . '</li>';
    }

    // fav btn 機能せず
    // $item_output .= '</ul><div class="favorite_button">' . get_favorites_button(get_the_ID()) . '</div></div>';

    $item_output .= '</ul></div>';

    $item_output .= '<article class="property-item__inner" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost"><a' . $attributes . '>';

    // タイトル
    $item_output .= '<h3 class="property__title">' . $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after . '</h3>';

    // タイトル下のキャッチ文
    $catch = SCF::get('catch', $item->object_id);
    if ($catch) {
      $item_output .= '<p class="property__text">' . esc_html($catch) . '</p>';
    }

    //サムネイル画像を追加 +外側のflex <div class="flex column">
    $item_output .= '<div class="property__thumbnail">';
    $item_output .= get_the_post_thumbnail($item->object_id, "full", array('class' => 'thumnail-img'), array('alt' => $item->title));
    $item_output .= '</div>';

    // 金額wrapするflex 金額上の文言
    $amount_note = SCF::get('amount-note', $item->object_id);
    $item_output .= '<div class="property-overview"><div class="flex evenly"><div class="amount-wrap"><p class="amount__note">' . esc_html($amount_note) . '</p>';

    // 金額
    $amount = SCF::get('amount', $item->object_id);
    if ($amount) {
      $item_output .= '<p class="property__amount"><span>' . number_format((int) esc_html($amount)) . '</span>万円(税込)</p></div>';
    } else {
      $item_output .= '<p class="property__amount"><span class="comming-soon">近日公開</span></p></div>';
    }

    // loan
    $loan = SCF::get('loan', $item->object_id);
    $item_output .= '<div class="amount-wrap loan"><p class="amount__note">月々の支払い目安額</p>';
    if ($loan) {
      $item_output .= '<p class="property__amount"><span>' . number_format((int) esc_html($loan)) . '</span>円(税込)／月</p></div>';
    } else {
      $item_output .= '<p class="property__amount"><span class="comming-soon">-</span></p></div>';
    }

    // 金額閉じflex div
    $item_output .= '</div>';

    // 金額閉じflex div 間取floor-plan
    // $floor_plan = SCF::get('floor-plan', $item->object_id);
    // $item_output .= '</div><p class="property__text">間取：' . esc_html($floor_plan) . '<br>';

    // 土地land-area
    // $land_area = SCF::get('land-area', $item->object_id);
    // $item_output .= '土地：' . esc_html($land_area) . '<br>';

    // 建物building-area
    // $building_area = SCF::get('building-area', $item->object_id);
    // $item_output .= '建物：' . esc_html($building_area) . '</p>';

    //$item_output .= '</div>';  // <!-- /flex

    // 機能せず(該当の物件名にならず)
    // $item_output .= '</div><a href="' . home_url() . '/contact/?propertyName=' . esc_attr(get_the_title()) . '" class="solid-button">見学予約・お問い合わせ(無料)</a>';

    // last
    $item_output .= '</div></a><a' . $attributes . '" class="solid-button">詳しくみる</a></article>';
    $item_output .= $args->after;

    // swiper動かず
    // $item_output .= '<div class="swiper-pagination"></div>';

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// pick up枠用記述ここまで