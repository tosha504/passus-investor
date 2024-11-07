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
$events = get_field('events'); ?>
<!-- conferences-webinars-ps start -->
<section class="conferences-webinars-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    if (!empty($events) && count($events) > 0) {  ?>
      <ul class="conferences-webinars-ps__items">
        <?php foreach ($events as $key => $event) { ?>
          <li class="conferences-webinars-ps__items_item item">
            <div class="item__image">
              <?php echo my_custom_attachment_image($event['banner']); ?>
            </div>
            <div class="item__content">
              <div class="item__content_attr">
                <p class="date"><?php echo $event['Date']; ?></p>
                <p class="time"><?php echo $event['time']; ?></p>
              </div>
              <p class="item__title">
                <?php echo $event['title']; ?>
              </p>
              <p class="item__place">
                <?php echo $event['place']; ?>
              </p>

              <div class="item__description">
                <?php echo $event['short_descr']; ?>
              </div>
              <?php
              $link = $event['button'];
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
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- conferences-webinars-ps end -->