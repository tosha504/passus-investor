<?php

/**
 * Form Content PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='form-content-ps__left_description'>" . get_field('description') . "</div>" : "";
$shortcode = get_field('shortcode');
$background = !empty(get_field('background')) ? 'style="background-image: url(' . wp_get_attachment_url(get_field('background')) . ')"' : '';
$kolor_pick = !empty(get_field('kolor_pick')) ? 'style="color:' . get_field('kolor_pick') . '"' : ''; ?>
<!-- form-content-ps start -->
<?php if (!empty($kolor_pick)) {
  echo "<style>
  .form-content-ps .title-block-ps{
    color: " . get_field('kolor_pick') . " ;
  }
  </style>";
} ?>
<section class="form-content-ps" <?php echo  $anchor . $background; ?>>
  <div class="container">
    <div class="form-content-ps__left" <?php echo $kolor_pick ?>>
      <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
      echo $description; ?>
    </div>
    <div class="form-content-ps__right" <?php echo $kolor_pick ?>>
      <?php echo $shortcode; ?>
    </div>
  </div>
</section><!-- form-content-ps end -->