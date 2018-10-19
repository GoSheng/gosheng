<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'widgets_init', 'GoSheng_remove_default_widget' );
function GoSheng_remove_default_widget() {
//        unregister_widget('WP_Widget_Recent_Posts');//移除近期文章
//        unregister_widget('WP_Widget_Recent_Comments');//移除近期评论
//        unregister_widget('WP_Widget_Meta');//移除站点功能
//        unregister_widget('WP_Widget_Tag_Cloud');//移除标签云
//        unregister_widget('WP_Widget_Text');//移除文本框
//        unregister_widget('WP_Widget_Archives');//移除文章归档
//        unregister_widget('WP_Widget_RSS');//移除RSS
//        unregister_widget('WP_Nav_Menu_Widget');//移除菜单
//        unregister_widget('WP_Widget_Pages');//移除页面
//        unregister_widget('WP_Widget_Calendar');//移除日历
//        unregister_widget('WP_Widget_Categories');//移除分类目录
//        unregister_widget('WP_Widget_Search');//移除搜索
}

