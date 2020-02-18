<?php

function themes_file_scripts() {
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' ); 
	wp_enqueue_style( 'style', get_stylesheet_uri() ); //テーマフォルダのstyle.css
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' ); 
 
	
    if(is_admin()) return; //管理画面ではスクリプトは読み込まない
    wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
    //CDN から読み込む
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',  array(), "20191126", false );
	wp_enqueue_script( 'js-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20191209', true );
	wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '20191126', true );
}
add_action( 'wp_enqueue_scripts', 'themes_file_scripts' );

// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'styles'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );