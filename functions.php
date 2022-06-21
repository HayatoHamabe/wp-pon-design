<?php
function init_func()
{
  add_theme_support("title-tag");
  //　アイキャッチ設定追加
  add_theme_support('post-thumbnails');

  register_post_type('works', [
    'labels' => [
      'name' => '制作実績',
      'singular_name' => '制作実績',
      'add_new' => '制作実績を追加',
      'add_new_item' => '制作実績を追加',
      'edit_item' => '制作実績を編集',
      'new_item' => '制作実績を追加',
      'all_items' => 'すべての制作実績',
      'view_item' => '制作実績を見る',
      'search_items' => '制作実績を探す',
      'not_found' => '制作実績は見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱は空です',
      'parent_item_color' => '',
      'menu_name' => '制作実績'
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => true,
    'supports' => [
      'title',
      'editor',
      'page-attributes',
      'thumbnail'
    ],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-align-left'
  ]);
}
add_action("init", 'init_func');

function mytheme_breadcrumb()
{
  $home = '<a class="p-breadcrumb-list__link" itemprop="item" href=' . esc_url(home_url()) . '>';
  echo
  '<li class="p-breadcrumb-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">' .
    $home .
    '<span itemprop="name">HOME</span></a>
    <meta itemprop="position" content="1" />
    </li>';
  //カスタム投稿タイプ works であるとき
  if (is_post_type_archive('works')) {
    echo '<li class="p-breadcrumb-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
      <span href="news.html" itemprop="item">
        <span itemprop="name">works</span>
      </span>
    </li>
    <meta itemprop="position" content="1" />';
  };
  if (is_singular()) {
    if (is_single()) {
      echo
      '<li class="p-breadcrumb-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">' .
        $home .
        '<span itemprop="name">news</span></a>
        <meta itemprop="position" content="1" />
        </li>';
    }
    the_title('<li class="p-breadcrumb-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <span href="news.html" itemprop="item">
      <span itemprop="name">', '</span></span>
      <meta itemprop="position" content="1" />');
  }
}

// Contact Form 7の自動挿入タグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}
