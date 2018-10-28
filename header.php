<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( isset( $_SERVER['HTTP_USER_AGENT'] ) ) {
	global $is_IE;
	if ( $is_IE ) {
		get_template_part( 'template-parts/other/isie' );
		die();
	}
}

global $GoSheng;
get_template_part( 'template-parts/head/head-default' );
?>
<body <?php body_class( 'bg-body' ); ?>>
    <header>
        <div id="top-header" class="container-fluid bg-top_header text-black-50">
            <div class="container d-flex justify-content-between align-items-center">
                <div>
					<?php
					if ( $GoSheng['head_welcome'] ) {
						?><span><?php echo $GoSheng['welcome_msg']; ?></span><?php
					};
					?>
                </div>
                <div>
					<?php get_template_part( 'template-parts/header/login_btn' ); ?>
                </div>
            </div>
        </div>

		<?php
		get_template_part( 'template-parts/navigation/navigation-bar' );
		?>
    </header>
<main style="overflow: hidden;min-height: 110vh;">
    <div class="p-relative">
		<?php if ( $GoSheng['mobile_sidebar_left'] ) {
			get_template_part( 'template-parts/navigation/mobile-sidebar-left' );
		} ?>
    </div>
    <div class="p-relative">
		<?php if ( $GoSheng['mobile_sidebar_right'] ) {
			get_template_part( 'template-parts/navigation/mobile-sidebar-right' );
		} ?>
    </div>
<?php
if ( is_home() ) {
	$GoSheng_owl_carousel = new GoSheng_owl_carousel();
	$GoSheng_owl_carousel->gosheng_owl( $GoSheng['owl_carousel_top'], $GoSheng['owl_carousel_top_slides'], 'bannerTop' );
}
?>
    <div class="container">
<?php
if ( is_home() ) {
	$GoSheng_owl_carousel->gosheng_owl( $GoSheng['owl_carousel_top_small'], $GoSheng['owl_carousel_top_small_slides'], 'bannerTop-small' );
}
?>

<?php
if ( ! is_front_page() && ! is_home() && ( is_single() || is_page() ) ) {
	get_template_part( 'template-parts/header/header', 'notice' );
}
?>
    <div class="row justify-content-between">
        <div class="col mb-1 mb-lg-0 animated" id="content">
<?php
if ( $GoSheng['part_breadcrumb'] ) {
	if ( ! is_home() && ! is_page( array( 'admin' ) ) ) {
		GoSheng_breadcrumbs();
	}
}
