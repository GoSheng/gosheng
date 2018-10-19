<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<form name="">
    <div class="form-group form-row justify-content-center">
        <label for="modal_register_user_login" class="col-sm-2 text-dark">用户名</label>
        <div class="col-sm-6">
            <input type="text" name="user_login" id="modal_register_user_login"
                   class="form-control form-control-sm border border-dark" minlength="5" maxlength="20"
                   required="required" autocomplete="off" placeholder="用户名" title="请输入要注册的用户名">
        </div>
    </div>
    <div class="form-group form-row justify-content-center">
        <label for="modal_register_user_email" class="col-sm-2 text-dark">Email</label>
        <div class="col-sm-6">
            <input type="email" name="user_email" id="modal_register_user_email"
                   class="form-control form-control-sm border border-dark" minlength="5" maxlength="20"
                   required="required" autocomplete="off" placeholder="邮箱" title="请输入您的邮箱">
        </div>
    </div>
    <div class="form-group form-row justify-content-center">
        <div class="col-sm-2"><p class="sr-only">服务条款</p></div>
        <div class="col-sm-10">
            <div class="form-check text-dark">
                <label class="form-check-label" for="modal_register_tos">
                    <input type="checkbox" class="form-check-input" name="modal_register_tos"
                           id="modal_register_tos" required>
                    <span>如果同意并接受</span>
                    <a class="text-dark" href="#" title="服务条款" target="_blank">《服务条款》</a>
                    <span>请勾选</span>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group form-row justify-content-center">
        <div class="col-sm-4 text-center">
            <input type="hidden" name="redirect_to">
            <label for="modal_register_submit" class="sr-only">注册</label>
            <input type="submit" class="btn btn-sm btn-outline-success" name="modal_register_submit"
                   formaction="<?php echo esc_url( site_url( 'wp-login.php?action=register', 'login_post' ) ); ?>"
                   formmethod="post" id="modal_register_submit" value="注册">
        </div>
    </div>
</form>