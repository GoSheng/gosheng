<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_shortcode( 'alert_primary', 'alert_primary' );
function alert_primary( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-primary">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'alert_secondary', 'alert_secondary' );
function alert_secondary( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-secondary">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'alert_success', 'alert_success' );
function alert_success( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-success">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'alert_danger', 'alert_danger' );
function alert_danger( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-danger">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'alert_warning', 'alert_warning' );
function alert_warning( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-warning">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'alert_info', 'alert_info' );
function alert_info( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-info">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'alert_light', 'alert_light' );
function alert_light( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-light">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'alert_dark', 'alert_dark' );
function alert_dark( $atts, $content = null, $code = "" ) {
	$return = '<div class="alert alert-dark">';
	$return .= $content;
	$return .= '</div>';

	return $return;
}

add_shortcode( 'card_primary', 'card_primary' );
function card_primary( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card text-white bg-primary my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}

add_shortcode( 'card_secondary', 'card_secondary' );
function card_secondary( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card text-white bg-secondary my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}

add_shortcode( 'card_success', 'card_success' );
function card_success( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card text-white bg-success my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}

add_shortcode( 'card_danger', 'card_danger' );
function card_danger( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card text-white bg-danger my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}

add_shortcode( 'card_warning', 'card_warning' );
function card_warning( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card text-white bg-warning my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}

add_shortcode( 'card_info', 'card_info' );
function card_info( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card text-white bg-info my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}

add_shortcode( 'card_light', 'card_light' );
function card_light( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card bg-light my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}

add_shortcode( 'card_dark', 'card_dark' );
function card_dark( $atts, $content = null, $code = "" ) {
	extract( shortcode_atts( array( "title" => '标题内容' ), $atts ) );
	$return = '<div class="card text-white bg-dark my-3"><div class="card-header">';
	$return .= $title;
	$return .= '</div><div class="card-body"><p class="card-text">';
	$return .= $content;
	$return .= '</p></div></div>';

	return $return;
}


function register_alerts( $alerts ) {
	array_push( $alerts, " ", "alert_primary" );
	array_push( $alerts, " ", "alert_secondary" );
	array_push( $alerts, " ", "alert_success" );
	array_push( $alerts, " ", "alert_danger" );
	array_push( $alerts, " ", "alert_warning" );
	array_push( $alerts, " ", "alert_info" );
	array_push( $alerts, " ", "alert_light" );
	array_push( $alerts, " ", "alert_dark" );

	return $alerts;
}

function register_cards( $cards ) {
	array_push( $cards, " ", "card_primary" );
	array_push( $cards, " ", "card_secondary" );
	array_push( $cards, " ", "card_success" );
	array_push( $cards, " ", "card_danger" );
	array_push( $cards, " ", "card_warning" );
	array_push( $cards, " ", "card_info" );
	array_push( $cards, " ", "card_light" );
	array_push( $cards, " ", "card_dark" );

	return $cards;
}

function add_alerts( $alerts_array ) {
	$alerts_array['alert_primary']   = themeStaticFile_URI . 'js/more_btn.min.js';
	$alerts_array['alert_secondary'] = themeStaticFile_URI . 'js/more_btn.min.js';
	$alerts_array['alert_success']   = themeStaticFile_URI . 'js/more_btn.min.js';
	$alerts_array['alert_warning']   = themeStaticFile_URI . 'js/more_btn.min.js';
	$alerts_array['alert_danger']    = themeStaticFile_URI . 'js/more_btn.min.js';
	$alerts_array['alert_info']      = themeStaticFile_URI . 'js/more_btn.min.js';
	$alerts_array['alert_light']     = themeStaticFile_URI . 'js/more_btn.min.js';
	$alerts_array['alert_dark']      = themeStaticFile_URI . 'js/more_btn.min.js';

	return $alerts_array;
}

function add_cards( $cards_array ) {
	$cards_array['card_primary']   = themeStaticFile_URI . 'js/more_btn.min.js';
	$cards_array['card_secondary'] = themeStaticFile_URI . 'js/more_btn.min.js';
	$cards_array['card_success']   = themeStaticFile_URI . 'js/more_btn.min.js';
	$cards_array['card_warning']   = themeStaticFile_URI . 'js/more_btn.min.js';
	$cards_array['card_danger']    = themeStaticFile_URI . 'js/more_btn.min.js';
	$cards_array['card_info']      = themeStaticFile_URI . 'js/more_btn.min.js';
	$cards_array['card_light']     = themeStaticFile_URI . 'js/more_btn.min.js';
	$cards_array['card_dark']      = themeStaticFile_URI . 'js/more_btn.min.js';

	return $cards_array;
}

add_action( 'init', 'more_button' );
function more_button() {
	if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
		return;
	}
	if ( get_user_option( 'rich_editing' ) == 'true' ) {
		add_filter( 'mce_external_plugins', 'add_alerts' );
		add_filter( 'mce_external_plugins', 'add_cards' );
		add_filter( 'mce_buttons', 'register_alerts' );
		add_filter( 'mce_buttons', 'register_cards' );
	}
}
