<?php

/**
 * Conferences Webinars PS Block template.
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
$events = get_field('events_block'); ?>
<!-- conferences-webinars-ps start -->
<section class="conferences-webinars-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    if (!empty($events) && count($events) > 0) { ?>
      <ul class="conferences-webinars-ps__items">
        <?php foreach ($events as $key => $event) {
          $curent_id = $event->ID;
          $date_event = get_field('date_event', $curent_id);
          $time = get_field('time', $curent_id);
          $place = get_field('place', $curent_id); ?>
          <li class="conferences-webinars-ps__items_item item">
            <div class="item__image">
              <?php echo get_the_post_thumbnail($curent_id); ?>
            </div>
            <div class="item__content">
              <div class="item__content_attr">
                <p class="date"><?php echo $date_event; ?></p>
                <p class="time"><?php echo $time; ?></p>
              </div>
              <p class="item__title">
                <?php echo $event->post_title; ?>
              </p>
              <p class="item__place">
                <?php echo $place; ?>
              </p>
              <div class="item__description">
                <?php echo $event->post_excerpt; ?>
              </div>
              <div class="item__play">
                <a class="button button__primary" href="<?php echo esc_url(get_permalink($curent_id)); ?>" aria-label="Subscribe to event"><?php _e('Sign up', 'passus') ?></a>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- conferences-webinars-ps end -->