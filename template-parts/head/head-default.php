<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="renderer" content="webkit">
	<?php GoSheng_meta_name_content( 'theme-color', $GoSheng['theme-color'] ); ?>
	<?php GoSheng_meta_name_content( 'msapplication-navbutton-color', $GoSheng['msapplication-navbutton-color'] ); ?>
    <meta name="keywords" content="<?php GoSheng_keywords(); ?>">
    <meta name="description" content="<?php GoSheng_description(); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes"><!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><!-- iOS Safari -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta property="mip:use_cache" content="no">
	<?php wp_head(); ?>
	<?php GoSheng_FunDebug(); ?>
	<?php GoSheng_Style_Code_Load( $GoSheng['CSS_Code_header'] ); ?>
	<?php GoSheng_JavaScript_Code_Load( $GoSheng['JavaScript_Code_header'] ); ?>
</head>
<?php get_template_part( 'template-parts/other/noscript' ); ?>
