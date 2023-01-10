<?php
function register_custom_nav_menus() {
	register_nav_menus( array(
		'header_menu' => 'Header - Menu',
		'header_menu_right' => 'Header - Menu - Droite',
		'header_menu_mobile' => 'Header - Menu - Mobile',
		'footer_1' => 'Footer 1',
		'footer_2' => 'Footer 2',
		'footer_3' => 'Footer 3',
		'footer_4' => 'Footer 4',
	) );
}
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
