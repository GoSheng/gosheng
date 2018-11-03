<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;

function enqueue_notification() {
	wp_register_script( 'notification', themeStaticFile_URI . 'js/notification.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'notification' );
}

if ( $GoSheng['notification_switch'] ) {
	add_action( 'wp_enqueue_scripts', 'enqueue_notification' );
}