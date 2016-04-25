<?php

$this->sections[] = array(
	'icon' => 'dashicons dashicons-edit',
	'title' => esc_html__( 'Blog', 'engage' ),
	'heading' => esc_html__( 'Blog Settings', 'engage' ),
	'fields' => array(
		array(
			'id' => 'blog-section-start',
			'type' => 'section',
			'title' => esc_html__( 'Blog Home Settings', 'engage' ),
			'indent' => true,
		),
		array(
			'id' => 'blog-bg-image',
			'type' => 'media',
			'title' => esc_html__( 'Blog Hero Image', 'engage' ),			
			'desc' => esc_html__( 'Upload the hero image on blog home page, image size must be 1600x600 or above.', 'engage' ),					
		),		
		array(
			'id' => 'blog-title',
			'type' => 'text',
			'title' => esc_html__( 'Hero Image Title', 'engage' ),
			'subtitle' => esc_html__( 'It will appear on Hero image.', 'engage' ),			
			'default' => 'Welcome to our'
		),
		array(
			'id' => 'blog-subtitle',
			'type' => 'text',
			'title' => esc_html__( 'Hero Image Sub Title', 'engage' ),
			'subtitle' => esc_html__( 'It will apear on Hero image.', 'engage' ),			
			'default' => 'Blog'
		),		
		array(
			'id' => 'blog-section-end',
			'type' => 'section',
			'indent' => false,
		),
		array(
			'id' => 'blog-section2-start',
			'type' => 'section',
			'title' => esc_html__( 'Blog Posts Settings', 'engage' ),
			'indent' => true,
		),
		array(
			'id' => 'blog-tag',
			'type' => 'switch',
			'title' => esc_html__( 'Post Tags', 'engage' ),
			'subtitle' => esc_html__( 'You can show or hide the tags at the end of the each post from here.', 'engage' ),
			'default' => '1'
		),
		array(
			'id' => 'blog-social-sharing',
			'type' => 'switch',
			'title' => esc_html__( 'Social Icons on Post', 'engage' ),
			'subtitle' => esc_html__( 'You can show or hide the social sharing icons on your blog posts.', 'engage' ),
			'default' => '1'
		),		
		array(
			'id' => 'blog-section2-end',
			'type' => 'section',
			'indent' => false,
		),		
	)
);
