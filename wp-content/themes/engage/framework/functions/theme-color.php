<?php 

function engage_HEXLighter( $col, $ratio ) {
	
	$col = engage_rgb( $col );
	$lighter = Array(
		255-(255-$col[0])/$ratio,
		255-(255-$col[1])/$ratio,
		255-(255-$col[2])/$ratio
	);
	
	return "#".sprintf("%02X%02X%02X", $lighter[0], $lighter[1], $lighter[2]);
}

function engage_rgb($col) {
	return Array(hexdec(substr($col, 1, 2)), hexdec(substr($col, 3, 2)), hexdec(substr($col, 5, 2)));
}
	
	
function engage_theme_colors() {

	global $engage_theme_settings;
	
	/* Theme color */
	$theme_color = $engage_theme_settings['theme-color'];
		
	
	echo '<style type="text/css">';
	
		echo '
		.theme-color {
			color: '. $theme_color .' !important;
		}';
		
		echo '
		.theme-bg-color {
			background-color: '. $theme_color .' !important;
		}';
		
		echo '
		.theme-border-color {
			border-color: '. $theme_color .' !important;
		}';	
	
	
	/* ============================================================
	   PRELOADER COLOR
	/* ============================================================*/
	
		echo '
		.spinner > div{
			background-color: '. $theme_color .';
		}
		';
		
	/* ============================================================
	   VIDEO POPUP BG COLOR
	/* ============================================================*/
	
		echo '
		.video-modal-popup .video-modal-close {
			background-color: '. $theme_color .';
		}
		';

	/* ============================================================
	   FOOTER
	/* ============================================================*/
		
		echo '
		.footer-dark a:hover {
			color: '. $theme_color .';
		}
		';
		
		echo '
		.footer-light .footer-socials a{
			color: '. $theme_color .';
		}
		';
		echo '
		.footer-light .copyright a:hover{
			color: '. $theme_color .';
		}
		';

		
	/* ============================================================
	   BUTTON STYLES
	/* ============================================================*/
	
		echo '
		.btn.solid{
			background: '. $theme_color .';
			border-color: '. $theme_color .';
			color: #fff;
		}			
		';
		
		echo '
		.btn.solid:hover {
			border-color: '. engage_HEXLighter( $theme_color, 1.1 ) .';
		}
		';
		
		echo '
		.btn.solid:after {
			background-color: '. engage_HEXLighter( $theme_color, 1.1 ) .';
		}
		';
		
		echo '
		.btn.slide-effect-theme:hover,.btn.slide-effect-theme:hover {
			border-color: '. $theme_color .';
		}
		';	
		
		echo '
		.btn.slide-effect-theme:after,.btn.slide-effect-theme:after {
			background-color: '. $theme_color .';
		}
		';
		echo '
		.wpcf7-form p input[type="submit"]{
			background-color: '. $theme_color .';
		}
		';
		
	/* ============================================================
	   Icon Box
	/* ============================================================*/		
			
		echo '
		.icon-box.ibox-hover-effect:hover {
			background: '. $theme_color .';
		}
		';		
		
	/* ============================================================
	   Team
	/* ============================================================*/
		
		echo '
		.team.has-popup .team-image:hover .plus:hover {
			border-color: '. $theme_color .';	
			color: '. $theme_color .';	
		}
		';		
		
		echo '
		.member-details .mfp-close {			
			background: '. $theme_color .';	
		}
		';
		
		echo '
		.member-details .mCS-dark-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
			background-color: '. $theme_color .';	
		}
		';
	
	/* ============================================================
	   Testimonial 
	/* ============================================================*/
		
		echo '
		.testimonials.square-dot .owl-dots .owl-dot.active span{
			background: '. $theme_color .';	
		}
		';
		
		echo '
		.testimonials.circle-dot .owl-dots .owl-dot.active span{
			border-color: '. $theme_color .';
		}
		';
		
	/* ============================================================
	   Tweeter 
	/* ============================================================*/
		
		echo '
		.tweets > div .owl-controls .owl-dots .owl-dot.active span {
			border-color: '. $theme_color .';
		}
		';
		
	/* ============================================================
	   Form
	/* ============================================================*/
		
		echo '
		.wpcf7-form p .wpcf7-submit {
			background: '. $theme_color .';
		}
		';
		
	/* ============================================================
	   NAVIGATION
	/* ============================================================*/
		
		echo '
		#header:not(.left-icon-header) #primary-menu li a:hover,#header:not(.left-icon-header) #primary-menu li.current-menu-item a, #header.side-header #primary-menu ul li:hover > a, #primary-menu > ul > li.has-child:hover > a {
			color: '. $theme_color . ' !important;
		}
		';
		echo '
		#header.left-icon-header #primary-menu ul li:hover, #header.left-icon-header #primary-menu ul li a i + span, #header.left-icon-header #primary-menu ul li a.active{
			background-color: '. $theme_color . ' ;
		}
		';
		echo '
		#primary-menu > ul > li > ul{
			border-color: '. $theme_color . ' !important;
		}
		';
		//current-menu-ancestor
	
		
	/* ============================================================
	   BLOG
	/* ============================================================*/
		
		echo '
		.entry .entry-title h3:hover a {
			color: '. $theme_color .';
		}
		';
		
		echo '
		.siderbar .widget-tagcloud .tagcloud a:hover {
			border-color:  '. $theme_color .';
		}
		';		
		
	/* ============================================================
	   TABS & ACCORDION
	/* ============================================================*/
		
		echo '
		.vc_tta-tabs.vc_tta-style-classic .vc_tta-tab.vc_active > a .vc_tta-title-text{
			color: '. $theme_color .';
		}
		';
		
		echo '
		.vc_tta-tabs.vc_tta-style-classic .vc_tta-tab.vc_active:after{
			background-color: '. $theme_color .';
		}
		';
		
		echo '
		.vc_tta-accordion .vc_active  a .vc_tta-title-text, .vc_tta-accordion .vc_active  a:hover .vc_tta-title-text, .vc_tta-accordion .vc_tta-icon{
			color: '. $theme_color .';
		}
		';
		
	/* ============================================================
	   ADDRESS BLOCK
	/* ============================================================*/
		
		echo '
		.contact-info-wrap.has-icon.has-icon-bg i{ 
			background-color: '. $theme_color .';
		}
		';
		
		
	echo '</style>';
	
}

add_action( 'wp_head', 'engage_theme_colors' );

?>