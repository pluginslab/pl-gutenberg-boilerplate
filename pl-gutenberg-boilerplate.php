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
