<?php
/**
 * Plugin Name:       Woo Fast Direct Checkout
 * Plugin URI:        https://github.com/mohdhafizi83/woo-fast-direct-checkout
 * Description:       Boost conversion rates by skipping the cart page and sending customers directly to checkout.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Tested up to:      6.9.4
 * Requires PHP:      7.4
 * WC requires at least: 8.0
 * WC tested up to:   8.7
 * Author:            Mohd Hafizi
 * Author URI:        https://github.com/mohdhafizi83
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       woo-fast-direct-checkout
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Security: block direct access
}

/**
 * 1. Main bootstrap: verify the WooCommerce dependency before loading any code.
 */
function wfdc_initialize_plugin() {
    // Security: if the WooCommerce class is missing (plugin inactive), bail out.
    if ( ! class_exists( 'WooCommerce' ) ) {
        return;
    }

    // 2. Hook to swap the add-to-cart redirect URL.
    add_filter( 'woocommerce_add_to_cart_redirect', 'wfdc_skip_cart_redirect' );

    // 3. Hook to change the button label from "Add to Cart" to "Buy Now".
    add_filter( 'woocommerce_product_single_add_to_cart_text', 'wfdc_custom_button_text' ); // Single product page
    add_filter( 'woocommerce_product_add_to_cart_text', 'wfdc_custom_button_text' );       // Archive/catalog pages
}
// Run on plugins_loaded so WooCommerce is already set up.
add_action( 'plugins_loaded', 'wfdc_initialize_plugin' );

/**
 * Redirect function: force a valid WooCommerce checkout URL.
 */
function wfdc_skip_cart_redirect( $url ) {
    return wc_get_checkout_url();
}

/**
 * Button label swap.
 */
function wfdc_custom_button_text() {
    // Security: esc_html__ keeps the translated string safe.
    return esc_html__( 'Buy Now', 'woo-fast-direct-checkout' );
}
