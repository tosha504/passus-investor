<?php

/**
 * Recordings PS Block template.
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
<!-- recordings-ps start -->
<section class="recordings-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight); ?>
    <ul class="recordings-ps__items">
      <li class="recordings-ps__items_item">
        <div class="recordings-ps__items_item-img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/placeholders/placeholder-video-image.png" alt="">
        </div>
        <div class="item-wrap">
          <p class="item-wrap__category">Cyberbezpieczeństwo</p>
          <p class="item-wrap__title">Reaktywne vs proaktywne podejście do cyberbezpieczeństwa</p>
          <a href="#" class="button button__primary"><?php _e('Button', 'passus'); ?></a>
        </div>
      </li>

      <li class="recordings-ps__items_item">
        <div class="recordings-ps__items_item-img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/placeholders/placeholder-video-image.png" alt="">
        </div>
        <div class="item-wrap">
          <p class="item-wrap__category">Ciągłość działania IT</p>
          <p class="item-wrap__title">Reaktywne vs proaktywne podejście do cyberbezpieczeństwa</p>
          <a href="#" class="button button__primary"><?php _e('Button', 'passus'); ?></a>
        </div>
      </li>

      <li class="recordings-ps__items_item">
        <div class="recordings-ps__items_item-img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/placeholders/placeholder-video-image.png" alt="">
        </div>
        <div class="item-wrap">
          <p class="item-wrap__category">Ciągłość działania IT</p>
          <p class="item-wrap__title">Reaktywne vs proaktywne podejście do cyberbezpieczeństwa </p>
          <a href="#" class="button button__primary"><?php _e('Button', 'passus'); ?></a>
        </div>
      </li>
    </ul>
  </div>
</section><!-- recordings-ps end -->