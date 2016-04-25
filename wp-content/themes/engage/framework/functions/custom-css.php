<?php 

function engage_custom_css() {
	
	global $engage_theme_settings;

	echo '<style type="text/css">';
	if( !empty( $engage_theme_settings[ 'custom-css' ] ) ) {
		echo esc_html( $engage_theme_settings[ 'custom-css' ] );
	}
	echo '</style>';

}

add_action( 'wp_head', 'engage_custom_css' );

?>