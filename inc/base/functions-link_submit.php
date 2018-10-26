<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'publish_post', 'Baidu_Submit', 0 );
if ( ! function_exists( 'Baidu_Submit' ) ) {
	function Baidu_Submit( $post_ID ) {
		global $GoSheng;
		if ( ! $GoSheng['linkSubmit_baidu_switch'] ) {
			return;
		}
		if ( get_post_meta( $post_ID, 'Baidusubmit', true ) == 1 ) {
			return;
		}
		$WEB_TOKEN  = $GoSheng['linkSubmit_baidu_token'];
		$WEB_DOMAIN = $GoSheng['linkSubmit_baidu_site'];
		if ( strlen( $WEB_DOMAIN ) < 1 || strlen( $WEB_DOMAIN ) < 1 ) {
			return;
		}
		$url     = get_permalink( $post_ID );
		$api     = 'http://data.zz.baidu.com/urls?site=' . $WEB_DOMAIN . '&token=' . $WEB_TOKEN;
		$request = new WP_Http;
		$result  = $request->request( $api, array(
			'method'  => 'POST',
			'body'    => $url,
			'headers' => 'Content-Type: text/plain'
		) );
		$result  = json_decode( $result['body'], true );
		if ( array_key_exists( 'success', $result ) ) {
			add_post_meta( $post_ID, 'Baidusubmit', 1, true );
		}
	}

}