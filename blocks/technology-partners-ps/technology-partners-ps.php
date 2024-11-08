<?php

/**
 * Technology Partners PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='technology-partners-ps__description'>" . get_field('description') . "</div>" : "";
$partners = get_field('partners');
$link = get_field('link');  ?>
<!-- technology-partners-ps start -->
<section class="technology-partners-ps" <?php echo $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo  $description;
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
    <?php }
    if ($link) {
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
      <div class="technology-partners-ps__button-wrap">
        <a class="button button__outline" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      </div>
    <?php } ?>
  </div>
</section><!-- technology-partners-ps end -->