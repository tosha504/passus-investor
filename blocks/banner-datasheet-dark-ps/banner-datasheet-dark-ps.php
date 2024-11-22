<?php

/**
 * banner-datasheet-dark-ps PS Block template.
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
$title = !empty(get_field('title')) ? '<h1>' . get_field('title') . '</h1>' : '';
$fake_title =  !empty(get_field('fake_title')) ? '<p class="fake-title">' . get_field('fake_title') . '</p>' : '';
$description = !empty(get_field('description')) ? "<div>" . get_field('description') . "</div>" : "";
$background = get_field('bacgkround_image') ? 'style="background-image: url(' . wp_get_attachment_url(get_field('bacgkround_image')) . ')"' : '';;
$image = get_field('image'); ?>
<!-- banner-datasheet-dark-ps start -->
<section class="banner-datasheet-dark-ps"
  <?php echo  $anchor;
  echo $background; ?>>
  <?php if (function_exists('yoast_breadcrumb')) {
    echo '<div class="breadcrumbs-container container">';
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    echo '</div>';
  } ?>
  <div class="container">
    <div class="banner-datasheet-dark-ps__content">
      <?php
      echo $title . $fake_title;
      echo $description; ?>
    </div>
  </div>

  </div>
</section><!-- banner-datasheet-dark-ps end -->