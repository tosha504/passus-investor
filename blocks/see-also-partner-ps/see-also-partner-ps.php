<?php

/**
 * See Also Partner PS Block template.
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
$items = get_field('elements'); ?>
<!-- see-also-partner-ps start -->
<section class="see-also-partner-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    if (!empty($items) && count($items) > 0) {
    ?>
      <div class="see-also-partner-ps__items">
        <?php foreach ($items as $key => $item) {  ?>
          <div class="see-also-partner-ps__items__item item">
            <?php
            echo !empty($item['category']) ? "<p class='item__category'>{$item['category']}</p>" : "";
            echo  !empty($item['title']) ? "<p class='item__title'>{$item['title']}</p>" : "";
            $link = $item['link'];
            if ($link) {
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <div class="item__play">
                <a class="button button__primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" aria-label="Subscribe to event"><?php echo esc_html($link_title); ?></a>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- see-also-partner-ps end -->