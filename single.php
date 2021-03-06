<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
get_header();
?>
<div class="content container bg-light pt-4">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/single/single', GoSheng_get_post_format() ); ?>
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
		<?php
		if ( $GoSheng['posted_tags'] ) {
			GoSheng_posted_tags();
		}
		?>

		<?php GoSheng_post_nav(); ?>
		<?php
		//todo:在后台增加可控按类型进行评论功能的开启和关闭
		if ( is_single() ) {
			$single_type = GoSheng_get_post_format();
			switch ( $single_type ) {
				case 'standard':
					GoSheng_get_comments();
					break;
				case 'aside':
				case 'audio':
				case 'excerpt':
				case 'gallery':
				case 'image':
				case 'link':
				case 'quote':
				case 'video':
				default:
					break;
			}
		}
		?>
	<?php endwhile; ?>
</div><!-- .container -->
<?php get_footer(); ?>
