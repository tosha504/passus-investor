<?php

/**
 * Service Highlights Block PS Block template.
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
$elements = get_field('elements'); ?>
<!-- service-highlights-block-ps start -->
<section class="service-highlights-block-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight); ?>
    <?php if (!empty($elements) && count($elements) > 0) { ?>
      <div class="service-highlights-block-ps__items">
        <?php foreach ($elements as $key => $element) { ?>
          <div class="service-highlights-block-ps__items_item item">
            <?php echo $element['element']; ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- service-highlights-block-ps end -->