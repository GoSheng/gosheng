<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'enqueue_reCaptcha' );
function enqueue_reCaptcha() {
	global $GoSheng;
	if ( $GoSheng['google_reCaptcha_switch'] ) {
		wp_register_script( 'reCaptcha', 'https://www.recaptcha.net/recaptcha/api.js?render=' . $GoSheng['google_reCaptcha_Site_key'], array(), 'v3', true );
		wp_enqueue_script( 'reCaptcha' );
		wp_register_script( 'google_reCaptcha', themeStaticFile_URI . 'js/google_reCaptcha.min.js', array(), THEME_STATIC_FILE_VERSION, true );
		wp_enqueue_script( 'google_reCaptcha' );
	}
}

add_action( 'wp_ajax_nopriv_GoSheng_recaptcha', 'GoSheng_recaptcha' );
add_action( 'wp_ajax_GoSheng_recaptcha', 'GoSheng_recaptcha' );
if ( ! function_exists( 'GoSheng_recaptcha' ) ) {
	function GoSheng_recaptcha() {
		if ( $_POST ) {
			if ( $_POST['token'] ) {
				$token = $_POST['token'];
				GoSheng_reCaptcha_site_verify( $token );
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
if ( ! function_exists( 'GoSheng_reCaptcha_site_verify' ) ) {
	function GoSheng_reCaptcha_site_verify( $token = '' ) {
		global $GoSheng;
		$site_verify_url = 'https://www.recaptcha.net/recaptcha/api/siteverify';
		$secret_key      = $GoSheng['google_reCaptcha_Secret_key'];
		$response        = $token;
		$remote_ip       = $_SERVER['REMOTE_ADDR'] ? $_SERVER['REMOTE_ADDR'] : '';
		$url             = $site_verify_url . '?secret=' . $secret_key . '&response=' . $response . '&remoteip=' . $remote_ip;
		$get_site_verify = wp_remote_post( $url );
		$result          = json_decode( $get_site_verify['body'] );
		echo json_encode( $result );
	}
}
