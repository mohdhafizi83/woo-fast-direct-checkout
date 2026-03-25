=== Woo Fast Direct Checkout ===
Contributors: mohdhafizi83
Tags: woocommerce, checkout, direct checkout, skip cart, conversion optimization
Requires at least: 6.0
Tested up to: 6.9.4
Requires PHP: 7.4
WC requires at least: 8.0
WC tested up to: 8.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Dramatically increase your WooCommerce conversion rates by skipping the shopping cart page and sending customers straight to checkout.

== Description ==

Every extra click in an e-commerce funnel loses potential buyers. If you sell single products, digital goods, or run a one-product store, the traditional "Add to Cart" -> "View Cart" -> "Proceed to Checkout" flow is destroying your conversion rate.

**Woo Fast Direct Checkout** is a lightweight, zero-configuration plugin that instantly changes this behavior. 

**What it does:**
1. Instantly redirects customers directly to the WooCommerce Checkout page the moment they click the purchase button.
2. Automatically changes the default "Add to Cart" button text to a more action-oriented "Buy Now" across your entire store.

**Developer & Performance Focused:**
We wrote this plugin using native WooCommerce filters (`woocommerce_add_to_cart_redirect`). It does not use heavy JavaScript redirects or overwrite WooCommerce template files. It adds zero milliseconds to your server load time.

== Installation ==

1. Ensure you have the WooCommerce plugin installed and activated.
2. Upload the `woo-fast-direct-checkout` folder to your `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. **Important Step:** Go to `WooCommerce > Settings > Products > General`. Ensure that "Enable AJAX add to cart buttons on archives" is **unchecked** for the redirect to work perfectly on your shop pages.

== Frequently Asked Questions ==

= Will this crash my site if I deactivate WooCommerce? =
No. The plugin includes a strict dependency check. If WooCommerce is deactivated, our plugin goes to sleep safely without causing any fatal errors.

= Can I change the "Buy Now" text to something else? =
Yes, the text is fully translation-ready. You can use any standard WordPress translation plugin (like Loco Translate) to change the "Buy Now" string to anything you want, such as "Enroll Now" or "Purchase".

== Changelog ==

= 1.0.0 =
* Initial release on the WordPress repository.
* Added native `woocommerce_add_to_cart_redirect` filter.
* Added translation-ready string replacement for cart buttons.
* Implemented `class_exists( 'WooCommerce' )` safety check.