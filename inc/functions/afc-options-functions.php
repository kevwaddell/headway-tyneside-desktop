<?php 
/*
*  AFC Options Page
*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

/*
*  Change the Options Page menu to 'Site Options'
*/
 
if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Site options') );
}


if( function_exists('acf_add_options_sub_page') ) {
	
	acf_add_options_sub_page('Global');
	acf_add_options_sub_page('Homepage');
	acf_add_options_sub_page('Team members');
	acf_add_options_sub_page('Newsletters');
	acf_add_options_sub_page('Regular meetings');
	
}
 ?>