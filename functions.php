<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
date_default_timezone_set( get_option( 'timezone_string' ) );

get_template_part( 'inc/update' );
add_action( 'after_setup_theme', 'GoSheng_setup' );
add_action( 'after_setup_theme', 'GoSheng_register_nav_menus' );

get_template_part( 'inc/register/script_file' );
get_template_part( 'inc/register/style_file' );
get_template_part( 'inc/register/script' );
get_template_part( 'inc/register/style' );
get_template_part( 'inc/register/sidebar' );
get_template_part( 'inc/register/widgets' );

get_template_part( 'inc/base/functions', 'option' );
get_template_part( 'inc/base/functions', 'base' );
get_template_part( 'inc/base/functions', 'user_meta' );
get_template_part( 'inc/base/functions', 'content' );
get_template_part( 'inc/base/functions', 'breadcrumb' );
get_template_part( 'inc/base/functions', 'email' );
get_template_part( 'inc/base/functions', 'shortcode' );
get_template_part( 'inc/base/functions', 'comment_simle' );
get_template_part( 'inc/base/functions', 'comment_form' );
get_template_part( 'inc/base/functions', 'comment_navigation' );
get_template_part( 'inc/base/functions', 'comments_list' );
get_template_part( 'inc/base/functions', 'link_submit' );
get_template_part( 'inc/base/functions', 'recaptcha' );
get_template_part( 'inc/base/functions', 'notification' );
get_template_part( 'inc/oauth/oauth' );
get_template_part( 'inc/redux' );

get_template_part( 'inc/class/class', 'gosheng_user_oauth' );
get_template_part( 'inc/class/class', 'gosheng_owl_carousel' );
get_template_part( 'inc/class/class', 'gosheng_array_depth' );
get_template_part( 'inc/class/class', 'wp-bootstrap-navwalker' );

get_template_part( 'inc/class/class-admin_bar_menu' );
get_template_part( 'inc/register/register-widgets' );
