<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
/*
 * 注册JS脚本
 */
add_action( 'wp_enqueue_scripts', 'enqueue_jquery' );
//add_action('wp_enqueue_scripts', 'enqueue_jquery_bootcdn');

add_action( 'wp_enqueue_scripts', 'enqueue_popper' );
//add_action('wp_enqueue_scripts', 'enqueue_popper_bootcdn');

add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
//add_action('wp_enqueue_scripts', 'enqueue_bootstrap_bootcdn');
//add_action('wp_enqueue_scripts', 'enqueue_bootstrap_75cdn');
//add_action('wp_enqueue_scripts', 'enqueue_bootstrap_bootstrapcdn');

add_action( 'wp_enqueue_scripts', 'enqueue_OwlCarousel2' );
//add_action('wp_enqueue_scripts', 'enqueue_OwlCarousel2_bootcdn');

add_action( 'wp_enqueue_scripts', 'enqueue_OwlCarousel2_local' );

add_action( 'wp_enqueue_scripts', 'enqueue_lozad' );
add_action( 'wp_enqueue_scripts', 'enqueue_qrcode' );
add_action( 'wp_enqueue_scripts', 'enqueue_layer' );
add_action( 'wp_enqueue_scripts', 'enqueue_notyf' );
//add_action( 'wp_enqueue_scripts', 'enqueue_html2canvas' );
add_action( 'wp_enqueue_scripts', 'enqueue_resizesensor' );
add_action( 'wp_enqueue_scripts', 'enqueue_theia_sticky_sidebar' );

add_action( 'wp_enqueue_scripts', 'enqueue_cookie' );
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_toast' );
add_action( 'wp_enqueue_scripts', 'enqueue_local' );
add_action( 'wp_enqueue_scripts', 'enqueue_oauth' );
add_action( 'wp_enqueue_scripts', 'enqueue_sidebar' );

if ( $GoSheng['geolocation'] ) {
	add_action( 'wp_enqueue_scripts', 'enqueue_geolocation' );
}
