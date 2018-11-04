<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'GoSheng_comment_field_btn' ) ) {
	function GoSheng_comment_field_btn() {
		$comment_field_btn_span = '<span id="gosheng_comment_smile" class="mr-2 btn btn-sm btn-outline-secondary"><i class="far fa-smile"></i>' . __( '表情', 'GoSheng-framework' ) . '</span>';
		$comment_field_btn_span .= '<span id="gosheng_comment_clear" class="mr-2 btn btn-sm btn-outline-secondary"><i class="fas fa-broom"></i>' . __( '清空内容', 'GoSheng-framework' ) . '</span>';

		return $comment_field_btn_span;
	}
}
if ( ! function_exists( 'simle_yan' ) ) {
	function simle_yan() {
		$simle   = '<div id="simle_yan" class="mt-1 d-flex flex-wrap">%1$s</div>';
		$simle_a = '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="得意"><(￣︶￣)></span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="乾杯">[]~(￣▽￣)~*</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="啊啊">w(ﾟДﾟ)w</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="擦眼泪">(ノへ￣、)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="不屑">(￣_,￣ )</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="好耶">ヽ(✿ﾟ▽ﾟ)ノ</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="棒">(๑•̀ㅂ•́)و✧</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="抽">(￣ε(#￣)☆╰╮o(￣皿￣///)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="喂">(#`O′)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="亲">（づ￣3￣）づ╭❤～</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="汗">Σ( ° △ °|||)︴</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="笨">(～￣(OO)￣)ブ</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="擦">凸(艹皿艹 )</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="啵啵">(* ￣3)(ε￣ *)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="挖鼻屎">(*￣rǒ￣)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="嗷">┗|｀O′|┛ 嗷~~</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="好滴">(u‿ฺu✿ฺ)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="飞">︿(￣︶￣)︿</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="hi">Hi~ o(*￣▽￣*)ブ</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="啦啦">♪(^∇^*)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="拍桌">o(*≧▽≦)ツ┏━┓</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="惊喜">╰(*°▽°*)╯</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="嘟嘴">（○｀ 3′○）</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="乖">o(*^＠^*)o</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="愣住">(°ー°〃)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="放屁">○|￣|_ =3</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="哼哼">o(￣ヘ￣o＃)</span>';
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="可恶">（＝。＝）</span>';
		$simle   = sprintf( $simle, $simle_a );

		return $simle;
	}
}
if ( ! function_exists( 'simle_emoji' ) ) {
	function simle_emoji() {
		$simle   = '<div id="simle_emoji" class="mt-1 d-flex flex-wrap">%1$s</div>';
		$simle_a = '<span class="mr-1 mt-1 p-1 rounded border border-secondary btn btn-sm text-muted" title="1">1</span>';
		$simle_a .= '<span class="mr-1 mt-1 p-1 rounded border border-secondary btn btn-sm text-muted" title="2">2</span>';
		$simle   = sprintf( $simle, $simle_a );

		return $simle;
	}
}
if ( ! function_exists( 'GoSheng_simle' ) ) {
	function GoSheng_simle() {
		$simle_before      = '';
		$simle_after       = '';
		$simle_cat__before = '<div class="mb-1">';
		$simle_cat__after  = '</div>';
		$simle_cat_yan     = '<span id="gosheng_simle_yan" class="mr-2 btn btn-sm btn-outline-secondary active" data-toggle="collapse" data-target=".GoSheng_simles_collapse">颜文字</span>';
		$simle_cat_emoji   = '<span id="gosheng_simle_emoji" class="mr-2 btn btn-sm btn-outline-secondary" data-toggle="collapse" data-target=".GoSheng_simles_collapse">emoji表情</span>';
		$simle_yan         = '<div id="simle_yan_collapse" class="GoSheng_simles_collapse collapse show">%1$s</div>';
		$simle_yan         = sprintf( $simle_yan, simle_yan() );
		$simle_emoji       = '<div id="simle_emoji_collapse" class="GoSheng_simles_collapse collapse">%1$s</div>';
		$simle_emoji       = sprintf( $simle_emoji, simle_emoji() );

		return $simle_before . $simle_cat__before . $simle_cat_yan . $simle_cat_emoji . $simle_cat__after . $simle_yan . $simle_emoji . $simle_after;
	}
}
