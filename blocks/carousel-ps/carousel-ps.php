<?php

/**
 * Carousel PS Block template.
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
$image_before = get_field('image_before');
$description = !empty(get_field('description')) ? "<div class='carousel-ps__description'>" . get_field('description') . "</div>" : "";
$items = get_field('items');
$image_before_switch = get_field('image_before_switch');
$image_before = get_field('image_before'); ?>
<!-- carousel-ps start -->
<section class="carousel-ps" <?php echo $anchor; ?>>
  <div class="container">
    <?php if (!empty($image_before) &&  $image_before_switch === true) {
      echo "<div class='carousel-ps__image-before'>";
      echo my_custom_attachment_image($image_before);
      echo "</div>";
    }
    show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo $description;
    if (!empty($items) && count($items) > 0) { ?>
      <ul class="carousel-ps__slider">
        <?php foreach ($items as $key => $item) { ?>
          <li class="carousel-ps__slider_item"><?php echo $item['item']; ?></li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- carousel-ps end -->