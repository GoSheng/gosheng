<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
 * 注册样式表
 */
function enqueue_style_bootstrap() {
	wp_register_style( 'bootstrap', themeStaticFile_URI . 'css/bootstrap.css', array(), '4.1.3', 'all' );
	wp_enqueue_style( 'bootstrap' );
}

function enqueue_style_bootstrap_bootcdn() {
	wp_register_style( 'bootstrap', 'https://cdn.bootcss.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), 'BootCDN', 'all' );
	wp_enqueue_style( 'bootstrap' );
}

function enqueue_style_bootstrap_bootstrapcdn() {
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), 'bootstrapCDN', 'all' );
	wp_enqueue_style( 'bootstrap' );
}

function enqueue_style_bootstrap_75cdn() {
	wp_register_style( 'bootstrap', 'https://lib.baomitu.com/twitter-bootstrap/4.1.3/css/bootstrap.min.css', array(), '75CDN', 'all' );
	wp_enqueue_style( 'bootstrap' );
}

function enqueue_style_font_awesome5() {
	wp_register_style( 'font_awesome5', themeStaticFile_URI . 'fonts/font_awesome5/css/fontawesome.min.css', array(), '5.3.1', 'all' );
	wp_enqueue_style( 'font_awesome5' );
}

function enqueue_style_font_awesome5_all_fonts() {
	wp_register_style( 'font_awesome5_all_fonts', themeStaticFile_URI . 'fonts/font_awesome5/css/all.min.css', array(), '5.3.1', 'all' );
	wp_enqueue_style( 'font_awesome5_all_fonts' );
}

function enqueue_style_font_awesome5_75cdn() {
	wp_register_style( 'font_awesome5', 'https://lib.baomitu.com/font-awesome/5.3.1/web-fonts-with-css/css/fontawesome.min.css', array(), '75CDN', 'all' );
	wp_enqueue_style( 'font_awesome5' );
}

function enqueue_style_font_awesome5_all_fonts_75cdn() {
	wp_register_style( 'font_awesome5_all_fonts', 'https://lib.baomitu.com/font-awesome/5.3.1/web-fonts-with-css/css/fontawesome-all.min.css', array(), '75CDN', 'all' );
	wp_enqueue_style( 'font_awesome5_all_fonts' );
}

function enqueue_style_font_awesome5_brands_75cdn() {
	wp_register_style( 'font_awesome5_brands', 'https://lib.baomitu.com/font-awesome/5.3.1/web-fonts-with-css/css/fa-brands.min.css', array(), '75CDN', 'all' );
	wp_enqueue_style( 'font_awesome5_brands' );
}

function enqueue_style_font_awesome5_regular_75cdn() {
	wp_register_style( 'font_awesome5_regular', 'https://lib.baomitu.com/font-awesome/5.3.1/web-fonts-with-css/css/fa-regular.min.css', array(), '75CDN', 'all' );
	wp_enqueue_style( 'font_awesome5_regular' );
}

function enqueue_style_font_awesome5_solid_75cdn() {
	wp_register_style( 'font_awesome5_solid', 'https://lib.baomitu.com/font-awesome/5.3.1/web-fonts-with-css/css/fa-solid.min.css', array(), '75CDN', 'all' );
	wp_enqueue_style( 'font_awesome5_solid' );
}

function enqueue_style_animate() {
	wp_register_style( 'animate', themeStaticFile_URI . 'css/animate.min.css', array(), '3.7.0', 'all' );
	wp_enqueue_style( 'animate' );
}

function enqueue_style_animate_bootcdn() {
	wp_register_style( 'animate', 'https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css', array(), 'BootCDN', 'all' );
	wp_enqueue_style( 'animate' );
}

function enqueue_style_animate_75cdn() {
	wp_register_style( 'animate', 'https://lib.baomitu.com/animate.css/3.7.0/animate.min.css', array(), '75CDN', 'all' );
	wp_enqueue_style( 'animate' );
}

function enqueue_style_hover() {
	wp_register_style( 'hover', themeStaticFile_URI . 'css/hover-min.css', array(), '2.3.1', 'all' );
	wp_enqueue_style( 'hover' );
}

function enqueue_style_hover_bootcdn() {
	wp_register_style( 'hover', 'https://cdn.bootcss.com/hover.css/2.3.1/css/hover-min.css', array(), 'BootCDN', 'all' );
	wp_enqueue_style( 'hover' );
}

function enqueue_style_OwlCarousel2() {
	wp_register_style( 'OwlCarousel2', themeStaticFile_URI . 'css/owl.carousel.min.css', array(), '2.3.4', 'all' );
	wp_enqueue_style( 'OwlCarousel2' );
}

function enqueue_style_OwlCarousel2_bootcdn() {
	wp_register_style( 'OwlCarousel2', 'https://cdn.bootcss.com/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), 'BootCDN', 'all' );
	wp_enqueue_style( 'OwlCarousel2' );
}

function enqueue_OwlCarousel2_theme_default() {
	wp_register_style( 'OwlCarousel2_theme_default', 'https://cdn.bootcss.com/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), 'BootCDN', 'all' );
	wp_enqueue_style( 'OwlCarousel2_theme_default' );
}

function enqueue_OwlCarousel2_theme_green() {
	wp_register_style( 'OwlCarousel2_theme_green', 'https://cdn.bootcss.com/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css', array(), 'BootCDN', 'all' );
	wp_enqueue_style( 'OwlCarousel2_theme_green' );
}

function enqueue_OwlCarousel2_theme_global() {
	wp_register_style( 'OwlCarousel2_theme_global', themeStaticFile_URI . 'css/OwlCarousel2_theme_global.css', array(), THEME_STATIC_FILE_VERSION, 'all' );
	wp_enqueue_style( 'OwlCarousel2_theme_global' );
}

function enqueue_style_layer() {
	wp_register_style( 'layer', themeStaticFile_URI . 'css/layer.css', array(), THEME_STATIC_FILE_VERSION, 'all' );
	wp_enqueue_style( 'layer' );
}

function enqueue_style_local() {
	wp_register_style( 'local', themeStaticFile_URI . 'css/local.css', array(), THEME_STATIC_FILE_VERSION, 'all' );
	wp_enqueue_style( 'local' );
}

function enqueue_style_sidebar() {
	wp_register_style( 'sidebar', themeStaticFile_URI . 'css/sidebar.css', array(), THEME_STATIC_FILE_VERSION, 'all' );
	wp_enqueue_style( 'sidebar' );
}
