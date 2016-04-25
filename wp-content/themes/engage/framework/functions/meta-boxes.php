<?php
/**
 * Registering meta boxes
 */
add_filter( 'rwmb_meta_boxes', 'engage_register_meta_boxes' );
/**
 * Register meta boxes 
 
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function engage_register_meta_boxes( $meta_boxes ) {
	
	$prefix = ENGAGE_META_PREFIX;
	
	// Blog meta box
	$meta_boxes[] = array(
		'id'			=> 'post-meta-audio',		
		'title'			=> esc_html__( 'Post Audio Settings', 'engage' ),
		'pages'			=> array( 'post'),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,		
		'show'			=> array( 'post_format' => array( 'audio' ) ),
		'fields'		=> array(
			array(				
				'name'  => esc_html__( 'Audio URL', 'engage' ),				
				'id'    => "{$prefix}post_audio_url",
				'desc'  => esc_html__( 'Enter your audio url here', 'engage' ),
				'type'  => 'text',				
				'std'   => '',
				'size'	=> '50'	
				)			
			)
	);
				
	$meta_boxes[] = array(
		'id'			=> 'post-meta-video',		
		'title'			=> esc_html__( 'Post Video Settings', 'engage' ),
		'pages'			=> array( 'post'),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,
		'show'			=> array( 'post_format' => array( 'video' ) ),
		'fields'		=> array(
			array(				
				'name'  => esc_html__( 'Video URL', 'engage' ),				
				'id'    => "{$prefix}post_video_url",
				'desc'  => esc_html__( 'Enter Your Video URL Here', 'engage' ),
				'type'  => 'text',				
				'std'   => '',
				'size'	=> '50'	
			)		
		)
	);


	$meta_boxes[] = array(
		'id'			=> 'post-meta-gallery',		
		'title'			=> esc_html__( 'Post Gallery Settings', 'engage' ),
		'pages'			=> array( 'post'),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,
		'show'			=> array( 'post_format' => array( 'gallery' ) ),
		'fields'		=> array(
			array(
				'name'  => esc_html__( 'Gallery Image Upload', 'engage' ),
				'id'    => "{$prefix}post_gallery_images",
				'type'  => 'image_advanced',
				'max_file_uploads' => 10,
			)			
		)
	);
				
	$meta_boxes[] = array(
		'id'			=> 'post-meta-quote',		
		'title'			=> esc_html__( 'Post Quote Author', 'engage' ),
		'pages'			=> array( 'post'),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,
		'show'			=> array( 'post_format' => array( 'quote' ) ),
		'fields'		=> array(
			array(				
				'name'  => esc_html__( 'Quote Author', 'engage' ),				
				'id'    => "{$prefix}post_quote_author",
				'desc'  => esc_html__( 'Enter Quote Author Name Here', 'engage' ),
				'type'  => 'text',				
				'std'   => '',
				'size'	=> '50'	
			)		
		)
	);
				
	$meta_boxes[] = array(
		'id'			=> 'post-meta-link',		
		'title'			=> esc_html__( 'Post Link', 'engage' ),
		'pages'			=> array( 'post'),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,
		'show'			=> array( 'post_format' => array( 'link' ) ),
		'fields'		=> array(
			array(				
				'name'  => esc_html__( 'Link', 'engage' ),				
				'id'    => "{$prefix}post_link_url",
				'desc'  => esc_html__( 'Enter Post link url here.', 'engage' ),
				'type'  => 'text',				
				'std'   => '',
				'size'	=> '50'	
			)		
		)
	);			
				
	// End of Blog meta box
				
	// Portfolio Meta Box
	$meta_boxes[] = array(
		'id'			=> 'thumbnail_box',
		'title'			=> esc_html__( 'Portfolio Thumbnail', 'engage' ),
		'post_types'	=> array( 'portfolio' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,
		'fields'		=> array(
			array(
				'name'  => esc_html__( 'Thumbnail Title', 'engage' ),
				'id'	=> "{$prefix}thumb_title",
				'desc'	=> esc_html__( 'Title will appear in Thumbnail bottom', 'engage' ),
				'type'	=> 'text',
				'size'	=> '35'	
			),
			array(
				'name'	=> esc_html__( 'Thumbnail Sub Title', 'engage' ),
				'id'	=> "{$prefix}thumb_sub_title",
				'desc'	=> esc_html__( 'Sub Title will appear in Thumbnail bottom', 'engage' ),
				'type'	=> 'text',
				'size'	=> '35'
			),
		)
	);
				
	$meta_boxes[] = array(
		'id'			=> 'portfolio_settings_box',
		'title'			=> esc_html__( 'Portfolio Post Settings', 'engage' ),
		'post_types'	=> array( 'portfolio' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,
		'fields'		=> array(
			array(
				'name'	=> esc_html__( 'Portfolio Type', 'engage' ),
				'id'	=> "portfolio_type",
				'type'	=> 'select',
				'options'	=> array(					
					'image'		=> esc_html__( 'Image', 'engage' ),
					'gallery'	=> esc_html__( 'Image Gallery', 'engage' ),
					'video'		=> esc_html__( 'Video', 'engage' ),
					'audio'		=> esc_html__( 'Audio', 'engage' ),					
				),
				'std'			=> 'image',
			),
			array(
				'name'	=> esc_html__( 'Open In', 'engage' ),
				'id'	=> "{$prefix}portfolio_open",
				'type'	=> 'select',
				'options'	=> array(
					'lightbox'	=> esc_html__( 'LightBox', 'engage' ),
					'page'		=> esc_html__( 'Ajax Page', 'engage' ),
				),
				'std'	=> 'lightbox',
			),			
			array(
				'name'  => esc_html__( 'Image Upload', 'engage' ),
				'id'    => "{$prefix}image_url",
				'type'  => 'image_advanced',
				'max_file_uploads' => 1,
				'hidden' => array( 'portfolio_type', '!=', 'image' )
			),
			array(
				'name'  => esc_html__( 'Video Url', 'engage' ),
				'id'	=> "{$prefix}video_url",
				'desc'	=> esc_html__( 'Enter your video url here', 'engage' ),
				'type'	=> 'text',	
				'size'	=> '50',
				'hidden' => array( 'portfolio_type', '!=', 'video' )
			),
			array(
				'name'	=> esc_html__( 'Audio Url', 'engage' ),
				'id'	=> "{$prefix}audio_url",
				'desc'	=> esc_html__( 'Enter your audio url here.', 'engage' ),
				'type'	=> 'text',
				'size'	=> '50',
				'hidden' => array( 'portfolio_type', '!=', 'audio' )
			),			
			array(
				'name'	=> esc_html__( 'Gallery Images Upload', 'engage' ),
				'id'	=> "{$prefix}gallery_images",
				'type'	=> 'image_advanced',
				'max_file_uploads' => 10,
				'hidden' => array( 'portfolio_type', '!=', 'gallery' )
			),
		)
	);
	
	$meta_boxes[] = array(
		'id'			=> 'portfolio_details_box',
		'title'			=> esc_html__( 'Portfolio Details', 'engage' ),
		'post_types'	=> array( 'portfolio' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'autosave'		=> true,
		'fields'		=> array(
			array(
				'name'	=> esc_html__( 'Project Date', 'engage' ),
				'id'	=> "{$prefix}project_date",
				'type'	=> 'date',				
				'js_options' => array(
					'appendText'		=> esc_html__( '(yyyy-mm-dd)', 'engage' ),
					'dateFormat'		=> esc_html__( 'yy-mm-dd', 'engage' ),
					'changeMonth'		=> true,
					'changeYear'		=> true,
					'showButtonPanel'	=> true,
				),
			),
			array(
				'name'  => esc_html__( 'Client', 'engage' ),
				'id'	=> "{$prefix}client_name",				
				'type'  => 'text',
				'size'	=> '35'
			),			
			array(
				'id'    => "{$prefix}newentry_groupbox",
				'type'  => 'group',
				'desc'  => esc_html__( 'To add new fields in Project Details', 'engage' ),
				'clone' => true,
				'sort_clone' => false,			
				'fields'	 => array(
								array(
									'id'	=> "{$prefix}new_title",
									'name'  => esc_html__( 'Title', 'engage' ),
									'desc'  => esc_html__( 'Enter the title.', 'engage' ),
									'type'  => 'text',
									'std'   => ""								
									),
								array(
									'id'    => "{$prefix}new_value",
									'name'  => esc_html__( 'Value', 'engage' ),
									'desc'  => esc_html__( 'Enter the Value.', 'engage' ),
									'type'  => 'text',
									'std'   => "",									
									),
								),
			),
			array(
				'name'  => esc_html__( 'Button Text', 'engage' ),
				'id'	=> "{$prefix}button_text",
				'desc'  => esc_html__( 'Example: LAUNCH', 'engage' ),
				'type'  => 'text',
				'size'	=> '35'
			),
			array(
				'name'  => esc_html__( 'Button Link URL', 'engage' ),
				'id'	=> "{$prefix}button_url",				
				'desc'  => esc_html__( 'Example: http://www.google.com', 'engage' ),
				'type'  => 'text',
				'size'	=> '35'
			),
		)
	);

	
	
		
	// End of Portfolio Meta Box


	return $meta_boxes;
}