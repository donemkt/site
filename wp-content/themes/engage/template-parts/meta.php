<ul class="entry-meta">
	<li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="ion-person"></i><?php esc_html( the_author() ); ?></a></li>
	<li><i class="ion-flag"></i><?php the_category( ', ' ); ?></li>
	<li><i class="ion-chatbubble-working"></i><?php comments_popup_link( esc_html__( '0 Comments', 'engage' ), esc_html__( '1 Comment', 'engage' ), esc_html__( '% Comments', 'engage' ), 'comments-link' ); ?></li>
</ul>