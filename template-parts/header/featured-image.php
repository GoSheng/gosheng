<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( has_post_thumbnail( $post->ID ) ) : ?>
    <header class="featured-hero" role="banner"
            data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
    </header>
<?php endif;