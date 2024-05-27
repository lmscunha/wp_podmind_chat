<?php

/*
 * Plugin Name: Podmind Chat
 * Version: 0.0.1
 */

function render_embedded_html_header()
{
  echo '<script src="https://podmind.voxgig.com/widget/voxgig-podmind-ask.js"></script>';
}

function render_embedded_html_body()
{
  return '<voxgig-podmind-ask apikey="" debug="true"></voxgig-podmind-ask>';
}

add_action('wp_head', 'render_embedded_html_header');

add_action('the_content', 'render_embedded_html_body');
