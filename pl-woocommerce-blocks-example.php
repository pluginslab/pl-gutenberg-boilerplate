<?php
/**
 * Plugin URI: https://pluginslab.com
 * Plugin Name: Pluginslab WooCommerce Blocks Example Plugin
 * Description: This is a demo plugin to exemplify how WooCommerce Blocks cart and checkout blocks can be implemented and adopted.
 * Version: 1.0
 * Author: Pluginslab
 * Author URI: https://pluginslab.com
 * Text Domain: pl-woocommerce-blocks-example
 * Requires PHP: 7.4
 * WC requires at least: 5.6
 * WC tested up to: 5.6
 *
 * @package PL\Woo_Blocks_Example
 * @internal This file is only used when running as a feature plugin.
 */

defined( 'ABSPATH' ) || exit;

use \Pluginslab\WooCommerce_Blocks_Example;

// Plugin init hook.
add_action( 'plugins_loaded', 'pl_woocommerce_blocks_example_init' );

/**
 * Initialize plugin.
 */
function pl_woocommerce_blocks_example_init() {
	load_plugin_textdomain( 'pl-woocommerce-blocks-example', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	if ( ! class_exists( 'WooCommerce' ) ) {
		add_action( 'admin_notices', 'pl_woocommerce_blocks_example_woocommerce_deactivated' );
		return;
	}
	if ( ! class_exists( 'Automattic\WooCommerce\Blocks\Package' ) && ! version_compare( \Automattic\WooCommerce\Blocks\Package::get_version(), '4.6.0', '>' ) ) {
		add_action( 'admin_notices', 'pl_woocommerce_blocks_example_woocommerce_blocks_deactivated' );
		return;
	}

	require_once 'includes/class-woocommerce-blocks-example.php';

	global $pl_woocommerce_blocks_example;
	$pl_woocommerce_blocks_example = new WooCommerce_Blocks_Example();
}

/**
 * WooCommerce Deactivated Notice.
 */
function pl_woocommerce_blocks_example_woocommerce_deactivated() {
	/* translators: %s: WooCommerce link */
	echo '<div class="error"><p>' . sprintf( esc_html__( 'Pluginslab WooCommerce Blocks Example Plugin requires %s to be installed and active.', 'pl-woocommerce-blocks-example' ), '<a href="https://woocommerce.com/" target="_blank">WooCommerce</a>' ) . '</p></div>';
}

/**
 * WooCommerce Blocks Deactivated Notice.
 */
function pl_woocommerce_blocks_example_woocommerce_blocks_deactivated() {
	/* translators: %s: WooCommerce Blocks link */
	echo '<div class="error"><p>' . sprintf( esc_html__( 'Pluginslab WooCommerce Blocks Example Plugin requires %s to be installed (v4.7 or higher) and active', 'pl-woocommerce-blocks-example' ), '<a href="https://woocommerce.com/products/woocommerce-gutenberg-products-block/" target="_blank">WooCommerce Blocks</a>' ) . '</p></div>';
}
