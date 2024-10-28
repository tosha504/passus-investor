<?php

/**
 * Qualified Team PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='qualified-team-ps__description'>" . get_field('description') . "</div>" : "";
$items = get_field('items'); ?>
<!-- qualified-team-ps start -->
<section class="qualified-team-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo  $description;
    if (!empty($items) && count($items) > 0) { ?>
      <div class="qualified-team-ps__items">
        <?php foreach ($items as $key => $item) { ?>
          <div class="qualified-team-ps__items_item">
            <?php echo my_custom_attachment_image($item['icon']);
            echo !empty($item['descr']) ? "<p class='qualified-team-ps__items_item-descr'>{$item['descr']}</p>" : "";
            ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- qualified-team-ps end -->