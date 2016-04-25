<?php

$this->sections[] = array(
	'icon' => 'dashicons dashicons-admin-generic',
	'title' => esc_html__( 'Generals', 'engage' ),
	'heading' => esc_html__( 'Generals Settings', 'engage' ),	
	'fields' => array(		
		array(
			'id' => 'theme-color',
			'type' => 'color',
			'title' => esc_html__( 'Theme Color', 'engage' ),
			'subtitle' => esc_html__( 'Choose the theme color from here.', 'engage' ),
			'transparent' => false,
			'default' => '#a79759'			
		),	
		array(
			'id' => 'animation-switch',
			'type' => 'switch',
			'title' => esc_html__( 'Animation', 'engage' ),
			'subtitle' => esc_html__( 'You can enbale or disable animation.', 'engage' ),			
			'default' => '1'			
		),	
		array(
			'id' => 'minify-js-switch',
			'type' => 'switch',
			'title' => esc_html__( 'Minify Javascript', 'engage' ),
			'subtitle' => esc_html__( 'You can minify the javascript in a single minified file.', 'engage' ),			
			'default' => '1'			
		),	
		array(
			'id' => 'retina-js-switch',
			'type' => 'switch',
			'title' => esc_html__( 'Retina Ready', 'engage' ),
			'subtitle' => esc_html__( 'You can enable or disable the Retina support for your site from here.', 'engage' ),			
			'default' => '0'			
		),	
		array(
			'id' => 'section-start',
			'type' => 'section',
			'title' => esc_html__( 'Favicon', 'engage' ),
			'indent' => true,			
		),
		array(
			'id' => 'favicon',
			'type' => 'media',
			'url' => true,
			'title' => esc_html__( 'Upload Favicon', 'engage' ),
			'subtitle' => esc_html__( 'It displayed in the address bar of a browser accessing the site or next to the site name in a users list of bookmarks.', 'engage' ),
			'desc' => esc_html__( 'Image size must be 16x16 pixels or 32x32 pixels and Format of the image must be one of PNG(W3C standard),GIF or ICO.', 'engage' ),
			'default' => array( 'url' => get_template_directory_uri() .'/images/logo/favicon.jpg' ),
		),
		array(
			'id' => 'section-end',
			'type' => 'section',
			'indent' => false,			
		),
		array(
			'id' => 'section-start',
			'type' => 'section',
			'title' => esc_html__( 'Preloader Settings', 'engage' ),
			'indent' => true,			
		),
		array(
			'id' => 'preloader',
			'type' => 'switch',
			'title' => esc_html__( 'Preloader', 'engage' ),
			'subtitle' => esc_html__( 'You can simply enable or disable the preloader on page load from here.', 'engage' ),
			'default' => '1'
		),			
		array(
			'id'     => 'section-start',
			'type'   => 'section',
			'title' => esc_html__('Custom CSS', 'engage'),       		
			'indent' => true,
		),
		array(
            'id' => 'custom-css',
            'type' => 'ace_editor',
            'title' => esc_html__('CSS Code', 'mobius'),
            'subtitle' => esc_html__('Paste your custom CSS code here.', 'engage'),
            'mode' => 'css',
            'theme' => 'chrome',
            'desc' => '',
            'default'  => ''
        ),
		array(
			'id' => 'section-end',
			'type' => 'section',
			'indent' => false,			
		),	
	)
);
