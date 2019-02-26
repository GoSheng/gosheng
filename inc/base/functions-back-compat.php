<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_switch_theme', 'GoSheng_switch_theme' );
if ( ! function_exists( 'GoSheng_switch_theme' ) ) {
	function GoSheng_switch_theme() {
		switch_theme( WP_DEFAULT_THEME );
		unset( $_GET['activated'] );
		add_action( 'admin_notices', 'GoSheng_upgrade_notice' );
	}
}
if ( ! function_exists( 'GoSheng_upgrade_notice' ) ) {
	function GoSheng_upgrade_notice() {
		$message = sprintf( __( '狗剩主题需要WordPress 4.7或更高版本。您正在运行%s版，我们已经为您切换为WordPress默认主题，请在更新WordPress后重新启用狗剩主题即可。', 'GoSheng-framework' ), $GLOBALS['wp_version'] );
		printf( '<div class="error"><p>%s</p></div>', $message );
	}
}

add_action( 'load-customize.php', 'GoSheng_customize' );
if ( ! function_exists( 'GoSheng_customize' ) ) {
	function GoSheng_customize() {
		wp_die(
			sprintf(
				__( '狗剩主题需要WordPress 4.7或更高版本。您正在运行%s版，请在更新WordPress后重新启用狗剩主题即可。', 'GoSheng-framework' ),
				$GLOBALS['wp_version']
			),
			'',
			array(
				'back_link' => true,
			)
		);
	}
}

add_action( 'template_redirect', 'GoSheng_preview' );
if ( ! function_exists( 'GoSheng_preview' ) ) {
	function GoSheng_preview() {
		if ( isset( $_GET['preview'] ) ) {
			wp_die( sprintf( __( '狗剩主题需要WordPress 4.7或更高版本。您正在运行%s版，请在更新WordPress后重新启用狗剩主题即可。', 'GoSheng-framework' ), $GLOBALS['wp_version'] ) );
		}
	}
}
