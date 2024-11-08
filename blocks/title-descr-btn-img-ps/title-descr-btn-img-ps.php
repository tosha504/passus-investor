<?php

/**
 * Title Descr Btn Img PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='title-descr-btn-img-ps__description'>" . get_field('description') . "</div>" : "";
$background = get_field('background') ? 'style="background-image: url(' . wp_get_attachment_url(get_field('background')) . ')"' : '';;
$link = get_field('button');
$image = get_field('image'); ?>
<!-- title-descr-btn-img-ps start -->
<section class="title-descr-btn-img-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php
    show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo $description; ?>
    <?php
    if ($link) {
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
      <div class="title-descr-btn-img-ps__button-wrap">
        <a class="button button__primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      </div>
    <?php }
    if ($image) {
      echo my_custom_attachment_image($image);
    } ?>
  </div>
</section><!-- title-descr-btn-img-ps end -->