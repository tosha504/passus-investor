<?php

/**
 * Bg Content Newsletter PS Block template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or its parent block.
 */

// Load values and assign defaults.

$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
$tag = get_field('tag');
$text_title = get_field('text_title');
$class_title = get_field('class_title');
$font_weight = get_field('font-weight');
$description = !empty(get_field('description')) ? "<div>" . get_field('description') . "</div>" : "";
$background = get_field('background') ? 'style="background-image: url(' . wp_get_attachment_url(get_field('background')) . ')"' : '';;
$shortcode_form = !empty(get_field('shortcode_form')) ? "<div class='bg-content-newsletter-ps__newsletter'>" . get_field('shortcode_form') . "</div>" : ""; ?>
<!-- bg-content-newsletter-ps start -->
<section class="bg-content-newsletter-ps"
  <?php echo  $anchor;
  echo $background; ?>>
  <div class="container">
    <div class="bg-content-newsletter-ps__left">
      <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
      echo $description;
      echo $shortcode_form; ?>
    </div>
  </div>
</section><!-- bg-content-newsletter-ps end -->