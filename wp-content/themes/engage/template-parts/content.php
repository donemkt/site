
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php echo get_template_part( 'template-parts/meta-date' ); ?>
	
	<div class="entry-wrap">
		<div class="entry"> 
			<?php if ( has_post_thumbnail() && !post_password_required() ) { ?>
			<div class="entry-image">				
				<?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive post-media' ) ) ?>				                                 
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