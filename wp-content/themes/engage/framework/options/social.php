<?php

$this->sections[] = array(
	'icon' => 'dashicons dashicons-share',
	'title' => esc_html__( 'Social Icons', 'engage' ),
	'heading' => esc_html__( 'Social Icons Settings', 'engage' ),
	'fields' => array(
		array(
			'id' => 'info_social',
			'type' => 'info',
			'title' => esc_html__( 'Enter in your social media URL here and then select which ones you would like to display in your footer options. <br><strong>PLEASE INCLUDE "http://" or "https://" IN URL</strong>', 'engage' ),
			'icon' => 'el-icon-info-sign',
		),
		array(
			'id' => 'section-start',
			'type' => 'section',
			'indent' => true,
		),
		array(
			'id' => 'url-facebook',
			'type' => 'text',
			'title' => esc_html__( 'Facebook URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Facebook URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-twitter',
			'type' => 'text',
			'title' => esc_html__( 'Twitter URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Twitter URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-google-plus',
			'type' => 'text',
			'title' => esc_html__( 'Google+ URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Google+ URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-linkedin',
			'type' => 'text',
			'title' => esc_html__( 'Linkedin URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Linkedin URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-tumblr',
			'type' => 'text',
			'title' => esc_html__( 'Tumblr URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Tumblr URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-dribbble',
			'type' => 'text',
			'title' => esc_html__( 'Dribbble URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Dribbble URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-pinterest',
			'type' => 'text',
			'title' => esc_html__( 'Pinterest URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Pinterest URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-youtube',
			'type' => 'text',
			'title' => esc_html__( 'Youtube URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Youtube URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-vimeo-square',
			'type' => 'text',
			'title' => esc_html__( 'Vimeo URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Vimeo URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-flickr',
			'type' => 'text',
			'title' => esc_html__( 'Flickr URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Flickr URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-github',
			'type' => 'text',
			'title' => esc_html__( 'Github URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your Github URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-stack-overflow',
			'type' => 'text',
			'title' => esc_html__( 'StackOverflow URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your StackOverflow URL.', 'engage' ),
			'default' => ''
		),
		array(
			'id' => 'url-stack-exchange',
			'type' => 'text',
			'title' => esc_html__( 'StackExchange URL', 'engage' ),
			'subtitle' => esc_html__( 'Please enter your StackExchange URL.', 'engage' ),
			'default' => ''
		)
	)
);
