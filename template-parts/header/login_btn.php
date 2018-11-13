<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;

if ( is_user_logged_in() ) { ?>
    <a href="<?php echo admin_url( 'admin.php?page=GoSheng_options' ); ?>" title="狗剩主题" target="_blank"
       class="btn btn-outline-primary border-secondary rounded-circle text-dark">
        <i class="fas fa-dog"></i>
    </a>
    <a href="<?php echo admin_url(); ?>" title="后台管理" target="_blank"
       class="btn btn-outline-primary border-secondary rounded-circle text-dark">
        <i class="fas fa-cog"></i>
    </a>
    <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="退出" target="_blank"
       class="btn btn-outline-primary border-secondary rounded-circle text-dark">
        <i class="fas fa-sign-out-alt"></i>
    </a>
<?php } elseif ( $GoSheng['gosheng_user_login'] || ( $GoSheng['gosheng_user_register'] && get_option( 'users_can_register' ) ) || $GoSheng['gosheng_user_lostPassword'] ) { ?>
    <div class="btn-group">
		<?php if ( $GoSheng['gosheng_user_login'] ) { ?>
            <a class="btn btn-light btn-sm font-8 font-lg-9" href="#" data-toggle="modal" data-target="#modalLogin"
               data-modaltab="login"><i class="fas fa-sign-in-alt mr-1 mr-lg-2" aria-hidden="true"></i>登录</a>
		<?php } ?>
		<?php if ( ( $GoSheng['gosheng_user_register'] && get_option( 'users_can_register' ) ) || $GoSheng['gosheng_user_lostPassword'] ) { ?>
            <button type="button" class="btn btn-light btn-sm dropdown-toggle dropdown-toggle-split"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">下拉菜单</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right z100001">
				<?php if ( $GoSheng['gosheng_user_register'] && get_option( 'users_can_register' ) ) { ?>
                    <button class="dropdown-item font-8 font-lg-9" type="button" data-toggle="modal"
                            data-target="#modalLogin" data-modaltab="register"><i
                                class="fas fa-user-plus mr-1 mr-lg-2" aria-hidden="true"></i>注册
                    </button>
				<?php }; ?>
				<?php if ( $GoSheng['gosheng_user_lostPassword'] ) { ?>
                    <button class="dropdown-item font-8 font-lg-9" type="button" data-toggle="modal"
                            data-target="#modalLogin" data-modaltab="lostPassword"><i
                                class="fas fa-user-md mr-1 mr-lg-2" aria-hidden="true"></i>找回密码
                    </button>
				<?php }; ?>
            </div>
		<?php }; ?>
		<?php get_template_part( 'template-parts/header/panel_user' ); ?>
    </div>
<?php } ?>
