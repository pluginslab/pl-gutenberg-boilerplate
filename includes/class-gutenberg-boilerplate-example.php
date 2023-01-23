<?php

namespace Pluginslab;

defined( 'ABSPATH' ) || exit;

/**
 * Main plugin class file.
 */
class Gutenberg_Boilerplate_Example {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_block' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Registers the block using the metadata loaded from the `block.json` file.
	 * Behind the scenes, it registers also all assets so they can be enqueued
	 * through the block editor in the corresponding context.
	 *
	 * @return void
	 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
	 */
	public function register_block() {
		register_block_type( WP_PLUGIN_DIR . '/pl-gutenberg-boilerplate' );
	}

	/**
	 * Enqueueing the frontend script so that React
	 * components can be rendered on the frontend.
	 *
	 * @return void
	 */
	public function enqueue_scripts() {

		/**
		 * This enqueues any React component that you which to add to the frontend, for example
		 * underneath the cart block with content that would react to the cart content.
		 */
		$asset_file_frontend = include plugin_dir_path( __FILE__ ) . '../build/frontend.asset.php';
		wp_enqueue_script(
			'pl-frontend-blocks-example',
			PL_GUETENBERG_BOILERPLATE_EXAMPLE_PLUGIN_URL . 'build/frontend.js',
			$asset_file_frontend['dependencies'],
			$asset_file_frontend['version'],
			false
		);
	}

}
