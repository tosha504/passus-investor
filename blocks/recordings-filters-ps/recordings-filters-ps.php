<?php

/**
 * Recordings Filters PS Block template.
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

<!-- recordings-filters-ps start -->
<section class="recordings-filters-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    $terms = get_terms(array(
      'taxonomy' => 'categories_webinar',
      'hide_empty' => true, // Set to true to hide terms with no posts
    ));

    if (!empty($terms) && !is_wp_error($terms)) {
      echo '<ul class="technologies-list">';
      echo '<li>';
      echo '<a class="button button__primary" href="all" data-filter="*">Wszystkie</a>';
      echo '</li>';
      foreach ($terms as $term) {
        echo '<li>';
        echo '<a class="button button__outline" href="' . esc_html($term->slug) . '" data-filter="' . esc_html($term->slug) . '">' . esc_html($term->name) . '</a>';
        echo '</li>';
      }
      echo '</ul>';
    }
    if (!empty($recordings) && count($recordings) > 0) { ?>
      <ul class="recordings-filters-ps__items">
        <?php foreach ($recordings as $key => $record) {
          $curent_id = $record->ID;
          $categories = wp_get_post_terms($curent_id, 'categories_webinar'); ?>
          <li class="recordings-filters-ps__items_item" data-tag="<?php if (!empty($categories[0])) {
                                                                    echo  $categories[0]->slug;
                                                                  } ?>">
            <div class="recordings-filters-ps__items_item-img">
              <?php echo  my_custom_attachment_image(get_post_thumbnail_id($curent_id)); ?>
            </div>
            <div class="item-wrap">
              <p class="item-wrap__category
              <?php if (!empty($categories[0])) {
                echo $categories[0]->slug;
              }  ?>">
                <?php if (!empty($categories[0])) {
                  echo $categories[0]->name;
                }  ?>
              </p>
              <p class="item-wrap__title"><?php echo $record->post_title; ?></p>
              <a href="<?php echo esc_url(get_permalink($curent_id)); ?>" class="button button__primary"><?php _e('Button', 'passus'); ?></a>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- recordings-filters-ps end -->