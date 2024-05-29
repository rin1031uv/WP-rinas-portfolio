<?php
function custom_theme_support() {
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ));
//テーマサポート
  add_theme_support( 'menus' );
  add_theme_support( 'title-tag' );
  register_nav_menus(
    array (
      'main-menu' => 'メインメニュー',
      'footer' => 'フッターメニュー'
    )
  );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'editor-styles' ); //エディタスタイル有効化
  add_editor_style();
}
//実行
add_action('after_setup_theme', 'custom_theme_support');


//リンク系
function wpbeg_script() {
  //googleフォント読み込み
  wp_enqueue_style('delaney', 'fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@400;500;600;700&display=swap', array(), "");
  //FontAwesome読み込み
  wp_enqueue_script('FontAwesome', '//kit.fontawesome.com/b5c2f07411.js', array(), "", true);
  //メインのstyleシート読み込み
  wp_enqueue_style('my-style',get_theme_file_uri('/css/style.css'), array(), '1.0.0');
  wp_enqueue_style('portfolio', get_theme_file_uri('style.css'), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wpbeg_script');
//JavaScript読み込み
function my_scripts() {
  //GSAP CDN
  wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js', array(), "", true);
  //GSAP ScrollTrigger
  wp_enqueue_script('gsapscrolltrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js', array(), "", true);
  //JavaScript読み込み
  wp_enqueue_script('jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);
  wp_enqueue_script('main-script', get_stylesheet_directory_uri() .'/js/script.js', array('jquery-min-js'), '1.0.0', true);
  //Masonry plugin CDN
  wp_enqueue_script('masonry', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), "", true);
  //imageLoaded CDN
  wp_enqueue_script('imagesloaded', '//unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js', array(), "", true);
}
add_action('wp_enqueue_scripts', 'my_scripts');

//WordPressに登録されているjQueryを出力させない
function my_scripts_method() {
  wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

//FontAwesomeを読み込むための記述
add_filter('script_loader_tag', 'custom_script_loader_tag', 10, 2);
function custom_script_loader_tag($tag, $handle) {
  if($handle !== 'FontAwesome') {
    return $tag;
  }
  return str_replace('></script','crossorigin="anonymous"></script>', $tag);
}

//絶対パス→相対パス
function make_href_root_relative($input) {
  return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME']. '/!', '/', $input);
}
//パーマリンク絶対パス→相対パス
function root_relative_permalinks($input) {
  return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks');

//archive-blogの設定
//投稿→ブログに変更
function change_menu_label() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name. '一覧';
  $submenu['edit.php'][10][0] = '新しい' .$name;
}
function change_object_label() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name. 'の新規追加';
  $labels->edit_item = $name. 'の編集';
  $labels->new_item = '新規' .$name;
  $labels->view_item = $name. 'を表示';
  $labels->search_items = $name. 'を検索';
  $labels->not_found = $name. 'が見つかりませんでした';
  $labels->not_found_in_trush = 'ゴミ箱に' .$name. 'は見つかりませんでした';
}
add_action('init', 'change_object_label');
add_action('admin_menu', 'change_menu_label');
function post_has_archive( $args, $post_type ) {
  if( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'archiveblog';
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

remove_filter('pre_user_description', 'wp_filter_kses');

/*
============================
works / カスタム投稿
============================
*/
//以下に子テーマ用の関数を書く
//カスタム投稿用管理画面のダッシュボードに表示する
add_action('init', 'create_post_type');
function create_post_type() {
  register_post_type('works',
    array(
    'labels' => array(
      'name' => __('works'), //カスタム投稿のラベル
      'singular_name' => __('works'),
      'all_items' => __('works一覧'),
      'add_new_item' => __('worksを追加'),
      'edit_item' => __('worksを編集'),
      'new_item' => __('worksを追加')
    ),
    'public' => true, //投稿の公開
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'revisions',
      'excerpt'
    ), //タイトルと本文アイキャッチを有効化
    'menu_position' => 5, //メニューの位置
    'show_ui' => true, //カスタム投稿タイプを表示するかどうか
    'has_archive' => true, //アーカイブの生成
    'hierarchical' => false, //階層構造の有無
    'show_in_rest' => true, //Gutenbergに対応
    'rewrite' => array('width_front'=>false), //パーマリンクの設定
    )
  );
  //カスタムタクソノミー(カテゴリ)を追加
  register_taxonomy(
    'works-cat', //カテゴリのスラッグ
    'works', //カテゴリーを追加したいカスタム投稿タイプのスラッグ
    array(
      'label' => 'カテゴリー', //管理画面での表示名
      'hierarchical' => true, //階層構造
      'public' => true, //管理画面に表示するか
      'show_in_rest' => true, //ブロックエディタ―ON
      //'rewrite' => array('slug' => 'works'),
      )
    );
    register_taxonomy(
      'works-tag', //タグのスラッグ
      'works', //タグを追加したいカスタム投稿タイプのスラッグ
      array(
        'label' => 'タグ', //管理画面での表示名
        'hierarchical' => false, //階層構造
        'public' => true, //管理画面に表示するか
        'show_in_rest' => true, //ブロックエディタ―ON
        'update_count_callback' => '_update_post_term_count', //タグのように使いたい場合は追加
      )
      );
}

//管理画面上にカテゴリを表示する
function my_custom_column($columns) {
  $columns['{タクソノミースラッグ}'] = 'カテゴリ';
  return $columns;
}
add_filter('manage_{カスタム投稿タイプスラッグ}_posts_columns', 'my_custom_column');

function my_custom_column_id($column_name, $id) {
  $terms = get_the_terms($id, $column_name);
  if($terms && !is_wp_error($terms)) {
    $menu_terms = array(); //変数名は任意
    foreach($terms as $term) {
      $menu_terms[] = $term->name;
    }
    echo join( ", ", $menu_terms);
  }
}
add_action('manage_{カスタム投稿タイプスラッグ}_posts_custom_column', 'my_custom_column_id', 10, 2);


/*==========================
ウィジェットの登録
==========================*/
function theme_slug_widgets_init() {
  register_sidebar( array(
    'name' => 'サイドバー',
    'id' => 'archive',
  ));
}
add_action('widgets_init', 'theme_slug_widgets_init');