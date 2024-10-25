<?php

/**
 * Banner PS Block template.
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
$background =  !empty(get_field('background')) ? 'style="background-image: url(' . wp_get_attachment_url(get_field('background')) . ')"' : '';
$items = get_field('items'); ?>
<!-- Banner-ps start -->
<section class="banner-ps"
  <?php echo $background;
  echo  $anchor; ?>>
  <div class="container">
    <?php if (!empty($items) && count($items) > 0) {
      show_title_and_btn($tag, $text_title, null, null); ?>
      <ul class="banner-ps__items">
        <?php
        foreach ($items as $key => $item) {
          $url = !empty($item["link"]['url']) ? $item["link"]['url'] : "#";
        ?>
          <li class="banner-ps__items_item">
            <a href="<?php echo esc_url($url); ?>">
              <?php
              $descrpiton =  !empty($item['descrpiton']) ? "<p class='descrpiton'>{$item['descrpiton']}</p>" : "";
              echo my_custom_attachment_image($item['item']) . $descrpiton;
              ?>
              <div class="long-description"> <?php echo $item['long_description']; ?></div>
            </a>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>

</section><!-- Banner-ps end -->