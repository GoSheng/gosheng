<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'GoSheng_breadcrumbs' ) ) {
	function GoSheng_breadcrumbs() {
		global $GoSheng;
		$delimiter = $GoSheng['breadcrumb_delimiter'];//分隔符
		$before    = '<span class="text-dark">';//在当前链接前插入
		$after     = '</span>';//在当前链接后插入
		if ( ! is_home() && ! is_front_page() || is_paged() ) {
			echo '<div itemscope itemtype="http://schema.org/WebPage" id="gosheng_breadcrumbs" class="container py-1 bg-light font-6 font-lg-7">' . esc_html( '当前位置：', 'GoSheng-framework' );
			global $post;
			$homeLink = home_url();
			echo '<i class="font-6 font-lg-7 fas fa-home"></i><a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb" href="' . $homeLink . '">' . esc_html( '首页', 'GoSheng-framework' ) . '</a> ' . $delimiter . ' ';
			if ( is_category() ) {//分类存档
				global $wp_query;
				$cat_obj   = $wp_query->get_queried_object();
				$thisCat   = $cat_obj->term_id;
				$thisCat   = get_category( $thisCat );
				$parentCat = get_category( $thisCat->parent );
				if ( $thisCat->parent != 0 ) {
					$cat_code = get_category_parents( $parentCat, true, ' ' . $delimiter . ' ' );
					echo $cat_code = str_replace( '<a', '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb"', $cat_code );
				}
				echo $before . '' . single_cat_title( '', false ) . '' . $after;
			} elseif ( is_day() ) {//天存档
				echo '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb" href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a> ' . $delimiter . ' ';
				echo '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb"  href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a> ' . $delimiter . ' ';
				echo $before . get_the_time( 'd' ) . $after;
			} elseif ( is_month() ) {//月存档
				echo '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb" href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a> ' . $delimiter . ' ';
				echo $before . get_the_time( 'F' ) . $after;
			} elseif ( is_year() ) {//年存档
				echo $before . get_the_time( 'Y' ) . $after;
			} elseif ( is_single() && ! is_attachment() ) {//文章
				if ( get_post_type() != 'post' ) {//自定义文章类型
					$post_type = get_post_type_object( get_post_type() );
					$slug      = $post_type->rewrite;
					echo '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
					echo $before . get_the_title() . $after;
				} else {//文章 post
					$cat      = get_the_category();
					$cat      = $cat[0];
					$cat_code = get_category_parents( $cat, true, ' ' . $delimiter . ' ' );
					echo $cat_code = str_replace( '<a', '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb"', $cat_code );
					echo $before . get_the_title() . $after;
				}
			} elseif ( ! is_single() && ! is_page() && get_post_type() != 'post' ) {
				$post_type = get_post_type_object( get_post_type() );
				echo $before . $post_type->labels->singular_name . $after;
			} elseif ( is_attachment() ) {//附件
				$parent = get_post( $post->post_parent );
				$cat    = get_the_category( $parent->ID );
				$cat    = $cat[0];
				echo '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb" href="' . get_permalink( $parent ) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
				echo $before . get_the_title() . $after;
			} elseif ( is_page() && ! $post->post_parent ) {//页面
				echo $before . get_the_title() . $after;
			} elseif ( is_page() && $post->post_parent ) {//父级页面
				$parent_id   = $post->post_parent;
				$breadcrumbs = array();
				while ( $parent_id ) {
					$page          = get_page( $parent_id );
					$breadcrumbs[] = '<a class="font-6 font-lg-7 text-dark" itemprop="breadcrumb" href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
					$parent_id     = $page->post_parent;
				}
				$breadcrumbs = array_reverse( $breadcrumbs );
				foreach ( $breadcrumbs as $crumb ) {
					echo $crumb . ' ' . $delimiter . ' ';
				}
				echo $before . get_the_title() . $after;
			} elseif ( is_search() ) {//搜索结果
				echo $before;
				printf( __( '搜索结果：%s', 'GoSheng-framework' ), get_search_query() );
				echo $after;
			} elseif ( is_tag() ) {//标签存档
				echo $before;
				printf( __( '标签：%s', 'GoSheng-framework' ), single_tag_title( '', false ) );
				echo $after;
			} elseif ( is_author() ) {//作者存档
				global $author;
				$userdata = get_userdata( $author );
				echo $before;
				printf( __( '作者： %s', 'GoSheng-framework' ), $userdata->display_name );
				echo $after;
			} elseif ( is_404() ) {//404页面
				echo $before;
				_e( '没有找到您要的页面', 'GoSheng-framework' );
				echo $after;
			}
			if ( get_query_var( 'paged' ) ) {//分页
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) {
					echo sprintf( __( '( %s 页)', 'GoSheng-framework' ), get_query_var( 'paged' ) );
				}
			}
			echo '</div>';
		}
	}
}
