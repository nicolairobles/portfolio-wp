<?php
/**
 * Plugin Name: Test
 * Description: Ninja Forms data for integration with google sheets
 * Version: 1.0
 * Author: Nielsen
 * Author URI: nielsen.com
 */

add_action( 'rest_api_init', function(){
  // all forms
  // wp-json/wp/v2/ninja-forms
	register_rest_route( 'wp/v2', '/test', array(
		'methods' => WP_REST_Server::READABLE,
		'callback' => 'nlsn_process_ninja_forms_endpoint'
  ));
});


// ********------- NF Forms ----------************* //

// all forms
// wp-json/wp/v2/ninja-forms
function nlsn_process_ninja_forms_endpoint($data) {
	return $_SERVER['REMOTE_ADDR'];
}