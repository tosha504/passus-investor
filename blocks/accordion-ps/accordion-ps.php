<?php

/**
 * Accordion PS Block template.
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

$description = !empty(get_field('description')) ? "<div class='accordion-ps__description'>" . get_field('description') . "</div>" : "";
$typy_accordionu = get_field('typy_accordionu');
$accordion = get_field('accordion'); ?>
<!-- slider-ps start -->
<section class="accordion-ps <?php echo $typy_accordionu; ?>" <?php echo $anchor; ?>>
  <div class="container">
    <?php
    show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo  $description;
    if (!empty($accordion) && count($accordion) > 0) {
      // var_dump($accordion);
    ?>
      <ul class="accordion-ps__items">
        <?php foreach ($accordion as $key => $tab) { ?>
          <li>
            <div class="question">
              <p>
                <?php echo $tab['title']; ?>
              </p>
              <button aria-label="Toggle Accordion Content">
                <div></div>
              </button>
            </div>
            <div class="answer">
              <?php echo $tab['description']; ?>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>

</section><!-- slider-ps end -->