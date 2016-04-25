<?php 
/**
 * 404.php
 *
 * The template for displaying 404 pages (Not Found).
 */
?>

<?php get_header(); ?>

	<?php 
			$background_style = '';
			$page_image = engage_get_theme_option( 'page-404-image' );
			$page_image = $page_image['url'];
					
			if( $page_image ) {
				$background_style = 'background-image: url(' . esc_url( $page_image ) .')';			
			}
			else {
				$background_style = 'background-color: '.engage_get_theme_option( 'page-bg-color' );			
			}
			
	?>		
			

	 <div class="error404-wrap bg-overlay vc_row-o-full-height" style="<?php echo esc_attr( $background_style ); ?>" >
            <div class="error404">
                <h1><?php echo esc_html( engage_get_theme_option( 'page-title' ) ); ?></h1>
				<small><?php echo esc_html( engage_get_theme_option( 'page-subtitle' ) ); ?></small>
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn bordered-white opacity-effect"><?php esc_html_e( 'BACK TO HOME', 'engage' ); ?></a>
            </div>
    </div>

<?php get_footer(); ?>