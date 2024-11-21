<?php

/**
 * Banner DataSheet Light PS Block template.
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

$description = get_field('description');
$logo_partner = get_field('logo_partner');
$title = !empty(get_field('title')) ? '<h1>' . get_field('title') . '</h1>' : '';
$fake_title = get_field('fake_title'); ?>
<!-- banner-datasheet-light-ps start -->
<section class="banner-datasheet-light-ps" <?php echo  $anchor; ?>>
  <?php
  if (function_exists('yoast_breadcrumb')) {
    echo '<div class="breadcrumbs-container container">';
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    echo '</div>';
  }
  ?>
  <div class="container">
    <div class="banner-datasheet-light-ps__left">
      <?php echo my_custom_attachment_image($logo_partner) ?>
    </div>
    <div class="banner-datasheet-light-ps__right">
      <?php
      echo $title . $fake_title;
      echo $description; ?>
    </div>
  </div>
</section><!-- banner-datasheet-light-ps end -->