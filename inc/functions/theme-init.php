<?php
if (!is_admin()) {

	function headway_scripts() {
	
		global $post;
		// Load stylesheets.
		//wp_enqueue_style( 'print-styles', get_template_directory_uri().'/_/css/print-styles.css', null, filemtime( get_template_directory().'/_/css/print-styles.css' ), 'print' );
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/assets/css/styles.css', null, filemtime( get_stylesheet_directory().'/assets/css/styles.css' ), 'screen' );
		
		// Load JS
		$functions_dep = array(
		'jquery',
		'bootstrap-min'
		);
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4', false);
	    wp_enqueue_script( 'modernizr-min', get_template_directory_uri() .'/assets/js/min/modernizr-min.js', array(), '2.8.3', false );
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() .'/assets/js/min/bootstrap-min.js', array('jquery'), '3.3.7', false );
		wp_enqueue_script( 'functions', get_stylesheet_directory_uri() .'/assets/js/min/functions-min.js', $functions_dep, filemtime( get_stylesheet_directory().'/assets/js/functions.js' ), true );
		
	}
	add_action( 'wp_enqueue_scripts', 'headway_scripts' );
}
?>