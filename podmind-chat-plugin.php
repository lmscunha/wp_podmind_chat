<?php

/*
 * Plugin Name: Podmind Chat
 * Version: 0.0.1
 */

// To avoid direct plugin access
if (!defined('ABSPATH')) {
  exit;
};

function render_embedded_html_element()
{
  $html = '<voxgig-podmind-ask apikey="123customAPIKey" debug="true"></voxgig-podmind-ask>';
  return $html;
}

add_action('wp_head', function () {
  echo '<script src="https://podmind.voxgig.com/widget/voxgig-podmind-ask.js"></script>';
});

add_action('the_content', 'render_embedded_html_element');
