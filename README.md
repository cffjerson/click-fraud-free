# ClickFraudFree – Click Fraud Protection for WordPress

ClickFraudFree is a lightweight WordPress plugin that injects the ClickFraudFree tracking and protection code into your website to help detect and prevent click fraud, bot traffic, and invalid visitors in real time.

This plugin is designed to work with the ClickFraudFree service and requires an active ClickFraudFree account.

---

## Features

- Automatic frontend injection of ClickFraudFree protection code
- Protects paid, organic, and direct traffic
- Lightweight and performance-friendly
- No impact on page load speed
- Simple setup via WordPress admin
- Compatible with modern WordPress themes

---

## Requirements

- WordPress 5.6 or higher
- PHP 5.6 or higher
- An active ClickFraudFree account

---

## Installation

### From WordPress Admin
1. Upload the plugin folder to `/wp-content/plugins/`
2. Activate the plugin from the **Plugins** menu
3. Open the ClickFraudFree settings page
4. Enter your ClickFraudFree Client ID
5. Save settings to enable protection

### Manual Installation
1. Clone or download this repository
2. Copy the `click-fraud-free` folder into `/wp-content/plugins/`
3. Activate the plugin in WordPress

---

## How It Works

Once activated, the plugin automatically injects the ClickFraudFree protection script into the public frontend of your website.  
All fraud detection, IP analysis, and blocking logic is handled securely by the ClickFraudFree backend service.

The plugin itself does not store visitor data.


## Development

- Frontend logic lives in `public/`
- Admin UI and settings live in `admin/`
- No tracking logic should be placed directly in the main plugin file
- Uninstall cleanup logic belongs in `uninstall.php`

---

## License

This plugin is licensed under the **GNU General Public License v2.0 or later (GPL-2.0-or-later)**.

You are free to use, modify, and distribute this plugin in accordance with the GPL license.

---

## Support

For questions, documentation, or to create an account, visit:

👉 https://clickfraudfree.com

---

## Disclaimer

ClickFraudFree is a third-party service. This plugin acts as a connector and loader for the ClickFraudFree platform and does not perform fraud detection independently.
