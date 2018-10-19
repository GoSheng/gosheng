<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( file_exists( get_theme_file_path() . '/inc/theme-update/theme-update.php' ) ) {
	get_template_part( 'inc/theme-update/theme-update' );
}

$GoShengUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/zhang-chenglin/gosheng_update/master/theme.json',
	dirname( dirname( __FILE__ ) ) . '/functions.php',
	'gosheng'
);