<?php
/**
 * single.php
 *
 * The template for displaying single posts.
 */
?>

<?php get_header(); ?>

<div id="blog" class="section" >
	
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
				
				<?php comments_template(); ?>				
				
			</div>																			

			<?php get_sidebar(); ?>
		</div>
	</div>			

<div class="full-width blog-pager pagination-bg-color">
			<div class="container">
				<div class="vc_row">
					<div class="vc_col-md-12">
						<div class="pager">
						<?php
							
							echo previous_post_link('%link','<div class="previous alignleft"><i class="ion-chevron-left"></i> '.esc_html__('Older', 'engage').'</div>');							
							echo next_post_link('%link','<div class="next alignright">'.esc_html__('Newer', 'engage').' <i class="ion-chevron-right"></i></div>');						
						?>
						</div>	
					</div>
				</div>
			</div>
</div>
</div>
<?php get_footer(); ?>