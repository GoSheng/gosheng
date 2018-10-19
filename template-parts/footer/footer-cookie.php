<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
if ( $GoSheng['cookie_notice'] ) {
	if ( ! GoSheng_isset_cookie( 'gosheng_cookie_agree', 'yes' ) ) {
		?>
        <div id="gosheng_cookie"
             class="z100001 container-fluid position-fixed b-0 py-1 text-center bg-secondary lh-2 text-white-50 cookie-notice d-none">
            <span class="d-block font-7"><?php echo $GoSheng['cookie_notice_text']; ?></span>
            <a class="btn btn-sm btn-outline-success font-7"
               id="gosheng_cookie_agree"><?php esc_html_e( '同意使用cookie', 'GoSheng-framework' ); ?></a>
            <a class="btn btn-sm btn-outline-success font-7"
               id="gosheng_cookie_disagree"><?php esc_html_e( '不同意使用cookie', 'GoSheng-framework' ); ?></a>
        </div>
		<?php
	}
}
