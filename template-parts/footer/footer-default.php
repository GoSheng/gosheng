<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<?php
if ( $GoSheng['aplayer_switch'] ) {
	?>
    <div id="gosheng_aplayer" class="p-relative container">
        <div id="aplayer" class="p-absolute"></div>
    </div>
	<?php
}
?>
<footer class="container-fluid py-1 py-lg-2 bg-footer text-muted border border-success border-bottom-0 border-left-0 border-right-0"
        id="footer">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6"></div>
            <div class="col-12 col-lg-6">
				<?php
				if ( $GoSheng['ICP'] ) {
					?>
                    <p class="mb-1 mb-lg-2 text-center text-lg-right">
                        <a class="text-muted" title="<?php echo $GoSheng['ICP_number']; ?>"
                           target="_blank" rel="nofollow"
                           href="http://www.miitbeian.gov.cn/"><?php echo $GoSheng['ICP_number']; ?>
                        </a>
                    </p>
					<?php
				}
				?>

				<?php
				if ( $GoSheng['recordcode'] ) {
					?>
                    <p class="mb-1 mb-lg-2 text-center text-lg-right">
                        <a class="text-muted" title="<?php echo $GoSheng['recordcode_text']; ?>"
                           target="_blank" rel="nofollow"
                           href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=<?php echo $GoSheng['recordcode_number']; ?>"><?php echo $GoSheng['recordcode_text']; ?></a>
                    </p>
					<?php
				}
				?>
				<?php
				if ( $GoSheng['website_statistics'] ) {
					?>
                    <p class="mb-1 mb-lg-2 text-center text-lg-right font-8 font-lg-9"><?php echo $GoSheng['website_statistics_code']; ?></p>
                    <p id="gosheng_time" class="mb-1 mb-lg-2 text-center text-lg-right font-8 font-lg-9"></p>
					<?php
				}
				?>

            </div>
        </div>
    </div>
	<?php wp_footer(); ?>
</footer>
<?php get_template_part( 'template-parts/footer/footer', 'cookie' ); ?>
<div class="container-fluid py-1 py-lg-2">
    <div class="container">
		<?php
		if ( $GoSheng['footer_copyright'] ) {
			?>
            <p class="mb-1 mb-lg-2 text-center font-8 font-lg-9"><?php echo $GoSheng['footer_copyright_msg']; ?></p>
			<?php
		}
		GoSheng_taobao();
		?>
    </div>
</div>