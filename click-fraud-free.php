<?php

/**
 * Plugin Name: ClickFraudFree – Click Fraud Protection
 * Plugin URI: https://clickfraudfree.com
 * Description: Adds ClickFraudFree click fraud protection code to your website.
 * Version: 1.0.0
 * Requires at least: 5.6
 * Requires PHP: 5.6
 * Author: ClickFraudFree
 * Author URI: https://clickfraudfree.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: click-fraud-free
 */

if (!defined('ABSPATH')) exit;

// Plugin constants
define('CFF_PATH', plugin_dir_path(__FILE__));
define('CFF_URL', plugin_dir_url(__FILE__));

// Load frontend tracker
require_once CFF_PATH . 'public/tracking.php';

// Load admin UI only in dashboard
if (is_admin()) {
  require_once CFF_PATH . 'admin/dashboard.php';
}
