<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
</div><!--col div-->

<?php
function GoSheng_get_sidebar() {
	?>
    <div class="col-12 col-lg-3 animated" id="sidebar">
		<?php get_sidebar(); ?>
    </div><!--col-12 div-->
	<?php
}

?>
<?php if ( $GoSheng['sidebar_switch'] ) { ?>
	<?php
	if ( is_home() && $GoSheng['sidebar_home'] ) {
		GoSheng_get_sidebar();
	} elseif ( is_single() && $GoSheng['sidebar_single'] ) {
		GoSheng_get_sidebar();
	} elseif ( is_page() && $GoSheng['sidebar_page'] ) {
		GoSheng_get_sidebar();
	} elseif ( is_search() && $GoSheng['sidebar_search'] ) {
		GoSheng_get_sidebar();
	} elseif ( is_category() && $GoSheng['sidebar_category'] ) {
		GoSheng_get_sidebar();
	} elseif ( is_404() && $GoSheng['sidebar_404'] ) {
		GoSheng_get_sidebar();
	}
	?>
<?php } ?>


</div><!--row div-->
</div><!--container div-->
<?php get_template_part( 'template-parts/footer/footer', 'footTools' ); ?>
</main><!--main-->
<?php if ( get_option( 'AdBlockCheck' ) ) {
	get_template_part( 'template-parts/footer/footer', 'AdBlockCheck' );
} ?>

<?php get_template_part( 'template-parts/footer/footer-default' ); ?>

<?php GoSheng_Style_Code_Load( $GoSheng['CSS_Code_footer'] ); ?>
<?php GoSheng_JavaScript_Code_Load( $GoSheng['JavaScript_Code_footer'] ); ?>
</body>
</html>