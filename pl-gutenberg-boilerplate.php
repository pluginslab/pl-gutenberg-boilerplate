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

use \Pluginslab\PL_Gutenberg_Boilerplate_Example;

// Plugin init hook.
add_action( 'plugins_loaded', 'pl_gutenberg_boilerplate_example_init' );

/**
 * Initialize plugin.
 */
function pl_gutenberg_boilerplate_example_init() {

	load_plugin_textdomain( 'pl-gutenberg-boilerplate', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	define( 'PL_GUTENBERG_BOILERPLATE_EXAMPLE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

	require_once 'includes/class-gutenberg-boilerplate-example.php';
	new Pluginslab\Gutenberg_Boilerplate_Example();

}
