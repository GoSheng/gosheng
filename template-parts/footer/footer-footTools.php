<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<div id="floatTools" class="footTools flex-column d-flex">
    <a href="#" id="floatToolSidebar" class="invisible mb-1 btn btn-outline-dark" title="侧边栏">
        <i class="fas fa-indent text-success" aria-hidden="true">
            <span class="sr-only">侧边栏</span>
        </i>
    </a>
	<?php
	if ( $GoSheng['float_tool_qq_switch'] ) {
		?>
        <a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $GoSheng['float_tool_qq_text']; ?>&site=qq&menu=yes"
           id="floatToolQQ" class="invisible mb-1 btn btn-outline-dark" target="_blank" title="联系QQ">
            <i class="fab fa-qq text-success" aria-hidden="true">
                <span class="sr-only">QQ</span>
            </i>
        </a>
		<?php
	}
	?>
    <a href="#" id="floatToolComment" class="invisible mb-1 btn btn-outline-dark" title="隐藏评论区">
        <i class="fas fa-comments text-success" aria-hidden="true">
            <span class="sr-only">隐藏评论区</span>
        </i>
    </a>
    <a href="#" id="floatToolBackTop" class="invisible mb-1 btn btn-outline-dark" title="返回顶部">
        <i class="fas fa-arrow-up text-success" aria-hidden="true">
            <span class="sr-only">返回顶部</span>
        </i>
    </a>
</div>
