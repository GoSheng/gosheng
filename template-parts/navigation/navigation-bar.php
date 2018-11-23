<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-info z100000" id="headerNav">
    <div class="container">
        <div>
			<?php if ( $GoSheng['mobile_sidebar_left'] ) {
				?>
                <button class="navbar-toggler border-0 ml-1" type="button">
                <span class="fas fa-bars text-light" id="mobile_sidebar_left-button">
                <b class="sr-only"><?php esc_html_e( '左侧边栏按钮:', 'GoSheng-framework' ) ?></b>
            </span>
                </button><?php
			} ?>
			<?php if ( $GoSheng['mobile_sidebar_right'] ) {
				?>
                <button class="navbar-toggler border-0 ml-1" type="button">
                <span class="fas fa-bars text-light" id="mobile_sidebar_right-button">
                <b class="sr-only"><?php esc_html_e( '右侧边栏按钮:', 'GoSheng-framework' ) ?></b>
            </span>
                </button><?php
			} ?>
        </div>
		<?php if ( ! has_custom_logo() ) { ?>
	<?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="navbar-brand mb-0 mr-0 ml-5 ml-lg-0">
            <a class="mx-auto mr-lg-1 py-0 text-light text-uppercase font-14 font-lg-19" id="logo" rel="home"
               href="<?php echo esc_url( home_url( '/' ) ); ?>"
               title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
               itemprop="url"><?php bloginfo( 'name' ); ?></a>
        </h1>
	<?php else : ?>
        <a class="mx-auto mr-lg-1 py-0 text-light text-uppercase font-14 font-lg-19" id="logo" rel="home"
           href="<?php echo esc_url( home_url( '/' ) ); ?>"
           title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
           itemprop="url"><?php bloginfo( 'name' ); ?></a>
	<?php endif; ?>
		<?php } else {
			the_custom_logo();
		} ?><!-- end custom logo -->
        <button class="navbar-toggler border-0 mr-1" type="button" data-toggle="collapse"
                data-target="#GoSheng_NavMenu_Top">
            <span class="fas fa-bars text-light">
                <b class="sr-only"><?php esc_html_e( '导航按钮:', 'GoSheng-framework' ) ?></b>
            </span>
        </button>
		<?php GoSheng_NavMenuTop(); ?>
    </div>
</nav>
