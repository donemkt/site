<?php 
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>

<?php 

$icons = engage_get_theme_option( 'footer-social-icon' );
$icons = $icons[ 'Footer icons' ];

$footer_style = engage_get_theme_option( 'footer-style' );

?>

</section>

<footer class="<?php echo esc_attr( $footer_style ); ?> clearfix ">
	<h5 class="copyright">
		<?php echo wp_kses( engage_get_theme_option( 'footer-copyright' ), array( 'a' =>  array( 'href' => array(),'target' => array() ) ) );  ?>		
	</h5>
	
	<?php if ( engage_get_theme_option( 'footer-social' ) == 1 && count( $icons ) > 1 ) { ?>
		<ul class="footer-socials clearfix">
			<?php
			foreach ( $icons as $icon => $name ) {
				if ( $icon !== reset( $icons ) ) {
					$url = 'url-' . $icon;
					?>
					<li>
						<a href="<?php echo esc_url( engage_get_theme_option( $url ) ); ?>">
							<i class="fa fa-<?php echo esc_attr( $icon ); ?>"></i>
						</a>
					</li>			
					<?php
				}
			}
			?>
		</ul>
	<?php } ?>
	
</footer>

<?php 

wp_footer(); 

?>
</body>
</html>