<?php
if (!defined('ABSPATH')) {
    exit;
}
global $GoSheng;
if ($GoSheng['sidebar_mode']=='1') {
    get_template_part('template-parts/sidebar/sidebar-common');
} elseif ($GoSheng['sidebar_mode']=='2') {
    if (is_home()) {
        get_template_part('template-parts/sidebar/sidebar-home');
    } elseif (is_front_page()) {
        get_template_part('template-parts/sidebar/sidebar-front_page');
    } elseif (is_singular()) {
        if (is_page()) {
            get_template_part('template-parts/sidebar/sidebar-page');
        } elseif (is_single()) {
            get_template_part('template-parts/sidebar/sidebar-single');
        }
    } elseif (is_archive()) {
        if (is_tag()) {
            get_template_part('template-parts/sidebar/sidebar-tag');
        } elseif (is_author()) {
            get_template_part('template-parts/sidebar/sidebar-author');
        } elseif (is_category()) {
            get_template_part('template-parts/sidebar/sidebar-category');
        }
    } elseif (is_search()) {
        get_template_part('template-parts/sidebar/sidebar-search');
    } elseif (is_404()) {
        get_template_part('template-parts/sidebar/sidebar-404');
    } else {
        get_template_part('template-parts/sidebar/sidebar-none');
    }
} else {
    echo __('侧边栏异常加载', 'GoSheng-framework');
}
