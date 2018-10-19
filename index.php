<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
if ( is_singular() ):
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/other/page', 'list' );
		endwhile;
	endif;
	GoSheng_pagination();
elseif ( is_404() ):
elseif ( is_search() ):
endif;
?>
Bootstrap index
<?php get_footer(); ?>
