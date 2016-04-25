<?php
/**
 * single.php
 *
 * The template for displaying single posts.
 */
?>

<?php get_header(); ?>

<div class="vc_row " >
	<div class="container">
		<?php while( have_posts() ) { 
			
				the_post(); 
	
				$post_id		 = get_the_ID();
				$portfolio_type  = get_post_meta( $post_id, 'portfolio_type', true );				
				$client_name	 = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'client_name', true );
				$project_date	 = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'project_date', true );				
				$new_entries	 = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'newentry_groupbox', true );
				$thumb_title	 = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'thumb_title', true );
				$thumb_sub_title = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'thumb_sub_title', true );
				
				$button_text	 = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'button_text', true );
				$button_url		 = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'button_url', true );

			?>

				<div class="cbp-l-project-title"><?php echo esc_html( $thumb_title ); ?></div>
				<div class="cbp-l-project-subtitle"><?php echo esc_html( $thumb_sub_title ); ?></div>

				<?php if ( $portfolio_type == 'image' ) { 
					$images_array = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'image_url', false );
					$image_src = wp_get_attachment_image_src( $images_array[0], '' );
					$image_src = $image_src[0];
				?>						
					<img src="<?php echo esc_url( $image_src ); ?>" alt="img">								
				<?php }
				 elseif ( $portfolio_type == 'gallery' ) { 
					 $images_array  = get_post_meta( $post_id, ENGAGE_META_PREFIX . 'gallery_images', false );
					 ?>			
					<div class="cbp-slider">
						<ul class="cbp-slider-wrap">
							<?php foreach ( $images_array as $image ) { 
								$image_src = wp_get_attachment_image_src( $image, '' );
								$image_src = $image_src[0];
							?>
								<li class="cbp-slider-item">
									<img src="<?php echo esc_url( $image_src ); ?>" alt="img">
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php }			
				 elseif ( $portfolio_type == 'video' ) {
					 $video_url	= get_post_meta( $post_id, ENGAGE_META_PREFIX . 'video_url', true );						 
					 ?>
					 <div class="cbp-misc-video">
					 <?php echo wp_oembed_get( esc_url( $video_url ) ); ?>				
					 </div>
				<?php			
				 }  
				elseif ( $portfolio_type == 'audio' ) {	
					$audio_url	= get_post_meta( $post_id, ENGAGE_META_PREFIX . 'audio_url', true );				
					?>			
					<div class="cbp-misc-video">
						<?php echo wp_oembed_get( esc_url( $audio_url ) ); ?>				
					</div>
				<?php } ?>		

				<div class="cbp-l-project-container">
					<div class="cbp-l-project-desc">
						<div class="cbp-l-project-desc-title"><span><?php esc_html_e( 'Project Description', 'engage' ); ?></span></div>
						<div class="cbp-l-project-desc-text"><?php the_content(); ?></div>
					</div>
					<div class="cbp-l-project-details">
						<div class="cbp-l-project-details-title"><span><?php esc_html_e( 'Project Details', 'engage' ); ?></span></div>

						<ul class="cbp-l-project-details-list">
							<li><strong><?php esc_html_e( 'Client', 'engage' ); ?></strong><?php echo esc_html( $client_name ); ?></li>
							<li><strong><?php esc_html_e( 'Date', 'engage' ); ?></strong><?php echo esc_html( $project_date ); ?></li>

							<?php							
								
								foreach ( $new_entries as $new_entry ) {

									$new_title	= !empty( $new_entry[ ENGAGE_META_PREFIX . 'new_title' ] )  ? $new_entry[ ENGAGE_META_PREFIX . 'new_title' ]  : '';						
									$new_value	= !empty( $new_entry[ ENGAGE_META_PREFIX . 'new_value' ] )  ? $new_entry[ ENGAGE_META_PREFIX . 'new_value' ]  : '';			
									
									if ( $new_title != '' ) {
							?>
									<li><strong><?php echo esc_html( $new_title ); ?></strong><?php echo esc_html( $new_value ); ?></li>
							<?php
									}
								}
							?>

							<li><strong><?php esc_html_e( 'Categories', 'engage' ); ?></strong><?php echo get_the_term_list( $post_id, 'portfolio_category', '', ', ', '' ); ?></li>
						</ul>
						
						<?php if ( !empty( $button_text ) ) { ?>
							<a href="<?php echo esc_url( $button_url ); ?>" target="_blank" class="cbp-l-project-details-visit btn bordered-black slide-effect-theme"><?php echo esc_html( $button_text ); ?></a>
						<?php } ?>
					</div>
				</div>

				<?php						
							
							$terms		= ''; //initialize variables
							$terms		= get_the_terms( $post_id, 'portfolio_category' );
							$term_list  = '';

							if ( is_array( $terms ) ) {
								foreach ( $terms as $term ) {
									$term_list .= $term->slug;
									$term_list .= ', ';
								}
							}

							$related_loop = new WP_Query( 
								array(
									'post_type'				=> 'portfolio',
									'posts_per_page'		=> 3,
									'post__not_in'			=> array( $post_id ),
									'order'					=> 'DESC',
									'orderby'				=> 'date',
									'portfolio_category'	=> $term_list,
									'post_status'			=> 'publish' 
							)	);

					?>
				<div class="cbp-l-project-container">
					<div class="cbp-l-project-related">
						<div class="cbp-l-project-desc-title"><span><?php esc_html_e( 'Related Projects', 'engage' ); ?></span></div>

					<?php if ( $related_loop -> have_posts() ) { ?>
								<ul class="cbp-l-project-related-wrap">				
									<?php
									while ( $related_loop -> have_posts() ) {
										
										$related_loop -> the_post();

										$relatedpost_id		= get_the_ID();									
										$portfolio_type		= get_post_meta( $relatedpost_id, 'portfolio_type', true );
										$portfolio_open_in	= get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'portfolio_open', true );
										$thumb_title		= get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'thumb_title', true );
										$thumb_subtitle		= get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'thumb_sub_title', true );

										if ( has_post_thumbnail( $relatedpost_id ) && wp_get_attachment_url( get_post_thumbnail_id( $post_id ) ) !='' ) {	
											$thumbnail_image = get_the_post_thumbnail( $relatedpost_id );
										}
										else {				
											$thumbnail_image = '<img src="http://placehold.it/500x300"  alt="placeholder500x300">';
										}

										if ( empty( $thumb_title ) ) {			
											$thumb_title = get_the_title();
										}			

										$open_in_class = 'cbp-lightbox';

										if ( $portfolio_open_in == 'page' ) {
											$open_in_class = 'cbp-singlePage';
										}

										$portfolio_url = '';
										$image_gallery = '';

										if ( $portfolio_type == 'video' && $portfolio_open_in == 'lightbox' ) {

											$video = get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'video_url', true );						
											$portfolio_url = $video;				

										}
										elseif( $portfolio_type == 'audio' && $portfolio_open_in == 'lightbox' ) {

											$audio = get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'audio_url', true );						
											$portfolio_url = 'https://w.soundcloud.com/player/?url='.$audio.'&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true';				

										}
										elseif( $portfolio_type == 'image' && $portfolio_open_in == 'lightbox' ) {

											$images_array = get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'image_url', false );	

											foreach ( $images_array as $image ) {
												$portfolio_url = wp_get_attachment_image_src( $image, '' );		
												$portfolio_url = $portfolio_url[0];		
											}

										}
										elseif( $portfolio_type == 'gallery' && $portfolio_open_in == 'lightbox' ) {				

											$image_gallery = 'data-cbp-lightbox="gallary"';
											$images_array = get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'gallery_images', false );		

											foreach ( $images_array as $image ) {
												$portfolio_url = wp_get_attachment_image_src( $image, '' );
												$portfolio_url = $portfolio_url[0];		
											}
										}
										else {

											$portfolio_url = 'portfolio/'. str_replace( " ", "-", basename( get_permalink() ) );

										} 
										?>
										<li class="cbp-l-project-related-item">
											<a class="cbp-l-project-related-link <?php echo esc_attr( $open_in_class ); ?>" data-title="<?php echo esc_attr( $thumb_title ); ?>"  href="<?php echo esc_url( $portfolio_url ); ?>" <?php echo esc_attr( $image_gallery ); ?>>										
												<?php echo $thumbnail_image; ?>	
												<div class="cbp-l-project-related-title font2"><?php echo  esc_html( $thumb_title ); ?></div>
											</a>
											<?php

											if( $portfolio_type == 'gallery' && $portfolio_open_in == 'lightbox' ) {

												$images_array = get_post_meta( $relatedpost_id, ENGAGE_META_PREFIX . 'gallery_images', false );		
												foreach ( $images_array as $image ) {
													$image_url = wp_get_attachment_image_src( $image, '' ); 
													$image_url = $image_url[0]; 
												?>
													<a href="<?php echo esc_url( $image_url ); ?>" class="cbp-lightbox" data-cbp-lightbox="gallary"></a>
												<?php	
												}
											} 
											?>
										</li>
									<?php	
									} ?>	
								</ul>
					<?php } ?>
					</div>
				</div>

			<?php
			}			
		?>
	</div>
</div>
<?php get_footer(); ?>