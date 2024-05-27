<?php

/*
 * Plugin Name: Podmind Chat
 * Version: 0.0.1
 */

require 'settings.php';

function render_embedded_html_header()
{
  echo '<script src="https://podmind.voxgig.com/widget/voxgig-podmind-ask.js"></script>';
}

function render_embedded_html_body()
{
  $podmind_api_key = esc_attr(get_option('podmind_apikey'));
  return '<voxgig-podmind-ask apikey="' . $podmind_api_key . '" debug="true"></voxgig-podmind-ask>';
}

add_action('wp_head', 'render_embedded_html_header');

add_action('the_content', 'render_embedded_html_body');
