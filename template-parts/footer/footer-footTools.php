<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="footTools" class="footTools flex-column d-flex">
    <a href="#" id="footToolSidebar" class="invisible mb-1 btn btn-outline-dark" title="侧边栏">
        <i class="fas fa-indent" style="color:#0ea432" aria-hidden="true">
            <span class="sr-only">侧边栏</span>
        </i>
    </a>
    <a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo THEME_AUTHOR_QQ ?>&site=qq&menu=yes" id="footToolQQ"
       class="invisible mb-1 btn btn-outline-dark" target="_blank" title="联系QQ">
        <i class="fab fa-qq" style="color:#0ea432" aria-hidden="true">
            <span class="sr-only">QQ</span>
        </i>
    </a>
    <a href="#" id="footToolBackTop" class="invisible mb-1 btn btn-outline-dark" title="返回顶部">
        <i class="fas fa-arrow-up" style="color:#0ea432" aria-hidden="true">
            <span class="sr-only">返回顶部</span>
        </i>
    </a>
</div>
