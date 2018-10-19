<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( is_active_sidebar( 'gosheng_sidebar_tool' ) ) {
	dynamic_sidebar( 'gosheng_sidebar_tool' );
}
//get_template_part( 'template-parts/sidebar/sidebar', 'follow_bar' );
