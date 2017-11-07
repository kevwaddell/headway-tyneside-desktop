<?php
// INITIATE THEME SCRIPTS
include (TEMPLATEPATH . '/inc/functions/theme-init.php');	

//ACF FUNCTIONS
include (TEMPLATEPATH . '/inc/functions/afc-options-functions.php');

//THEME SUPPORT
add_theme_support('html5', array('search-form'));
add_theme_support( 'post-thumbnails', array( 'page', 'post') );
add_post_type_support( 'page', 'excerpt' );
add_filter('show_admin_bar', '__return_false');

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'top_bar_menu' => 'Top Bar navigation',
		  'social_links_menu' => 'Social links'
		)
	);
}

?>