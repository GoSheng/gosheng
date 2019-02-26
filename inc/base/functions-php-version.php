<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_switch_theme', 'GoSheng_php_version_notice' );
if ( ! function_exists( 'GoSheng_php_version_notice' ) ) {
	function GoSheng_php_version_notice() {
		switch_theme( WP_DEFAULT_THEME );
		unset( $_GET['activated'] );
		add_action( 'admin_notices', 'GoSheng_php_upgrade_notice' );
	}
}

if ( ! function_exists( 'GoSheng_php_upgrade_notice' ) ) {
	function GoSheng_php_upgrade_notice() {
		$message = sprintf( __( '狗剩主题需要PHP 7.0或更高版本。您当前的PHP版本是%s，我们已经为您切换为WordPress默认主题，请在升级PHP版本后重新启用狗剩主题即可。', 'GoSheng-framework' ), PHP_VERSION );
		printf( '<div class="error"><p>%s</p></div>', $message );
	}
}
