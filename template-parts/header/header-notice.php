<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<?php
if ( $GoSheng['gosheng_notice'] ) {
	if ( ! GoSheng_isset_cookie( 'gosheng_notice_closed', 'yes' ) ) {
		?>
        <div id="gosheng_notice" class="alert alert-warning alert-dismissible fade show"
             role="<?php esc_attr_e( '公告信息', 'GoSheng-framework' ) ?>">
            <i class="fas fa-volume-up mr-1 mr-lg-2 text-danger"></i>
            <span class="font-8 font-lg-10"><?php echo $GoSheng['gosheng_notice_text'] ?></span>
            <button type="button" class="close" aria-label="<?php esc_attr_e( '关闭公告信息', 'GoSheng-framework' ); ?>">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
		<?php
	}
}
