<?php

/**
 * Slider PS Block template.
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
$slider = get_field('sldier'); ?>
<!-- slider-ps start -->
<section class="slider-ps" <?php echo $anchor; ?>>
  <div class="container">
    <?php if (!empty($slider) && count($slider) > 0) { ?>
      <div class="slider-ps__slider">
        <?php foreach ($slider as $key => $slide) { ?>
          <div class="slider-ps__slider_slide"><?php echo $slide['content']; ?></div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- slider-ps end -->