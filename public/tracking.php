<?php
if (!defined('ABSPATH')) exit;

/**
 * Inject tracking code into frontend
 */
add_action('wp_footer', 'cff_add_tracker');

function cff_add_tracker()
{

  if (is_admin()) return;

  $clientnum = (int) get_option('cff_client_number');
  if (!$clientnum) return;

  $refererurl = isset($_SERVER['HTTP_REFERER'])
    ? esc_url_raw($_SERVER['HTTP_REFERER'])
    : '';

  $ipaddress = !empty($_SERVER['HTTP_X_FORWARDED_FOR'])
    ? sanitize_text_field($_SERVER['HTTP_X_FORWARDED_FOR'])
    : sanitize_text_field($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');

  echo '<iframe
        src="https://clickfraudfree.com/0_record_ipblocking.php?clientnum=' . esc_attr($clientnum) . '&ipaddress=' . esc_attr($ipaddress) . '&refererurl=' . esc_attr($refererurl) . '"
        width="0"
        height="0"
        style="display:none;border:0;"
    ></iframe>';
}
