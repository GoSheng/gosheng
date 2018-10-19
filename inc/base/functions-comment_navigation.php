<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'GoSheng_comment_navigation' ) ) {
	function GoSheng_comment_navigation() {
		$comment_nav_before = '<nav id="comment-nav-above" class="comment-navigation d-flex justify-content-between" role="' . esc_attr__( '文章导航', 'GoSheng-framework' ) . '">';
		$comment_nav_after  = '</nav>';
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :?>
			<?php echo $comment_nav_before; ?>
            <span class="sr-only"><?php esc_html_e( '评论导航', 'GoSheng-framework' ); ?></span>
			<?php if ( get_previous_comments_link() ) : ?>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; 旧的评论', 'GoSheng-framework' ) ); ?></div>
			<?php else: ?>
                <div class="nav-previous">
                    <a href="javascript:;" title="<?php esc_attr_e( '没有旧的评论了', 'GoSheng-framework' ) ?>">&larr;无</a>
                </div>
			<?php endif; ?>
			<?php if ( get_next_comments_link() ) : ?>
                <div class="nav-next"><?php next_comments_link( __( '新的评论&rarr;', 'GoSheng-framework' ) ); ?></div>
			<?php else: ?>
                <div class="nav-next">
                    <a href="javascript:;" title="<?php esc_attr_e( '没有新的评论了', 'GoSheng-framework' ) ?>">无&rarr;</a>
                </div>
				<?php echo $comment_nav_after;
			endif;
		endif;
	}
}