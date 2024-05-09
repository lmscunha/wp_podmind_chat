<?php

/*
 * Plugin Name: Podmind Chat
 * Version: 0.0.1
 */

// To avoid direct plugin access
if (!defined('ABSPATH')) {
  exit;
};

// WIP get properties from settings menu
// function embedded_element_settings()
// {
//   $title = get_option('embedded_element_title');
//   return array(
//     'title' => $title,
//   );
// }

function render_embedded_html_element()
{
  // $title = embedded_element_settings()['title'];

  $html = '<voxgig-podmind-ask apikey="123">
      <div>
        <div class="voxgig-podmind">
          <h3>Podmind Chat</h3>
          <p>Some text example</p>
          <form id="query-form" class="">
            <input id="query-form-input" name="query" type="text">
            <button>Ask</button>
          </form>
          <small style="font-size:10px;margin:2px 8px;font-style:italic">Podcast AI Chatbot - <a
              href="https://voxgig.com">powered by Voxgig</a> <a href="https://voxgig.com"><img
                style="height:12px; position:relative; top:4px"
                src="data:image/png;base64,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"></a></small>
          <div class="questions">
          </div>
        </div>
      </div>
<style>
/* https://www.joshwcomeau.com/css/custom-css-reset/ */
*, *::before, *::after {
  box-sizing: border-box;
}
body {
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}
img, picture, video, canvas, svg {
  x-display: block;
  max-width: 100%;
}
input, button, textarea, select {
  font: inherit;
}
p, h1, h2, h3, h4, h5, h6 {
  overflow-wrap: break-word;
}
/*
* {
  margin: 0;
}
:host {
  isolation: isolate;
}
*/


.voxgig-podmind {
    --vxg-c0l: #f2307a;
    --vxg-c0d: #a421d3;

    --vxg-c2l: #F6F4F9;
    --vxg-c2d: #cccccc;

    --vxg-c3d: #a421d388;
    --vxg-c3m: #00C6D8;
    --vxg-c3l: #11E5EF;

    --vxg-c4l: #0796D6;
    --vxg-c4d: #066189;
    
    x-width: 80%;
    x-margin: 5% auto;
    border: 1px solid var(--vxg-c2d);
    border-radius: 16px;
    padding: 16px;
    background-color: var(--vxg-c2l);
    font-family: tahoma;
}

.voxgig-podmind h3 {
    margin-top: 0;
    color: var(--vxg-c0d);
}

.voxgig-podmind form {
    margin: 0;
    display: flex;
    font-family: tahoma;
}

.voxgig-podmind input {
    padding: 8px;
    border-radius: 8px;
    font-size: 24px;
    display: block;
    flex-grow:2;
    margin-right: 16px;
    border: 1px solid var(--vxg-c4d);
    background-color: var(--vxg-c3d);
    color: var(--vxg-c2l);
    font-family: andale mono;
}

.voxgig-podmind .thinking input {
    animation: thinking 2s infinite;
    background: linear-gradient(to right, var(--vxg-c3d),var(--vxg-c2d), var(--vxg-c3d));
    background-size: 200% 100%;
}

.voxgig-podmind button {
    font-family: tahoma;
    padding: 8px;
    border-radius: 8px;
    font-size: 24px;
    display: block;
    border: 3px solid var(--vxg-c4d);
    color: var(--vxg-c4d);
    background-color: var(--vxg-c2l);
}

.voxgig-podmind button:hover {
    cursor: pointer;
    background-color: var(--vxg-c4l);
    color: var(--vxg-c2l);
}

.voxgig-podmind button:active {
    cursor: pointer;
    background-color: var(--vxg-c2l);
    color: var(--vxg-c4l);
}


.voxgig-podmind .audio button {
    margin-right: 4px;
    font-size: 16px;
    font-weight: bold;
    line-height: 20px;
    padding: 2px;
    width: 28px;
    border: 1px solid var(--vxg-c4d);
    border-radius: 4px;
}


.voxgig-podmind .questions {
    margin: 16px 0px;
    display: flex;
    flex-wrap: wrap;
}

.voxgig-podmind .questions p {
    cursor: pointer;
    margin: 0;
    font-size: 14px;
    flex-basis: 50%;
    padding: 2px;
}

.voxgig-podmind .questions p:hover {
    color: var(--vxg-c0l);
}


@keyframes pulse {
    0% { opacity: 90%; transform: scale(1); }
    50% { opacity: 100%; transform: scale(1.2); }
    100% { opacity: 90%; transform: scale(1); }
}

.sound-symbol {
    display: inline-block;
    font-size: 20px;
    opacity: 0%;
}

.sound-symbol-playing {
    animation: pulse 1s infinite;
}

@keyframes thinking {
    0% {
        background-position: 100% 0;
    }
    50% {
        background-position: 0 0;
    }
    100% {
        background-position: 100% 0;
    }

}
</style>
  </voxgig-podmind-ask>';
  return $html;
}

add_action('the_content', 'render_embedded_html_element');
