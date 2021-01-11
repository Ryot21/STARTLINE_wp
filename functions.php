<?php add_action('wp_body_open', function() {
	?>
	<!-- ここに挿入したいソースコードなどを記述 -->
	
	<?php
});


// ↓タイトルタグを使わずにwordpressで設定した「タイトル」を吐き出す。
function setup_my_theme() {
	add_theme_support( 'title-tag' );
 }
add_action( 'after_setup_theme', 'setup_my_theme');
add_theme_support( 'post-thumbnails' ); 


// ページタイトル　デフォルトで吐き出せれる『ー』から『 | 』に変更
function wp_document_title_separator( $separator ) {
	$separator = '|';
	return $separator;
 }
add_filter( 'document_title_separator', 'wp_document_title_separator' );


// グローバルナビ　カスタムナビ機能
add_theme_support('menus');

// 
function new_excerpt_more($post) {
     return '<a href="'. get_permalink($post->ID) . '">' . '続きを読む' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

