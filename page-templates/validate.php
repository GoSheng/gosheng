<?php
/*
Template Name: validate
*/
get_header();
$link      = 'https://raw.githubusercontent.com/zhang-chenglin/gosheng_validate/master/validate.json';
$time      = date( 'zH' );
$link_json = wp_remote_get( $link . "?" . $time );
$result    = json_decode( $link_json["body"], true );
$test      = new GoSheng_array_depth();
$test->foreach_array( $result );
get_footer();
