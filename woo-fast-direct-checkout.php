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
    exit; // Keselamatan: Halang akses terus
}

// 1. Fungsi Utama: Semak kebergantungan (Dependency Check) sebelum memuatkan kod
function wfdc_initialize_plugin() {
    // KESELAMATAN: Jika kelas WooCommerce tiada (bermaksud ia tidak aktif), hentikan proses
    if ( ! class_exists( 'WooCommerce' ) ) {
        return;
    }

    // 2. Cangkuk untuk menukar URL pengalihan (redirect)
    add_filter( 'woocommerce_add_to_cart_redirect', 'wfdc_skip_cart_redirect' );

    // 3. Cangkuk untuk menukar teks butang dari "Add to Cart" kepada "Buy Now"
    add_filter( 'woocommerce_product_single_add_to_cart_text', 'wfdc_custom_button_text' ); // Halaman produk tunggal
    add_filter( 'woocommerce_product_add_to_cart_text', 'wfdc_custom_button_text' );        // Halaman arkib/katalog
}
// Jalan pada plugins_loaded untuk pastikan WooCommerce dah sedia
add_action( 'plugins_loaded', 'wfdc_initialize_plugin' );

// Fungsi Pengalihan (Redirect)
function wfdc_skip_cart_redirect( $url ) {
    // Memaksa WordPress mengalihkan pengguna ke URL Checkout WooCommerce yang sah
    return wc_get_checkout_url();
}

// Fungsi Penukaran Teks Butang
function wfdc_custom_button_text() {
    // KESELAMATAN: esc_html__ memastikan output rentetan (string) selamat dan boleh diterjemah
    return esc_html__( 'Buy Now', 'woo-fast-direct-checkout' );
}