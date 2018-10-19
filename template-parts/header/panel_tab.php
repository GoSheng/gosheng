<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<nav class="nav nav-pills justify-content-around" id="modalTabNav">
	<?php if ( $GoSheng['gosheng_user_login'] ) { ?>
        <a class="btn btn-sm bg-dark text-light" id="modalTab_login" href="#login" data-toggle="tab" role="tab"><i
                    class="fas fa-sign-in-alt mr-1 mr-lg-2"></i>登录账号</a>
	<?php } ?>
	<?php if ( $GoSheng['gosheng_user_register'] && get_option( 'users_can_register' ) ) { ?>
        <a class="btn btn-sm bg-dark text-light" id="modalTab_register" href="#register" data-toggle="tab" role="tab"><i
                    class="fas fa-user-plus mr-1 mr-lg-2"></i>注册账号</a>
	<?php } ?>
	<?php if ( $GoSheng['gosheng_user_lostPassword'] ) { ?>
        <a class="btn btn-sm bg-dark text-light" id="modalTab_lostPassword" href="#lostPassword" data-toggle="tab"
           role="tab"><i class="fas fa-user-md mr-1 mr-lg-2"></i>忘记密码</a>
	<?php } ?>
</nav>