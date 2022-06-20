<?php
function init_func()
{
  add_theme_support("title-tag");
  //　アイキャッチ設定追加
  add_theme_support('post-thumbnails');

  // register_post_type('notification', [
  //   'labels' => [
  //     'name' => 'お知らせ',
  //     'singular_name' => 'お知らせ',
  //     'add_new' => 'お知らせを追加',
  //     'add_new_item' => 'お知らせを追加',
  //     'edit_item' => 'お知らせを編集',
  //     'new_item' => 'お知らせを追加',
  //     'all_items' => 'すべてのお知らせ',
  //     'view_item' => 'お知らせを見る',
  //     'search_items' => 'お知らせを探す',
  //     'not_found' => 'お知らせは見つかりませんでした',
  //     'not_found_in_trash' => 'ゴミ箱は空です',
  //     'parent_item_color' => '',
  //     'menu_name' => 'お知らせ'
  //   ],
  //   'public' => true,
  //   'has_archive' => true,
  //   'hierarchical' => true,
  //   'supports' => [
  //     'title',
  //     'editor',
  //     'page-attributes',
  //     'thumbnail'
  //   ],
  //   'menu_position' => 5,
  //   'menu_icon' => 'dashicons-align-left'
  // ]);
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
  // echo '<li><a href="' . get_bloginfo('url') . '" >HOME</a></li>';
  // echo $sep;
  if (is_singular()) {
    if (is_single()) {
      $news = '<a class="p-breadcrumb-list__link" itemprop="item" href=' . home_url('news') . '>';
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
