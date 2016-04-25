<?php
/* 
 *	Blog Related Functions
 */

	
function engage_comment( $comment, $args, $depth ) {
	
	$GLOBALS['comment'] = $comment;
	?>

	<li id="comment-<?php comment_ID(); ?>">	
		<div class="comment">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 70 ); ?>
			</div><!-- .comment-author -->
			
			<div class="comment-details clearfix">
				<header class="comment-meta"> 
					<cite class="fn">
						<?php comment_author_link(); ?>				
					</cite>
					<span class="comment-date"> 
						<?php
							// Comment date
							printf( '<time datetime="%1$s">%2$s</time>',
							get_comment_time( 'c' ),
							sprintf( esc_html_x( '%1$s at %2$s', '1: date, 2: time', 'engage' ), get_comment_date(), get_comment_time() )
						); ?>
					</span><!-- .comment-date -->
				</header><!-- .comment-author -->

				<div class="comment-content">						
					<p>
						<?php comment_text(); ?>
					</p>
					<div class="comment-reply">
						<?php
						// Comment reply link
						comment_reply_link( array_merge( $args, array(
							'reply_text'	=> esc_html__( 'REPLY', 'engage' ),
							'depth'			=> $depth,
							'max_depth'		=> $args['max_depth']
						) ) ); ?>
					</div>							
				</div><!-- .comment-content -->							
			</div><!-- .comment-details -->
		</div><!-- .comment -->
	<?php		
}

function engage_get_post_title() {
		
	if( is_single() ) {
		the_title();
	} 
	else {		
		echo '<a href="' . esc_url( get_the_permalink() ) . '" rel="bookmark">' . get_the_title() . '</a>';
	}
}
	
function engage_get_post_content() {
		
	global $engage_theme_settings;
		
	$allow_tags = $engage_theme_settings[ 'blog-tag' ];
		
	if( is_search() || is_home() || is_category() || is_archive() || is_author() || is_date() ) {
		the_excerpt();
	} 
	else {		
		the_content();
		
		wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'engage' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		
		if ( $allow_tags == 1 ) {
			echo '<div class="tags">'. esc_html__( 'TAGS: ', 'engage') . get_the_tag_list('', ', ').'</div>';
		}
	}
}


	
function engage_get_readmore_btn() {
		
	if( is_search() || is_home() || is_category() || is_archive() || is_author() || is_date() ) {
		echo '<a href="'. get_the_permalink() .'" class="btn bordered-black slide-effect-theme read-more">'. esc_html__( 'READ MORE', 'engage') .'</a>';
	}		
}

function engage_is_comment_open() {
	
	global $post;
	
	if( 'open' == $post -> comment_status ) {
		return true;
	}
	
	return false;
}

function engage_is_paginated() {
	
    global $wp_query;
	
    if ( $wp_query->max_num_pages > 1 ) {
        return true;
    } else {
        return false;
    }
}

function engage_is_blog() {   
	
    if ( is_home() || is_single() || is_search() || is_category() || is_archive() || is_author() || is_date() ) {
        return true;
    } else {
        return false;
    }
}
