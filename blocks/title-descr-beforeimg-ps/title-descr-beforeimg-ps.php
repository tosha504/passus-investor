<?php

/**
 * Title Descr Before Img PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='title-descr-before-img-ps__description'>" . get_field('description') . "</div>" : "";
$image_before_switch = get_field('image_before_switch');
$image_before = get_field('image_before');; ?>
<!-- title-descr-before-img-ps start -->
<section class="title-descr-before-img-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php
    if (!empty($image_before) &&  $image_before_switch === true) {
      echo "<div class='title-descr-before-img-ps__image-before'>";
      echo my_custom_attachment_image($image_before);
      echo "</div>";
    }
    show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo $description; ?>
  </div>
</section><!-- title-descr-before-img-ps end -->