<?php

/**
 * Title Twocolumn Bgpicker PS Block template.
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

$background = get_field('choose_color') ?  get_field('choose_color')  : '';
$revers = !empty(get_field('revers')) ? "revers" : "";
$title_before_text = !empty(get_field('title_before_text')) ? "<p class='reward'>" . get_field('title_before_text') . "</p>" : "";
$text_column = !empty(get_field('text_column')) ? get_field('text_column') : "";
$image_column = !empty(get_field('image_column')) ? wp_get_attachment_image(get_field('image_column'), 'full') : ""; ?>
<!-- title-twocolumn-bgpicker-ps start -->
<section class="title-twocolumn-bgpicker-ps <?php echo $background; ?>"
  <?php echo  $anchor; ?>>
  <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight); ?>
  <div class="container <?php echo $revers; ?>">
    <div class="title-twocolumn-bgpicker-ps__left">
      <?php echo $title_before_text . $text_column; ?>
    </div>
    <div class="title-twocolumn-bgpicker-ps__right">
      <?php echo $image_column; ?>
    </div>
  </div>
</section><!-- title-twocolumn-bgpicker-ps end -->