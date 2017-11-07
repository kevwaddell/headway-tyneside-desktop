<?php
function event_category() {

	$labels = array(
		'name'                       => _x( 'Organise Events', 'Taxonomy General Name', 'hw_tyneside' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'hw_tyneside' ),
		'menu_name'                  => __( 'Organise', 'hw_tyneside' ),
		'all_items'                  => __( 'All Items', 'hw_tyneside' ),
		'parent_item'                => __( 'Parent Item', 'hw_tyneside' ),
		'parent_item_colon'          => __( 'Parent Item:', 'hw_tyneside' ),
		'new_item_name'              => __( 'New Item Name', 'hw_tyneside' ),
		'add_new_item'               => __( 'Add New Item', 'hw_tyneside' ),
		'edit_item'                  => __( 'Edit Item', 'hw_tyneside' ),
		'update_item'                => __( 'Update Item', 'hw_tyneside' ),
		'view_item'                  => __( 'View Item', 'hw_tyneside' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'hw_tyneside' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'hw_tyneside' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'hw_tyneside' ),
		'popular_items'              => __( 'Popular Items', 'hw_tyneside' ),
		'search_items'               => __( 'Search Items', 'hw_tyneside' ),
		'not_found'                  => __( 'Not Found', 'hw_tyneside' ),
		'no_terms'                   => __( 'No items', 'hw_tyneside' ),
		'items_list'                 => __( 'Items list', 'hw_tyneside' ),
		'items_list_navigation'      => __( 'Items list navigation', 'hw_tyneside' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'query_var'                  => 'event_cat',
		'rewrite'                    => false,
		'show_in_rest'               => false,
	);
	register_taxonomy( 'event_category', array( 'hw_events' ), $args );

}
add_action( 'init', 'event_category', 0 );	
?>