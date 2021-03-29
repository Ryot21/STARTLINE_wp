<?php


// ↓タイトルタグを使わずにwordpressで設定した「タイトル」を吐き出す。
function setup_my_theme() {
	add_theme_support( 'title-tag' );
 }
add_action( 'after_setup_theme', 'setup_my_theme');
// add_theme_support( 'post-thumbnails' ); 



// ページタイトル　デフォルトで吐き出せれる『ー』から『 | 』に変更
function wp_document_title_separator( $separator ) {
	$separator = '|';
	return $separator;
 }
add_filter( 'document_title_separator', 'wp_document_title_separator' );



// グローバルナビ　カスタムナビ機能
add_theme_support('menus');



// カスタムメニューの「タイトル属性」をアンカーテキストとして出力する方法
function attribute_add_nav_menu($item_output, $item){
	return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br><p class='header_nav_bottom'>{$item->attr_title}</p><", $item_output);
  }
  add_filter('walker_nav_menu_start_el', 'attribute_add_nav_menu', 10, 4);



// グローバルナビで現在地にクラスを付与する
function make_menu_current( $classes, $item ) {

	/*
	下記のパターンの時に'current-menu-works'を付与する。
	1.現在表示している投稿タイプ名が「works(この場合ブログ)かつ詳細ページ」の場合、
	2.現在表示している投稿タイプ名が「works(この場合ブログ)かつカテゴリー別の一覧ページ」の場合
	*/
    if ( get_post_type() === 'works' && is_single() || 'works' && is_tax() )  {
        $classes[] = 'current-menu-works';
	} 
	/*
	下記のパターンの時に'current-menu-blog'を付与する。
	1.現在表示している投稿タイプ名が「post(この場合ブログ)かつ詳細ページ」の場合、
	2.現在表示している投稿タイプ名が「post(この場合ブログ)かつカテゴリー別の一覧ページ」の場合
	*/
	elseif( get_post_type() === 'post' && is_single() || 'post' && is_category() )  {
			$classes[] = 'current-menu-blog';
	}
    $classes = array_unique( $classes );
    return $classes;
}
add_filter( 'nav_menu_css_class', 'make_menu_current', 10, 2 );



// ブログアーカイブページにて「続きを読む」から詳細ページに遷移できるようにする
function new_excerpt_more($post) {
    return '<a href="'. get_permalink($post->ID) . '">' . '続きを読む' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



?>