<?php

$this->sections[] = array(
	'icon' => 'dashicons dashicons-twitter',
	'title' => esc_html__( 'Twitter Settings', 'engage' ),
	'heading' => esc_html__( 'Twitter Settings', 'engage' ),
	'fields' => array(	
		array(
			'id' => 'section-start',
			'type' => 'section',
			'indent' => true,
		),
		array(
			'id' => 'consumer-key',
			'type' => 'text',
			'title' => esc_html__( 'Consumer Key', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Twitter consumer key.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'consumer-secret-key',
			'type' => 'text',
			'title' => esc_html__( 'Consumer Secret Key', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Twitter Consumer Secret Key.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'access-token',
			'type' => 'text',
			'title' => esc_html__( 'Access Token', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Twitter Access Token.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'access-token-secret',
			'type' => 'text',
			'title' => esc_html__( 'Access Token Secret', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Twitter Access Token Secret.', 'engage' ),
			'default' => ''
		),		
	)
);
