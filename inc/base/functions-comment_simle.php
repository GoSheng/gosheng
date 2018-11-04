<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'simle_yan' ) ) {
	function simle_yan() {
		$simle   = '<div class="mt-1 d-flex flex-wrap">%1$s</div>';
		$simle_a = '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="得意"><(￣︶￣)></a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="乾杯">[]~(￣▽￣)~*</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="啊啊">w(ﾟДﾟ)w</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="擦眼泪">(ノへ￣、)</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="不屑">(￣_,￣ )</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="好耶">ヽ(✿ﾟ▽ﾟ)ノ</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="棒">(๑•̀ㅂ•́)و✧</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="抽">(￣ε(#￣)☆╰╮o(￣皿￣///)</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="亲">（づ￣3￣）づ╭❤～</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="汗">Σ( ° △ °|||)︴</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="1111">11111</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="1111">11111</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="1111">11111</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="1111">11111</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="1111">11111</a>';
		$simle_a .= '<a href="javascript:;" class="mr-1 mt-1 p-1 rounded border border-secondary text-muted" title="1111">11111</a>';
		$simle   = sprintf( $simle, $simle_a );

		return $simle;
	}
}
if ( ! function_exists( 'simle_emoji' ) ) {
	function simle_emoji() {
		$simle = 'emoji表情';

		return $simle;
	}
}
if ( ! function_exists( 'GoSheng_simle' ) ) {
	function GoSheng_simle() {
		$simle_before      = '';
		$simle_after       = '';
		$simle_cat__before = '<div class="mb-1">';
		$simle_cat__after  = '</div>';
		$simle_cat_yan     = '<span id="gosheng_simle_yan" class="btn btn-sm btn-outline-secondary active" data-toggle="collapse" data-target=".GoSheng_simles_collapse">颜文字</span>';
		$simle_cat_emoji   = '<span id="gosheng_simle_emoji" class="btn btn-sm btn-outline-secondary" data-toggle="collapse" data-target=".GoSheng_simles_collapse">emoji表情</span>';
		$simle_yan         = '<div id="simle_yan" class="GoSheng_simles_collapse collapse show">%1$s</div>';
		$simle_yan         = sprintf( $simle_yan, simle_yan() );
		$simle_emoji       = '<div id="simle_emoji" class="GoSheng_simles_collapse collapse">%1$s</div>';
		$simle_emoji       = sprintf( $simle_emoji, simle_emoji() );

		return $simle_before . $simle_cat__before . $simle_cat_yan . $simle_cat_emoji . $simle_cat__after . $simle_yan . $simle_emoji . $simle_after;
	}
}
