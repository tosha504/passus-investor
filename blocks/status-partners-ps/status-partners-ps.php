<?php

/**
 * Technology Status PS Block template.
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
$description = !empty(get_field('description_partners')) ? "<div class='status-partners-ps__description'>" . get_field('description_partners') . "</div>" : "";
$partners = get_field('partners_item'); ?>
<!-- status-partners-ps start -->
<section class="status-partners-ps" <?php echo $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo  $description;
    if (!empty($partners) && count($partners) > 0) {      ?>
      <div class="status-partners-ps__items">
        <?php foreach ($partners as $key => $partner) { ?>
          <div class="status-partners-ps__items_item item">
            <?php echo my_custom_attachment_image($partner['partner_logo']);
            echo !empty($partner['partner_name']) ? "<p>{$partner['partner_name']}</p>" : ""; ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- status-partners-ps end -->