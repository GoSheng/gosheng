<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>

<?php if ( $GoSheng['gosheng_user_login'] || ( $GoSheng['gosheng_user_register'] && get_option( 'users_can_register' ) ) || $GoSheng['gosheng_user_lostPassword'] ) { ?>
    <div class="modal" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="<?php esc_attr_e( '登录模态框', 'GoSheng-framework' ) ?>">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <div class="container">
						<?php get_template_part( 'template-parts/header/panel_tab' ); ?>
                    </div>
                </div>
                <div class="modal-body">
					<?php get_template_part( 'template-parts/header/panel_tab_content' ); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>