<?php

/**
 * Expert Zone PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='expert-zone-ps__description'>" . get_field('description') . "</div>" : "";
$background = !empty(get_field('background')) ? 'style="background-image:url(' . wp_get_attachment_url(get_field('background')) . ');"' : 'style="background-color:var(--pauss-red);';
$button = get_field('button'); ?>
<!-- expert-zone-ps start -->
<section class="expert-zone-ps" <?php echo $anchor; ?>>
  <div class="container" <?php echo $background; ?>>
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo  $description;
    if ($button) {
      $link_url = $button['url'];
      $link_title = $button['title'];
      $link_target = $button['target'] ? $button['target'] : '_self';
    ?>
      <a class="button button__primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
    <?php } ?>
  </div>
</section><!-- expert-zone-ps end -->