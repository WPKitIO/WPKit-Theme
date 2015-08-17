<?php
/**
 *
 * @package WPKit
 * DO NOT EDIT PRODUCTION FILE!
 *
 **/

 /* WP Kit Setup
 -------------------------------------------------- */
if ( ! function_exists( 'wpkit_setup' ) ) :
	function wpkit_setup() {}
endif;
add_action( 'after_setup_theme', 'wpkit_setup' );

/* Enqueue Scripts and Styles
-------------------------------------------------- */
include_once( 'settings/admin/wp_enqueue.php' );
	add_action( 'wp_enqueue_scripts', 'test_build' ); // Set for TESTING only
	// add_action( 'wp_enqueue_scripts', 'production_build' ); // Set for PRODUCTION only

/* Wordpress Settings
-------------------------------------------------- */
require_once( 'settings/admin/settings.php' );
