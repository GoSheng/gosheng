<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<div class="tab-content">
	<?php if ( $GoSheng['gosheng_user_login'] ) { ?>
        <div role="<?php esc_attr_e('登录标签','GoSheng-framework'); ?>" class="tab-pane fade zoomIn animated" id="login">
            <?php
            get_template_part('template-parts/header/panel_user_login');
            ?>
        </div>
	<?php } ?>

	<?php if ( $GoSheng['gosheng_user_register'] && get_option( 'users_can_register' ) ) { ?>
        <div role="<?php esc_attr_e('注册标签','GoSheng-framework'); ?>" class="tab-pane fade zoomIn animated" id="register">
            <?php
            get_template_part('template-parts/header/panel_user_register');
            ?>
        </div>
	<?php } ?>

	<?php if ( $GoSheng['gosheng_user_lostPassword'] ) { ?>
        <div role="<?php esc_attr_e('找回密码标签','GoSheng-framework'); ?>" class="tab-pane fade zoomIn animated" id="lostPassword">
            <?php
            get_template_part('template-parts/header/panel_user_lostpassword');
            ?>
        </div>
	<?php } ?>

</div>