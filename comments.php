<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( post_password_required() ) {
	return;
}
?>
<div id="GoSheng_comment" class="collapse">
    <div id="comments" class="comments-area">
		<?php
		if ( have_comments() ) {
			GoSheng_comments_list();
			GoSheng_comment_navigation();
		}
		?>
		<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <div class="text-center"><?php esc_html_e( '评论已经关闭', 'GoSheng-framework' ); ?></div>
		<?php endif; ?>
    </div>
	<?php GoSheng_comment_form(); ?>
</div>
<?php
