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
        <?php foreach ($items as $key => $item) {
          $curent_id = $item->ID;
          $timestamp = get_the_date('U');

          $date_event = get_field('date_event', $curent_id);
          $time = get_field('video_length', $curent_id);
          $place = get_field('place', $curent_id); ?>
          <li class="worth-seeing-ps__items_item item">
            <div class="item__image">
              <?php echo my_custom_attachment_image(get_post_thumbnail_id($curent_id)); ?>
            </div>
            <div class="item__content">
              <div class="item__content_attr">
                <p class="date"><?php echo date('d.m.Y', $timestamp); ?></p>
                <p class="time"><?php echo $time; ?></p>
              </div>
              <p class="item__title">
                <?php echo $item->post_title; ?>
              </p>
              <div class="item__description">
                <?php echo $item->post_excerpt; ?>
              </div>
              <div class="item__play">
                <a class="button button__primary" href="<?php echo esc_url(get_permalink($curent_id)); ?>" aria-label="Subscribe to event"><?php _e('Watch', 'passus') ?></a>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- worth-seeing-ps end -->