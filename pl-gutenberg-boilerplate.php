<?php
/**
 * Plugin URI: https://pluginslab.com
 * Plugin Name: Pluginslab Gutenberg Boilerplate Example Plugin
 * Description: This is a demo plugin to exemplify how WooCommerce Blocks cart and checkout blocks can be implemented and adopted.
 * Version: 0.2.0
 * Author: Pluginslab
 * Author URI: https://pluginslab.com
 * Text Domain: pl-gutenberg-boilerplate
 * Requires PHP: 7.4
 * WC requires at least: 5.6
 * WC tested up to: 5.6
 *
 * @package PL\Woo_Blocks_Example
 * @internal This file is only used when running as a feature plugin.
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

	if ( ! class_exists( 'WooCommerce' ) ) {
		add_action( 'admin_notices', 'pl_gutenberg_boilerplate_example_woocommerce_deactivated' );
		return;
	}
	if ( ! class_exists( 'Automattic\WooCommerce\Blocks\Package' ) && ! version_compare( \Automattic\WooCommerce\Blocks\Package::get_version(), '4.6.0', '>' ) ) {
		add_action( 'admin_notices', 'pl_gutenberg_boilerplate_example_woocommerce_blocks_deactivated' );
		return;
	}

	require_once 'includes/class-gutenberg-boilerplate-example.php';
	new Pluginslab\Gutenberg_Boilerplate_Example();

}

/**
 * WooCommerce Deactivated Notice.
 */
function pl_gutenberg_boilerplate_example_woocommerce_deactivated() {
	/* translators: %s: WooCommerce link */
	echo '<div class="error"><p>' . sprintf( esc_html__( 'Pluginslab Gutenberg Boilerplate Example Plugin requires %s to be installed and active.', 'pl-gutenberg-boilerplate' ), '<a href="https://woocommerce.com/" target="_blank">WooCommerce</a>' ) . '</p></div>';
}

/**
 * WooCommerce Blocks Deactivated Notice.
 */
function pl_gutenberg_boilerplate_example_woocommerce_blocks_deactivated() {
	/* translators: %s: WooCommerce Blocks link */
	echo '<div class="error"><p>' . sprintf( esc_html__( 'Pluginslab Gutenberg Boilerplate Example Plugin requires %s to be installed (v4.7 or higher) and active', 'pl-gutenberg-boilerplate' ), '<a href="https://woocommerce.com/products/woocommerce-gutenberg-products-block/" target="_blank">WooCommerce Blocks</a>' ) . '</p></div>';
}
