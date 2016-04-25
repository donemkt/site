<?php 
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<?php 
		
	$menu_type = engage_get_theme_option( 'header-style' );	
	
	$page_wrapper_class = '';	
	if( $menu_type == 'header-menu-icon' && !is_404() ) {
		$page_wrapper_class = "page-wrapper";
	}
	
	$solid_nav_class = '';
	if ( $menu_type == 'header-menu-top' && engage_is_blog() ) {
		$solid_nav_class = 'solid-nav';
	}
	
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">		
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicon Icon -->
	
	<?php
	if ( !function_exists( 'wp_site_icon' ) ) { 
		
		$favicon = engage_get_theme_option( 'favicon' );
		$favicon = $favicon[ 'url' ];
	?>
		<link rel="shortcut icon" href="<?php echo esc_url( $favicon ); ?>">	
	<?php } ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>	
	
	<?php if ( engage_get_theme_option( 'preloader' ) == 1 ) { ?>
		<div id="preloader">
			<div class="preloader-wrap">
				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div> 
		</div>
	<?php } ?>	
	<?php	
			
		if ( !is_404() ) {
			get_template_part( 'template-parts/menu' ); 
		}
	?>		
		

	<section class="content-wrap <?php echo esc_attr( $page_wrapper_class ); ?> <?php echo esc_attr( $solid_nav_class ); ?>">
	

	