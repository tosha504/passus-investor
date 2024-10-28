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
$font_weight = get_field('font-weight'); ?>
<!-- upcoming-events-ps start -->
<section class="upcoming-events-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight); ?>
    <ul class="upcoming-events-ps__items">
      <li class="upcoming-events-ps__items_item">
        <p class="upcoming-events-ps__items_item-date">16.04.2024</p>
        <p class="upcoming-events-ps__items_item-title">IT Lunch – Wykorzystanie sztucznej inteligencji i uczenia maszynowego w zarządzaniu...</p>
        <a href="#">Więcej </a>
      </li>

      <li class="upcoming-events-ps__items_item">
        <p class="upcoming-events-ps__items_item-date">15.05.2024</p>
        <p class="upcoming-events-ps__items_item-title"> Passus Summit 2024 </p>
        <a href="#">Więcej </a>
      </li>

      <li class="upcoming-events-ps__items_item">
        <p class="upcoming-events-ps__items_item-date">30.08.2024</p>
        <p class="upcoming-events-ps__items_item-title">Konferencja KSC Forum Zakopane </p>
        <a href="#">Więcej </a>
      </li>
    </ul>
  </div>
</section><!-- upcoming-events-ps end -->