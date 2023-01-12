<?php
function register_custom_nav_menus() {
	register_nav_menus( array(
		'header_menu_visible' => 'Header - Visible',
		'header_menu_hidden' => 'Header - Caché',
		'footer_1' => 'Footer 1',
		'footer_2' => 'Footer 2',
		'footer_3' => 'Footer 3',
	) );
}
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
