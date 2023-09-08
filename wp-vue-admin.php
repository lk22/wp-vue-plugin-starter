<?php 
	/*
	 * Plugin Name: WordPress Vue JS plugin
	 * Version: 0.0.1
	 **/

	 // Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	// enqueue scripts for vite dev server
	function wp_vue_admin_enqueue_scripts() {
		// enqueue app script
		wp_enqueue_script( 'wp-vue-admin-app', plugin_dir_url( __FILE__ ) . "client/dist/js/app.js", array(), '0.0.1', true );
		wp_enqueue_script( 'wp-vue-admin-vendor-chunks', plugin_dir_url( __FILE__ ) . "client/dist/js/chunk-vendors.js", array(), '0.0.1', true );
		// wp_enqueue_style('wp-vue-admin-style', plugin_dir_url( __FILE__ ) . "client/dist/css/app.css", array(), '0.0.1', 'all');
		wp_register_style('wp-vue-admin-style', plugin_dir_url( __FILE__ ) . "client/dist/css/app.css", array(), '0.0.1', 'all');
	}

	add_action( 'wp_enqueue_scripts', 'wp_vue_admin_enqueue_scripts' );

	function wp_vue_shortcode() {
		return '<div id="app"></div>';
	}
	add_shortcode( 'wpvue', 'wp_vue_shortcode');
?>
