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
$font_weight = get_field('font-weight');
$recordings = get_field('recordings'); ?>
<!-- recordings-ps start -->
<section class="recordings-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    if (!empty($recordings) && count($recordings) > 0) { ?>
      <ul class="recordings-ps__items">
        <?php foreach ($recordings as $key => $record) {
          $curent_id = $record->ID;
          $categories = wp_get_post_terms($curent_id, 'categories_webinar');
          // var_dump($categories[0]->name);
        ?>
          <li class="recordings-ps__items_item">
            <div class="recordings-ps__items_item-img">
              <?php echo  my_custom_attachment_image(get_post_thumbnail_id($curent_id)); ?>
            </div>
            <div class="item-wrap">
              <p class="item-wrap__category">
                <?php if (!empty($categories[0])) {
                  echo $categories[0]->name;
                }  ?></p>

              <p class="item-wrap__title">Reaktywne vs proaktywne podejście do cyberbezpieczeństwa</p>
              <a href="#" class="button button__primary"><?php _e('Button', 'passus'); ?></a>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- recordings-ps end -->