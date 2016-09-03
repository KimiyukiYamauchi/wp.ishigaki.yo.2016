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