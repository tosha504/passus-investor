<?php

/**
 * Expert Materials PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='expert-materials-ps__description'>" . get_field('description') . "</div>" : "";
$materials = get_field('materials'); ?>
<!-- expert-materials-ps start -->
<section class="expert-materials-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo  $description;
    if (!empty($materials) && count($materials) > 0) { ?>
      <div class="expert-materials-ps__materials">
        <?php foreach ($materials as $key => $material) {
          $curernt_id = $material->ID;
          $trimWords = 20;
          $word_count = wp_trim_words(get_the_excerpt($curernt_id), $trimWords); ?>
          <div class="expert-materials-ps__materials_material material">
            <a class="material__image" href="<?php echo esc_url(get_permalink($curernt_id)); ?>">
              <?php echo my_custom_attachment_image(get_post_thumbnail_id($curernt_id)); ?>
            </a>
            <div class="material__content">
              <p class="material__content_title"><a class="material__image" href="<?php echo esc_url(get_permalink($curernt_id)); ?>"><?php echo get_the_title($curernt_id); ?></a></p>
              <p class="material__content_excerpt"><?php echo $word_count; ?></p>
              <div class="material__content_author">
                <?php $author_icon = get_field('author_icon', $curernt_id);
                $author_name = get_field('author_name', $curernt_id); ?>
                <p class="material__content_author-icon"><?php echo my_custom_attachment_image($author_icon); ?></p>
                <div class="material__content_author-attr">
                  <p class="material__content_author-attr-name"><?php echo $author_name; ?></p>
                  <p class="material__content_autor-attr_date"><?php echo get_the_date('d.m.Y', $curernt_id); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- expert-materials-ps end -->