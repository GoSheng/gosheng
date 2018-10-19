<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_template_part( 'inc/class/widgets/class', 'gosheng_widget_text' );


add_action( 'widgets_init', 'register_gosheng_widgets' );
function register_gosheng_widgets() {
	register_widget( 'gosheng_widget_text' );
}
