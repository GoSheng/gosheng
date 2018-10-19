<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'widgets_init', 'GoSheng_sidebar_init' );
function GoSheng_sidebar_init() {
	register_sidebar( array(
		'name'          => __( '狗剩-页面侧边栏', 'GoSheng-framework' ),
		'id'            => 'gosheng_sidebar_tool',
		'description'   => __( '页面侧边栏小工具', 'GoSheng-framework' ),
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="card bg-light mb-1 mb-lg-2 widget %2$s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="card-header px-1 px-lg-2 py-1 py-lg-2"><h4 class="font-8 font-lg-9 far fa-gem mr-1">',
		'after_title'   => '</h4></div>',
		'before_text'   => '<div class="card-body px-1 px-lg-2 py-2 py-lg-3">',
		'after_text'    => '</div>',
		'before_footer' => '<div class="card-footer px-1 px-lg-2 py-1 py-lg-2">',
		'after_footer'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( '狗剩-页底边栏', 'GoSheng-framework' ),
		'id'            => 'gosheng_sidebar_footer',
		'description'   => __( '页面底部边栏', 'GoSheng-framework' ),
		'class'         => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s clearfix">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}