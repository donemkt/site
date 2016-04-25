<?php
/**
 * Required plugins for use with the theme via the TGMA
 * 
 */


function engage_register_required_plugins() {

		$plugins_dir = get_template_directory() .'/framework/plugins/';

		$plugins = array(
			array(
				'name'				=> 'WPBakery Visual Composer',
				'slug'				=> 'js_composer', 
				'source'			=> $plugins_dir .'js_composer.zip',
				'required'			=> false,
				'force_activation'	=> false,
			),			
			array(
				'name'				=> 'Contact Form 7',
				'slug'				=> 'contact-form-7',				
				'required'			=> false,
				'force_activation'	=> false,
			),		
			array(
				'name'				=> 'Revolution Slider',
				'slug'				=> 'revslider',
				'source'			=> $plugins_dir .'revslider.zip',
				'required'			=> false,
				'force_activation'	=> false,
			),
			array(
				'name'				=> 'Engage Shortcodes',
				'slug'				=> 'engage-shortcodes',
				'source'			=> $plugins_dir .'engage-shortcodes.zip',
				'required'			=> false,
				'force_activation'	=> false,
			),
			array(
				'name'				=> 'Engage Portfolio',
				'slug'				=> 'engage-portfolio',
				'source'			=> $plugins_dir .'engage-portfolio.zip',
				'required'			=> false,
				'force_activation'	=> false,
			),
		);		

		// Config settings
		$config = array(
			'id'				=> ENGAGE_THEME_NAME,		
			'menu'				=> 'install-required-plugins',			
			'parent_slug'		=> 'themes.php',
			'has_notices'		=> true,
			'is_automatic'		=> false,		
		);

		tgmpa( $plugins, $config );		
}

add_action( 'tgmpa_register', 'engage_register_required_plugins' );