<?php

$url = 'http://golothemes.com';

$this->sections[] = array(
	'icon' => 'dashicons dashicons-align-center',
	'title' => esc_html__( 'Footer', 'engage' ),
	'heading' => esc_html__( 'Footer Options', 'engage' ),
	'fields' => array(
		
		array(
			'id' => 'footer-style',
			'type' => 'select',
			'title' => esc_html__( 'Footer Style', 'engage' ),
			'options' => array(
								'footer-dark'  => esc_html__( 'Dark Footer', 'engage' ),
								'footer-light' => esc_html__( 'Light Footer', 'engage' ),								
							),                        
			'default' => 'footer-dark'
		),
		array(
			'id' => 'footer-copyright',
			'type' => 'text',
			'title' => esc_html__( 'Footer Copyright Text', 'engage' ),
			'subtitle' => esc_html__( 'Please enter the copyright text.', 'engage' ),			
			'default' => 'COPYRIGHTS &#169; 2016 DESIGN BY <a href="'.esc_url( $url ).'" target="_blank">GoloThemes</a>.'
		),
		array(
			'id' => 'footer-social',
			'type' => 'switch',
			'title' => esc_html__( 'Footer Social Icon', 'engage' ),
			'subtitle' => esc_html__( 'Check this option if you want to show social icons on footer.', 'engage' ),			
			'default' => '0'
		),
		array(
			'id' => 'footer-social-icon',
			'type' => 'sorter',
			'title' => esc_html__( 'Footer Social icon list', 'engage'),
			'subtitle' => esc_html__( 'Drag the social icons from "Available Icon" section to "Footer Icon" section.Social icon url need to be set in Social icon Links Theme option panel.', 'engage' ),			
			'options' => array(
				'Available icons' => array(
					'placebo' => 'placebo',
					'facebook' => 'Facebook',
					'twitter' => 'Twitter',
					'google-plus' => 'Google+',
					'linkedin' => 'Linkedin',
					'tumblr' => 'Tumblr',
					'dribbble' => 'Dribbble',
					'pinterest' => 'Pinterest',
					'youtube' => 'Youtube',
					'vimeo-square' => 'Vimeo',
					'flickr' => 'Flickr',
					'github' => 'Github',
					'stack-overflow' => 'Stackoverflow',
					'stack-exchange' => 'Stack-exchange'
				),
				'Footer icons' => array(
					'placebo' => 'placebo',
				)
			),
		),		
	)
);
