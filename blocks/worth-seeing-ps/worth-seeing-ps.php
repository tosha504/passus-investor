<?php

/**
 * Worth Seeing PS Block template.
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
$items = get_field('items'); ?>
<!-- worth-seeing-ps start -->
<section class="worth-seeing-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    if (!empty($items) && count($items) > 0) { ?>
      <ul class="worth-seeing-ps__items">
        <?php foreach ($items as $key => $item) { ?>
          <li class="worth-seeing-ps__items_item item">
            <div class="item__image">
              <?php echo my_custom_attachment_image($item['image']); ?>
            </div>
            <div class="item__content">
              <div class="item__content_attr">
                <p class="date"><?php echo $item['date']; ?></p>
                <p class="time"><?php echo $item['time']; ?></p>
              </div>
              <p class="item__title">
                <?php echo $item['title']; ?>
              </p>
              <div class="item__description">
                <?php echo $item['description']; ?>
              </div>
              <div class="item__play">
                <a href="#" class="button button__primary" aria-label="Play wideo"><?php _e('Watch', 'passus'); ?></a>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- worth-seeing-ps end -->