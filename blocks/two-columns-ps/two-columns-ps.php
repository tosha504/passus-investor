<?php

/**
 * Two Columns PS Block template.
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
$items = get_field('items'); ?>
<!-- two-columns-ps start -->
<section class="two-columns-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php if (!empty($items) && count($items) > 0) {
    ?>
      <div class="two-columns-ps__items">
        <?php foreach ($items as $key => $item) { ?>
          <div class="two-columns-ps__items__item">
            <?php echo my_custom_attachment_image($item['icon']);
            echo !empty($item['title']) ? "<p class='two-columns-ps__items__item_title'>{$item['title']}</p>" : "";
            echo  !empty($item['descr']) ? "<p class='two-columns-ps__items__item_descr'>{$item['descr']}</p>" : "";
            ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- two-columns-ps end -->