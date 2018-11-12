<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<div id="floatTools" class="footTools flex-column d-flex">
    <a href="#" id="floatToolSidebar" class="d-none mb-1 btn btn-outline-dark" title="侧边栏">
        <i class="fas fa-indent text-success" aria-hidden="true">
            <span class="sr-only">侧边栏</span>
        </i>
    </a>
	<?php
	if ( $GoSheng['float_tool_qq_switch'] ) {
		?>
        <a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $GoSheng['float_tool_qq_text']; ?>&site=qq&menu=yes"
           id="floatToolQQ" class="d-none mb-1 btn btn-outline-dark" target="_blank" title="联系QQ">
            <i class="fab fa-qq text-success" aria-hidden="true">
                <span class="sr-only">QQ</span>
            </i>
        </a>
		<?php
	}
	?>
	<?php
	if ( is_single() ) {
		?>
        <a href="#" id="floatToolComment" class="d-none mb-1 btn btn-outline-dark" title="">
            <i class="fas fa-comments text-success" aria-hidden="true">
                <span class="sr-only">评论区显示切换</span>
            </i>
        </a>
		<?php
	}
	?>
    <a href="#" id="floatToolBackTop" class="d-none mb-1 btn btn-outline-dark" title="返回顶部">
        <i class="fas fa-arrow-up text-success" aria-hidden="true">
            <span class="sr-only">返回顶部</span>
        </i>
    </a>
</div>
