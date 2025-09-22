<?php

/**
 * アイキャッチ表示
 */
add_theme_support( 'post-thumbnails' );

/**
 * ブロックエディタにCSS適応
 */
function my_editor_suport() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}
add_action( 'after_setup_theme', 'my_editor_suport' );

/**
 * アクセスページの下層ページにアクセスしたら一覧にリダイレクト
 */
function redirect_custom_post_type() {
	if ( is_singular( 'access' ) ) {
		wp_redirect( home_url( '/access' ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'redirect_custom_post_type' );

/**
 * product一覧の表示数を無限にする
 */
function change_posts_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	if ( $query->is_post_type_archive( 'product' ) ) { // カスタム投稿タイプを指定
		$query->set( 'posts_per_page', '-1' ); // 表示件数を指定
	}
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

/**
 * Contact Form 7のときには整形機能をOFFにする
 */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}

/**
 * 年別アーカイブリスト　西暦の後に年をつける
 */
function add_nen_year_archives( $link_html) {
    $regex = array (
        "/ title='([\d]{4})'/" => "title='$1年'",
        "/ ([\d]{4}) /"        => "$1年",
        "/>([\d]{4})<\/a>/"    => ">$1年</a>"
    );
    $link_html = preg_replace( array_keys($regex), $regex, $link_html );
    return $link_html;
}
add_filter( 'get_archive_link', 'add_nen_year_archives');

/**
 * アーカイブページタイトル整形
 */
function fix_post_archive_title( $title ) {
    if ( is_category() || is_tag() || is_author() ) {
        return $title; // カテゴリーなどはそのまま
    }

    if ( is_year() ) {
        return get_query_var('year') . '年'. 'のニュース一覧';
    }
    if ( is_month() ) {
        return get_query_var('year') . '年' . get_query_var('monthnum') . '月'. 'のニュース一覧';
    }
    if ( is_day() ) {
        return get_query_var('year') . '年' . get_query_var('monthnum') . '月' . get_query_var('day') . '日'. 'のニュース一覧';
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'fix_post_archive_title' );


/**
 * iframe タグを許可する
 */
function my_allow_iframe_tags($allowedposttags) {
    $allowedposttags['iframe'] = array(
        'src'             => true,
        'width'           => true,
        'height'          => true,
        'frameborder'     => true,
        'style'           => true,
        'allow'           => true,
        'allowfullscreen' => true,
        'loading'         => true,
        'referrerpolicy'  => true
    );
    return $allowedposttags;
}
add_filter('wp_kses_allowed_html', 'my_allow_iframe_tags', 1);

/**
 * セキュリティ設定
 */
remove_action( 'wp_head', 'wp_generator' ); // WordPressのバージョン
remove_action( 'wp_head', 'wp_shortlink_wp_head' ); // 短縮URLのlink
remove_action( 'wp_head', 'wlwmanifest_link' ); // ブログエディターのマニフェストファイル
remove_action( 'wp_head', 'rsd_link' ); // 外部から編集するためのAPI
remove_action( 'wp_head', 'feed_links_extra', 3 ); // フィードへのリンク
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // 絵文字に関するJavaScript
remove_action( 'wp_head', 'rel_canonical' ); // カノニカル
remove_action( 'wp_print_styles', 'print_emoji_styles' ); // 絵文字に関するCSS
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // 絵文字に関するJavaScript
remove_action( 'admin_print_styles', 'print_emoji_styles' ); // 絵文字に関するCSS