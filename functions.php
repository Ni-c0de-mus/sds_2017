<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'jquery' );

}
/**
 * change the recommended header image size to 600px high
**/

function sds_2017_twentyseventeen_custom_header_args( $args ) {
   $args['height'] = 600;
   return $args;
   }
add_filter ( 'twentyseventeen_custom_header_args', 'sds_2017_twentyseventeen_custom_header_args' );

/**
 * override the special featured image to be 600 high instead of 1200
** /

add_image_size( 'twentyseventeen-featured-image', 2000, 600, true );
