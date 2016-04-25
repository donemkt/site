<?php 
/* 
 * Return value for key
 *  
 */
	
function engage_get_theme_option( $key ) {

	global $engage_theme_settings;
	
	if ( isset( $engage_theme_settings[ $key ] ) ) {
		return $engage_theme_settings[ $key ];
	}
	
	return null;
}

?>