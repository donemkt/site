<?php 
	$audio_url	= get_post_meta( get_the_ID(), ENGAGE_META_PREFIX . 'post_audio_url', true );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php echo get_template_part( 'template-parts/meta-date' ); ?>
	
	<div class="entry-wrap">
		<div class="entry"> 
			<?php if( $audio_url ) { ?>
				<div class="entry-media embed-responsive embed-responsive-16by9">	
					<?php if ( !post_password_required() ) { ?>
						<?php echo wp_oembed_get( esc_url( $audio_url ) ); ?>
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