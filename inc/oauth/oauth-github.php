<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function oauth_github() {
	global $GoSheng;
	$url           = 'https://github.com/login/oauth/authorize';
	$local_host    = urlencode( site_url( '/?type=github' ) );
	$client_id     = $GoSheng['oauth_github_client_id'] ? $GoSheng['oauth_github_client_id'] : '';
	$client_secret = $GoSheng['oauth_github_client_secret'] ? $GoSheng['oauth_github_client_secret'] : '';
	$result        = $url . '?client_id=' . $client_id . '&redirect_uri=' . $local_host;

	echo (string) $result;
}

function social_oauth_github() {
	if ( isset( $_GET['code'] ) && isset( $_GET['type'] ) && $_GET['type'] == 'github' ) {
		github_oauth();
	}
}

add_action( 'init', 'social_oauth_github' );
function github_ouath_redirect() {
	wp_redirect( home_url() );
	exit;
}

function github_oauth() {
	global $GoSheng;
	$code     = $_GET['code'];
	$url      = "https://github.com/login/oauth/access_token";
	$data     = array(
		'client_id'     => $GoSheng['oauth_github_client_id'],
		'client_secret' => $GoSheng['oauth_github_client_secret'],
		'grant_type'    => 'authorization_code',
		'redirect_uri'  => home_url(),
		'code'          => $code,
		'state'         => $_GET['state']
	);
	$response = wp_remote_post( $url, array(
			'method'  => 'POST',
			'headers' => array( 'Accept' => 'application/json' ),
			'body'    => $data,
		)
	);
	$output   = json_decode( $response['body'], true );
	$token    = $output['access_token'];
	if ( ! $token ) {
		wp_die( '授权失败' );
	}
	$get_user_info = "https://api.github.com/user?access_token=" . $token;
	$datas         = wp_remote_get( $get_user_info );
	$str           = json_decode( $datas['body'], true );
	$github_id     = $str['id'];
	$email         = $str['email'];
	$name          = $str['name'];
	if ( ! $github_id ) {
		wp_redirect( home_url( '/?3' ) );
		exit;
	}
	if ( is_user_logged_in() ) {
		$this_user = wp_get_current_user();
		update_user_meta( $this_user->ID, "github_id", $github_id );
		github_ouath_redirect();
	} else {
		$user_github = get_users( array( "meta_key " => "github_id", "meta_value" => $github_id ) );
		if ( is_wp_error( $user_github ) || ! count( $user_github ) ) {
			$username        = $str['title'];
			$login_name      = wp_create_nonce( $github_id );
			$random_password = wp_generate_password( $length = 12, $include_standard_special_chars = false );
			$userdata        = array(
				'user_login'   => $login_name,
				'display_name' => $name,
				'user_email'   => $email,
				'user_pass'    => $random_password,
				'nickname'     => $name
			);
			$user_id         = wp_insert_user( $userdata );
			wp_signon( array( "user_login" => $login_name, "user_password" => $random_password ), false );
			update_user_meta( $user_id, "github_id", $github_id );
			github_ouath_redirect();

		} else {
			wp_set_auth_cookie( $user_github[0]->ID );
			github_ouath_redirect();
		}
	}
}