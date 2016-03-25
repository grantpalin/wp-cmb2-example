<?php
require_once get_stylesheet_directory() . '/inc/tgm.php';
require_once get_stylesheet_directory() . '/inc/page-meta.php';

function twenty_fifteen_cmb2_enqueue() {
	$parent_style = 'parent-style'; // using a variable to ensure that parent theme style loads first

	// load the parent theme styles
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	// load the child theme styles
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ), // require parent theme style to be loaded first
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'twenty_fifteen_cmb2_enqueue' );
