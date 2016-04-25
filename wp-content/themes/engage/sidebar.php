<?php if ( is_active_sidebar( 'blog_page_sidebar' ) ) : ?>
	<aside class="vc_col-sm-12 vc_col-md-3">
		<div class="sidebar">
		<?php dynamic_sidebar( 'blog_page_sidebar' ); ?>
		</div>
	</aside> <!-- end sidebar -->
<?php endif; ?>