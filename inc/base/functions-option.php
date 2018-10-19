<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
//todo:代码无法调用，改为直接生效
remove_action( 'wp_head', 'wp_generator' );//版本号
add_filter( 'show_admin_bar', '__return_false' );//顶部工具栏
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links', 2 ); //移除feed
remove_action( 'wp_head', 'feed_links_extra', 3 ); //移除分类feed
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
remove_action( 'template_redirect', 'wp_shortlink_header', 11 );//动态链接地址shortlink2
remove_action( 'wp_head', 'rel_canonical' );//中文地址
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );//移除emoji脚本
remove_action( 'wp_print_styles', 'print_emoji_styles' );//移除emoji样式表
add_filter( 'emoji_svg_url', '__return_false' );//单独移除s.w.org的dns-prefetch预读
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
add_action( 'admin_bar_menu', function () {
	global $wp_admin_bar;
	$wp_admin_bar->remove_node( 'wp-logo' );
}, 100 );

if ( ! function_exists( 'GoSheng_hidden_wp_generator' ) ) {
	function GoSheng_hidden_wp_generator() {
		remove_action( 'wp_head', 'wp_generator' );
	}
}
if ( ! function_exists( 'GoSheng_hidden_admin_bar' ) ) {
	function GoSheng_hidden_admin_bar() {
		add_filter( 'show_admin_bar', '__return_false' );
	}
}
if ( ! function_exists( 'GoSheng_hidden_rsd_link' ) ) {
	function GoSheng_hidden_rsd_link() {
		remove_action( 'wp_head', 'rsd_link' );
	}
}
if ( ! function_exists( 'GoSheng_hidden_wlwmanifest_link' ) ) {
	function GoSheng_hidden_wlwmanifest_link() {
		remove_action( 'wp_head', 'wlwmanifest_link' );
	}
}
if ( ! function_exists( 'GoSheng_hidden_feed_links' ) ) {
	function GoSheng_hidden_feed_links() {
		remove_action( 'wp_head', 'feed_links', 2 ); //移除feed
	}
}
if ( ! function_exists( 'feed_links_extra' ) ) {
	function feed_links_extra() {
		remove_action( 'wp_head', 'feed_links_extra', 3 ); //移除分类feed
	}
}
if ( ! function_exists( 'GoSheng_hidden_wp_shortlink_wp_head' ) ) {
	function GoSheng_hidden_wp_shortlink_wp_head() {
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
	}
}
if ( ! function_exists( 'GoSheng_hidden_wp_shortlink_header' ) ) {
	function GoSheng_hidden_wp_shortlink_header() {
		remove_action( 'template_redirect', 'wp_shortlink_header', 11 );//动态链接地址shortlink2
	}
}
if ( ! function_exists( 'GoSheng_hidden_rel_canonical' ) ) {
	function GoSheng_hidden_rel_canonical() {
		remove_action( 'wp_head', 'rel_canonical' );//中文地址
	}
}
if ( ! function_exists( 'GoSheng_hidden_wp_resource_hints' ) ) {
	function GoSheng_hidden_wp_resource_hints() {
		remove_action( 'wp_head', 'wp_resource_hints', 2 );
	}
}
if ( ! function_exists( 'GoSheng_hidden_print_emoji_detection_script' ) ) {
	function GoSheng_hidden_print_emoji_detection_script() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );//移除emoji脚本
		remove_action( 'wp_print_styles', 'print_emoji_styles' );//移除emoji样式表
		add_filter( 'emoji_svg_url', '__return_false' );//单独移除s.w.org的dns-prefetch预读
	}
}
if ( ! function_exists( 'GoSheng_hidden_rest_output_link_wp_head' ) ) {
	function GoSheng_hidden_rest_output_link_wp_head() {
		remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
	}
}
if ( ! function_exists( 'GoSheng_hidden_wp_admin_bar_wp_logo' ) ) {
	function GoSheng_hidden_wp_admin_bar_wp_logo() {
		add_action( 'admin_bar_menu', function () {
			global $wp_admin_bar;
			$wp_admin_bar->remove_node( 'wp-logo' );
		}, 100 );
	}
}
