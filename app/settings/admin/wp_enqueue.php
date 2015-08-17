<?php

/** TEST - Enqueue Scripts and Styles
-------------------------------------------------- */
function test_build() {
	/** Main Scripts and Styles **/
	wp_enqueue_style( 'wpkit-styles', get_template_directory_uri() . '/library/styles/main.css', array(), '1.00', 'all' );
  wp_enqueue_script('wpkit-scripts', get_stylesheet_directory_uri() . '/library/scripts/main.js', array(), '1.0', TRUE );
};

/** PRODUCTION - Enqueue Scripts and Styles
-------------------------------------------------- */
function production_build() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/library/styles/main.css', array(), '1.00', 'all' );
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/library/scripts/main.js', array(), '1.0', TRUE );
}
