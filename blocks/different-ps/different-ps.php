<?php

/**
 * Different PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='different-ps__description'>" . get_field('description') . "</div>" : "";
$title_elements = !empty(get_field('title_elements')) ? "<p class='different-ps__title-elements'>" . get_field('title_elements') . "</p>" : "";
$items = get_field('items'); ?>
<!-- different-ps start -->
<section class="different-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo $description;
    echo $title_elements;
    if (!empty($items) && count($items) > 0) { ?>
      <ul class="different-ps__items">
        <?php foreach ($items as $key => $item) { ?>
          <li class="different-ps__items_item item">
            <?php echo "<div class='item__img'>";
            echo  my_custom_attachment_image($item['image']);
            echo "</div>";
            echo  "<p class='item__title'>{$item['title_item']}</p>
            <p class='item__descr'>{$item['descr_item']}</p>"; ?>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- different-ps end -->