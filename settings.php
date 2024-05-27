<?php

function podmind_chat_option_page()
{
  add_options_page(
    'Podmind Chat Configuration',
    'Podmind Chat Config',
    'manage_options',
    'podmind-chat-config',
    'podmind_chat_options'
  );
}

function podmind_chat_settings()
{
  register_setting('podmind-chat-settings-group', 'podmind_apikey');

  add_settings_section(
    'podmind-chat-section',
    'Podmind Chat Settings',
    null,
    'podmind-chat-settings-group'
  );

  add_settings_field(
    'podmind_apikey',
    'Podmind API Key',
    'podmind_api_key_field',
    'podmind-chat-settings-group',
    'podmind-chat-section'
  );
}

function podmind_api_key_field()
{
  $podmind_api_key = esc_attr(get_option('podmind_apikey'));
  echo '<input type="text" style="width: 35rem" name="podmind_apikey" value="' . $podmind_api_key . '" />';
}

function podmind_chat_options()
{
?>
  <div class="wrap">
    <h2>Podmind Chat</h2>
    <form method="post" action="options.php">
      <?php
      settings_fields('podmind-chat-settings-group');
      do_settings_sections('podmind-chat-settings-group');
      submit_button();
      ?>
    </form>
  </div>
<?php
}

add_action('admin_menu', 'podmind_chat_option_page');

add_action('admin_init', 'podmind_chat_settings');
