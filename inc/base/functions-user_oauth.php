<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'wp_ajax_nopriv_GoSheng_oauth', 'GoSheng_oauth' );
add_action( 'wp_ajax_GoSheng_oauth', 'GoSheng_oauth' );
if ( ! function_exists( 'GoSheng_oauth' ) ) {
	function oauth_github() {
		global $GoSheng;
		$url           = 'https://github.com/login/oauth/authorize';
		$local_host    = site_url( '/' );
		$client_id     = $GoSheng['oauth_github_client_id'] ? $GoSheng['oauth_github_client_id'] : '';
		$client_secret = $GoSheng['oauth_github_client_secret'] ? $GoSheng['oauth_github_client_secret'] : '';
		$result        = $url . '?client_id=' . $client_id . '&redirect_uri=' . $local_host;

		echo (string) $result;
	}

	function GoSheng_oauth() {
		if ( $_POST ) {
			if ( isset( $_POST['type'] ) ) {
				switch ( $_POST['type'] ) {
					case 'github':
						oauth_github();
						break;
					default:
						echo '222';
						break;
				}
			}
		}


		wp_die();
	}
}