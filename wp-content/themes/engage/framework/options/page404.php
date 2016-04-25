<?php

$this->sections[] = array(
	'icon' => 'dashicons dashicons-dismiss',
	'title' => esc_html__( 'Page 404', 'engage' ),
	'heading' => esc_html__( 'Page 404 Settings', 'engage' ),
	'fields' => array(		
		array(
			'id' => 'page-404-image',
			'type' => 'media',
			'title' => esc_html__( '404 Image', 'engage' ),			
			'desc' => esc_html__( 'Upload your 404 background image, Size of the image must be 1600x900 or above.', 'engage' ),						
		),
		array(
			'id' => 'page-bg-color',
			'type' => 'color',
			'title' => esc_html__( 'Background Color', 'engage' ),
			'subtitle' => esc_html__( 'Please select a color.', 'engage' ),
			'transparent' => false,
			'default' => '#EBEBEB'			
		),	
		array(
			'id' => 'page-title',
			'type' => 'text',
			'title' => esc_html__( 'Page Title', 'engage' ),
			'subtitle' => esc_html__( 'Title will appear on the page.', 'engage' ),			
			'default' => 'ERROR 404'
		),
		array(
			'id' => 'page-subtitle',
			'type' => 'text',
			'title' => esc_html__( 'Page Subtitle', 'engage' ),
			'subtitle' => esc_html__( 'Subtitle will appear under the title.', 'engage' ),			
			'default' => 'NOTHING FOUND'
		),
	)
);
