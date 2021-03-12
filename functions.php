<?php
/**
 * Child theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Child Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/* Enqueue stylesheet */

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles');
function child_enqueue_styles() {	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    
    /* Custo style and javascript Enqueue */
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri().'/assets/css/custom-style.css');
	wp_enqueue_script('custom-child-script', get_stylesheet_directory_uri().'/assets/js/init.js');
}
