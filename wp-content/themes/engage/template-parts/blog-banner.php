<?php 
	
	$background_style = 'http://placehold.it/1920x700';
	
	$blog_bg_image = engage_get_theme_option( 'blog-bg-image' );
	$blog_bg_image = $blog_bg_image['url'];
	
	if( $blog_bg_image ) {
		$background_style = $blog_bg_image;
	}
	
?>
<div  class="banner" style="background-image: url(<?php echo esc_url( $background_style ); ?>);">
	<div class="container">
		<div class="banner-content">
			<h1><small><?php echo esc_html( engage_get_theme_option( 'blog-title' ) ); ?></small>
			<?php echo esc_html( engage_get_theme_option( 'blog-subtitle' ) ); ?></h1>
		</div>
		<div>
			<a href="#post-wrapper" class="btn btn-scroll big bordered-white opacity-effect"><?php esc_html_e( 'READ POST', 'engage' ); ?></a>
		</div>
	</div>
</div> 