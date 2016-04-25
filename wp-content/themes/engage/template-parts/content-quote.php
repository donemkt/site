<?php 
	$quote_author	= get_post_meta( get_the_ID(), ENGAGE_META_PREFIX . 'post_quote_author', true );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php echo get_template_part( 'template-parts/meta-date' ); ?>
	
	<div class="entry-wrap">
		<div class="entry"> 
			<div class="entry-quote">
                <i class="ion-quote"></i>
                <?php the_content(); ?>
				<?php if( $quote_author ) { ?>
					<small class="quote-author"><?php echo esc_html( $quote_author ); ?></small>
				<?php } ?>
            </div>		
			
			<?php echo get_template_part( 'template-parts/meta' ); ?>	
			
			<?php engage_get_readmore_btn(); ?>
			
		</div>
	</div>
</article>