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

## Installation

### Upload the zip (recommended)

1. Download `woo-fast-direct-checkout.zip` from the [latest release](https://github.com/mohdhafizi83/woo-fast-direct-checkout/releases/latest).
2. In wp-admin, go to **Plugins → Add New → Upload Plugin**.
3. Choose the zip, click **Install Now**, then **Activate**.

### WP-CLI

```bash
wp plugin install --activate https://github.com/mohdhafizi83/woo-fast-direct-checkout/releases/latest/download/woo-fast-direct-checkout.zip
```

### Manual

Copy the plugin folder into `wp-content/plugins/` and activate it under **Plugins → Installed Plugins**.

## Configuration

**Zero-config** — there is no settings page. Activating the plugin:

- Replaces "Add to Cart" with **"Buy Now"** on single product and archive pages.
- Redirects customers straight to the checkout page after adding a product.

To restore the default behaviour, simply deactivate the plugin — nothing is written to the database.

## FAQ

**Can customers still view the cart page?**
Yes. The cart page still works normally — only the post-add-to-cart redirect and the button label change.

**What if another plugin also hooks the add-to-cart redirect?**
Both hook `woocommerce_add_to_cart_redirect`; whichever registers with the later priority wins. Add your own hook with a higher priority to override.

**Does it work with variable products?**
Yes — the redirect fires after the product is added to cart, which is the same flow variable products use.

**Will it break if WooCommerce is deactivated?**
No. The plugin checks `class_exists('WooCommerce')` on `plugins_loaded` and registers nothing if WooCommerce is missing.

## Screenshots

Screenshot (add your own)

_No screenshot assets are committed to this repository yet. Drop an image at `assets/screenshots/screenshot-1.png` and replace this placeholder — do not hotlink invented screenshots._

## License

GPL v2 or later.
