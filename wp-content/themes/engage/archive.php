<?php 
/**
 * archive.php
 *
 * * The template for displaying date archive search results.
 */
 ?>

<?php get_header(); ?>	

<div id="blog" class="section" >
	
<?php get_template_part( 'template-parts/blog-search-banner' ); ?>		
			
	<div class="container">
		<div class="vc_row">
			<div class="vc_col-sm-12  vc_col-md-9">
				<div class="post-wrapper">			
				<?php

					if ( have_posts() ) {
						while( have_posts() ) { 					

							the_post();

							get_template_part( 'template-parts/content', get_post_format() );       				
						}
					}
					else {
							get_template_part( 'template-parts/content', 'none' );       				
					}
				?>	
				</div>							
			</div>																			

			<?php get_sidebar(); ?>
			
		</div>									
	</div>			

	<?php if ( engage_is_paginated() ) { ?>
		<div class="full-width pagination-bg-color">
			<div class="container">
				<div class="pager">
					<?php echo paginate_links( array( 'prev_text' => wp_kses(__('<i class="ion-chevron-left"></i> Prev', 'engage'), array( 'i' => array( 'class' => array() ) )), 'next_text' => wp_kses(__(' Next <i class="ion-chevron-right"></i>', 'engage'),array( 'i' => array( 'class' => array() ) ) ) ) ); ?>
				</div>            
			</div>	
		</div>
	<?php } ?>
	
</div>
<?php get_footer(); ?>