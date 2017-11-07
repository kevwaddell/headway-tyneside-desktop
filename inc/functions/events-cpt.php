<?php
add_action( 'init', 'register_cpt_hw_events' );

function register_cpt_hw_events() {

	$labels = array(
		'name' => __( 'Events', 'hw_events' ),
		'singular_name' => __( 'Event', 'hw_events' ),
		'add_new' => __( 'Add New', 'hw_events' ),
		'add_new_item' => __( 'Add New Event', 'hw_events' ),
		'edit_item' => __( 'Edit Event', 'hw_events' ),
		'new_item' => __( 'New Event', 'hw_events' ),
		'view_item' => __( 'View Event', 'hw_events' ),
		'search_items' => __( 'Search Events', 'hw_events' ),
		'not_found' => __( 'No events found', 'hw_events' ),
		'not_found_in_trash' => __( 'No events found in Trash', 'hw_events' ),
		'parent_item_colon' => __( 'Parent Event:', 'hw_events' ),
		'menu_name' => __( 'Events', 'hw_events' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'Headway Events post type',
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-calendar-alt',
		'show_in_nav_menus' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => 'diary',
		'query_var' => 'event',
		'can_export' => true,
		'rewrite' => array(
			'slug' => 'event',
			'with_front' => false,
			'feeds' => true,
			'pages' => true
		),
		'capability_type' => 'post'
	);

	register_post_type( 'hw_events', $args );
}	
?>