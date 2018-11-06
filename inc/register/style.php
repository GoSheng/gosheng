<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * 注册样式表
 */
add_action( 'wp_enqueue_scripts', 'enqueue_style_bootstrap' );
//add_action('wp_enqueue_scripts', 'enqueue_style_bootstrap_bootcdn');
//add_action('wp_enqueue_scripts', 'enqueue_style_bootstrap_75cdn');
//add_action('wp_enqueue_scripts', 'enqueue_style_bootstrap_bootstrapcdn');

add_action( 'wp_enqueue_scripts', 'enqueue_style_font_awesome5_all_fonts' );
add_action( 'wp_enqueue_scripts', 'enqueue_style_font_awesome5' );
//add_action('wp_enqueue_scripts', 'enqueue_style_font_awesome5_all_fonts_75cdn');
//add_action('wp_enqueue_scripts', 'enqueue_style_font_awesome5_75cdn');

add_action( 'wp_enqueue_scripts', 'enqueue_style_OwlCarousel2' );
//add_action('wp_enqueue_scripts', 'enqueue_style_OwlCarousel2_bootcdn');

add_action( 'wp_enqueue_scripts', 'enqueue_style_animate' );
//add_action('wp_enqueue_scripts', 'enqueue_style_animate_bootcdn');
//add_action('wp_enqueue_scripts', 'enqueue_style_animate_75cdn');

add_action( 'wp_enqueue_scripts', 'enqueue_style_hover' );
//add_action('wp_enqueue_scripts', 'enqueue_style_hover_bootcdn');

add_action( 'wp_enqueue_scripts', 'enqueue_style_layer' );
add_action( 'wp_enqueue_scripts', 'enqueue_style_notyf' );

add_action( 'wp_enqueue_scripts', 'enqueue_style_local' );
add_action( 'wp_enqueue_scripts', 'enqueue_style_sidebar' );

add_action( 'wp_enqueue_scripts', 'enqueue_OwlCarousel2_theme_global' );//自定义颜色
//add_action('wp_enqueue_scripts', 'enqueue_OwlCarousel2_theme_default');//备用默认
//add_action('wp_enqueue_scripts', 'enqueue_OwlCarousel2_theme_green');//备用绿色
