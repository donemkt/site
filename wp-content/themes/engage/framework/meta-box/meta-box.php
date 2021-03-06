<?php
/*
Plugin Name: Meta Box
Plugin URI: http://metabox.io
Description: Create meta box for editing pages in WordPress. Compatible with custom post types since WP 3.0
Version: 4.5.7
Author: Rilwis
Author URI: http://www.deluxeblogtips.com
License: GPL2+
Text Domain: meta-box
Domain Path: /lang/
*/

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

// Script version, used to add version for scripts and styles
define( 'RWMB_VER', '4.5.7' );

// Define plugin URLs, for fast enqueuing scripts and styles
define( 'RWMB_JS_URL', trailingslashit( RWMB_URL . 'js' ) );
define( 'RWMB_CSS_URL', trailingslashit( RWMB_URL . 'css' ) );

// Plugin paths, for including files
define( 'RWMB_INC_DIR', trailingslashit( RWMB_DIR . 'inc' ) );
define( 'RWMB_FIELDS_DIR', trailingslashit( RWMB_INC_DIR . 'fields' ) );


require_once RWMB_INC_DIR . 'common.php';
require_once RWMB_INC_DIR . 'field.php';
require_once RWMB_INC_DIR . 'field-multiple-values.php';

// Field classes
foreach ( glob( RWMB_FIELDS_DIR . '*.php' ) as $file )
{
	require_once $file;
}

// Meta box class
require_once RWMB_INC_DIR . 'meta-box.php';

// Helper function to retrieve meta value
require_once RWMB_INC_DIR . 'helpers.php';

// Main file
require_once RWMB_INC_DIR . 'init.php';


// Extension Show Hide
require_once 'extension/meta-box-show-hide/meta-box-show-hide.php';


// Extension Conditional Logic
require_once 'extension/meta-box-conditional-logic/meta-box-conditional-logic.php';


// Extension Meta Group Box
require_once 'extension/meta-box-group/meta-box-group.php';

