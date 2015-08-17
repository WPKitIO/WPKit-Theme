<?php

/* REMOVE - Admin Bar CSS
-------------------------------------------------- */
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

/* REMOVE - Meta Head Tags
-------------------------------------------------- */
remove_action('wp_head', 'rsd_link'); // Weblog Client Link
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer Manifest Link
remove_action('wp_head', 'wp_shortlink_wp_head'); // WordPress Page/Post Shortlinks
remove_action('wp_head', 'print_emoji_detection_script', 7 ); // WordPress Emojis
remove_action('wp_print_styles', 'print_emoji_styles' ); // WordPress Emojis
remove_action('wp_head', 'wp_generator'); // WordPress Generator
add_filter('the_generator', function() { return ''; }); // WordPress Generator

/* Add Theme CSS to WP Content Editor
-------------------------------------------------- */
add_action( 'admin_init', function() {
  add_editor_style( get_template_directory_uri() . '/library/styles/main.css' );
});

remove_filter( 'the_content', 'wpautop' ); // Disable <p> tags auto adding in Editor
