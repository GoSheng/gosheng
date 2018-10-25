<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
get_header(); ?>

<div class="content container bg-light pt-4">
	<?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
				<?php the_title( '<h1 class="entry-title text-center font-13 font-lg-14">', '</h1>' ); ?>
                <div class="entry-meta mb-3 mb-lg-4 text-center">
					<?php GoSheng_posted_time(); ?>
					<?php GoSheng_posted_author(); ?>
					<?php GoSheng_posted_views(); ?>
					<?php GoSheng_posted_comment_number(); ?>
					<?php GoSheng_posted_thumbs_up_already(); ?>
                </div>
            </header>
            <div class="entry-content">
				<?php the_content(); ?>
            </div><!-- .entry-content -->
            <footer class="entry-footer">
				<?php
				if ( $GoSheng['reward_all'] ) {
					get_template_part( 'template-parts/other/reward' );
				}
				?>
                <div class="d-flex justify-content-around">
					<?php
					if ( $GoSheng['reward_all'] ) {
						GoSheng_posted_reward();
					}
					if ( $GoSheng['thumbs_up'] ) {
						GoSheng_posted_thumbs_up();
					}
					?>
                </div>
				<?php
				if ( $GoSheng['posted_share'] ) {
					GoSheng_posted_share();
				}
				?>
				<?php GoSheng_edit_post_link(); ?>
            </footer>
        </article>
		<?php
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
	?>
</div>
<?php get_footer(); ?>
