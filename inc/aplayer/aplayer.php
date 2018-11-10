<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'enqueue_aplayer' );
function enqueue_aplayer() {
	global $GoSheng;
	if ( $GoSheng['aplayer'] ) {
		wp_register_script( 'aplayer', themeStaticFile_URI . 'js/aplayer.min.js', array(), THEME_STATIC_FILE_VERSION, true );
		wp_enqueue_script( 'aplayer' );
		wp_register_style( 'aplayer', themeStaticFile_URI . 'css/aplayer.min.css', array(), THEME_STATIC_FILE_VERSION, 'all' );
		wp_enqueue_style( 'aplayer' );
		wp_register_script( 'gosheng_aplayer', themeStaticFile_URI . 'js/gosheng_aplayer.js', array(), THEME_STATIC_FILE_VERSION, true );
		wp_enqueue_script( 'gosheng_aplayer' );
	}
}
