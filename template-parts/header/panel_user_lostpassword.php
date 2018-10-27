<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<form name="">
    <div class="form-group form-row justify-content-center">
        <label for="modal_lostPassword" class="col-sm-2 text-dark">账号</label>
        <div class="col-sm-6">
            <input type="email" name="user_login" id="modal_lostPassword"
                   class="form-control form-control-sm border border-dark" minlength="5" maxlength="20"
                   required="required" autocomplete="off" placeholder="邮箱" title="请输入要找回密码的账号邮箱">
        </div>
    </div>
    <div class="form-group form-row justify-content-center">
        <div class="col-sm-4 text-center">
            <label for="modal_lostpass_submit" class="sr-only">找回密码</label>
            <input type="submit" class="btn btn-sm btn-outline-success" name="modal_lostpass_submit"
                   action="<?php echo esc_url( network_site_url( 'wp-login.php?action=lostpassword', 'login_post' ) ); ?>"
                   formmethod="post" id="modal_lostpass_submit" value="找回密码">
        </div>
    </div>
</form>