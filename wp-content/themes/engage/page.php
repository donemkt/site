<?php 
/**
 * page.php
 *
 * The template for displaying all pages.
 */	
?>


<?php get_header(); ?>

		<div class="main-page">
		<?php while( have_posts() ) : the_post(); ?>
	
			<?php the_content(); ?>

			<?php comments_template(); ?>	

		<?php endwhile; ?>	
		</div>

<?php get_footer(); ?>