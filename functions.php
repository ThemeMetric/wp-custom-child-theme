<?php 


add_action('wp_enqueue_scripts', function(){
	

	wp_enqueue_style('styles', get_template_directory_uri().'/style.css', array('bootstrap'));

	wp_enqueue_style('style', get_stylesheet_uri(), array('styles'));


	wp_enqueue_style('custom-child', get_stylesheet_directory_uri().'/css/custom.css');
	wp_enqueue_script('custom-child-script', get_stylesheet_directory_uri().'/js/custom.js');


});



