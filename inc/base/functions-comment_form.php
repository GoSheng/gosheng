<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'gosheng_comment_id_fields' ) ) {
	add_action( 'comment_id_fields', 'gosheng_comment_id_fields' );
	function gosheng_comment_id_fields( $result ) {
		$result .= '<input type="hidden" name="gosheng_user_agent" id="gosheng_user_agent">';

		return $result;
	}
}
if ( ! function_exists( 'GoSheng_comment_form' ) ) {
	function GoSheng_comment_form() {
		$commenter = wp_get_current_commenter();
		$fields    = array(
			'author'    => '<div class="d-sm-flex justify-content-sm-between"><div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text far fa-lg fa-user"></i></div><input class="form-control" placeholder="昵称" id="comment_author_nickname" name="author" type="text" required="required" autocomplete="off" maxlength="20" value="' . esc_attr( $commenter['comment_author_author'] ) . '" size="30"></div></div>',
			'email'     => '<div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text far fa-lg fa-envelope"></i></div><input class="form-control" placeholder="邮箱" id="comment_author_email" name="email" type="email" required="required" autocomplete="off" maxlength="80" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"></div></div></div>',
			'url'       => '<div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text fas fa-lg fa-link"></i></div><input class="form-control" placeholder="网站" id="comment_author_url" name="url" type="url" autocomplete="off" maxlength="100" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"></div></div>',
			'qq'        => '<div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text fab fa-lg fa-qq"></i></div><input class="form-control" placeholder="填写QQ号码自动填写昵称和邮箱" id="comment_author_qq" name="qq" type="number" autocomplete="off" minlength="5" maxlength="11" value="' . esc_attr( $commenter['comment_author_qq'] ) . '" size="30"></div></div>',
			'qq_avatar' => '<div><img alt="" id="comment_author_qq_avatar"></div>',
		);
		if ( get_option( 'show_comments_cookies_opt_in' ) ) {
			$cookies           = '<div class="form-group"><div class="form-check"><input class="form-check-input" type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"><label class="form-check-label" for="wp-comment-cookies-consent">%1$s</label></div></div>';
			$fields['cookies'] = sprintf( $cookies, __( '记住我的信息，下次直接发布评论。', 'GoSheng-framework' ) );
		}
		$must_log_in          = '<p class="must-log-in"><a class="btn btn-outline-dark btn-sm font-8 font-lg-9" href="#" data-toggle="modal" data-target="#modalLogin" data-modaltab="login"><i class="fas fa-sign-in-alt mr-1 mr-lg-2" aria-hidden="true"></i>' . __( '点击这里登录后发布评论', 'GoSheng-framework' ) . '</a></p>';
		$comment_field        = '<div class="comment form-group has-feedback"><div class="input-group"><textarea class="form-control" id="comment_textarea" placeholder="%1$s" name="comment" rows="6" aria-required="true" required="required"></textarea></div></div>';
		$comment_field        = sprintf( $comment_field, __( '请输入您对本文的评论内容', 'GoSheng-framework' ) );
		$user                 = wp_get_current_user();
		$user_identity        = $user->exists() ? $user->display_name : '';
		$logged_in_as         = '<p class="logged-in-as"><span>当前用户：%1$s</span><a class="float-right" href="%2$s">%3$s</a></p>';
		$logged_in_as         = sprintf( $logged_in_as, $user_identity, wp_logout_url(), __( '退出', 'GoSheng-framework' ) );
		$comment_notes_before = '<span class="font-8">%1$s</span>';
		$comment_notes_before = sprintf( $comment_notes_before, __( '您的邮箱和QQ不会被公开显示。', 'GoSheng-framework' ) );
		$comment_notes_after  = '<span class="font-8">%1$s</span>';
		$comment_notes_after  = sprintf( $comment_notes_after, __( '最后一步，马上评论。', 'GoSheng-framework' ) );
		$args                 = array(
			'title_reply_before'   => '<span id="reply-title" class="comment-reply-title font-8 font-lg-10"><i class="fas fa-comments"></i>',
			'title_reply_after'    => '</span>',
			'cancel_reply_before'  => ' <span class="d-block">',
			'cancel_reply_after'   => '</span>',
			'cancel_reply_link'    => __( '取消回复', 'GoSheng-framework' ),
			'title_reply'          => __( '评论一下', 'GoSheng-framework' ),
			'title_reply_to'       => __( '当前是给%s回复', 'GoSheng-framework' ),
			'fields'               => $fields,
			'class_submit'         => 'd-flex ml-auto btn btn-sm btn-outline-dark',
			'comment_field'        => $comment_field,
			'must_log_in'          => $must_log_in,
			'logged_in_as'         => $logged_in_as,
			'comment_notes_before' => $comment_notes_before,
			'comment_notes_after'  => $comment_notes_after,
		);
		comment_form( $args );
	}
}