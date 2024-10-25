<?php

/**
 * Custom functions
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

function my_custom_attachment_image($attachment_id)
{
  echo wp_get_attachment_image($attachment_id, 'full', false, ['alt' => get_post_meta($attachment_id, '_wp_attachment_image_alt', true), 'loading' => 'lazy', 'title' => get_the_title($attachment_id)]);
}

function show_title_and_btn($tag, $text_title, $class_title = null, $font_weight)
{
  $cls = $class_title !== null ? $class_title : "";

  echo <<<TITLE_AND_BTN
  <div class="title-block-ps {$cls}" style="font-weight:{$font_weight}">
    <$tag>$text_title</$tag>
  </div>
  TITLE_AND_BTN;
}
