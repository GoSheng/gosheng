<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'ReduxFramework' ) && file_exists( get_theme_file_path() . '/inc/redux/framework.php' ) ) {
	get_template_part( 'inc/redux/framework' );
}
if ( file_exists( get_theme_file_path() . '/inc/gosheng-config.php' ) ) {
	get_template_part( 'inc/gosheng-config' );
}
