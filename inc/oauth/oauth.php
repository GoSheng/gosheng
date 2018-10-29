<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_template_part( 'inc/oauth/oauth', 'github' );
get_template_part( 'inc/oauth/oauth', 'qq' );
get_template_part( 'inc/oauth/oauth', 'weibo' );
get_template_part( 'inc/oauth/oauth', 'weixin' );
get_template_part( 'inc/oauth/oauth', 'alipay' );
get_template_part( 'inc/oauth/oauth', 'google' );
get_template_part( 'inc/oauth/oauth', 'twitter' );
get_template_part( 'inc/oauth/oauth', 'facebook' );
get_template_part( 'inc/oauth/oauth', 'linkedin' );

add_action( 'wp_ajax_nopriv_GoSheng_oauth', 'GoSheng_oauth' );
add_action( 'wp_ajax_GoSheng_oauth', 'GoSheng_oauth' );
if ( ! function_exists( 'GoSheng_oauth' ) ) {
	function GoSheng_oauth() {
		if ( $_POST ) {
			if ( isset( $_POST['type'] ) ) {
				switch ( $_POST['type'] ) {
					case 'github':
						oauth_github();
						break;
					case 'qq':
					case 'weibo':
					case 'weixin':
					case 'alipay':
					case 'google':
					case 'twitter':
					case 'facebook':
					case 'linkedin':
					default:
						break;
				}
			}
		}
		wp_die();
	}
}
