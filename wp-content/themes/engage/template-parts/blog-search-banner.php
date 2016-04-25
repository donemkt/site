<?php 
	
	$background_style = 'http://placehold.it/1920x700';
	
	$blog_bg_image = engage_get_theme_option( 'blog-bg-image' );
	$blog_bg_image = $blog_bg_image['url'];
	
	if( $blog_bg_image ) {
		$background_style = $blog_bg_image;
	}
?>
<div  class="banner banner-inner" style="background-image: url(<?php echo esc_url( $background_style ); ?>);">
	<div class="container">
		<div class="banner-content">
			<h1><?php
					
					if( is_author() ){
						echo esc_html__( 'All posts by', 'engage' );
					}
					elseif ( is_category() ) {
						echo esc_html__( 'Category', 'engage' );
					}
					elseif ( is_tag () ) {
						echo esc_html__( 'Tag', 'engage' );
					}
					elseif( is_search() ) {
						echo esc_html__( 'Search Results', 'engage' );
					}
					elseif( is_date() ){						
						
                        if ( is_day() ) :
                            echo esc_html__( 'Daily Archives', 'engage' );
                        elseif ( is_month() ) :
                            echo esc_html__( 'Monthly Archives', 'engage' );
                        elseif ( is_year() ) :
                            echo esc_html__( 'Yearly Archives', 'engage' );
                        else :
                            esc_html__( 'Archives', 'engage' );
                        endif;
					}
                    ?>
			</h1>
			<p class="post-date">
				<?php
					
					if( is_author() ){
						echo get_the_author();
					}
					elseif ( is_category() ) {
						echo single_cat_title( '', false );
					}
					elseif ( is_tag () ) {
						echo single_tag_title( '', false );
					}
					elseif( is_search() ) {
						echo get_search_query();
					}
					elseif( is_date() ){						
						
                        if ( is_day() ) :
                            echo get_the_date();
                        elseif ( is_month() ) :
                            echo get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'engage' ) );
                        elseif ( is_year() ) :
                            echo get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'engage' ) );                        
                        endif;
					}
                    ?>
			</p>
		</div>		
	</div>
</div> 