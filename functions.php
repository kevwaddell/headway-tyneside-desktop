<?php
// INITIATE THEME SCRIPTS
include (TEMPLATEPATH . '/inc/functions/theme-init.php');	

//ACF FUNCTIONS
include (TEMPLATEPATH . '/inc/functions/afc-options-functions.php');
include (TEMPLATEPATH . '/inc/functions/afc-map-api.php');

//CUSTOM POST TYPES
include (TEMPLATEPATH . '/inc/functions/events-cpt.php');

//CUSTOM TAXONOMIES
include (TEMPLATEPATH . '/inc/functions/event-tax.php');

//THEME SUPPORT
add_theme_support('html5', array('search-form'));
add_theme_support( 'post-thumbnails', array( 'page', 'post') );
add_post_type_support( 'page', 'excerpt' );
add_filter('show_admin_bar', '__return_false');
add_theme_support( 'title-tag');

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

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu list-unstyled" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 

function pagination_bar() {
    global $wp_query;
    
    //echo '<pre>';print_r($wp_query);echo '</pre>';
 
    $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

?>