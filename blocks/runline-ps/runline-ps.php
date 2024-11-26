<?php

/**
 * Runline PS Block template.
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
$description = !empty(get_field('description')) ? "<div class='runline-ps__description'>" . get_field('description') . "</div>" : "";
$number_of_projects = get_field('number_of_projects'); ?>
<!-- runline-ps start -->
<section class="runline-ps" <?php echo $anchor; ?>>
  <div class="container">
    <?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
    echo  $description;
    if (!empty($number_of_projects) && count($number_of_projects) > 0) { ?>
      <div class="runline-ps__items">
        <?php foreach ($number_of_projects as $key => $project) { ?>
          <div class="runline-ps__items_item item">
            <div class="item__from">
              <?php
              if (!empty($project['curent']) && !empty($project['from_top'])) {
                echo '<p><span>0</span>' . __(' of the top ', 'passus') . $project['from_top'] . '</p>';
              }
              ?>
            </div>
            <?php if (!empty($project['services'])) {
              echo '<p class="item__services">' . $project['services'] . '</p>';
            } ?>
            <div class="progress-line-full" data-full="<?php echo $project['from_top']; ?>">
              <div class="progress-line-curent" data-current="<?php echo $project['curent']; ?>" style="width: 0%;"></div>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section><!-- runline-ps end -->
<style>
  .progress-line-curent {
    transition: width 1s;
    /* Default transition for smooth animation */
    background-color: #4caf50;
    /* Customize color */
    height: 10px;
    /* Customize height */
  }
</style>