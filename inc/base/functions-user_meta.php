<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_filter( 'user_contactmethods', 'add_contact_fields' );
function add_contact_fields( $contactmethods ) {
	$contactmethods['qq']          = __( 'QQ', 'GoSheng-framework' );
	$contactmethods['weibo']       = __( '微博', 'GoSheng-framework' );
	$contactmethods['alipay']      = __( '支付宝', 'GoSheng-framework' );
	$contactmethods['twitter']     = __( '推特', 'GoSheng-framework' );
	$contactmethods['github']      = __( 'GitHub', 'GoSheng-framework' );
	$contactmethods['google_plus'] = __( 'Google +', 'GoSheng-framework' );
	$contactmethods['facebook']    = __( 'Facebook', 'GoSheng-framework' );

	return $contactmethods;
}