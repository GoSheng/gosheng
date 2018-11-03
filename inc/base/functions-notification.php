<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function enqueue_notification() {
	wp_register_script( 'notification', themeStaticFile_URI . 'js/notification.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'notification' );
}

add_action( 'redux/options/GoSheng/settings/change', 'GoSheng_notification' );
if ( ! function_exists( 'GoSheng_notification' ) ) {
	function GoSheng_notification() {
		global $GoSheng;
		if ( $GoSheng['notification_switch'] ) {
			add_action( 'wp_enqueue_scripts', 'enqueue_notification' );
		}
	}
}
