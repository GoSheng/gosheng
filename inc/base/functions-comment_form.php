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
if ( ! function_exists( 'GoSheng_simle' ) ) {
	function GoSheng_simle() {
		$simle_before = '<div>';
		$simle_after  = '</div>';
		$simle_cat    = '<div><span class="btn btn-sm btn-outline-secondary">颜文字</span><span class="btn btn-sm btn-outline-secondary">emoji表情</span></div>';
		$simle        = '<span>表情功能开发中，支持扩展。</span>';

		return $simle_before . $simle_cat . $simle . $simle_after;
	}
}

if ( ! function_exists( 'GoSheng_comment_form' ) ) {
	function GoSheng_comment_form() {
		$commenter = wp_get_current_commenter();
		$fields    = array(
			'author'    => '<div class="d-sm-flex justify-content-sm-between"><div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text far fa-lg fa-user"></i></div><input class="form-control text-info" placeholder="昵称" id="comment_author" name="author" type="text" required="required" autocomplete="off" maxlength="20" value="' . esc_attr( $commenter['comment_author_author'] ) . '" size="30"></div></div>',
			'email'     => '<div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text far fa-lg fa-envelope"></i></div><input class="form-control text-info" placeholder="邮箱" id="comment_author_email" name="email" type="email" required="required" autocomplete="off" maxlength="80" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"></div></div></div>',
			'url'       => '<div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text fas fa-lg fa-link"></i></div><input class="form-control text-info" placeholder="网站" id="comment_author_url" name="url" type="url" autocomplete="off" maxlength="100" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"></div></div>',
			'qq'        => '<div class="form-group"><div class="input-group"><div class="input-group-prepend"><i class="form-control d-flex align-self-center input-group-text fab fa-lg fa-qq"></i></div><input class="form-control text-info" placeholder="填写QQ号码自动填写昵称和邮箱" id="comment_author_qq" name="qq" type="number" autocomplete="off" minlength="5" maxlength="11" value="' . esc_attr( $commenter['comment_author_qq'] ) . '" size="30"></div></div>',
			'qq_avatar' => '<div><img src="data:image/png;base64,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" alt="" id="comment_author_qq_avatar"></div>',
		);
		if ( get_option( 'show_comments_cookies_opt_in' ) ) {
			$cookies           = '<div class="form-group"><div class="form-check"><input class="form-check-input" type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"><label class="form-check-label font-6 font-lg-8" for="wp-comment-cookies-consent">%1$s</label></div></div>';
			$fields['cookies'] = sprintf( $cookies, __( '记住我的信息，下次直接发布评论。', 'GoSheng-framework' ) );
		}
		$must_log_in          = '<p class="must-log-in"><a class="btn btn-outline-dark btn-sm font-8 font-lg-9" href="#" data-toggle="modal" data-target="#modalLogin" data-modaltab="login"><i class="fas fa-sign-in-alt mr-1 mr-lg-2" aria-hidden="true"></i>' . __( '点击这里登录后发布评论', 'GoSheng-framework' ) . '</a></p>';
		$comment_field        = '<div class="comment form-group has-feedback"><div class="input-group"><textarea class="form-control bg-input text-info" id="comment_textarea" placeholder="%1$s" name="comment" rows="6" aria-required="true" minlength="10" maxlength="65525" required="required"></textarea></div>%2$s</div>';
		$comment_field_btn    = '<div class="mt-2 form-group"><span id="gosheng_comment_smile" class="btn btn-sm btn-outline-secondary"><i class="far fa-smile"></i>%1$s</span>%2$s</div>';
		$comment_field_smile  = '<div id="gosheng_smile" class="p-relative z1 d-none"><div class="p-absolute container py-2 rounded border border-secondary bg-input" style="min-height:12rem;">%1$s</div></div>';
		$comment_field_smile  = sprintf( $comment_field_smile, GoSheng_simle() );
		$comment_field_btn    = sprintf( $comment_field_btn, __( '表情', 'GoSheng-framework' ), $comment_field_smile );
		$comment_field        = sprintf( $comment_field, __( '请输入您对本文的评论内容', 'GoSheng-framework' ), $comment_field_btn );
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