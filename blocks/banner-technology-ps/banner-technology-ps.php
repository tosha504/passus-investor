<?php

/**
 * Banner Technology PS Block template.
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
$description = get_field('description');
$logo_partner = get_field('logo_partner'); ?>
<!-- banner-technology-ps start -->
<section class="banner-technology-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <div class="banner-technology-ps__left">
      <?php echo my_custom_attachment_image($logo_partner) ?>
    </div>
    <div class="banner-technology-ps__right">
      <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
      echo $description; ?>
    </div>
  </div>
</section><!-- banner-technology-ps end -->