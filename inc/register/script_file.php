<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
 * 注册JS脚本
 */
function enqueue_jquery() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', themeStaticFile_URI . 'js/jquery.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'jquery' );
}

function enqueue_jquery_bootcdn() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js', array(), 'BootCDN', true );
	wp_enqueue_script( 'jquery' );
}

function enqueue_popper() {
	wp_register_script( 'popper', themeStaticFile_URI . 'js/popper.min.js', array( 'jquery' ), '1.14.7', true );
	wp_enqueue_script( 'popper' );
}

function enqueue_popper_bootcdn() {
	wp_register_script( 'popper', 'https://cdn.bootcss.com/popper.js/1.14.5/umd/popper.min.js', array( 'jquery' ), 'BootCDN', true );
	wp_enqueue_script( 'popper' );
}

function enqueue_bootstrap() {
	wp_register_script( 'bootstrap', themeStaticFile_URI . 'js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
	wp_enqueue_script( 'bootstrap' );
}

function enqueue_bootstrap_bootcdn() {
	wp_register_script( 'bootstrap', 'https://cdn.bootcss.com/bootstrap/4.1.3/js/bootstrap.min.js', array( 'jquery' ), 'BootCDN', true );
	wp_enqueue_script( 'bootstrap' );
}

function enqueue_bootstrap_bootstrapcdn() {
	wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array( 'jquery' ), 'bootstrapCDN', true );
	wp_enqueue_script( 'bootstrap' );
}

function enqueue_bootstrap_75cdn() {
	wp_register_script( 'bootstrap', 'https://lib.baomitu.com/twitter-bootstrap/4.1.3/js/bootstrap.min.js', array( 'jquery' ), '75CDN', true );
	wp_enqueue_script( 'bootstrap' );
}

function enqueue_OwlCarousel2() {
	wp_register_script( 'OwlCarousel2', themeStaticFile_URI . 'js/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
	wp_enqueue_script( 'OwlCarousel2' );
}

function enqueue_OwlCarousel2_bootcdn() {
	wp_register_script( 'OwlCarousel2', 'https://cdn.bootcss.com/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), 'BootCDN', true );
	wp_enqueue_script( 'OwlCarousel2' );
}

function enqueue_OwlCarousel2_local() {
	wp_register_script( 'OwlCarousel2_local', themeStaticFile_URI . 'js/owl.carousel.2.local.js', array( 'OwlCarousel2' ), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'OwlCarousel2_local' );
}

function enqueue_html2canvas() {
	wp_register_script( 'html2canvas', themeStaticFile_URI . 'js/html2canvas.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'html2canvas' );
}

function enqueue_lozad() {
	wp_register_script( 'lozad', themeStaticFile_URI . 'js/lozad.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'lozad' );
}

function enqueue_layer() {
	wp_register_script( 'layer', themeStaticFile_URI . 'js/layer.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'layer' );
}

function enqueue_notyf() {
	wp_register_script( 'notyf', themeStaticFile_URI . 'js/notyf.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'notyf' );
}

function enqueue_local() {
	wp_register_script( 'local', themeStaticFile_URI . 'js/local.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'local' );
}

function enqueue_toast() {
	wp_register_script( 'toast', themeStaticFile_URI . 'js/bootstrap-toasts.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'toast' );
}

function enqueue_oauth() {
	wp_register_script( 'oauth', themeStaticFile_URI . 'js/gosheng_oauth.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'oauth' );
}

function enqueue_cookie() {
	wp_register_script( 'cookie', themeStaticFile_URI . 'js/cookie.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'cookie' );
}

function enqueue_qrcode() {
	wp_register_script( 'qrcode', themeStaticFile_URI . 'js/qrcode.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'qrcode' );
}

function enqueue_resizesensor() {
	wp_register_script( 'resizesensor', themeStaticFile_URI . 'js/resizesensor.min.js', array( 'jquery' ), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'resizesensor' );
}

function enqueue_theia_sticky_sidebar() {
	wp_register_script( 'theia_sticky_sidebar', themeStaticFile_URI . 'js/theia_sticky_sidebar.min.js', array(
		'resizesensor',
		'jquery'
	), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'theia_sticky_sidebar' );
}

function enqueue_sidebar() {
	wp_register_script( 'sidebar', themeStaticFile_URI . 'js/sidebar.min.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'sidebar' );
}

function enqueue_geolocation() {
	wp_register_script( 'geolocation', themeStaticFile_URI . 'js/geolocation.js', array(), THEME_STATIC_FILE_VERSION, true );
	wp_enqueue_script( 'geolocation' );
}
