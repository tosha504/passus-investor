<?php

/**
 * Bg Content Img PS Block template.
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
$image = get_field('image'); ?>
<!-- bg-content-img-ps start -->
<section class="bg-content-img-ps"
  <?php echo  $anchor;
  echo $background; ?>>
  <div class="container">
    <div class="bg-content-img-ps__left">
      <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
      echo $description; ?>
    </div>
    <div class="bg-content-img-ps__right">
      <?php if (!empty($image)) {
        echo my_custom_attachment_image($image);
      } ?>
    </div>
  </div>
</section><!-- bg-content-img-ps end -->