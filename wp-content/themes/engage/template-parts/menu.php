
<?php

$menu_type = engage_get_theme_option( 'header-style' );
$header_transparent_switch = engage_get_theme_option( 'header-transparent' );
$header_transparent_border_switch = engage_get_theme_option( 'header-transparent-border' );

$header_fullwidth_switch = engage_get_theme_option( 'header-fullwidth' );

$header_logo = engage_get_theme_option( 'header-logo' );
$header_logo = $header_logo[ 'url' ];

$header_logo_overlay = engage_get_theme_option( 'header-logo-overlay' );
$header_logo_overlay = $header_logo_overlay[ 'url' ];

$header_class = "";

if ( $menu_type == 'header-menu-top' ) {
	
	$header_class = "top-header";
	
	if( $header_transparent_switch == 1 && !engage_is_blog() ) {
		$header_class .= " overlayHeader transparent";
		
		if( $header_transparent_border_switch == 1 ) {
			$header_class .= " has-border";
		}		
	}
	else {
		$header_class .= " light";
	}
	
	
	if( $header_fullwidth_switch == 1 ) {
		$header_class .= " fullwidth-header";
	}
	
} elseif ( $menu_type == 'header-menu-push' ) {
	
	$header_class = "side-header side-header-right-push";
	
} elseif ( $menu_type == 'header-menu-icon' ) {
	
	$header_class = "left-icon-header";
	
} elseif ( $menu_type == 'header-menu-side' ) {
	
	$header_class = "side-header";		
}

if ( has_nav_menu( 'main_menu' ) ) {
	?>	
		<?php if ( $menu_type == 'header-menu-push' ) { ?>
			<div id="push-menu-trigger" > <span></span> <span></span> <span></span> </div>
		<?php } ?>
		<header id="header" class="<?php echo esc_attr( $header_class ); ?>">
			<div id="header-wrap">
                <div class="container clearfix">
                    <div id="mobile-menu-trigger"><span></span><span></span><span></span></div>
                    <div id="logo" class="clearfix">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="standard-logo" data-dark-logo="<?php echo esc_attr( $header_logo_overlay ); ?>">
							<?php if ( $header_logo && !engage_is_blog() ) { ?>
								<img src="<?php echo esc_url( $header_logo ); ?>" alt="logo" />
							<?php }
							else { ?>							
								<img src="<?php echo esc_url( $header_logo_overlay ); ?>" alt="logo" />
							<?php } ?>
						</a>
                    </div>			
					<?php 
						wp_nav_menu(
							array(
									'theme_location'	=>	'main_menu',	
									'container'			=>  'nav',
									'container_id'		=>	'primary-menu',		
									'walker'			=>	new Engage_Menu_Walker()
								 )
						);
					?>
					<?php if ( ( $menu_type == 'header-menu-push' || $menu_type == 'header-menu-side' ) && engage_get_theme_option( 'header-social' ) == 1 ) { ?>
						<ul id="socials" class="clearfix" >
							<li><a href="<?php echo esc_url( engage_get_theme_option( 'url-facebook' ) ); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo esc_url( engage_get_theme_option( 'url-twitter' ) ); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo esc_url( engage_get_theme_option( 'url-google-plus' ) ); ?>"><i class="fa fa-google"></i></a></li>
						</ul>
					<?php } ?>
				</div>
            </div>
        </header>
<?php } 
else { ?>
    <p class="err-msg">
		<?php esc_html_e( 'Make your menu at Appearance => Menus ', 'engage' ); ?>
    </p>
<?php } ?>


