<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( file_exists( get_theme_file_path() . '/inc/update/theme-update.php' ) ) {
	get_template_part( 'inc/update/theme-update' );
}

$GoShengUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://gitee.com/GoSheng/gosheng_update/raw/master/theme_back.json',
	dirname( dirname( __FILE__ ) ) . '/functions.php',
	'gosheng'
);