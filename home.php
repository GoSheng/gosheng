<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/other/page', 'list' );
	endwhile;
endif;
GoSheng_pagination();
get_footer();