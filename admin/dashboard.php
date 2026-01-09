<?php
if (!defined('ABSPATH')) exit;

/**
 * Register admin menu
 */
add_action('admin_menu', 'cff_register_admin_menu');

function cff_register_admin_menu()
{
  add_options_page(
    'ClickFraudFree',
    'ClickFraudFree',
    'manage_options',
    'click-fraud-free',
    'cff_admin_page_contents'
  );
}

/**
 * Admin page UI
 */
function cff_admin_page_contents()
{

  // Save settings
  if (
    isset($_POST['cff_code']) &&
    isset($_POST['cff_nonce']) &&
    wp_verify_nonce($_POST['cff_nonce'], 'cff_save_settings')
  ) {
    update_option(
      'cff_client_number',
      sanitize_text_field($_POST['cff_code'])
    );
  }

  $client_number = get_option('cff_client_number', '');
?>
  <div class="wrap">
    <h1>ClickFraudFree Settings</h1>

    <form method="POST">
      <table class="form-table">
        <tr>
          <th scope="row">Integration Code</th>
          <td>
            <input
              type="text"
              name="cff_code"
              value="<?php echo esc_attr($client_number); ?>"
              class="regular-text"
              placeholder="Enter your Client ID">
          </td>
        </tr>
      </table>

      <?php
      wp_nonce_field('cff_save_settings', 'cff_nonce');
      submit_button('Save Settings');
      ?>
    </form>
  </div>
<?php
}
