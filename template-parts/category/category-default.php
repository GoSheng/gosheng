<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="container bg-light pt-3">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/other/page', 'list' );
		endwhile;
	endif;
	GoSheng_pagination();
	?>
</div>
