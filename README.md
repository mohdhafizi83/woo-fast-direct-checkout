# Woo Fast Direct Checkout

Boost conversion rates by skipping the cart page and sending customers directly to checkout.

## What it does

- **Skip the cart** — after clicking "Buy Now", customers land straight on the checkout page (fewer steps = fewer abandoned carts).
- **Buy Now button** — replaces the default "Add to Cart" label on single product and archive pages.
- **Zero-config** — activate and it works.

## Requirements

| | Minimum | Tested |
|---|---|---|
| WordPress | 6.0 | 6.9 |
| WooCommerce | 8.0 | 8.7 |
| PHP | 7.4 | 8.4 |

## Install

1. Download the latest release zip (or clone into `wp-content/plugins/`).
2. Activate via **Plugins → Installed Plugins**.
3. Done — no settings page needed.

## How it works

Hooks into two WooCommerce filters:

- `woocommerce_add_to_cart_redirect` → forces redirect to `wc_get_checkout_url()`
- `woocommerce_product_single_add_to_cart_text` / `woocommerce_product_add_to_cart_text` → "Buy Now"

Dependency-safe: checks `class_exists('WooCommerce')` on `plugins_loaded` before registering anything, so it degrades gracefully if WooCommerce is inactive.

## License

GPL v2 or later.
