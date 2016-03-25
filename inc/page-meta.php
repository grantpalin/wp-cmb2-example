<?php
/**
 * Define the metabox and field configurations for pages.
 */
function twenty_fifteen_cmb2_metaboxes() {
	// Start with an underscore to hide fields from custom fields list.
	// Use a unique prefix to reduce chance of naming conflict.
	$prefix = '_2015_cmb2_page_';

	// Initiate the header settings metabox.
	$cmb_header = new_cmb2_box(
		array(
			'id'           => 'header_settings',
			'title'        => __( 'Header Settings', 'twenty-fifteen-cmb2' ),
			'object_types' => array( 'page' ),
		)
	);

	$cmb_header->add_field(
		array(
			'name'    => __( 'Title color', 'twenty-fifteen-cmb2' ),
			'desc'    => __( 'This is the color of the page title' ),
			'id'      => $prefix . 'title_color',
			'type'    => 'select',
			'default' => 'black',
			'options' => array(
				'black'     => __( 'Black', 'twenty-fifteen-cmb2' ),
				'white'     => __( 'White', 'twenty-fifteen-cmb2' ),
				'blue'      => __( 'Blue', 'twenty-fifteen-cmb2' ),
				'darkblue'  => __( 'Dark Blue', 'twenty-fifteen-cmb2' ),
				'green'     => __( 'Green', 'twenty-fifteen-cmb2' ),
				'darkgrey'  => __( 'Dark Grey', 'twenty-fifteen-cmb2' ),
				'lightgrey' => __( 'Light Grey', 'twenty-fifteen-cmb2' ),
				'purple'    => __( 'Purple', 'twenty-fifteen-cmb2' ),
			),
		)
	);

	$cmb_header->add_field(
		array(
			'name' => __( 'Subtitle', 'twenty-fifteen-cmb2' ),
			'desc' => __( 'A subtitle to show below the page title', 'twenty-fifteen-cmb2' ),
			'id'   => $prefix . 'subtitle',
			'type' => 'text',
		)
	);

	$cmb_header->add_field(
		array(
			'name'    => __( 'Subtitle color', 'twenty-fifteen-cmb2' ),
			'desc'    => __( 'This is the color of the page subtitle' ),
			'id'      => $prefix . 'subtitle_color',
			'type'    => 'select',
			'default' => 'black',
			'options' => array(
				'black'     => __( 'Black', 'twenty-fifteen-cmb2' ),
				'white'     => __( 'White', 'twenty-fifteen-cmb2' ),
				'blue'      => __( 'Blue', 'twenty-fifteen-cmb2' ),
				'darkblue'  => __( 'Dark Blue', 'twenty-fifteen-cmb2' ),
				'green'     => __( 'Green', 'twenty-fifteen-cmb2' ),
				'darkgrey'  => __( 'Dark Grey', 'twenty-fifteen-cmb2' ),
				'lightgrey' => __( 'Light Grey', 'twenty-fifteen-cmb2' ),
				'purple'    => __( 'Purple', 'twenty-fifteen-cmb2' ),
			),
		)
	);
}
add_action( 'cmb2_init', 'twenty_fifteen_cmb2_metaboxes' );
