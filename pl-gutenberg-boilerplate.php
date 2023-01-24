<?php
/**
 * Plugin URI: https://pluginslab.com
 * Plugin Name: Pluginslab Gutenberg Boilerplate Example Plugin
 * Description: This is a demo plugin to serve as a starting point for building a Gutenberg Blocks and non-blocks projects.
 * Version: 0.3.0
 * Author: Pluginslab
 * Author URI: https://pluginslab.com
 * Text Domain: pl-gutenberg-boilerplate
 * Requires PHP: 8.0
 *
 * @package PL\Blocks_Example
 */

defined( 'ABSPATH' ) || exit;


/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @return void
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function register_block() {
	register_block_type( __DIR__ . '/build' );
}

add_action( 'init', 'register_block' );

/**
 * Enqueue assets for this example.
 *
 * @param string $hook The current admin page.
 */
function load_custom_scripts( $hook ) {

	// Load the required WordPress packages.

	// Automatically load dependencies and version.
	$asset_file = include plugin_dir_path( __FILE__ ) . 'build/frontend.asset.php';

	// Enqueue CSS dependencies.
	foreach ( $asset_file['dependencies'] as $style ) {
		wp_enqueue_style( $style );
	}

	// Load our app.js.
	wp_register_script(
		'frontend',
		plugins_url( 'build/frontend.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true,
	);
	wp_enqueue_script( 'frontend' );

	// Load our style.css.
	wp_register_style(
		'frontend',
		plugins_url( 'style.css', __FILE__ ),
		null,
		$asset_file['version'],
	);
	wp_enqueue_style( 'frontend' );
}
add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );
