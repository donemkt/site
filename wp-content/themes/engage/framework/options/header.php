<?php

$this->sections[] = array(
	'icon' => 'dashicons dashicons-align-center',
	'title' => esc_html__( 'Header', 'engage' ),
	'heading' => esc_html__( 'Header Options', 'engage' ),
	'fields' => array(
		array(
			'id' => 'section-start',
			'type' => 'section',
			'title' => esc_html__( 'Top Menu, Sidebar Icon menu and Push Menu', 'engage' ),
			'indent' => true,
		),
		array(
			'id' => 'header-style',
			'type' => 'radio',
			'title' => esc_html__( 'Menu Style', 'engage' ),
			'subtitle' => esc_html__( 'You can choose the menu style as per your requirement from here.', 'engage' ),
			'desc' => esc_html__( 'Please select your header style.', 'engage' ),
			'options' => array(
				'header-menu-top'  => 'Top Menu',
				'header-menu-push' => 'Push Menu',
				'header-menu-icon' => 'Sidebar Icon Menu',
				'header-menu-side' => 'Sidebar Menu'
			),
			'default' => 'header-menu-top'
		),
		array(
			'id' => 'header-transparent',
			'type' => 'switch',
			'title' => esc_html__( 'Top Menu Transparency', 'engage' ),
			'subtitle' => esc_html__( 'Enable or Disable the menu transparency from here.', 'engage' ),			
			'desc' => esc_html__( 'This option is only applicable for top menu.', 'engage' ),
			'default' => '1'
		),
		array(
			'id' => 'header-transparent-border',
			'type' => 'switch',
			'title' => esc_html__( 'Top Menu Transparency Border', 'engage' ),
			'subtitle' => esc_html__( 'Enable or Disable the menu transparency border from here.', 'engage' ),			
			'desc' => esc_html__( 'This option is only applicable for top menu with transparency.', 'engage' ),
			'default' => '0'
		),
		array(
			'id' => 'header-fullwidth',
			'type' => 'switch',
			'title' => esc_html__( 'Top Menu Full Width', 'engage' ),
			'subtitle' => esc_html__( 'Enable or Disable the menu fullwidth from here.', 'engage' ),			
			'desc' => esc_html__( 'This option is only applicable for top menu.', 'engage' ),
			'default' => '0'
		),		
		array(
			'id' => 'menu-text-color',
			'type' => 'color_rgba',
			'title' => esc_html__( 'Menu Text Color', 'engage' ),
			'subtitle' => esc_html__( 'Select the color.', 'engage' ),
			'transparent' => true,
			'default' => '#EBEBEB',
			'output'    => array(
				'color' => '#header #primary-menu > ul > li > a, #header.transparent #primary-menu > ul > li > a ' ,
			)
		),		
		array(
			'id' => 'header-social',
			'type' => 'switch',
			'title' => esc_html__( 'Push Menu Social Icons', 'engage' ),
			'subtitle' => esc_html__( 'Check this option if you want to add social icons inside the header.', 'engage' ),			
			'desc' => esc_html__( 'Social icon is only applicable for push menu.', 'engage' ),
			'default' => '0'
		),
		array(
			'id' => 'section-end',
			'type' => 'section',
			'indent' => false,
		),
		array(
			'id' => 'section-start',
			'type' => 'section',
			'title' => esc_html__( 'Logo', 'engage' ),
			'indent' => true,
		),
		array(
			'id' => 'header-logo',
			'type' => 'media',
			'title' => esc_html__( 'Upload Logo 1', 'engage' ),
			'compiler' => 'true',
			'subtitle' => esc_html__( 'It will appear on all Menus.', 'engage' ),		
			'default' => array( 'url' => get_template_directory_uri() .'/images/logo/logo.png' ),
		),
		array(
			'id' => 'header-logo-overlay',
			'type' => 'media',
			'title' => esc_html__( 'Upload Logo 2', 'engage' ),
			'compiler' => 'true',
			'desc' => esc_html__( 'It will appear on Transparent Top Menu only, When the transparency has been removed after scroll down.', 'engage' ),
			'subtitle' => esc_html__( 'It will appear on Transparent Top Menu only, When the transparency has been removed after scroll down.', 'engage' ),
			'default' => array( 'url' => get_template_directory_uri() .'/images/logo/logo-black.png' ),
		),
		array(
			'id' => 'section-end',
			'type' => 'section',
			'indent' => false,
		),	
	)
);
