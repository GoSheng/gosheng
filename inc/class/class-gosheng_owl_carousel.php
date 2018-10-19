<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'GoSheng_owl_carousel' ) ) {
	class GoSheng_owl_carousel {
		public function __construct() {
		}

		public function gosheng_owl( $switch = false, $slides = array(), $id = '' ) {
			if ( $switch ) {
				switch ( count( $slides ) ) {
					case 0:
					case 1:
						GoSheng_null_owl_carousel_message( __( '您还没有设置轮播图，大于3张图。', 'GoSheng-framework' ) );
						break;
					case 2:
					case 3:
						GoSheng_null_owl_carousel_message( __( '图片数量设置太少，请设置不少于3张图片。', 'GoSheng-framework' ) );
						break;
					case 4:
					case 5:
					case 6:
					case 7:
					case 8:
					case 9:
					case 10:
						echo '<div id="' . $id . '" class="owl-carousel owl-theme mb-1 mb-lg-2">';
						for ( $i = 0; $i <= count( $slides ) - 1; $i ++ ) {
							$html = '<div class="item">';
							$html .= '<a href="' . $slides[ $i ]['url'] . '" title="' . $slides[ $i ]['title'] . '" target="_blank">';
							$html .= '<img class="img-fluid" src="' . $slides[ $i ]['image'] . '" alt="' . $slides[ $i ]['title'] . '">';
							$html .= '</a>';
							$html .= '<a href="' . $slides[ $i ]['url'] . '" class="bg-secondary px-1 text-black-50 w-100 b-0">';
							$html .= $slides[ $i ]['title'];
							$html .= '</a>';
							$html .= '</div>';
							echo $html;
						}
						echo '</div>';
						break;
					default:
						GoSheng_null_owl_carousel_message( __( '图片数量大于10张，图片数量过多会拖慢网站加载速度。', 'GoSheng-framework' ) );
				}
			}
		}

	}
}
