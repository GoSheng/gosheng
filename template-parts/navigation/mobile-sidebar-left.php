<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="mobile_sidebar_left" class="bg-dark d-lg-none">
    <div class="sidebar-inner">
        <div id="user_avatar">
            <a href="<?php site_url();?>">
                <span class="d-block fas fa-user fa-3x text-center p-2 text-light"></span>
                <span class="d-block text-center text-light font-8 font-lg-10">用户名</span>
            </a>
        </div>

        <div class="btn-group-vertical" role="group" aria-label="">
            <button type="button" class="btn btn-dark">
                左边选项1
                <span class="badge badge-pill badge-light text-secondary">12</span>
            </button>
            <button type="button" class="btn btn-dark">
                左边选项2
                <span class="badge badge-pill badge-light text-secondary">123</span>
            </button>
            <button type="button" class="btn btn-dark">
                左边选项1
                <span class="badge badge-pill badge-light text-secondary">12</span>
            </button>
            <button type="button" class="btn btn-dark">
                左边选项2
                <span class="badge badge-pill badge-light text-secondary">123</span>
            </button>
            <button type="button" class="btn btn-dark">
                左边选项1
                <span class="badge badge-pill badge-light text-secondary">12</span>
            </button>
            <button type="button" class="btn btn-dark">
                左边选项2
                <span class="badge badge-pill badge-light text-secondary">123</span>
            </button>

            <div class="btn-group" role="group">
                <button id="menuDrop" type="button" class="btn btn-dark dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">下拉菜单
                </button>
                <div class="dropdown-menu bg-dark" aria-labelledby="menuDrop">
                    <a class="dropdown-item text-light" href="#">
                        选项链接1
                        <span class="badge badge-pill badge-light text-secondary">1</span>
                    </a>
                    <a class="dropdown-item text-light" href="#">选项链接2</a>
                    <a class="dropdown-item text-light" href="#">选项链接3</a>
                    <a class="dropdown-item text-light" href="#">选项链接4</a>
                </div>
            </div>
        </div>
    </div>
</div>
