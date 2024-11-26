<?php

/**
 * Upcoming Events  PS Block template.
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
$events = get_field('events'); ?>
<!-- upcoming-events-ps start -->
<section class="upcoming-events-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    if (!empty($events) && count($events) > 0) { ?>
      <ul class="upcoming-events-ps__items">
        <?php foreach ($events as $key => $event) {
          $current_ID = $event->ID;
          $date_event = !empty(get_field('date_event', $current_ID)) ?  get_field('date_event', $current_ID) : ""; ?>
          <li class="upcoming-events-ps__items_item">
            <p class="upcoming-events-ps__items_item-date"><?php echo $date_event; ?></p>
            <p class="upcoming-events-ps__items_item-title"><?php echo $event->post_title ?></p>
            <a href="<?php echo esc_url(get_permalink($current_ID)); ?>"><?php _e('Read more', 'passus'); ?></a>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- upcoming-events-ps end -->