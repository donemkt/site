
<div class="entry-meta-left-wrap">
	<div class="entry-meta-left clearfix">
		<div class="entry-date"><?php esc_html( the_time( 'd' ) ); ?><small class="text-uppercase"><?php esc_html( the_time( 'M Y' ) ); ?></small></div>
		
		<?php if ( engage_get_theme_option( 'blog-social-sharing' ) == 1 ) { ?>
			<ul class="share">
				<li><a id="facebook_share<?php the_ID(); ?>" title="Share post on facebook" href="#" class="page_social"><i class="fa fa-facebook"></i></a></li>
				<li><a id="twitter_share<?php the_ID(); ?>" title="Share post on twitter" href="#" class="page_social"><i class="fa fa-twitter"></i></a></li>
				<li><a id="linkedin_share<?php the_ID(); ?>" title="Share post on linkedin" href="#" class="page_social"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		<?php } ?>
	</div>
</div>