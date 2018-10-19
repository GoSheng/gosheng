<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
    <div class="container bg-light">
		<?php
		get_search_form();
		?>
    </div>
<?php
if ( have_posts() ) :?>
    <div class="container bg-light py-3"><?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/other/page', 'list' );
	endwhile;
	?></div><?php
	GoSheng_pagination();
else:
	?>
    <div class="container bg-light py-3">
        <p><?php esc_html_e( '没有搜索到结果', 'GoSheng-framework' ); ?></p>
    </div>
<?php
endif;
get_footer();
