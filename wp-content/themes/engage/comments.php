
<?php

if ( post_password_required() )
	return;
	
 if ( have_comments() ) { ?>
	
	<div class="comments comments-bg-color">
		<h3 class="comments-title"><?php esc_html_e( 'COMMENTS', 'engage' ); ?></h3>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'		 => 'ol',
					'callback'   => 'engage_comment',					
				) );
			?>				
		</ol>	
	</div>
	
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'engage' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( wp_kses(__( '<i class="ion-ios-arrow-back"></i> OLDER COMMENTS', 'engage' ) , array( 'i' => array( 'class' => array() ) ))); ?></div>
		<div class="nav-next"><?php next_comments_link( wp_kses(__( 'NEWER COMMENTS <i class="ion-ios-arrow-forward"></i>', 'engage' ) , array( 'i' => array( 'class' => array() ) ))) ; ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>
	
<?php } ?>


			<?php 
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true' required" : '' );
			
			$comment_args = array(				
				'title_reply'			=> esc_html__( 'LEAVE A COMMENT', 'engage' ),
				'class_submit'			=> 'submit theme-bg-color',
				'comment_notes_before'	=> '',
				'fields'				=> array(
												'author' =>
												  '<div class="vc_col-sm-4 no-padding-left"><p class="comment-form-author">' .												  
												  '<input id="author" placeholder="'.esc_attr( 'Name (required)', 'engage' ).'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
												  '" size="30"' . $aria_req . ' /></p></div>',

												'email' =>
												  '<div class="vc_col-sm-4"><p class="comment-form-email">' .												  
												  '<input id="email" placeholder="'.esc_attr( 'Email (required)', 'engage' ).'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
												  '" size="30"' . $aria_req . ' /></p></div>',

												'url' =>
												  '<div class="vc_col-sm-4 no-padding-right"><p class="comment-form-url">' .
												  '<input id="url" placeholder="'.esc_attr( 'Website', 'engage' ).'" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
												  '" size="30" /></p></div>',
											),
				'comment_field'			=>	'<div ><p class="comment-form-comment"><textarea id="comment" placeholder="'.esc_attr( 'Your Comment (required)', 'engage' ).'" name="comment" cols="60" rows="8" aria-required="true"></textarea></p></div>',
			) ?>			
						
			<?php if( engage_is_comment_open() ) { ?>
				<?php comment_form( $comment_args ); ?>
			<?php } ?>
		


