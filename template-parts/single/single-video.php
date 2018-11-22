<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title text-center font-13 font-lg-14">', '</h1>' ); ?>
		<div class="entry-meta mb-3 mb-lg-4 text-center">
			<?php GoSheng_posted_time(); ?>
<!--			--><?php //GoSheng_posted_author(); ?>
			<?php GoSheng_posted_views(); ?>
<!--			--><?php //GoSheng_posted_category(); ?>
<!--			--><?php //GoSheng_posted_comment_number(); ?>
			<?php GoSheng_posted_thumbs_up_already(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
		if ( has_post_thumbnail() ) {
			GoSheng_posted_thumbnail();
		}
		?>
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( '页:', 'GoSheng-framework' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php GoSheng_edit_post_link(); ?>
<!--		--><?php //GoSheng_hitokoto(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
