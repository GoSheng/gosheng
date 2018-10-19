<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
</div><!--col div-->

<?php if ( $GoSheng['sidebar_switch'] ) { ?>
    <div class="col-12 col-lg-3 animated" id="sidebar">
		<?php get_sidebar(); ?>
    </div><!--col-12 div-->
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