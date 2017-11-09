<?php
/*
*  AFC Google API
*/

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBxwGDnoY_lkMkbEaQPlHfryaZ-eq_CtRM');
}

add_action('acf/init', 'my_acf_init');
?>