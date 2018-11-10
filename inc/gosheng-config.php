<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "GoSheng";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// TYPICAL -> Change these values as you need/desire
	'opt_name'             => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'display_name'         => $theme->get( 'Name' ),
	// Name that appears at the top of your panel
	'display_version'      => $theme->get( 'Version' ),
	// Version that appears at the top of your panel
	'menu_type'            => 'menu',
	//Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu'       => false,
	// Show the sections below the admin menu item or not
	'menu_title'           => __( '狗剩主题选项', 'GoSheng-framework' ),
	'page_title'           => __( '狗剩主题选项', 'GoSheng-framework' ),
	// You will need to generate a Google API key to use this feature.
	// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
	'google_api_key'       => '',
	// Set it you want google fonts to update weekly. A google_api_key value is required.
	'google_update_weekly' => false,
	// Must be defined to add google fonts to the typography module
	'async_typography'     => true,
	// Use a asynchronous font on the front end or font string
	//'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
	'admin_bar'            => false,
	// Show the panel pages on the admin bar
	'admin_bar_icon'       => 'dashicons-portfolio',
	// Choose an icon for the admin bar menu
	'admin_bar_priority'   => 50,
	// Choose an priority for the admin bar menu
	'global_variable'      => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode'             => false,
	// Show the time the page took to load, etc
	'update_notice'        => false,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer'           => true,
	// Enable basic customizer support
	//'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
	//'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

	// OPTIONAL -> Give you extra features
	'page_priority'        => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent'          => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions'     => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon'            => '',
	// Specify a custom URL to an icon
	'last_tab'             => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon'            => 'icon-themes',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug'            => 'GoSheng_options',
	// Page slug used to denote the panel
	'save_defaults'        => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show'         => false,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark'         => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export'   => true,
	// Shows the Import/Export panel when not used as a field.

	// CAREFUL -> These options are for advanced use only
	'transient_time'       => 60 * MINUTE_IN_SECONDS,
	'output'               => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag'           => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	// 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	'database'             => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

	'use_cdn' => false,
	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

	//'compiler'             => true,

	// HINTS
	'hints'   => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	)
);

/*
 * ---> START HELP TABS
 */

$tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => __( '', 'GoSheng-framework' ),
		'content' => __( '<p></p>', 'GoSheng-framework' )
	),
	array(
		'id'      => 'redux-help-tab-2',
		'title'   => __( '', 'GoSheng-framework' ),
		'content' => __( '<p></p>', 'GoSheng-framework' )
	)
);
//Redux::setHelpTab( $opt_name, $tabs );

// Set the help sidebar
$content = __( '<p></p>', 'GoSheng-framework' );
//Redux::setHelpSidebar( $opt_name, $content );


/*
 * <--- END HELP TABS
 */


// Panel Intro text -> before the form
if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = sprintf( __( '主题功能扩展，务必通过子主题方式，避免主题更新时覆盖您的修改，要从代码中访问任何已保存的选项，您可以使用全局变量： <strong>$%1$s</strong>', 'GoSheng-framework' ), $v );
} else {
	$args['intro_text'] = __( '您还没有设置全局变量。', 'GoSheng-framework' );
}

// Add content after the form.
$args['footer_text']   = '<b>' . sprintf( __( '狗剩官方网站', 'GoSheng-framework' ) . '</b>' . '<a href="https://gosheng.net" target="_blank" style="color:#488bff">' . __( 'GoSheng.net', 'GoSheng-framework' ) . '</a>' );
$args['footer_credit'] = __( '<p>感谢使用狗剩主题</p>', 'GoSheng-framework' );

Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

$theme_desc = '%1$s<a href="https://wpa.qq.com/msgrd?v=3&uin=469946668&site=qq&menu=yes" target="_blank">469946668</a>' . '<br><a href="%2$s" title="%3$s" target="_blank">%3$s</a>' . '<br>%4$s' . '<br>%5$s' . '<br>%6$s' . '<br>%7$s';
$theme_desc = sprintf(
	$theme_desc,
	__( '感谢您使用狗剩主题，主题后台使用 ReduxFramework 框架，前台使用Bootstrap框架。支持子主题扩展,支持后台一键升级版本。如需技术支持，请联系QQ', 'GoSheng-framework' ),
	admin_url( '/tools.php?page=redux-status' ),
	__( '主机信息', 'GoSheng-framework' ),
	sprintf( __( 'Redux Framework版本v%1$s', 'GoSheng-framework' ), esc_html( ReduxFramework::$_version ) ),
	sprintf( __( '谷歌 reCAPTCHA版本%1$s', 'GoSheng-framework' ), 'v3' ),
	sprintf( __( 'Bootstrap版本%1$s', 'GoSheng-framework' ), 'v4.1.3' ),
	sprintf( __( 'Font Awesome版本%1$s', 'GoSheng-framework' ), 'v5.5.0' )
);

// -> START Switch & Button Set
Redux::setSection( $opt_name, array(
	'id'    => 'GoSheng_theme_desc',
	'title' => __( '主题说明', 'GoSheng-framework' ),
	'desc'  => $theme_desc,
	'icon'  => 'el el-guidedog'
) );


Redux::setSection( $opt_name, array(
	'id'    => 'linkSubmit',
	'title' => __( '链接推送', 'GoSheng-framework' ),
	'desc'  => __( '', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'linkSubmit_baidu',
	'title'      => __( '百度', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'linkSubmit_baidu_switch',
			'type'     => 'switch',
			'title'    => __( '启用百度自动推送。', 'GoSheng-framework' ),
			'subtitle' => __( '文章发布时自动推送文章给百度搜索引擎，利于文章被收录。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'linkSubmit_baidu_site',
			'type'     => 'text',
			'required' => array( 'linkSubmit_baidu_switch', '=', '1' ),
			'title'    => __( 'site', 'GoSheng-framework' ),
			'subtitle' => __( '您站点的域名', 'GoSheng-framework' ),
			'desc'     => __( '例如：www.gosheng.net', 'GoSheng-framework' ),
			'validate' => 'txt',
			'default'  => '',
		),
		array(
			'id'       => 'linkSubmit_baidu_token',
			'type'     => 'text',
			'required' => array( 'linkSubmit_baidu_switch', '=', '1' ),
			'title'    => __( 'token', 'GoSheng-framework' ),
			'subtitle' => __( '您站点在百度站长平台的token值', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'validate' => 'txt',
			'default'  => '',
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'sidebar',
	'title' => __( '侧边栏', 'GoSheng-framework' ),
	'desc'  => __( '', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'sidebar_',
	'title'      => __( '侧边栏设置', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'sidebar_switch',
			'type'     => 'switch',
			'title'    => __( '启用侧边栏。', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'sidebar_mode',
			'type'     => 'radio',
			'required' => array( 'sidebar_switch', '=', '1' ),
			'title'    => __( '侧边栏模式。', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'options'  => array(
				'1' => __( '统一侧边栏', 'GoSheng-framework' ),
				'2' => __( '单独侧边栏（待开发,支持子主题开启）', 'GoSheng-framework' ),
			),
			'default'  => '1',
		),
		array(
			'id'       => 'sidebar_home',
			'type'     => 'switch',
			'required' => array( 'sidebar_switch', '=', '1' ),
			'title'    => __( '首页侧边栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'sidebar_single',
			'type'     => 'switch',
			'required' => array( 'sidebar_switch', '=', '1' ),
			'title'    => __( '文章页侧边栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'sidebar_page',
			'type'     => 'switch',
			'required' => array( 'sidebar_switch', '=', '1' ),
			'title'    => __( '页面页侧边栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'sidebar_search',
			'type'     => 'switch',
			'required' => array( 'sidebar_switch', '=', '1' ),
			'title'    => __( '搜索页侧边栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'sidebar_category',
			'type'     => 'switch',
			'required' => array( 'sidebar_switch', '=', '1' ),
			'title'    => __( '分类页侧边栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'sidebar_404',
			'type'     => 'switch',
			'required' => array( 'sidebar_switch', '=', '1' ),
			'title'    => __( '404页侧边栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'oauth',
	'title' => __( '社会化登录', 'GoSheng-framework' ),
	'desc'  => __( '', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'oauth_github',
	'title'      => __( 'GitHub登录', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-github',
	'fields'     => array(
		array(
			'id'       => 'oauth_github_switch',
			'type'     => 'switch',
			'title'    => __( 'GitHub登录', 'GoSheng-framework' ),
			'subtitle' => __( '使用GitHub登录站点', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'oauth_github_client_id',
			'type'        => 'text',
			'required'    => array( 'oauth_github_switch', '=', '1' ),
			'title'       => __( 'GitHub登录站点Client ID', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'oauth_github_client_secret',
			'type'        => 'text',
			'required'    => array( 'oauth_github_switch', '=', '1' ),
			'title'       => __( 'GitHub登录站点Client Secret', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
	)
) );
Redux::setSection( $opt_name, array(
	'id'         => 'oauth_qq',
	'title'      => __( 'QQ登录', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'oauth_qq_switch',
			'type'     => 'switch',
			'title'    => __( 'QQ登录', 'GoSheng-framework' ),
			'subtitle' => __( '使用QQ登录站点', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'oauth_qq_client_id',
			'type'        => 'text',
			'required'    => array( 'oauth_qq_switch', '=', '1' ),
			'title'       => __( 'QQ登录站点Client ID', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'oauth_qq_client_secret',
			'type'        => 'text',
			'required'    => array( 'oauth_qq_switch', '=', '1' ),
			'title'       => __( 'QQ登录站点Client Secret', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
	)
) );
Redux::setSection( $opt_name, array(
	'id'         => 'oauth_weibo',
	'title'      => __( '微博登录', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'oauth_weibo_switch',
			'type'     => 'switch',
			'title'    => __( '微博登录', 'GoSheng-framework' ),
			'subtitle' => __( '使用微博登录站点', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'oauth_weibo_client_id',
			'type'        => 'text',
			'required'    => array( 'oauth_weibo_switch', '=', '1' ),
			'title'       => __( '微博登录站点Client ID', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'oauth_weibo_client_secret',
			'type'        => 'text',
			'required'    => array( 'oauth_weibo_switch', '=', '1' ),
			'title'       => __( '微博登录站点Client Secret', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
	)
) );
Redux::setSection( $opt_name, array(
	'id'         => 'oauth_weixin',
	'title'      => __( '微信登录', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'oauth_weixin_switch',
			'type'     => 'switch',
			'title'    => __( '微信登录', 'GoSheng-framework' ),
			'subtitle' => __( '使用微信登录站点', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'oauth_weixin_client_id',
			'type'        => 'text',
			'required'    => array( 'oauth_weixin_switch', '=', '1' ),
			'title'       => __( '微信登录站点Client ID', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'oauth_weixin_client_secret',
			'type'        => 'text',
			'required'    => array( 'oauth_weixin_switch', '=', '1' ),
			'title'       => __( '微信登录站点Client Secret', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
	)
) );
Redux::setSection( $opt_name, array(
	'id'         => 'oauth_alipay',
	'title'      => __( '支付宝登录', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'oauth_alipay_switch',
			'type'     => 'switch',
			'title'    => __( '支付宝登录', 'GoSheng-framework' ),
			'subtitle' => __( '使用支付宝登录站点', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'oauth_alipay_client_id',
			'type'        => 'text',
			'required'    => array( 'oauth_alipay_switch', '=', '1' ),
			'title'       => __( '支付宝登录站点Client ID', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'oauth_weixin_client_secret',
			'type'        => 'text',
			'required'    => array( 'oauth_alipay_switch', '=', '1' ),
			'title'       => __( '支付宝登录站点Client Secret', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'captcha',
	'title' => __( '验证', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'google_reCaptcha',
	'title'      => __( 'Google reCAPTCHA', 'GoSheng-framework' ),
	'desc'       => __( '谷歌 reCAPTCHA', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'google_reCaptcha_switch',
			'type'     => 'switch',
			'title'    => __( '谷歌reCaptcha', 'GoSheng-framework' ),
			'subtitle' => __( 'V3版本', 'GoSheng-framework' ),
			'desc'     => __( '异常信息记录需开启funDebug功能。', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'google_reCaptcha_Site_key',
			'type'        => 'text',
			'required'    => array( 'google_reCaptcha_switch', '=', '1' ),
			'title'       => __( 'Site key', 'GoSheng-framework' ),
			'subtitle'    => '<a href="https://www.google.com/recaptcha">' . __( '谷歌reCAPTCHA申请地址', 'GoSheng-framework' ) . '</a>',
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'google_reCaptcha_Secret_key',
			'type'        => 'text',
			'required'    => array( 'google_reCaptcha_switch', '=', '1' ),
			'title'       => __( 'Secret key', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'function',
	'title' => __( '功能开关', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'function_',
	'title'      => __( '工具箱', 'GoSheng-framework' ),
	'desc'       => __( 'WordPress中的一些小功能。', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'function_display_all_settings_link',
			'type'     => 'switch',
			'title'    => __( '打开所有设置。', 'GoSheng-framework' ),
			'subtitle' => "<a href='" . admin_url( '/options.php' ) . "' target='_black'>" . __( '点击这里直接查看所有设置。', 'GoSheng-framework' ) . "</a>",
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'gosheng_user_login',
			'type'     => 'switch',
			'title'    => __( '用户登录功能', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启前台用户登录功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
//		array(
//			'id'   => 'divide_1',
//			'type' => 'divide',
//			'desc' => '',
//		),
		array(
			'id'       => 'gosheng_user_register',
			'type'     => 'switch',
			'title'    => __( '用户注册功能（待完善）', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启前台用户注册功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'gosheng_user_lostPassword',
			'type'     => 'switch',
			'title'    => __( '用户找回密码功能（待完善）', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启前台用户找回密码功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'thumbs_up',
			'type'     => 'switch',
			'title'    => __( '文章点赞功能', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启文章和页面点赞功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'posted_share',
			'type'     => 'switch',
			'title'    => __( '文章分享功能', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启文章分享功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'posted_tags',
			'type'     => 'switch',
			'title'    => __( '文章标签功能', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启文章标签功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'geolocation',
			'type'     => 'switch',
			'title'    => __( '地理位置功能（待完善）', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启获取用户地理位置功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'cookie_notice',
			'type'     => 'switch',
			'title'    => __( 'Cookie技术', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启询问访客关于Cookie技术使用问题。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'cookie_notice_text',
			'type'     => 'textarea',
			'required' => array( 'cookie_notice', '=', '1' ),
			'title'    => __( 'Cookie提示内容', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '提示信息在单独的客户端，每隔30天出现一次。', 'GoSheng-framework' ),
			'validate' => 'html',
			'default'  => __( '本站采用cookie技术获取您的部分浏览信息，点击同意将表示您同意我们这么做，如果您不同意本站使用cookie技术获取您的浏览信息，请关闭浏览器窗口。', 'GoSheng-framework' ),
		),
	),
) );

Redux::setSection( $opt_name, array(
	'id'     => 'notification',
	'title'  => __( '消息通知（待完善）', 'GoSheng-framework' ),
	'desc'   => __( '', 'GoSheng-framework' ),
	'icon'   => 'el el-cog',
	'fields' => array(
		array(
			'id'       => 'notification_switch',
			'type'     => 'switch',
			'title'    => __( '消息通知功能（待完善）', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启消息通知功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'notification_text',
			'type'        => 'text',
			'required'    => array( 'notification_switch', '=', '1' ),
			'title'       => __( '通知内容', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'notification_url',
			'type'        => 'text',
			'required'    => array( 'notification_switch', '=', '1' ),
			'title'       => __( '通知链接', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'notification_image',
			'type'        => 'media',
			'required'    => array( 'notification_switch', '=', '1' ),
			'title'       => __( '消息图片。', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '图片尺寸', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'url'         => true,
			'readonly'    => false,
			'preview'     => true,
			'width'       => '',
			'height'      => '',
			'default'     => array(
				'url' => '',
			),
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'     => 'site_seo',
	'title'  => __( 'SEO', 'GoSheng-framework' ),
	'desc'   => __( '首页keyword和description设置。', 'GoSheng-framework' ),
	'icon'   => 'el el-cog',
	'fields' => array(
		array(
			'id'          => 'site_keywords',
			'type'        => 'text',
			'title'       => __( 'KeyWord', 'GoSheng-framework' ),
			'subtitle'    => __( '首页关键词', 'GoSheng-framework' ),
			'desc'        => __( '每个关键词之间用英文逗号（ , ）隔开，否则搜索引擎将会认为是一个关键词。', 'GoSheng-framework' ),
			'placeholder' => __( '示例：关键词1,关键词2,关键词3,关键词4,关键词5', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'site_description',
			'type'        => 'textarea',
			'title'       => __( 'Description', 'GoSheng-framework' ),
			'subtitle'    => __( '首页简介设置。', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '示例：本站为狗剩主题官网，致力于为草根提供一个基于WordPress的简单高效的自媒体网站，狗剩主题前端采用Bootstrap最新的版本搭建，后台拥有灵活可控的自定义选项，让不了解网站代码的草根自媒体客户可以及时的使用上最新的技术来增强网站的互动性和用户体验，让SEO不再是困扰自媒体网站的问题，客户可以专心致志的做内容。', 'GoSheng-framework' ),
			'default'     => '',
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'head',
	'title' => __( '头部head标签', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'head_switch',
	'title'      => __( 'head标签（本功能暂停使用，设置已经直接生效。）', 'GoSheng-framework' ),
	'desc'       => __( '&lt;head&gt;标签内容控制', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'hidden_wp_generator',
			'type'     => 'switch',
			'title'    => __( '版本号', 'GoSheng-framework' ),
			'subtitle' => __( '是否显示在head标签中显示WordPress版本号', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'head_rsd_link',
			'type'     => 'switch',
			'title'    => __( 'RSD EditURI', 'GoSheng-framework' ),
			'subtitle' => __( '离线编辑器开放接口 RSD EditURI', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'wlwmanifest_link',
			'type'     => 'switch',
			'title'    => __( 'wlwmanifest', 'GoSheng-framework' ),
			'subtitle' => __( '离线编辑器开放接口 wlwmanifest', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'feed_links',
			'type'     => 'switch',
			'title'    => __( 'Feed (1)', 'GoSheng-framework' ),
			'subtitle' => __( 'Feed (1)', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'feed_links_extra',
			'type'     => 'switch',
			'title'    => __( 'Feed （分类）', 'GoSheng-framework' ),
			'subtitle' => __( 'Feed （分类）', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'wp_shortlink_wp_head',
			'type'     => 'switch',
			'title'    => __( '动态链接地址（head标签中的shortlink）', 'GoSheng-framework' ),
			'subtitle' => __( '动态链接地址（head标签中的shortlink）', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'wp_shortlink_header',
			'type'     => 'switch',
			'title'    => __( '动态链接地址2 shortlink', 'GoSheng-framework' ),
			'subtitle' => __( '动态链接地址2 shortlink', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'rel_canonical',
			'type'     => 'switch',
			'title'    => __( '中文地址 canonical', 'GoSheng-framework' ),
			'subtitle' => __( '中文地址 canonical', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'wp_resource_hints',
			'type'     => 'switch',
			'title'    => __( '禁用所有dns_prefetch预读', 'GoSheng-framework' ),
			'subtitle' => __( '禁用所有dns_prefetch预读', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'print_emoji_detection_script',
			'type'     => 'switch',
			'title'    => __( 'emoji表情相关代码（脚本、样式表、dns预读）', 'GoSheng-framework' ),
			'subtitle' => __( 'emoji表情相关代码（脚本、样式表、dns预读）', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'rest_output_link_wp_head',
			'type'     => 'switch',
			'title'    => __( 'REST API链接', 'GoSheng-framework' ),
			'subtitle' => __( 'REST API链接', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'wp_admin_bar_wp_logo',
			'type'     => 'switch',
			'title'    => __( '工具栏-WordPress徽标', 'GoSheng-framework' ),
			'subtitle' => __( '工具栏-WordPress徽标', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'wp_admin_bar_GoSheng_menu',
			'type'     => 'switch',
			'title'    => __( '工具栏-主题快捷菜单', 'GoSheng-framework' ),
			'subtitle' => __( '工具栏-主题快捷菜单', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '隐藏', 'GoSheng-framework' ),
			'off'      => __( '显示', 'GoSheng-framework' ),
			'default'  => false,
		),
	)
) );
Redux::setSection( $opt_name, array(
	'id'         => 'head_element',
	'title'      => __( 'head标签元素', 'GoSheng-framework' ),
	'desc'       => __( 'head标签中的元素设置', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'          => 'theme-color',
			'type'        => 'color',
			'title'       => __( 'theme-color', 'GoSheng-framework' ),
			'subtitle'    => __( '移动端浏览器颜色', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'validate'    => 'color',
			'transparent' => false,
			'default'     => '#343A40',
		),
		array(
			'id'          => 'msapplication-navbutton-color',
			'type'        => 'color',
			'title'       => __( 'msapplication-navbutton-color', 'GoSheng-framework' ),
			'subtitle'    => __( 'Windows Phone移动端颜色', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'validate'    => 'color',
			'transparent' => false,
			'default'     => '#343A40',
		),
	),
) );

Redux::setSection( $opt_name, array(
	'id'    => 'Code',
	'title' => __( '加载代码', 'GoSheng-framework' ),
	'desc'  => __( '', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'CSS_Code',
	'title'      => __( 'CSS样式代码', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-css',
	'fields'     => array(
		array(
			'id'       => 'CSS_Code_header',
			'type'     => 'textarea',
			'title'    => __( 'head标签中', 'GoSheng-framework' ),
			'subtitle' => __( '代码将在&lt;head&gt;标签中出现。', 'GoSheng-framework' ),
			'desc'     => __( '代码将会在主题自带的CSS文件加载之后出现。', 'GoSheng-framework' ),
			'validate' => 'css',
			'default'  => '',
		),
		array(
			'id'       => 'CSS_Code_footer',
			'type'     => 'textarea',
			'title'    => __( '页面代码底部', 'GoSheng-framework' ),
			'subtitle' => __( '&lt;/body&gt;标签之前', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'validate' => 'css',
			'default'  => '',
		),
	)
) );
Redux::setSection( $opt_name, array(
	'id'         => 'JavaScript_Code',
	'title'      => __( 'JavaScript样式代码', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-css',
	'fields'     => array(
		array(
			'id'       => 'JavaScript_Code_header',
			'type'     => 'textarea',
			'title'    => __( 'head标签中', 'GoSheng-framework' ),
			'subtitle' => __( '代码将在&lt;head&gt;标签中出现。', 'GoSheng-framework' ),
			'desc'     => __( '出于页面加载性能考虑，建议在底部加载JavaScript代码。', 'GoSheng-framework' ),
			'validate' => 'js',
			'default'  => '',
		),
		array(
			'id'       => 'JavaScript_Code_footer',
			'type'     => 'textarea',
			'title'    => __( '页面代码底部', 'GoSheng-framework' ),
			'subtitle' => __( '&lt;/body&gt;标签之前', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'validate' => 'js',
			'default'  => '',
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'reward',
	'title' => __( '打赏', 'GoSheng-framework' ),
	'desc'  => __( '打赏功能', 'GoSheng-framework' ),
	'icon'  => 'el el-picture'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'reward_',
	'title'      => __( '打赏', 'GoSheng-framework' ),
	'desc'       => __( '文章和页面内容中显示打赏组件。', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-picture',
	'fields'     => array(
		array(
			'id'       => 'reward_all',
			'type'     => 'switch',
			'title'    => __( '打赏功能开关', 'GoSheng-framework' ),
			'subtitle' => __( '是否开启打赏功能。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'reward_alipay',
			'type'     => 'switch',
			'required' => array( 'reward_all', '=', '1' ),
			'title'    => __( '支付宝', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'reward_alipay_text',
			'type'        => 'text',
			'required'    => array( 'reward_alipay', '=', '1' ),
			'title'       => __( '支付宝打赏提示语', 'GoSheng-framework' ),
			'subtitle'    => __( '在支付宝收款二维码下面的文字说明。', 'GoSheng-framework' ),
			'desc'        => __( '例如：收款人姓名为狗剩。', 'GoSheng-framework' ),
			'placeholder' => __( '我的支付宝收款人姓名是狗剩', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'reward_alipay_image',
			'type'        => 'media',
			'required'    => array( 'reward_alipay', '=', '1' ),
			'title'       => __( '支付宝收款二维码图片。', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '请输入二维码图片地址或者上传二维码图片文件。', 'GoSheng-framework' ),
			'url'         => true,
			'readonly'    => false,
			'preview'     => true,
			'width'       => '',
			'height'      => '',
			'default'     => array(
				'url' => themeStaticFile_URI . 'img/qr_alipay.png',
			),
		),
		array(
			'id'       => 'reward_weixin',
			'type'     => 'switch',
			'required' => array( 'reward_all', '=', '1' ),
			'title'    => __( '微信', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'reward_weixin_text',
			'type'        => 'text',
			'required'    => array( 'reward_weixin', '=', '1' ),
			'title'       => __( '微信打赏提示语', 'GoSheng-framework' ),
			'subtitle'    => __( '在微信收款二维码下面的文字说明。', 'GoSheng-framework' ),
			'desc'        => __( '例如：收款人姓名为狗剩。', 'GoSheng-framework' ),
			'placeholder' => __( '我的微信收款人姓名是狗剩', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'reward_weixin_image',
			'type'        => 'media',
			'required'    => array( 'reward_weixin', '=', '1' ),
			'title'       => __( '微信收款二维码图片。', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '请输入二维码图片地址或者上传二维码图片文件', 'GoSheng-framework' ),
			'url'         => true,
			'readonly'    => false,
			'preview'     => true,
			'width'       => '',
			'height'      => '',
			'default'     => array(
				'url' => themeStaticFile_URI . 'img/qr_weixin.png',
			),
		),
		array(
			'id'       => 'reward_qpay',
			'type'     => 'switch',
			'required' => array( 'reward_all', '=', '1' ),
			'title'    => __( 'QQ钱包', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'reward_qpay_text',
			'type'        => 'text',
			'required'    => array( 'reward_qpay', '=', '1' ),
			'title'       => __( 'QQ钱包打赏提示语', 'GoSheng-framework' ),
			'subtitle'    => __( '在QQ钱包收款二维码下面的文字说明。', 'GoSheng-framework' ),
			'desc'        => __( '例如：收款人姓名为狗剩。', 'GoSheng-framework' ),
			'placeholder' => __( '我的QQ钱包收款人姓名是狗剩', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'reward_qpay_image',
			'type'        => 'media',
			'required'    => array( 'reward_qpay', '=', '1' ),
			'title'       => __( 'QQ钱包收款二维码图片。', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '请输入二维码图片地址或者上传二维码图片文件', 'GoSheng-framework' ),
			'url'         => true,
			'readonly'    => false,
			'preview'     => true,
			'width'       => '',
			'height'      => '',
			'default'     => array(
				'url' => themeStaticFile_URI . 'img/qr_qpay.png',
			),
		),
		array(
			'id'       => 'reward_baifubao',
			'type'     => 'switch',
			'required' => array( 'reward_all', '=', '1' ),
			'title'    => __( '百度钱包', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'reward_baifubao_text',
			'type'        => 'text',
			'required'    => array( 'reward_baifubao', '=', '1' ),
			'title'       => __( '百度钱包打赏提示语', 'GoSheng-framework' ),
			'subtitle'    => __( '在百度钱包收款二维码下面的文字说明。', 'GoSheng-framework' ),
			'desc'        => __( '例如：收款人姓名为狗剩。', 'GoSheng-framework' ),
			'placeholder' => __( '我的百度钱包收款人姓名是狗剩', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'reward_baifubao_image',
			'type'        => 'media',
			'required'    => array( 'reward_baifubao', '=', '1' ),
			'title'       => __( '百度钱包收款二维码图片。', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '请输入二维码图片地址或者上传二维码图片文件', 'GoSheng-framework' ),
			'url'         => true,
			'readonly'    => false,
			'preview'     => true,
			'width'       => '',
			'height'      => '',
			'default'     => array(
				'url' => themeStaticFile_URI . 'img/qr_weixin.png',
			),
		),
		array(
			'id'       => 'reward_paypal',
			'type'     => 'switch',
			'required' => array( 'reward_all', '=', '1' ),
			'title'    => __( 'PayPal', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'          => 'reward_paypal_text',
			'type'        => 'text',
			'required'    => array( 'reward_paypal', '=', '1' ),
			'title'       => __( 'PayPal打赏提示语', 'GoSheng-framework' ),
			'subtitle'    => __( '在PayPal.Me链接下面的文字说明。', 'GoSheng-framework' ),
			'desc'        => __( '例如：收款人姓名为狗剩。', 'GoSheng-framework' ),
			'placeholder' => __( '我的PayPal.Me链接收款人姓名是狗剩', 'GoSheng-framework' ),
			'default'     => '',
		),
		array(
			'id'          => 'reward_paypal_url',
			'type'        => 'text',
			'required'    => array( 'reward_paypal', '=', '1' ),
			'validate'    => 'txt',
			'title'       => __( 'PayPal.Me链接账户名', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '例如：zhangchenglin', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '',
		),
//		array(
//			'id'          => 'reward_paypal_image',
//			'type'        => 'media',
//			'required'    => array( 'reward_paypal', '=', '1' ),
//			'title'       => __( 'PayPal收款图片。', 'GoSheng-framework' ),
//			'subtitle'    => __( '', 'GoSheng-framework' ),
//			'desc'        => __( '', 'GoSheng-framework' ),
//			'placeholder' => __( '请输入二维码图片地址或者上传二维码图片文件', 'GoSheng-framework' ),
//			'url'         => true,
//			'readonly'    => false,
//			'preview'     => true,
//			'width'       => '',
//			'height'      => '',
//			'default'     => array(
//				'url' => '',
//			),
//		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'owl_carousel',
	'title' => __( '轮播图', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-picture'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'owl_carousel_',
	'title'      => __( '顶部轮播图', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-picture',
	'fields'     => array(
		array(
			'id'       => 'owl_carousel_top',
			'type'     => 'switch',
			'title'    => __( '顶部全宽轮播图开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'owl_carousel_top_slides',
			'type'     => 'slides',
			'required' => array( 'owl_carousel_top', '=', '1' ),
			'title'    => __( '顶部全宽轮播图', 'GoSheng-framework' ),
			'subtitle' => __( '2张以上', 'GoSheng-framework' ),
			'desc'     => __( '宽度1920px，高度自定义，最好效果是统一的高度，太高影响页面效果，建议450px—650px', 'GoSheng-framework' ),
		),
	),
) );
Redux::setSection( $opt_name, array(
	'id'         => 'head_owl_carousel_home_small',
	'title'      => __( '顶部轮播图3小', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-picture',
	'fields'     => array(
		array(
			'id'       => 'owl_carousel_top_small',
			'type'     => 'switch',
			'title'    => __( '小轮播图开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'owl_carousel_top_small_slides',
			'type'     => 'slides',
			'required' => array( 'owl_carousel_top_small', '=', '1' ),
			'title'    => __( '小轮播图', 'GoSheng-framework' ),
			'subtitle' => __( '三张以上', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
		),
	),
) );

Redux::setSection( $opt_name, array(
	'id'    => 'robots',
	'title' => __( '虚拟Robots.txt', 'GoSheng-framework' ),
	'desc'  => __( '', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'robots_',
	'title'      => __( '虚拟Robots.txt设置', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'robots_switch',
			'type'     => 'switch',
			'title'    => __( '虚拟Robots.txt开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
		array(
			'id'       => 'robots_textarea',
			'type'     => 'textarea',
			'required' => array( 'robots_switch', '=', '1' ),
			'title'    => __( '虚拟Robots内容', 'GoSheng-framework' ),
			'subtitle' => __( '内容将会出现在站点根目录下robots.txt中，会替换掉WordPress默认虚拟robots.txt文件内容，所以您的（对搜索引擎的可见性）设置将会失效。', 'GoSheng-framework' ),
			'desc'     => "<a href='" . home_url( '/robots.txt' ) . "' target='_black'>" . __( '点击这里查看本站robots.txt', 'GoSheng-framework' ) . "</a>",
			'validate' => 'txt',
			'default'  => "User-agent: *" . "\n" . "Disallow: *" . "\n" . "Allow:",
		),
	),
) );

Redux::setSection( $opt_name, array(
	'id'    => 'widgets',
	'title' => __( '小工具', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'small_parts',
	'title'      => __( '小组件', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'part_breadcrumb',
			'type'     => 'switch',
			'title'    => __( '导航栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'breadcrumb_delimiter',
			'type'        => 'text',
			'required'    => array( 'part_breadcrumb', '=', '1' ),
			'title'       => __( '导航栏分隔符', 'GoSheng-framework' ),
			'subtitle'    => __( '每一级之间的字符样式', 'GoSheng-framework' ),
			'desc'        => __( '例如：&raquo;', 'GoSheng-framework' ),
			'placeholder' => __( '例如：&raquo;', 'GoSheng-framework' ),
			'default'     => '&raquo;',
		),
		array(
			'id'       => 'gosheng_notice',
			'type'     => 'switch',
			'title'    => __( '公告栏消息栏开关', 'GoSheng-framework' ),
			'subtitle' => __( '在文章和页面的导航栏下面增加一个可由用户关闭的消息通知。', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'gosheng_notice_text',
			'type'        => 'textarea',
			'required'    => array( 'gosheng_notice', '=', '1' ),
			'title'       => __( '消息通知内容', 'GoSheng-framework' ),
			'subtitle'    => __( '消息内容支持HTML代码，消息在被访客关闭后，12小时不会再次出现，12小时后会再次出现。', 'GoSheng-framework' ),
			'desc'        => __( '比如：您在设置了一条消息，用户访问网站后看到这条消息，然后关闭了这条消息，关闭的时间是12点34分，那么在这个时间往后的12个小时之内，用户再次用这个电脑访问网站，用户是不会再次看到这个消息的，但如果用户没有手动关闭，那么这个消息会一直存在。', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => __( '这是一条消息通知，内容可在后台主题选项中的<b>小组件</b>中设置。', 'GoSheng-framework' ),
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'footer',
	'title' => __( '底部', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'footer_',
	'title'      => __( '底部小工具', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'       => 'head_welcome',
			'type'     => 'switch',
			'title'    => __( '顶部欢迎语', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'welcome_msg',
			'type'        => 'text',
			'required'    => array( 'head_welcome', '=', '1' ),
			'validate'    => 'html',
			'title'       => __( '顶部欢迎语', 'GoSheng-framework' ),
			'subtitle'    => __( '支持HTML代码', 'GoSheng-framework' ),
			'desc'        => __( '例如：欢迎访问。', 'GoSheng-framework' ),
			'placeholder' => __( '例如：欢迎访问。', 'GoSheng-framework' ),
			'default'     => '欢迎访问',
		),
		array(
			'id'       => 'float_tool_qq_switch',
			'type'     => 'switch',
			'title'    => __( '右侧联系QQ', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'float_tool_qq_text',
			'type'        => 'text',
			'required'    => array( 'float_tool_qq_switch', '=', '1' ),
			'validate'    => 'text',
			'title'       => __( '右侧联系QQ号码', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '例如：469946668', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => '469946668',
		),
		array(
			'id'       => 'footer_copyright',
			'type'     => 'switch',
			'title'    => __( '底部版权信息', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'footer_copyright_msg',
			'type'        => 'text',
			'required'    => array( 'footer_copyright', '=', '1' ),
			'validate'    => 'html',
			'title'       => __( '底部版权信息', 'GoSheng-framework' ),
			'subtitle'    => __( '支持HTML代码', 'GoSheng-framework' ),
			'desc'        => __( '例如：CopyRight 狗剩 2018 &copy; https://GoSheng.net', 'GoSheng-framework' ),
			'placeholder' => __( '', 'GoSheng-framework' ),
			'default'     => 'Copyright 狗剩 2018 &copy; https://GoSheng.net 基于 WordPress 托管于阿里云',
		),
		array(
			'id'       => 'ICP',
			'type'     => 'switch',
			'title'    => __( 'ICP备案', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'ICP_number',
			'type'        => 'text',
			'required'    => array( 'ICP', '=', '1' ),
			'title'       => __( 'ICP备案号', 'GoSheng-framework' ),
			'subtitle'    => __( '工信部的备案号', 'GoSheng-framework' ),
			'desc'        => __( '例如：闽ICP备15012807号-1', 'GoSheng-framework' ),
			'placeholder' => __( '请输入ICP备案号。', 'GoSheng-framework' ),
			'default'     => '示例：京ICP证030173号',
		),
		array(
			'id'       => 'recordcode',
			'type'     => 'switch',
			'title'    => __( '公安备案', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'recordcode_number',
			'type'        => 'text',
			'required'    => array( 'recordcode', '=', '1' ),
			'title'       => __( '公安备案号', 'GoSheng-framework' ),
			'subtitle'    => __( '公安部的备案号', 'GoSheng-framework' ),
			'desc'        => __( '例如：11000002000001', 'GoSheng-framework' ),
			'placeholder' => __( '请输入您的公安备案号', 'GoSheng-framework' ),
			'default'     => '示例：11000002000001',
		),
		array(
			'id'          => 'recordcode_text',
			'type'        => 'text',
			'required'    => array( 'recordcode', '=', '1' ),
			'title'       => __( '公安备案文字', 'GoSheng-framework' ),
			'subtitle'    => __( '公安部的备案文字信息', 'GoSheng-framework' ),
			'desc'        => __( '例如：京公网安备11000002000001号', 'GoSheng-framework' ),
			'placeholder' => __( '请输入您的公安备案文字信息', 'GoSheng-framework' ),
			'default'     => '示例：京公网安备11000002000001号',
		),
		array(
			'id'       => 'website_statistics',
			'type'     => 'switch',
			'title'    => __( '统计代码', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'website_statistics_code',
			'type'        => 'textarea',
			'required'    => array( 'website_statistics', '=', '1' ),
			'title'       => __( '统计代码', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '包含&lt;script&gt;标签', 'GoSheng-framework' ),
			'placeholder' => __( '例如：<script src="https://s22.cnzz.com/z_stat.php?id=1270287786&web_id=1270287786" language="JavaScript"></script>', 'GoSheng-framework' ),
			'validate'    => 'js',
			'default'     => '',
		),
		array(
			'id'       => 'FunDebug',
			'type'     => 'switch',
			'title'    => __( 'FunDebug功能', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'          => 'FunDebug_version',
			'type'        => 'text',
			'required'    => array( 'FunDebug', '=', '1' ),
			'title'       => __( 'FunDebug版本：', 'GoSheng-framework' ),
			'subtitle'    => __( 'FunDebug的版本', 'GoSheng-framework' ),
			'desc'        => __( '查看FunDebug版本号：', 'GoSheng-framework' ) . '<a href="https://docs.fundebug.com/notifier/javascript/version.html?form=GoShengTheme" target="_blank">点这里</a>',
			'placeholder' => __( '此项为必填项。', 'GoSheng-framework' ),
			'default'     => '1.2.3',
		),
		array(
			'id'          => 'FunDebug_ApiKey',
			'type'        => 'text',
			'required'    => array( 'FunDebug', '=', '1' ),
			'title'       => __( 'ApiKey：', 'GoSheng-framework' ),
			'subtitle'    => __( 'funDebug的ApiKey', 'GoSheng-framework' ),
			'desc'        => __( '查看FunDebug的apikey：', 'GoSheng-framework' ) . '<a href="https://fundebug.com/project/integrate?form=GoShengTheme" target="_blank">点这里</a>',
			'placeholder' => __( '此项为必填项。', 'GoSheng-framework' ),
			'default'     => 'c3fc86af5c65c2dd31d842ba75456bc610e0802700f2627e9ae12cd3533952d4',
		),
	),
) );

Redux::setSection( $opt_name, array(
	'id'    => 'hitokoto',
	'title' => __( '一言', 'GoSheng-framework' ),
	'desc'  => __( '', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'hitokoto_',
	'title'      => __( '一言设置', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cog',
	'fields'     => array(
		array(
			'id'       => 'hitokoto_switch',
			'type'     => 'switch',
			'title'    => __( '一言开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => true,
		),
		array(
			'id'       => 'hitokoto_api_url',
			'type'     => 'select',
			'required' => array( 'hitokoto_switch', '=', '1' ),
			'title'    => __( '一言API地址', 'GoSheng-framework' ),
			'subtitle' => __( '使用的一言API地址', 'GoSheng-framework' ),
			'desc'     => __( '.', 'GoSheng-framework' ),
			'options'  => array(
				'https://v1.hitokoto.cn' => __( '官方v1 API', 'GoSheng-framework' ),
			),
			'default'  => 'https://v1.hitokoto.cn',
		),
		array(
			'id'       => 'hitokoto_cat',
			'type'     => 'select',
//			'multi'    => true,
			'required' => array( 'hitokoto_switch', '=', '1' ),
			'title'    => __( '语句类型', 'GoSheng-framework' ),
			'subtitle' => __( '一言语句类型', 'GoSheng-framework' ),
			'desc'     => __( '.', 'GoSheng-framework' ),
			'options'  => array(
				''  => __( '随机', 'GoSheng-framework' ),
				'a' => __( '动画', 'GoSheng-framework' ),
				'b' => __( '漫画', 'GoSheng-framework' ),
				'c' => __( '游戏', 'GoSheng-framework' ),
				'd' => __( '小说', 'GoSheng-framework' ),
				'e' => __( '原创', 'GoSheng-framework' ),
				'f' => __( '网络', 'GoSheng-framework' ),
				'g' => __( '其他', 'GoSheng-framework' ),
			),
//			'default'  => array( 'a', 'b', 'c', 'd', 'e', 'f', 'g' ),
			'default'  => 'a',
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'music',
	'title' => __( '音乐', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-music'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'music',
	'title'      => __( '音乐', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-music',
	'fields'     => array(
		array(
			'id'       => 'aplayer',
			'type'     => 'switch',
			'title'    => __( '播放器开关', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'on'       => __( '开启', 'GoSheng-framework' ),
			'off'      => __( '关闭', 'GoSheng-framework' ),
			'default'  => false,
		),
	)
) );

Redux::setSection( $opt_name, array(
	'id'    => 'bei',
	'title' => __( '备用', 'GoSheng-framework' ),
	'desc'  => __( '介绍', 'GoSheng-framework' ),
	'icon'  => 'el el-cog'
) );
Redux::setSection( $opt_name, array(
	'id'         => 'bei_1',
	'title'      => __( '备用', 'GoSheng-framework' ),
	'desc'       => __( '', 'GoSheng-framework' ),
	'subsection' => true,
	'icon'       => 'el el-cogs',
	'fields'     => array(
		array(
			'id'          => 'icon_select_field',
			'type'        => 'select',
			'data'        => 'elusive-icons',
			'title'       => __( '图标演示', 'GoSheng-framework' ),
			'subtitle'    => __( '', 'GoSheng-framework' ),
			'desc'        => __( '', 'GoSheng-framework' ),
			'placeholder' => __( '请选择一个图标', 'GoSheng-framework' ),
		),
		array(
			'id'       => 'color',
			'type'     => 'color',
			'title'    => __( '颜色', 'GoSheng-framework' ),
			'subtitle' => __( '', 'GoSheng-framework' ),
			'desc'     => __( '', 'GoSheng-framework' ),
			'default'  => '#FFFFFF',
			'validate' => 'color',
		),
	),
) );


//注销仪表盘redux-framework新闻信息
class reduxDashboardWidget {
}

//class reduxNewsflash {
//}

Redux::setExtensions( $opt_name, dirname( __FILE__ ) . '/redux_extension/redux-vendor-support/' );
add_action( 'redux/page/GoSheng/enqueue', 'enqueue_style_font_awesome5' );
/*
 * 隐藏Redux Framework 欢迎页面
 * 隐藏Redux Framework 导出个人数据页面（Export Personal Data）
 * 隐藏Redux Framework 删除个人数据页面（Erase Personal Data）
 */
add_action( 'admin_init', 'GoSheng_remove_submenu_page' );
function GoSheng_remove_submenu_page() {
	remove_submenu_page( 'tools.php', 'redux-about' );
//	remove_submenu_page( 'tools.php', 'export_personal_data' );
//	remove_submenu_page( 'tools.php', 'remove_personal_data' );
}
