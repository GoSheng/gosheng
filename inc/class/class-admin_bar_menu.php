<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wp_head_wp_admin_bar_GoSheng_menu() {
	add_action( 'admin_bar_menu', function () {

		global $wp_admin_bar;
		$GoShengAdminBar[] = array(
			'id'    => 'GoSheng',
			'title' => __( '狗剩', 'GoSheng_framework' ),
		);
		$GoShengAdminBar[] = array(
			'parent' => 'GoSheng',
			'id'     => 'GoSheng-options',
			'title'  => __( '狗剩主题选项', 'GoSheng_framework' ),
			'href'   => admin_url( 'admin.php?page=GoSheng_options' ),
		);
		foreach ( $GoShengAdminBar as $index => $key ) {
			$wp_admin_bar->add_node( $GoShengAdminBar["$index"] );
		}
	}, 100 );
}
wp_head_wp_admin_bar_GoSheng_menu();