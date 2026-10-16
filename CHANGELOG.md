# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2026-10-16

### Added
- Skips the cart page: add-to-cart redirects straight to checkout via `woocommerce_add_to_cart_redirect`.
- "Buy Now" button label on single product and archive pages.
- WooCommerce dependency guard (`class_exists('WooCommerce')`) so it degrades gracefully when WooCommerce is inactive.
- Zero configuration — no settings, no database writes.
