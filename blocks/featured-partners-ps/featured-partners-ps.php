<?php

/**
 * Featured Partner PS Block template.
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
$partners = get_field('partners');
$background = get_field('background')   ? 'style="background-image: url(' . wp_get_attachment_url(get_field('background')) . ')"' : '';  ?>
<!-- featured-partners-ps start -->
<section class="featured-partners-ps" <?php echo $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    if (!empty($partners) && count($partners) > 0) { ?>
      <ul class="partners-tnl__partners">
        <?php foreach ($partners as $key => $partner) { ?>
          <li class="partners-tnl__partners_partner partner">
            <?php if (get_the_post_thumbnail($partner->ID)) { ?>
              <div class="partner__image"><?php echo get_the_post_thumbnail($partner->ID); ?></div>
            <?php  }
            if ($partner->post_excerpt) { ?>
              <div class="partner__excerpt"><?php echo $partner->post_excerpt; ?></div>
            <?php  } ?>
            <a href="<?php echo esc_url(get_the_permalink($partner->ID)); ?>">
              <?php _e('Read more', 'passus'); ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- featured-partners-ps end -->