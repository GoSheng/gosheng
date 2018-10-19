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
