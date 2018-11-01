<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'GoSheng_taobao' ) ) {
	function GoSheng_taobao() {//主题推荐，请保留。
		$text = '<p class="mb-1 mb-lg-2 text-center font-8 font-lg-9"><a class="text-muted" href="https://gosheng.net" target="_blank" title="%1$s">%1$s</a><span><a class="text-muted" href="https://item.taobao.com/item.htm?id=562170176151" rel="nofollow" target="_blank" title="%2$s">&nbsp;&nbsp;%3$s</a></span></p>';
		$text = sprintf( $text, THEME_NAME, __( '上淘宝购买狗剩主题', 'GoSheng-framework' ), __( '淘宝店铺', 'GoSheng-framework' ) );
		echo $text;
	}
}
if ( ! function_exists( 'GoSheng_FunDebug' ) ) {
	function GoSheng_FunDebug() {
		global $GoSheng;
		if ( $GoSheng['FunDebug'] ) {
			$html = '<script src="https://js.fundebug.cn/fundebug.' . $GoSheng['FunDebug_version'] . '.min.js" apikey="' . $GoSheng['FunDebug_ApiKey'] . '"></script>' . "\r\n";
		}
		echo $html;
	}
}
if ( ! function_exists( 'GoSheng_meta_name_content' ) ) {
	function GoSheng_meta_name_content( $name_value, $content_value, $name = '', $content = '' ) {
		if ( empty( $name ) ) {
			$name = 'name';
		}
		if ( empty( $content ) ) {
			$content = 'content';
		}
		$html = '<meta ' . $name . '="' . $name_value . '" ' . $content . '="' . $content_value . '">' . "\r\n";
		echo $html;
	}
}

if ( ! function_exists( 'GoSheng_keywords' ) ) {
	function GoSheng_keywords() {
		global $GoSheng;
		if ( is_home() || is_front_page() ) {
			echo trim( $GoSheng['site_keywords'] );
		} elseif ( is_category() ) {
			single_cat_title();
		} elseif ( is_single() ) {
			echo trim( wp_title( '', false ) ) . ',';
			if ( has_tag() ) {
				foreach ( ( get_the_tags() ) as $tag ) {
					echo $tag->name . ',';
				}
			}
			foreach ( ( get_the_category() ) as $category ) {
				echo $category->cat_name . ',';
			}
		} elseif ( is_search() ) {
			the_search_query();
		} else {
			echo trim( wp_title( '', false ) );
		}
	}
}
if ( ! function_exists( 'GoSheng_description' ) ) {
	function GoSheng_description() {
		global $GoSheng;
		if ( is_home() || is_front_page() ) {
			echo trim( $GoSheng['site_description'] );
		} elseif ( is_category() ) {
			$description = strip_tags( category_description() );
			echo trim( $description );
		} elseif ( is_single() ) {
			if ( get_the_excerpt() ) {
				echo get_the_excerpt();
			} else {
				global $post;
				$description = trim( str_replace( array(
					"\r\n",
					"\r",
					"\n",
					"　",
					" "
				), " ", str_replace( "\"", "'", strip_tags( $post->post_content ) ) ) );
				echo mb_substr( $description, 0, 220, 'utf-8' );
			}
		} elseif ( is_search() ) {
			echo '“';
			the_search_query();
			echo '”为您找到结果 ';
			global $wp_query;
			echo $wp_query->found_posts;
			echo ' 个';
		} elseif ( is_tag() ) {
			$description = strip_tags( tag_description() );
			echo trim( $description );
		} else {
			$description = strip_tags( term_description() );
			echo trim( $description );
		}
	}
}
if ( ! function_exists( 'GoSheng_get_post_format' ) ) {
	function GoSheng_get_post_format() {
		$format       = get_post_format();
		$format_array = array( 'aside', 'audio', 'excerpt', 'gallery', 'image', 'link', 'quote', 'video' );
		if ( false === $format ) {
			$format = 'standard';
		} elseif ( ! in_array( $format, $format_array ) ) {
			$format = 'other';
		}

		return $format;
	}
}
if ( ! function_exists( 'GoSheng_Style_Code_Load' ) ) {
	function GoSheng_Style_Code_Load( $variable ) {
		if ( ! empty( $variable ) ) {
			$html = '<style>' . $variable . '</style>';
		}
		echo $html;
	}
}
if ( ! function_exists( 'GoSheng_JavaScript_Code_Load' ) ) {
	function GoSheng_JavaScript_Code_Load( $variable ) {
		if ( ! empty( $variable ) ) {
			$html = '<script>' . $variable . '</script>';
		}
		echo $html;
	}
}
add_filter( 'the_password_form', 'GoSheng_editor_post_password' );
function GoSheng_editor_post_password() {
	$url = home_url( '/wp-login.php?action=postpass' );
	global $post;
	$label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
	$o     = '
    <form id="GoSheng_editor_post_password">
        <div class="card">
            <div class="card-header text-center text-black-50">这是一篇受密码保护的内容</div>
            <div class="card-body text-center">
                <input type="hidden" name="redirect_to">
                <input class="form-control" placeholder="请输入阅读密码" name="post_password" id="' . $label . '" type="password" size="20" autocomplete="off"  required="required">
                <input value="确认" class="btn btn-outline-secondary text-dark" name="Submit" type="submit" formmethod="post" formaction="' . $url . '">
            </div>
        </div>
    </form>';

	return $o;
}

//todo:待完善研究特色图片尺寸
add_filter( 'add_image_size', create_function( '', 'return 1;' ) );
if ( ! function_exists( 'GoSheng_posted_thumbnail_url' ) ) {
	function GoSheng_posted_thumbnail() {
		$img_id  = get_post_thumbnail_id();
		$img_url = wp_get_attachment_image_src( $img_id, 'GoSheng_thumbnails_entry' );
		$img_url = $img_url[0];
		echo '<a href="javascript:;"><img class="img-fluid d-block mx-auto" src="' . $img_url . '" /></a>';
	}
}
if ( ! function_exists( 'GoSheng_posted_thumbnail_url' ) ) {
	function GoSheng_posted_thumbnail_url() {
		$img_id  = get_post_thumbnail_id();
		$img_url = wp_get_attachment_image_src( $img_id, 'GoSheng_thumbnails_entry' );
		if ( $img_url[0] ) {
			echo $img_url[0];
		} else {
			global $GoSheng;
			if ( $GoSheng['post_thumbnail_image'] ) {
				echo $GoSheng['post_thumbnail_image']['url'];
			} else {
				echo themeStaticFile_URI . 'img/not-set-post-thumbnail.png';
			}
		}
	}

}
if ( ! function_exists( 'GoSheng_post_nav_1' ) ) {
	function GoSheng_post_nav_1() {
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );
		if ( ! $next && ! $previous ) {
			return;
		}
		?>
        <nav class="container navigation post-navigation">
            <span class="sr-only"><?php _e( '文章导航', 'GoSheng-framework' ); ?></span>
            <div class="row nav-links justify-content-between">
				<?php
				if ( get_previous_post_link() ) {
					previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', '上一篇', 'GoSheng-framework' ) );
				}
				if ( get_next_post_link() ) {
					next_post_link( '<span class="nav-next">%link</span>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', '下一篇', 'GoSheng-framework' ) );
				}
				?>
            </div><!-- .nav-links -->
        </nav><!-- .navigation -->

		<?php
	}
}
if ( ! function_exists( 'GoSheng_post_nav' ) ) {
	function GoSheng_post_nav() {
		$post_nav_before = '<nav class="mb-3 navigation post-navigation d-flex justify-content-between" role="' . esc_attr__( '文章导航', 'GoSheng-framework' ) . '">';
		$post_nav_desc   = '<span class="sr-only">' . esc_attr__( '文章导航', 'GoSheng-framework' ) . '</span>';
		$post_nav_after  = '</nav>';
		echo $post_nav_before;
		echo $post_nav_desc;
		$prev_post = get_previous_post( true );
		if ( ! empty( $prev_post ) ):?>
            <div class="nav-previous">
                <a title="<?php echo $prev_post->post_title; ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>">&lt;上一篇</a>
            </div>
		<?php else: ?>
            <div class="nav-previous">
                <a title="<?php esc_attr_e( '没有旧的文章了', 'GoSheng-framework' ) ?>">&lt;无</a>
            </div>
		<?php endif; ?>
		<?php
		$next_post = get_next_post( true );
		if ( ! empty( $next_post ) ):?>
            <div class="nav-next">
                <a title="<?php echo $next_post->post_title; ?>" href="<?php echo get_permalink( $next_post->ID ); ?>">下一篇&gt;</a>
            </div>
		<?php else: ?>
            <div class="nav-next">
                <a title="<?php esc_attr_e( '没有新的文章了', 'GoSheng-framework' ) ?>">无&gt;</a>
            </div>
		<?php endif; ?>
		<?php
		echo $post_nav_after;

	}
}
//todo:待完善
if ( ! function_exists( 'GoSheng_posted_time' ) ) {
	function GoSheng_posted_time( $display_type = false ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="d-none" updatetime="%3$s">%4$s</time>';
		}
		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		switch ( $display_type ) {
			case false:
				$posted_on = '<span class="font-8 font-lg-9"><i class="far fa-clock mr-1 mr-lg-1"></i>' . $time_string . '</span>';
				break;
			default:
				$posted_on = $time_string;
		}
		echo $posted_on;
	}
}
if ( ! function_exists( 'GoSheng_posted_permalink' ) ) {
	function GoSheng_posted_permalink() {
		echo get_permalink();
	}
}
if ( ! function_exists( 'GoSheng_posted_title' ) ) {
	function GoSheng_posted_title( $num_words = '' ) {
		if ( empty( $num_words ) ) {
			$num_words = 25;
		}
		echo wp_trim_words( get_the_title(), $num_words, '......' );
	}
}
if ( ! function_exists( 'GoSheng_posted_excerpt' ) ) {
	function GoSheng_posted_excerpt( $num_words = '' ) {
		if ( has_excerpt() ) {
			echo the_excerpt();
		} else {
			if ( empty( $num_words ) ) {
				$num_words = 38;
			}
			global $post;
			echo wp_trim_words( strip_tags( $post->post_content ), $num_words, '......' );
		}
	}
}

if ( ! function_exists( 'GoSheng_posted_author' ) ) {
	function GoSheng_posted_author( $display_type = false ) {
		$author_before = '<span class="font-8 font-lg-9 d-none d-lg-initial"><i class="far fa-user mr-1 mr-lg-1"></i>';
		$author_after  = '</span>';
		$author        = get_the_author();
		switch ( $display_type ) {
			case true:
				echo $author;
				break;
			default:
				echo $author_before . $author . $author_after;
		}
	}
}
if ( ! function_exists( 'GoSheng_posted_comment_number' ) ) {
	function GoSheng_posted_comment_number( $display_type = false ) {
		$comment_before = '<span class="font-8 font-lg-9"><i class="far fa-comment-dots mr-1 mr-lg-1"></i>';
		$comment_after  = '</span>';
		$comment_number = get_comments_number();
		switch ( $display_type ) {
			case true:
				echo $comment_number;
				break;
			default:
				echo $comment_before . $comment_number . $comment_after;
		}
	}
}
if ( ! function_exists( 'GoSheng_posted_category' ) ) {
	function GoSheng_posted_category( $display_type = false ) {
		$category_before = '<span class="font-8 d-none d-lg-initial"><i class="far fa-calendar-alt mr-1 mr-lg-1"></i>';
		$category_after  = '</span>';
		if ( true === $display_type ) {
			foreach ( get_the_category() as $item ) {
				echo $item->name;
				break;
			}
		} else {
			echo $category_before;
			foreach ( get_the_category() as $item ) {
				echo $item->name;
				break;
			}
			echo $category_after;
		}
	}
}
if ( ! function_exists( 'GoSheng_posted_tags' ) ) {
	function GoSheng_posted_tags() {
		$tag_before      = '<div id="gosheng_tags" class="mb-3 mb-lg-5 d-flex flex-wrap justify-content-start">';
		$tag_after       = '</div>';
		$tag_link_before = '<a class="btn btn-outline-info border px-2 px-lg-3 py-0 py-lg-1 font-7 font-lg-8 text-black-50" href="javascript:;" rel="tag" title="%1$s"><i class="mr-1 mr-lg-2 fas fa-tag text-black-50"></i><span>';
		$tag_link_after  = '</span></a>';

		if ( get_the_tags() ) {
			$tags = get_the_tags();
			echo $tag_before;
			foreach ( $tags as $tag ) {
				echo sprintf( $tag_link_before, $tag->name ) . $tag->name . $tag_link_after;
			}
			echo $tag_after;
		} else {
			echo $tag_before . sprintf( $tag_link_before, __( '无标签', 'GoSheng-framework' ) ) . __( '无标签', 'GoSheng-framework' ) . $tag_link_after . $tag_after;
		}
	}
}

if ( ! function_exists( 'GoSheng_posted_share' ) ) {
	function GoSheng_posted_share() {
		$share_before      = '<div id="gosheng_share" class="mb-2 mb-lg-3 d-flex justify-content-start flex-wrap">';
		$share_after       = '</div>';
		$share_link_before = '<a href="javascript:;" id="gosheng_share_%1$s" rel="nofollow" title="分享到%2$s" class="btn btn-outline-info rounded py-lg-3 border fab fa-lg fa-%3$s">';
		$share_link_after  = '</a>';
		$share_type        = array(
			'weibo'         => __( '微博', 'GoSheng-framework' ),
			'weixin'        => __( '微信', 'GoSheng-framework' ),
			'qq'            => __( 'QQ好友', 'GoSheng-framework' ),
			'alipay'        => __( '支付宝', 'GoSheng-framework' ),
			'tencent-weibo' => __( '腾讯微博', 'GoSheng-framework' ),
			'facebook'      => __( 'Facebook', 'GoSheng-framework' ),
			'twitter'       => __( '推特', 'GoSheng-framework' ),
			'google-plus'   => __( '谷歌 Plus', 'GoSheng-framework' ),
		);
		echo $share_before;
		foreach ( $share_type as $item => $value ) {
			echo sprintf( $share_link_before, $item, $value, $item ) . $share_link_after;
		}
		echo $share_after;
	}
}
if ( ! function_exists( 'GoSheng_posted_reward' ) ) {
	function GoSheng_posted_reward() {
		$reward_before = '<div id="gosheng_reward" class="mb-2 mb-lg-3 text-center">';
		$reward_after  = '</div>';
		$reward_link   = '<a href="#" class="btn btn-sm btn-outline-danger border font-11 font-lg-12 text-dark" data-toggle="modal" data-target="#reward_modal" data-modaltab="alipay" title="%1$s"><i class="fas fa-yen-sign"></i>%2$s</a>';
		$reward        = $reward_before . sprintf( $reward_link, __( '文章不错，奖励一下作者', 'GoSheng-framework' ), __( '打赏', 'GoSheng-framework' ) ) . $reward_after;
		echo $reward;
	}
}
if ( ! function_exists( 'GoSheng_edit_post_link' ) ) {
	function GoSheng_edit_post_link() {
		$edit_link_before = '<div class="entry-edit">';
		$edit_link_after  = '</div>';

		edit_post_link( __( '编辑本文', 'GoSheng-framework' ), $edit_link_before, $edit_link_after );
	}

}
if ( ! function_exists( 'GoSheng_posted_views' ) ) {
	function GoSheng_posted_views( $display_type = false ) {
		if ( false === $display_type ) {
			$views_before = '<span class="font-8 font-lg-9"><i class="far fa-eye mr-1 mr-lg-1"></i>';
			$views_after  = '</span>';
			GoSheng_get_post_views( $views_before, $views_after );
		} else {
			GoSheng_get_post_views( '', '', 0 );
		}
	}
}
add_action( 'wp_head', 'GoSheng_set_post_views' );
if ( ! function_exists( 'GoSheng_set_post_views' ) ) {
	function GoSheng_set_post_views() {
		if ( is_singular() ) {
			global $post;
			$post_ID = $post->ID;
			if ( $post_ID ) {
				$post_views = (int) get_post_meta( $post_ID, 'views', true );
				if ( ! update_post_meta( $post_ID, 'views', ( $post_views + 1 ) ) ) {
					add_post_meta( $post_ID, 'views', 1, true );
				}
			}
		}
	}
}
if ( ! function_exists( 'GoSheng_get_post_views' ) ) {
	function GoSheng_get_post_views( $before = '', $after = '', $echo = 1 ) {
		global $post;
		$post_ID = $post->ID;
		$views   = (int) get_post_meta( $post_ID, 'views', true );
		if ( $echo ) {
			echo $before, number_format( $views ), $after;
		} else {
			echo $views;
		}
	}
}

if ( ! function_exists( 'GoSheng_posted_thumbs_up_already' ) ) {
	function GoSheng_posted_thumbs_up_already( $display_type = false ) {
		$thumbs_up_before = '<span class="font-8 font-lg-9 d-none d-lg-initial"><i class="far fa-thumbs-up"></i>';
		$thumbs_up_after  = '</span>';
		global $post;
		$post_ID   = $post->ID;
		$thumbs_up = (int) get_post_meta( $post_ID, 'thumbs_up', true );

		if ( false === $display_type ) {
			echo $thumbs_up_before . $thumbs_up . $thumbs_up_after;
		} else {
			echo $thumbs_up;
		}
	}
}
if ( ! function_exists( 'GoSheng_posted_thumbs_up' ) ) {
	function GoSheng_posted_thumbs_up() {
		global $post;
		$thumbs_up_before = '<div id="gosehng_thumbs_up" class="mb-2 mb-lg-3 text-center">';
		$thumbs_up_after  = '</div>';
		$done             = isset( $_COOKIE[ 'thumbs_up_' . $post->ID ] ) ? ' done' : '';
		$count            = get_post_meta( $post->ID, 'thumbs_up', true ) ? get_post_meta( $post->ID, 'thumbs_up', true ) : '';
		$thumbs_up_link   = '<a class="btn btn-sm btn-outline-danger border font-11 font-lg-12 text-dark thumbs_up%4$s" data-action="thumbs_up" data-id="%3$s" href="javascript:;" title="%1$s"><i class="far fa-thumbs-up"></i>%2$s<span class="count">%5$s</span></a>';
		$thumbs_up        = $thumbs_up_before . sprintf( $thumbs_up_link, __( '文章不错，点个赞吧。', 'GoSheng-framework' ), __( '点赞', 'GoSheng-framework' ), get_the_ID(), $done, $count ) . $thumbs_up_after;
		echo $thumbs_up;
	}
}
if ( ! function_exists( 'GoSheng_pagination' ) ) {
	function GoSheng_pagination( $args = array(), $class = 'pagination' ) {
		if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}
		$args  = wp_parse_args( $args, array(
			'mid_size'           => 2,
			'prev_next'          => true,
			'prev_text'          => __( '&laquo;', 'GoSheng-framework' ),
			'next_text'          => __( '&raquo;', 'GoSheng-framework' ),
			'screen_reader_text' => __( '帖子分页', 'GoSheng-framework' ),
			'type'               => 'array',
			'current'            => max( 1, get_query_var( 'paged' ) ),
		) );
		$links = paginate_links( $args );
		?>
        <nav aria-label="<?php echo $args['screen_reader_text']; ?>">
            <ul class="pagination">
				<?php
				foreach ( $links as $key => $link ) { ?>
                    <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : '' ?>">
						<?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
                    </li>
				<?php } ?>
            </ul>
        </nav>
		<?php
	}
}
add_action( 'wp_ajax_nopriv_GoSheng_like', 'GoSheng_like' );
add_action( 'wp_ajax_GoSheng_like', 'GoSheng_like' );
if ( ! function_exists( 'GoSheng_like' ) ) {
	function GoSheng_like() {
		global $wpdb, $post;
		$id     = $_POST["um_id"];
		$action = $_POST["um_action"];
		if ( $action == 'thumbs_up' ) {
			$like_number = get_post_meta( $id, 'thumbs_up', true );
			$expire      = time() + 3600;
			$domain      = ( $_SERVER['HTTP_HOST'] != 'localhost' ) ? $_SERVER['HTTP_HOST'] : false; // make cookies work with localhost
			setcookie( 'thumbs_up_' . $id, $id, $expire, '/', $domain, false );
			if ( ! $like_number || ! is_numeric( $like_number ) ) {
				update_post_meta( $id, 'thumbs_up', 1 );
			} else {
				update_post_meta( $id, 'thumbs_up', ( $like_number + 1 ) );
			}
			echo get_post_meta( $id, 'thumbs_up', true );
		}
		wp_die();
	}
}
add_action( 'wp_ajax_nopriv_nickname_form_qq_info', 'GoSheng_nickname_form_qq_info' );
add_action( 'wp_ajax_nickname_form_qq_info', 'GoSheng_nickname_form_qq_info' );
if ( ! function_exists( 'GoSheng_nickname_form_qq_info' ) ) {
	function GoSheng_nickname_form_qq_info() {
		if ( $_POST ) {
			$info = $_POST;
			if ( $info['qq_number'] ) {
				$qq_number = trim( $info['qq_number'] );
			}
			if ( $qq_number && is_numeric( $qq_number ) && strlen( $qq_number ) > 4 && strlen( $qq_number ) < 12 ) {
				$qq_link     = wp_remote_get( 'http://users.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?uins=' . $qq_number );
				$qq_nickname = mb_convert_encoding( $qq_link['body'], "UTF-8", "GBK" );
				echo $qq_nickname;
			}
		}
		wp_die();
	}
}
add_action( 'wp_ajax_nopriv_avatar_form_qq_info', 'GoSheng_avatar_form_qq_info' );
add_action( 'wp_ajax_avatar_form_qq_info', 'GoSheng_avatar_form_qq_info' );
if ( ! function_exists( 'GoSheng_avatar_form_qq_info' ) ) {
	function GoSheng_avatar_form_qq_info() {
		if ( $_POST ) {
			if ( $_POST['qq_number'] ) {
				$qq_number = trim( $_POST['qq_number'] );
			}
			if ( $qq_number && is_numeric( $qq_number ) && strlen( $qq_number ) > 4 && strlen( $qq_number ) < 12 ) {
				$qq_avatar = wp_remote_get( 'http://ptlogin2.qq.com/getface?appid=1006102&imgtype=3&uin=' . $qq_number );
//				echo $qq_avatar['body'];
				echo str_replace( "pt.setHeader", "qq_avatarCallBack", $qq_avatar['body'] );
			}
		}
		wp_die();
	}
}
add_action( 'wp_insert_comment', 'wp_insert_info', 10, 2 );
if ( ! function_exists( 'wp_insert_info' ) ) {
	function wp_insert_info( $comment_ID, $commmentdata ) {
		$qq                 = isset( $_POST['qq'] ) ? $_POST['qq'] : false;
		$gosheng_user_agent = isset( $_POST['gosheng_user_agent'] ) ? $_POST['gosheng_user_agent'] : false;
		update_comment_meta( $comment_ID, 'gosheng_user_agent', $gosheng_user_agent );
		update_comment_meta( $comment_ID, 'qq', $qq );
	}
}
add_filter( 'manage_edit-comments_columns', 'my_comments_columns' );
if ( ! function_exists( 'my_comments_columns' ) ) {
	function my_comments_columns( $columns ) {
		$columns['qq']                 = __( 'QQ号', 'GoSheng-framework' );
		$columns['gosheng_user_agent'] = __( '用户UA', 'GoSheng-framework' );

		return $columns;
	}
}
add_action( 'manage_comments_custom_column', 'output_my_comments_columns', 10, 2 );
if ( ! function_exists( 'output_my_comments_columns' ) ) {
	function output_my_comments_columns( $column_name, $comment_id ) {
		switch ( $column_name ) {
			case "gosheng_user_agent" :
				echo get_comment_meta( $comment_id, 'gosheng_user_agent', true );
				break;
			case "qq" :
				echo get_comment_meta( $comment_id, 'qq', true );
				break;
			default:
				break;
		}
	}
}

add_action( 'wp_ajax_nopriv_GoSheng_hitokoto_url', 'GoSheng_hitokoto_url' );
add_action( 'wp_ajax_GoSheng_hitokoto_url', 'GoSheng_hitokoto_url' );
if ( ! function_exists( 'GoSheng_hitokoto_url' ) ) {
	function GoSheng_hitokoto_url() {
		if ( $_POST ) {
			if ( $_POST['type'] == 'url' ) {
				global $GoSheng;
				if ( $GoSheng['hitokoto_switch'] ) {
					$hitokoto_url = 'https://v1.hitokoto.cn';
					$charset      = 'utf-8';
					$encode       = 'text';
					$c            = $GoSheng['hitokoto_cat'];
					$callback     = '';
					$url          = $hitokoto_url . '?charset=' . $charset . '&encode=' . $encode . '&c=' . $c . '&callback' . $callback;
					echo $url;
				} else {
					return;
				}
			}
		}
		wp_die();
	}
}
if ( ! function_exists( 'GoSheng_hitokoto' ) ) {
	function GoSheng_hitokoto() {
		global $GoSheng;
		if ( $GoSheng['hitokoto_switch'] ) {
			$hitokoto_before = '<div id="GoSheng_hitokoto" class="my-2 p-1 rounded text-center bg-info"><span id="GoSheng_hitokoto_text" class="text-light font-6 font-lg-8">';
			$hitokoto_text   = __( '狗剩主题', 'GoSheng-framework' );
			$hitokoto_after  = '</span><i class="mx-2 p-1 shadow-sm btn btn-sm btn-outline-light fas fa-redo" id="get_new_hitokoto" title="%1$s"></i></div>';
			$hitokoto_after  = sprintf( $hitokoto_after, __( '换一个', 'GoSheng-framework' ) );
			echo $hitokoto_before;
			echo $hitokoto_text;
			echo $hitokoto_after;
		}
	}
}