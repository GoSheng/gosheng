<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'GoSheng_comments_list' ) ) {
	function GoSheng_comments_list() {
		$args = array(
			'style'        => 'ol',
			'short_ping'   => true,
			'avatar_size'  => 40,
			'callback'     => 'GoSheng_comments_list_callback_start',
			'end-callback' => 'GoSheng_comments_list_callback_end',
			'reply_text'   => __( '回复', 'GoSheng-framework' ),
		);
		?>
        <div class="comment-list">
			<?php
			wp_list_comments( $args );
			?>
        </div>
		<?php
	}
}
if ( ! function_exists( 'GoSheng_comments_list_callback_start' ) ) {
	function GoSheng_comments_list_callback_start( $comment, $args = null, $depth = 0 ) {
		$GLOBALS['comment'] = $comment;
		$qq                 = get_comment_meta( $comment->comment_ID, 'qq', true );
		$arg                = array(
			'class' => 'rounded',
		);
		?>
        <li id="comment-<?php comment_ID(); ?>" <?php comment_class( get_option( 'show_avatars' ) ? 'show-avatars list-unstyled' : 'list-unstyled' ); ?>>
        <article id="comment-box-<?php comment_ID(); ?>"
                 class="comment-box border shadow-sm d-flex align-items-start mb-2">
            <div class="pl-1 py-2"><?php echo get_avatar( $comment, 60, '', esc_html__( '用户头像', 'GoSheng-framework' ), $arg ); ?></div>
            <div class="py-2">
                <span class="comment-meta ml-2">
                    <span class="author font-6 font-lg-8 mr-1"><i
                                class="fas fa-user text-muted"></i><?php comment_author_link(); ?></span>
                    <time class="time font-6 font-lg-8 mr-1" pubdate="pubdate"><i
                                class="fas fa-clock text-muted"></i><?php comment_time( 'Y-m-d H:i:s' ); ?></time>
	                <?php
	                if ( is_user_logged_in() ) {
		                ?>
                        <span class="author font-6 font-lg-8 mr-1"><i
                                    class="fab fa-qq text-muted"></i><?php echo $qq; ?></span>
		                <?php
	                }
	                ?>
                </span>
                <span>
	                <?php
	                edit_comment_link( __( '编辑', 'GoSheng-framework' ), '<span class="edit-link font-6 font-lg-8">', '</span>' );
	                if ( ! empty( $args ) ) {
		                comment_reply_link( wp_parse_args( $args, array(
			                'add_below'  => 'comment-box',
			                'before'     => ' <span class="reply font-6 font-lg-8">',
			                'after'      => '</span>',
			                'reply_text' => __( '回复', 'GoSheng-framework' ),
			                'depth'      => $depth,
		                ) ) );
	                }
	                ?>
                </span>
                <div class="px-2 text-indent font-6 font-lg-8"><?php comment_text(); ?></div>
				<?php
				if ( $comment->comment_approved == '0' ) {
					echo '<span class="waiting">' . __( '评论正在审核中...', 'GoSheng-framework' ) . '</span>';
				}
				?>
            </div>
        </article>
		<?php
	}
}
if ( ! function_exists( 'GoSheng_comments_list_callback_end' ) ) {
	function GoSheng_comments_list_callback_end() {
		?>
        </li>
		<?php
	}
}