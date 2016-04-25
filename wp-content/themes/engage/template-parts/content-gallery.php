<?php 
	
	$images_array  = get_post_meta( get_the_ID() , ENGAGE_META_PREFIX . 'post_gallery_images', false );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php echo get_template_part( 'template-parts/meta-date' ); ?>
	
	<div class="entry-wrap">
		<div class="entry"> 
			<?php if( $images_array ) { ?>
				<div class="entry-image">
					<?php if ( !post_password_required() ) { ?>
						<div class="golo-carousel entry-img-gallary" data-nav="true" data-navspeed="1000" data-autoplayspeed="1000" data-dots="true" data-dotsspeed="1000" data-autoplay="true">
							<?php foreach ( $images_array as $image ) { 
								$image_src = wp_get_attachment_image_src( $image,'' );
								$image_src = $image_src[0];
							?>
								<div class="entry-image">								
									<img class="img-responsive post-media" alt="media" src="<?php echo esc_url( $image_src ); ?>">				
								</div>
							<?php } ?>
						</div>
					<?php } ?>    				
				</div>
			<?php } ?>
			
			<div class="entry-title">					
				<h3><?php engage_get_post_title(); ?></h3>				
			</div>
			
			<?php echo get_template_part( 'template-parts/meta' ); ?>
			
			<div class="entry-content">				
				<?php engage_get_post_content(); ?>
			</div>   
			
			<?php engage_get_readmore_btn(); ?>
				
		</div>
	</div>
</article>