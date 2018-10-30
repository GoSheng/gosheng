<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
//global $GoSheng;
//$GoSheng['google_reCaptcha_Site_key'];
//$GoSheng['google_reCaptcha_Secret_key'];

add_action( 'wp_enqueue_scripts', 'enqueue_reCaptcha' );
function enqueue_reCaptcha() {
	global $GoSheng;
	if ( $GoSheng['google_reCaptcha_switch'] ) {
		wp_register_script( 'reCaptcha', 'https://www.recaptcha.net/recaptcha/api.js?render=' . $GoSheng['google_reCaptcha_Site_key'], array(), 'v3', false );
		wp_enqueue_script( 'reCaptcha' );
	}
}

add_action( 'wp_ajax_nopriv_GoSheng_recaptcha', 'GoSheng_recaptcha' );
add_action( 'wp_ajax_GoSheng_recaptcha', 'GoSheng_recaptcha' );
if ( ! function_exists( 'GoSheng_recaptcha' ) ) {
	function GoSheng_recaptcha() {
		if ( $_POST ) {
			if ( $_POST['token'] ) {
			}
		}
		wp_die();
	}
}
add_action( 'wp_footer', 'GoSheng_reCaptcha_script_code' );
if ( ! function_exists( 'GoSheng_reCaptcha_script_code' ) ) {
	function GoSheng_reCaptcha_script_code() {
		global $GoSheng;
		if ( $GoSheng['google_reCaptcha_switch'] ) {
			$script_before = "<script>\r\n";
			$script_code   = 'var gosheng_google_reCaptcha_site_key="' . $GoSheng['google_reCaptcha_Site_key'] . "\";\r\n";
			$script_after  = "</script>\r\n";
			echo $script_before . $script_code . $script_after;
		}
	}
}