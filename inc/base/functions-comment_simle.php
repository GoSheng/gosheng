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
		$simle   = '<div id="simle_yan" class="mt-1 d-flex flex-wrap">' . "\r\n" . '%1$s</div>' . "\r\n";
		$simle_a = '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="得意"><(￣︶￣)></span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="乾杯">[]~(￣▽￣)~*</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="啊啊">w(ﾟДﾟ)w</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="擦眼泪">(ノへ￣、)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="不屑">(￣_,￣ )</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="好耶">ヽ(✿ﾟ▽ﾟ)ノ</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="棒">(๑•̀ㅂ•́)و✧</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="抽">(￣ε(#￣)☆╰╮o(￣皿￣///)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="喂">(#`O′)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="亲">（づ￣3￣）づ╭❤～</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="汗">Σ( ° △ °|||)︴</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="笨">(～￣(OO)￣)ブ</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="擦">凸(艹皿艹 )</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="啵啵">(* ￣3)(ε￣ *)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="挖鼻屎">(*￣rǒ￣)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="嗷">┗|｀O′|┛ 嗷~~</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="好滴">(u‿ฺu✿ฺ)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="飞">︿(￣︶￣)︿</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="hi">Hi~ o(*￣▽￣*)ブ</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="啦啦">♪(^∇^*)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="拍桌">o(*≧▽≦)ツ┏━┓</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="惊喜">╰(*°▽°*)╯</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="嘟嘴">（○｀ 3′○）</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="乖">o(*^＠^*)o</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="愣住">(°ー°〃)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="放屁">○|￣|_ =3</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="哼哼">o(￣ヘ￣o＃)</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="可恶">（＝。＝）</span>' . "\r\n";
		$simle   = sprintf( $simle, $simle_a );

		return $simle;
	}
}
if ( ! function_exists( 'simle_emoji' ) ) {
	function simle_emoji() {
		$simle   = '<div id="simle_emoji" class="mt-1 d-flex flex-wrap">' . "\r\n" . '%1$s</div>' . "\r\n";
		$simle_a = '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128512;">&#128512;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128513;">&#128513;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128514;">&#128514;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128515;">&#128515;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128516;">&#128516;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128517;">&#128517;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128518;">&#128518;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128519;">&#128519;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128520;">&#128520;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128521;">&#128521;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128522;">&#128522;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128523;">&#128523;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128524;">&#128524;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128525;">&#128525;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128526;">&#128526;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128527;">&#128527;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128528;">&#128528;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128529;">&#128529;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128530;">&#128530;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128531;">&#128531;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128532;">&#128532;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128533;">&#128533;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128534;">&#128534;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128535;">&#128535;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128536;">&#128536;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128537;">&#128537;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128538;">&#128538;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128539;">&#128539;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128540;">&#128540;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128541;">&#128541;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128542;">&#128542;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128543;">&#128543;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128544;">&#128544;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128545;">&#128545;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128546;">&#128546;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128547;">&#128547;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128548;">&#128548;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128549;">&#128549;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128550;">&#128550;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128551;">&#128551;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128552;">&#128552;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128553;">&#128553;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128554;">&#128554;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128555;">&#128555;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128556;">&#128556;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128557;">&#128557;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128558;">&#128558;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128559;">&#128559;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128560;">&#128560;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128561;">&#128561;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128562;">&#128562;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128563;">&#128563;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128564;">&#128564;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128565;">&#128565;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128566;">&#128566;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128567;">&#128567;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128568;">&#128568;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128569;">&#128569;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128570;">&#128570;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128571;">&#128571;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128572;">&#128572;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128573;">&#128573;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128574;">&#128574;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128575;">&#128575;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128576;">&#128576;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128577;">&#128577;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128578;">&#128578;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128579;">&#128579;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128580;">&#128580;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128581;">&#128581;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128582;">&#128582;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128583;">&#128583;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128584;">&#128584;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128585;">&#128585;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128586;">&#128586;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128587;">&#128587;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128588;">&#128588;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128589;">&#128589;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128590;">&#128590;</span>' . "\r\n";
		$simle_a .= '<span class="mr-1 mt-2 p-1 rounded border border-secondary btn btn-sm text-muted hvr-float-shadow" title="&#128591;">&#128591;</span>' . "\r\n";
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
