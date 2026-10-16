# Getting started — Woo Fast Direct Checkout

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

## Verify it works

Open any product, click **Buy Now** — you should land directly on the checkout page.

For troubleshooting, see the FAQ in the [README](../README.md#faq).
