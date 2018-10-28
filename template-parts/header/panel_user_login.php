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
                   class="form-control form-control-sm border border-dark" minlength="5" maxlength="20"
                   required="required" autocomplete="off" placeholder="请输入用户名" title="请输入用户名">
        </div>
    </div>
    <div class="form-group form-row justify-content-center">
        <label for="modal_login_password" class="col-sm-2 text-dark">密码</label>
        <div class="col-sm-6">
            <input type="password" name="pwd" id="modal_login_password"
                   class="form-control form-control-sm border border-dark" minlength="7" maxlength="16"
                   required="required" autocomplete="off" placeholder="请输入密码" title="请输入密码">
        </div>
    </div>
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
            <input type="submit" class="btn btn-sm btn-outline-success" name="modal_login_submit"
                   formaction="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>"
                   formmethod="post" id="modal_login_submit" value="登录">
        </div>
    </div>
</form>
<div class="text-center">
    <span class="my-2 text-muted font-6 font-lg-8">更多登录方式</span>
    <div class="my-2">
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('QQ登录','GoSheng-framework'); ?>" id="oauth_qq"><i class="font-10 font-lg-12 fab fa-fw fa-qq"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('微博登录','GoSheng-framework'); ?>" id="oauth_weibo"><i class="font-10 font-lg-12 fab fa-fw fa-weibo"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('微信登录','GoSheng-framework');?>" id="oauth_weixin"><i class="font-10 font-lg-12 fab fa-fw fa-weixin"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('支付宝登录','GoSheng-framework');?>" id="oauth_alipay"><i class="font-10 font-lg-12 fab fa-fw fa-alipay"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('谷歌登录','GoSheng-framework');?>" id="oauth_google"><i class="font-10 font-lg-12 fab fa-fw fa-google"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('GitHub登录','GoSheng-framework');?>" id="oauth_github"><i class="font-10 font-lg-12 fab fa-fw fa-github"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('Facebook登录','GoSheng-framework');?>" id="oauth_facebook"><i class="font-10 font-lg-12 fab fa-fw fa-facebook"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('推特登录','GoSheng-framework');?>" id="oauth_twitter"><i class="font-10 font-lg-12 fab fa-fw fa-twitter"></i></a>
        <a href="javascript:;" class="mr-1" title="<?php esc_html_e('领英登录','GoSheng-framework');?>" id="oauth_linkedin"><i class="font-10 font-lg-12 fab fa-fw fa-linkedin"></i></a>
    </div>
</div>