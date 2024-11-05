<?php

/**
 * Bg Content Breadcrumbs PS Block template.
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
$description = !empty(get_field('description')) ? "<div>" . get_field('description') . "</div>" : "";
$background = get_field('background') ? 'style="background-image: url(' . wp_get_attachment_url(get_field('background')) . ')"' : '';;
$link = get_field('link'); ?>
<!-- bg-content-breadcrumbs-ps start -->
<section class="bg-content-breadcrumbs-ps"
  <?php echo  $anchor;
  echo $background; ?>>
  <?php
  if (function_exists('yoast_breadcrumb')) {
    echo '<div class="breadcrumbs-container container">';
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    echo '</div>';
  }
  ?>
  <div class="container">
    <div class="bg-content-breadcrumbs-ps__left">
      <?php
      show_title_and_btn($tag, $text_title, $class_title, $font_weight);
      echo $description; ?>
      <?php
      if ($link) {
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <div class="bg-content-breadcrumbs-ps__left_button-wrap">
          <a class="button button__primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
      <?php } ?>
    </div>
  </div>
</section><!-- bg-content-breadcrumbs-ps end -->