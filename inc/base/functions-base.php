<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'welcome_panel', 'GoSheng_admin_notice' );
if ( ! function_exists( 'GoSheng_admin_notice' ) ) {
	function GoSheng_admin_notice() {
		?>
        <div class="notice notice-info">
            <p class="about-description">
                <a target="_blank" rel="nofollow"
                   href="https://shang.qq.com/wpa/qunwpa?idkey=df3da064078a1ac1fc9e905abed117c1181e18fbb3b244f4d4e9c768f42f5458">
                    <img src="//pub.idqqimg.com/wpa/images/group.png" alt="QQ群675213777" title="QQ群675213777">
                </a>
            </p>
            <p>欢迎使用狗剩主题，同时欢迎您加入主题交流群675213777</p>
        </div>
		<?php
	}
}
add_action( 'wp_footer', 'GoSheng_wp_root_directory' );
if ( ! function_exists( 'GoSheng_wp_root_directory' ) ) {
	function GoSheng_wp_root_directory() {
		$script_before = "<script>\r\n";
		$script_code   = 'var gosheng_wp_root_directory="' . site_url( '/' ) . "\";\r\n";
		$script_after  = "</script>\r\n";
		echo $script_before . $script_code . $script_after;
	}
}
if ( ! function_exists( 'GoSheng_null_owl_carousel_message' ) ) {
	function GoSheng_null_owl_carousel_message( $text = '' ) {
		if ( ! is_user_logged_in() ) {
			return;
		}
		if ( ! empty( $text ) ) {
			$before_link = '<p class="text-center d-block">';
			$after_link  = '</p>';
			$link        = '<a rel="nofollow" href="' . admin_url( 'admin.php?page=GoSheng_options' ) . '" target="_blank">' . __( '设置轮播图', 'GoSheng-framework' ) . '</a>';
			$link        = $before_link . $text . $link . $after_link;
		} else {
			$link = '<a class="text-center d-block" rel="nofollow" href="' . admin_url( 'admin.php?page=GoSheng_options' ) . '" target="_blank">' . __( '设置轮播图', 'GoSheng-framework' ) . '</a>';
		}
		echo $link;
	}
}
if ( ! function_exists( 'GoSheng_isset_cookie' ) ) {
	function GoSheng_isset_cookie( $key, $value = '' ) {
		if ( ! empty( $value ) ) {
			return $_COOKIE[ $key ] === $value ? true : false;
		} else {
			return isset( $_COOKIE[ $key ] ) ? true : false;
		}
	}
}
if ( ! function_exists( 'GoSheng_null_nav_menu_message' ) ) {
	function GoSheng_null_nav_menu_message() {
		if ( ! is_user_logged_in() ) {
			return;
		}
		$link = '<a class="text-center d-block" rel="nofollow" href="' . admin_url( 'nav-menus.php' ) . '" target="_blank">' . __( '设置菜单', 'GoSheng-framework' ) . '</a>';
		echo $link;
	}
}
if ( ! function_exists( 'GoSheng_register_nav_menus' ) ) {
	function GoSheng_register_nav_menus() {
		$menu_array = array(
			'GoSheng_NavMenu_Top'    => __( '顶部主菜单', 'GoSheng-framework' ),
			'GoSheng_NavMenu_Left'   => __( '左侧菜单', 'GoSheng-framework' ),
			'GoSheng_NavMenu_Right'  => __( '右侧菜单', 'GoSheng-framework' ),
			'GoSheng_Links'          => __( '友情链接', 'GoSheng-framework' ),
			'GoSheng_FooterMenu'     => __( '页脚菜单', 'GoSheng-framework' ),
			'GoSheng_NavMenu_Bottom' => __( '底部菜单', 'GoSheng-framework' ),
		);
		register_nav_menus( $menu_array );
	}
}
if ( ! function_exists( 'GoSheng_NavMenuTop' ) ) {
	function GoSheng_NavMenuTop() {
		wp_nav_menu(
			array(
				'theme_location'  => 'GoSheng_NavMenu_Top',
				'container_class' => 'navbar-collapse collapse',
				'container_id'    => 'GoSheng_NavMenu_Top',
//                'menu_id'         => 'a111',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => 'GoSheng_null_nav_menu_message',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new WP_Bootstrap_Navwalker(),
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			)
		);
	}
}
//todo:
if ( ! function_exists( 'GoSheng_NavMenuLeft' ) ) {
	function GoSheng_NavMenuLeft() {
		wp_nav_menu(
			array(
				'theme_location'  => 'GoSheng_NavMenu_Left',
				'container_class' => 'navbar-collapse collapse',
				'container_id'    => 'GoSheng_NavMenu_Top',
//                'menu_id'         => 'a111',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => 'GoSheng_null_nav_menu_message',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new WP_Bootstrap_Navwalker(),
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			)
		);
	}
}
add_filter( 'nav_menu_css_class', 'GoSheng_menu_classes', 1, 3 );
if ( ! function_exists( 'GoSheng_menu_classes' ) ) {
	function GoSheng_menu_classes( $classes, $item, $args ) {
		if ( $args->theme_location == 'GoSheng_NavMenu_Top' ) {
			$classes[] = 'mx-lg-1 rounded d-flex justify-content-center btn-outline-warning';
		}

		return $classes;
	}
}
if ( ! function_exists( 'GoSheng_get_avatar' ) ) {
	add_filter( 'get_avatar', 'GoSheng_get_avatar' );
	function GoSheng_get_avatar( $avatar ) {
		$avatar = str_replace( array(
			'www.gravatar.com',
			'0.gravatar.com',
			'1.gravatar.com',
			'2.gravatar.com',
			'3.gravatar.com',
			'secure.gravatar.com'
		), 'cn.gravatar.com', $avatar );

		return $avatar;
	}
}
if ( ! function_exists( 'GoSheng_setup' ) ) {
	function GoSheng_setup() {
		load_theme_textdomain( 'GoSheng-framework', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-formats', array(
			'aside',//日志
			'audio',//音频
			'gallery',//相册
			'image',//图像
			'link',//链接
			'quote',//引语
			'standard',//标准
			'video',//视频
		) );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

//  //常规用法，在所有样式的文章、页面日志中使用缩略图功能
		add_theme_support( 'post-thumbnails' );
//  //仅在post中使用缩略图功能
//    add_theme_support('post-thumbnails', array('post'));
//  //仅在page中使用缩略图功能
//    add_theme_support('post-thumbnails', array('page'));
//  //仅在 post 和 movies 中使用
//    add_theme_support('post-thumbnails', array('post', 'movie'));
		add_image_size( 'GoSheng_thumbnails_entry', 680, 453 );

		//恢复WP自带链接功能
		add_filter( 'pre_option_link_manager_enabled', '__return_true' );
	}
}
//获取评论模板
if ( ! function_exists( 'GoSheng_get_comments' ) ) {
	function GoSheng_get_comments() {
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
}
//静态文件目录转移
if ( ! defined( 'themeStaticFile_URI' ) ) {
	switch ( get_option( 'themeStaticDirectoryStatus' ) ) {
		case true:
			define( 'themeStaticFile_URI', site_url() . '/goshengstatic/' );
			break;
		case false:
			define( 'themeStaticFile_URI', get_theme_file_uri() . '/static/' );
			break;
		default:
			define( 'themeStaticFile_URI', get_theme_file_uri() . '/static/' );
	}
}


if ( ! function_exists( 'GoSheng_remove_privacy_policy_link' ) ) {
	function GoSheng_remove_privacy_policy_link() {
		add_filter( 'the_privacy_policy_link', '__return_false' );
	}
}
GoSheng_remove_privacy_policy_link();
add_action( 'admin_menu', 'GoSheng_remove_privacy', 9 );
//移除登录界面隐私链接
if ( ! function_exists( 'GoSheng_remove_privacy' ) ) {
	function GoSheng_remove_privacy() {
		global $submenu;

		// 移除设置菜单下的隐私子菜单
		unset( $submenu['options-general.php'][45] );

		// 移除工具彩带下的相关页面
		remove_action( 'admin_menu', '_wp_privacy_hook_requests_page' );

		remove_filter( 'wp_privacy_personal_data_erasure_page', 'wp_privacy_process_personal_data_erasure_page', 10, 5 );
		remove_filter( 'wp_privacy_personal_data_export_page', 'wp_privacy_process_personal_data_export_page', 10, 7 );
		remove_filter( 'wp_privacy_personal_data_export_file', 'wp_privacy_generate_personal_data_export_file', 10 );
		remove_filter( 'wp_privacy_personal_data_erased', '_wp_privacy_send_erasure_fulfillment_notification', 10 );

		// Privacy policy text changes check.
		remove_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'text_change_check' ), 100 );

		// Show a "postbox" with the text suggestions for a privacy policy.
		remove_action( 'edit_form_after_title', array( 'WP_Privacy_Policy_Content', 'notice' ) );

		// Add the suggested policy text from WordPress.
		remove_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'add_suggested_content' ), 1 );

		// Update the cached policy info when the policy page is updated.
		remove_action( 'post_updated', array( 'WP_Privacy_Policy_Content', '_policy_page_updated' ) );
	}
}
add_filter( 'robots_txt', 'GoSheng_robots', 10, 2 );
if ( ! function_exists( 'GoSheng_robots' ) ) {
	function GoSheng_robots( $robots_txt ) {
		global $GoSheng;
		if ( $GoSheng['robots_switch'] ) {
			$robots_txt = $GoSheng['robots_textarea'];
		} else {
			$robots_txt .= '';
		}

		return $robots_txt;
	}
}
add_action( 'redux/options/GoSheng/settings/change', 'GoSheng_users_can_register' );
if ( ! function_exists( 'GoSheng_users_can_register' ) ) {
	function GoSheng_users_can_register() {
		global $GoSheng;
		if ( $GoSheng['gosheng_user_register'] ) {
			update_option( 'users_can_register', '1' );
		} else {
			update_option( 'users_can_register', '0' );
		}
	}
}
//自定义登录界面LOGO链接为任意链接
add_filter( 'login_headerurl', 'custom_login_logo_url' );
function custom_login_logo_url() {
//	return 'https://gosheng.net';
	return home_url();
}

//自定义登录页面LOGO提示为任意文本
add_filter( 'login_headertitle', 'custom_login_logo_title' );
function custom_login_logo_title( $url ) {
//	return '狗剩主题';
	return get_bloginfo( 'name' );
}

//获取主题信息
$my_theme = wp_get_theme();

$themeConfigs[] = array(
	'name'   => 'themeMode',
	'modes'  => array( 'Maintenance', 'Bootstrap', 'Foundation', 'SemanticUI', 'Framework7' ),
	'status' => get_option( 'themeMode' ),
);
$themeConfigs[] = array(
	'name'                      => 'themeDefine',
	'Common_DIR'                => '/common/',
	'THEME_NAME'                => $my_theme->get( 'Name' ),
	'THEME_URI'                 => $my_theme->get( 'ThemeURI' ),
	'THEME_VERSION'             => $my_theme->get( 'Version' ),
	'THEME_AUTHOR'              => $my_theme->get( 'Author' ),
	'THEME_AUTHOR_URI'          => $my_theme->get( 'AuthorURI' ),
	'THEME_DESCRIPTION'         => $my_theme->get( 'Description' ),
	'THEME_TAGS'                => $my_theme->get( 'Tags' ),
	'THEME_TEXTDOMAIN'          => $my_theme->get( 'TextDomain' ),
	'THEME_AUTHOR_EMAIL'        => 'admin@gosheng.net',
	'THEME_AUTHOR_QQ'           => '469946668',
	'THEME_FILE_VERSION'        => get_option( 'file_version_debug' ) ? date( 'Ymd' ) : '201801011',
	'THEME_STATIC_FILE_VERSION' => get_option( 'static_file_version_debug' ) ? date( 'His' ) : '201801011',
	'THEME_REQUIRED_WP'         => '4.8',
	'THEME_SUPPORT_WP'          => '4.9.8',
);
$themeConfig    = array_column( $themeConfigs, null, 'name' );
//常量
if ( ! defined( 'Common_DIR' ) ) {
	define( 'Common_DIR', $themeConfig['themeDefine']['Common_DIR'] );
}
if ( ! defined( 'THEME_NAME' ) ) {
	define( 'THEME_NAME', $themeConfig['themeDefine']['THEME_NAME'] );
}
if ( ! defined( 'THEME_URI' ) ) {
	define( 'THEME_URI', $themeConfig['themeDefine']['THEME_URI'] );
}
if ( ! defined( 'THEME_VERSION' ) ) {
	define( 'THEME_VERSION', $themeConfig['themeDefine']['THEME_VERSION'] );
}
if ( ! defined( 'THEME_AUTHOR' ) ) {
	define( 'THEME_AUTHOR', $themeConfig['themeDefine']['THEME_AUTHOR'] );
}
if ( ! defined( 'THEME_AUTHOR_URI' ) ) {
	define( 'THEME_AUTHOR_URI', $themeConfig['themeDefine']['THEME_AUTHOR_URI'] );
}
if ( ! defined( 'THEME_AUTHOR_QQ' ) ) {
	define( 'THEME_AUTHOR_QQ', $themeConfig['themeDefine']['THEME_AUTHOR_QQ'] );
}
if ( ! defined( 'THEME_AUTHOR_EMAIL' ) ) {
	define( 'THEME_AUTHOR_EMAIL', $themeConfig['themeDefine']['THEME_AUTHOR_EMAIL'] );
}
if ( ! defined( 'THEME_DESCRIPTION' ) ) {
	define( 'THEME_DESCRIPTION', $themeConfig['themeDefine']['THEME_DESCRIPTION'] );
}
if ( ! defined( 'THEME_TAGS' ) ) {
	define( 'THEME_TAGS', $themeConfig['themeDefine']['THEME_TAGS'] );
}
if ( ! defined( 'THEME_PREFIX' ) ) {
	define( 'THEME_PREFIX', $themeConfig['themeDefine']['THEME_TEXTDOMAIN'] . '_' );
}
if ( ! defined( 'THEME_prefix' ) ) {
	define( 'THEME_prefix', strtolower( THEME_PREFIX ) );
}
if ( ! defined( 'THEME_TEXTDOMAIN' ) ) {
	define( 'THEME_TEXTDOMAIN', $themeConfig['themeDefine']['THEME_TEXTDOMAIN'] . '_TextDomain' );
}
if ( ! defined( 'THEME_FILE_VERSION' ) ) {
	define( 'THEME_FILE_VERSION', $themeConfig['themeDefine']['THEME_FILE_VERSION'] );
}
if ( ! defined( 'THEME_STATIC_FILE_VERSION' ) ) {
	define( 'THEME_STATIC_FILE_VERSION', $themeConfig['themeDefine']['THEME_STATIC_FILE_VERSION'] );
}
if ( ! defined( 'THEME_REQUIRED_WP' ) ) {
	define( 'THEME_REQUIRED_WP', $themeConfig['themeDefine']['THEME_REQUIRED_WP'] );
}
