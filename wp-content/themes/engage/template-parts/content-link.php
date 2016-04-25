<?php 
	$link_url	= get_post_meta( get_the_ID(), ENGAGE_META_PREFIX . 'post_link_url', true );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php echo get_template_part( 'template-parts/meta-date' ); ?>
	
	<div class="entry-wrap">
		<div class="entry"> 
			<div class="entry-link">
			<?php if( $link_url ) { ?>				
				<h3>
					<i class="ion-link"></i>
					<a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php the_title(); ?></a>
				</h3>				
			<?php } 
			else { ?>
				<h3>
					<a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a>
				</h3>		
			<?php }	?>
			</div>
			
			<?php echo get_template_part( 'template-parts/meta' ); ?>
			
			<div class="entry-content">				
				<?php engage_get_post_content(); ?>
			</div>   
			
			<?php engage_get_readmore_btn(); ?>
				
		</div>
	</div>
</article>