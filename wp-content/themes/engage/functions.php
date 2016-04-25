<?php
/**
 * Theme Functions and definitions.
 * 
 */

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */

// Theme Name
if( ! defined( 'ENGAGE_THEME_NAME' )) {
	define(	'ENGAGE_THEME_NAME', 'engage' );
}

define(	'ENGAGE_THEME_VERSION', '1.0' );

// Check if plugins are active
if( ! defined( 'ENGAGE_VC_ACTIVE' )) {
	define( 'ENGAGE_VC_ACTIVE', class_exists( 'Vc_Manager' ) );
}

/**
 * ----------------------------------------------------------------------------------------
 * 2.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1260;
}

/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Main Theme Setup Class
 * - Perform basic setup, registration, and init actions for the theme
 * - Loads all theme Classes and functions
 * - Loads all core back-end and front-end scripts
 * - Makes any necessary alterations to core filters  
 * ----------------------------------------------------------------------------------------
 */
class Engage_Theme_Setup {
	
	/**
     * Initialize the class    
     */
    public function __construct() {		
		
		// Run class functions		
		add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
		add_action( 'init', array( $this, 'include_files' ), 0 );
		
        add_action( 'wp_enqueue_scripts', array( $this, 'frontend_enqueue' ) );		
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );	
		
		add_filter( 'pre_get_posts', array( &$this, 'search_filter' ) );
	}
	
	/**
     * Functions called during each page load, after the theme is initialized
     * Perform basic setup, registration, and init actions for the theme   
     */
    public function setup_theme() {

        // Register navigation menus
        register_nav_menus (
            array(
                'main_menu'         => esc_html__( 'Main Menu', 'engage' ),                
            )
        );

        // Load text domain
        load_theme_textdomain( 'engage', get_template_directory() .'/languages' );

        // Enable some useful post formats for the blog
        add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote', 'link' ) );
        
        // // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        
        // Enable featured image support
        add_theme_support( 'post-thumbnails' ); 
		
		//Add title tag support
		add_theme_support( 'title-tag' );

    }
	
	
	 /**
     * Include theme functions and classes   
     */
    public function include_files() {        
      
        $this -> theme_options_panel();
		$this -> theme_meta_box();
		$this -> theme_functions();
		$this -> theme_classes();		
    }
		
	
	/**
     * Load styles and scripts in frontend
     */
	public function frontend_enqueue() {
		
		$this -> frontend_styles();
		$this -> frontend_scripts();
		
	}
	
	/**
     * Loads all required CSS for the theme
     */
    private function frontend_styles() {
		
		global $engage_theme_settings;
		$menu_type = $engage_theme_settings[ 'header-style' ];
		
       // Load Visual composer CSS first so it's easier to override
        if ( ENGAGE_VC_ACTIVE ) {
            wp_enqueue_style( 'js_composer_front' );
        }	
		
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/icons/font-awesome.min.css' );			
		wp_enqueue_style( 'ionicons', get_template_directory_uri() .'/css/icons/ionicons.min.css' );		
		
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/css/owl/owl.carousel.css' );   				

        // Main Style.css File
        wp_enqueue_style( 'engage-style', get_template_directory_uri() .'/style.css' );
		
		//Shortcodes Css
		wp_enqueue_style( 'engage-shortcodes' );	
					
		
		// Remove unwanted scripts
		if ( ENGAGE_VC_ACTIVE ) {
			wp_deregister_style( 'js_composer_custom_css' );
		}
		
    }
	
	/**
     * Loads all required scripts for the theme
     */
    private function frontend_scripts() {		
		
        // Comment reply
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }		
		
		wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/plugins/jquery.superfish.js', array( 'jquery' ), '', true );          
		
		wp_enqueue_script( 'hoverintent', get_template_directory_uri() . '/js/plugins/jquery.hoverIntent.js', array( 'jquery' ), '', true );          		
       				
		wp_enqueue_script( 'engage-custom', get_template_directory_uri() .'/js/custom.js', '', '', true );		
		
	}
		
	
	/**
     * Registers the theme sidebars (widget areas)   
     */
    public function register_sidebars() {  

        // Main Sidebar
         register_sidebar( array (
            'name'          => esc_html__( 'Blog Page Sidebar', 'engage' ),
            'id'            => 'blog_page_sidebar',
            'description'   => esc_html__( 'Widgets in this area are used in the default sidebar. This sidebar will be used for your standard blog posts.', 'engage' ),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );      

    }
	
	public function search_filter( $query ) {
		
		if ( $query -> is_search ) {
			$query -> set( 'post_type', 'post' );
		}
		
		return $query;
	}

	
	
	/**
     * Include Redux Framework for Options Panel
     */
	private function theme_options_panel() {		
		
		// ReduxFramework		
		if ( !class_exists( 'ReduxFramework' ) && file_exists( get_template_directory() .'/framework/redux-framework/ReduxCore/framework.php' ) ) {		
			
			require_once( get_template_directory() .'/framework/redux-framework/ReduxCore/framework.php' );			
		}		
		
		if ( !isset( $engage_theme_settings ) && file_exists( get_template_directory() .'/framework/options/options.php' ) ) {
		
			require_once( get_template_directory() .'/framework/options/options.php' );
			
		}
	}
	
	
	/**
     * Include Meta Box for theme metaboxes
     */
	private function theme_meta_box() {
		
		// Re-define meta box path and URL
		define( 'RWMB_URL', trailingslashit( get_template_directory_uri() . '/framework/meta-box' ) );
		define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/framework/meta-box' ) );
		
		if( ! defined( 'ENGAGE_META_PREFIX' )) {
			define( 'ENGAGE_META_PREFIX', 'engage_meta_' );
		}
		
		require_once( get_template_directory() . '/framework/meta-box/meta-box.php' );	
		
		require_once( get_template_directory() . '/framework/functions/meta-boxes.php' );
	}
	
	
	/**
     * Theme functions     
     */
	private function theme_functions() {
		
		require_once( get_template_directory() .'/framework/functions/required-plugins.php' );			
		
		require_once( get_template_directory() .'/framework/menu-icons/menu-icons.php' );
		
		require_once( get_template_directory() .'/framework/functions/theme-color.php');
		
		require_once( get_template_directory() .'/framework/functions/custom-css.php');
		
		require_once( get_template_directory() .'/framework/functions/theme-options.php');				
		
		require_once( get_template_directory() .'/framework/blog/blog-functions.php');	
		
	}
	
	 /**
     * Theme Classes     
     */
    private function theme_classes() {
		
		require_once( get_template_directory() .'/framework/classes/tgm-plugin-activation/class-tgm-plugin-activation.php' );				
				
		//Register Custom Navigation Walker
		require_once( get_template_directory() .'/framework/classes/menu-walker.php');	
	}   
	
}

//Run the theme setup class 
$engage_theme_setup = new Engage_Theme_Setup();