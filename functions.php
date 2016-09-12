<?php
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

add_filter('comment_form_default_fields', 'my_comment_form_default_field');
function my_comment_form_default_field($args){
	$args['author'] = ''; 	// 「名前」を削除
	$args['email'] = '';	// 「メールアドレス」を削除
	$args['url'] = '';		// 「ウェブサイト」を削除
	return $args;
}


add_filter('excerpt_mblength', 'my_excerpt_mblength');
function my_excerpt_mblength($length){
	return 20; // 抜粋に出力する文字数
}

add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query){
	// 管理画面、メインクエリ以外には設定しない
	if(is_admin() || ! $query->is_main_query()){
		return;
	}

	// トップページの場合
	if($query->is_home()){
		$query->set('posts_per_page', 3);
		return;
	}
}
