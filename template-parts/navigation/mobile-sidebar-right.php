<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="mobile_sidebar_right" class="bg-dark d-lg-none">
    <div class="sidebar-inner">
        <div class="btn-group-vertical" role="group" aria-label="">
            <button type="button" class="btn btn-dark">
                右边选项1
                <span class="badge badge-pill badge-light text-secondary">12</span>
            </button>
            <button type="button" class="btn btn-dark">
                右边选项2
                <span class="badge badge-pill badge-light text-secondary">123</span>
            </button>
            <button type="button" class="btn btn-dark">
                右边选项1
                <span class="badge badge-pill badge-light text-secondary">12</span>
            </button>
            <button type="button" class="btn btn-dark">
                右边选项2
                <span class="badge badge-pill badge-light text-secondary">123</span>
            </button>
            <button type="button" class="btn btn-dark">
                右边选项1
                <span class="badge badge-pill badge-light text-secondary">12</span>
            </button>
            <button type="button" class="btn btn-dark">
                右边选项2
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
