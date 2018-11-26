<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<form name="">
    <div class="form-group form-row justify-content-center">
        <label for="modal_login_user" class="col-sm-2 text-dark">用户名</label>
        <div class="col-sm-6">
            <input type="text" name="log" id="modal_login_user"
                   class="form-control form-control-sm border border-secondary text-info" minlength="5" maxlength="20"
                   required="required" autocomplete="off" placeholder="请输入用户名" title="请输入用户名">
        </div>
    </div>
    <div class="form-group form-row justify-content-center">
        <label for="modal_login_password" class="col-sm-2 text-dark">密码</label>
        <div class="col-sm-6">
            <input type="password" name="pwd" id="modal_login_password"
                   class="form-control form-control-sm border border-secondary text-info" minlength="7" maxlength="16"
                   required="required" autocomplete="off" placeholder="请输入密码" title="请输入密码">
            <span class="p-absolute t-0 r-0">
                <i id="GoSheng_toggle_password" class="p-2 fas fa-lg fa-eye" title="显示密码"></i>
            </span>
        </div>
    </div>
	<?php
	if ( $GoSheng['google_reCaptcha_switch'] ) {
		?>
        <div class="form-group form-row justify-content-center">
            <div for="modal_login_captcha" class="col-sm-2 text-dark">验证码</div>
            <div class="col-sm-6 text-success" id="reCaptcha_check">
            <span>
                <i>正在检测您的运行环境</i>
                <a href="javascript:;" id="reCaptcha_recheck" class="text-muted" title="重新检测">重试</a>
            </span>
                <input type="hidden" name="reCaptcha_check_hidden" id="reCaptcha_check_hidden" required="required">
            </div>
            <div class="col-sm-6 d-none text-success" id="reCaptcha_pass"><span>您已经通过了reCAPTCHA验证</span></div>
            <div class="col-sm-3 d-none" id="captcha_text">
                <input type="text" name="login_captcha" id="modal_login_captcha"
                       class="form-control form-control-sm border border-secondary text-info" minlength="4"
                       maxlength="6" required="required" autocomplete="off" placeholder="请输入验证码">
            </div>
            <div class="col-sm-3 d-none" id="captcha_checkbox">
                <input type="checkbox" name="captcha_checkbox" id="reCaptcha_checkbox" required="required">
                <label for="reCaptcha_checkbox" class="form-check-label">验证勾选</label>
            </div>
        </div>
		<?php
	}
	?>
    <div class="form-group form-row justify-content-center">
        <div class="col-sm-2"><p class="sr-only">记住登录状态</p></div>
        <div class="col-sm-6">
            <div class="form-check">
                <label class="form-check-label" for="modal_login_rememberme">
                    <input type="checkbox" class="form-check-input text-dark" name="rememberme"
                           id="modal_login_rememberme" checked="checked">记住登录状态</label>
            </div>
        </div>
    </div>
    <div class="form-group form-row justify-content-center">
        <div class="col-sm-4 text-center">
            <input type="hidden" name="redirect_to">
            <label for="modal_login_submit" class="sr-only">登录</label>
            <input type="submit" class="btn btn-sm btn-outline-info" name="modal_login_submit"
                   formaction="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>"
                   formmethod="post" id="modal_login_submit" value="登录">
        </div>
    </div>
</form>
<div id="GoSheng_oauth_login" class="text-center">
    <span class="my-2 btn text-muted font-6 font-lg-8" data-toggle="collapse" data-target="#oauth_login_list">更多登录方式</span>
    <div class="my-2 collapse" id="oauth_login_list">
        <?php
        if ( $GoSheng['oauth_qq_switch'] ) {
            ?>
            <span class="mr-1" title="<?php esc_html_e( 'QQ登录', 'GoSheng-framework' ); ?>" id="oauth_qq"><i class="font-10 font-lg-12 fab fa-fw fa-qq"></i></span>
	        <?php
        }
        ?>

	    <?php
	    if ( $GoSheng['oauth_weibo_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( '微博登录', 'GoSheng-framework' ); ?>" id="oauth_weibo"><i class="font-10 font-lg-12 fab fa-fw fa-weibo"></i></span>

		    <?php
	    }
	    ?>

	    <?php
	    if ( $GoSheng['oauth_weixin_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( '微信登录', 'GoSheng-framework' ); ?>" id="oauth_weixin"><i class="font-10 font-lg-12 fab fa-fw fa-weixin"></i></span>

		    <?php
	    }
	    ?>

	    <?php
	    if ( $GoSheng['oauth_alipay_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( '支付宝登录', 'GoSheng-framework' ); ?>" id="oauth_alipay"><i class="font-10 font-lg-12 fab fa-fw fa-alipay"></i></span>

		    <?php
	    }
	    ?>

	    <?php
	    if ( $GoSheng['oauth_google_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( '谷歌登录', 'GoSheng-framework' ); ?>" id="oauth_google"><i class="font-10 font-lg-12 fab fa-fw fa-google"></i></span>

		    <?php
	    }
	    ?>

	    <?php
	    if ( $GoSheng['oauth_github_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( 'GitHub登录', 'GoSheng-framework' ); ?>" id="oauth_github"><i class="font-10 font-lg-12 fab fa-fw fa-github"></i></span>

		    <?php
	    }
	    ?>

	    <?php
	    if ( $GoSheng['oauth_facebook_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( 'Facebook登录', 'GoSheng-framework' ); ?>" id="oauth_facebook"><i class="font-10 font-lg-12 fab fa-fw fa-facebook"></i></span>

		    <?php
	    }
	    ?>

	    <?php
	    if ( $GoSheng['oauth_twitter_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( '推特登录', 'GoSheng-framework' ); ?>" id="oauth_twitter"><i class="font-10 font-lg-12 fab fa-fw fa-twitter"></i></span>

		    <?php
	    }
	    ?>

	    <?php
	    if ( $GoSheng['oauth_linkedin_switch'] ) {
		    ?>
            <span class="mr-1" title="<?php esc_html_e( '领英登录', 'GoSheng-framework' ); ?>" id="oauth_linkedin"><i class="font-10 font-lg-12 fab fa-fw fa-linkedin"></i></span>

		    <?php
	    }
	    ?>
    </div>
</div>