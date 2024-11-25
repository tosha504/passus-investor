<?php

/**
 * Host Invited PS Block template.
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

$invited = get_field('invited');
$host = get_field('host'); ?>
<!-- host-invited-ps start -->
<section class="host-invited-ps" <?php echo  $anchor; ?>>
  <div class="container">
    <h3 class="host">Prowadzący:</h3>
    <?php
    if (!empty($host) && count($host) > 0) { ?>
      <ul class="host-invited-ps__items">
        <?php foreach ($host as $key => $item) { ?>
          <li class="host-invited-ps__items_item item">
            <div class="item__image">
              <?php echo my_custom_attachment_image($item['author_icon']); ?>
            </div>
            <div class="item__data">
              <div class="item__data_name"><?php echo $item['author_name']; ?></div>
              <div class="item__data_position"><?php echo $item['author_position']; ?></div>
              <div class="item__data_descr"><?php echo $item['author_descr']; ?></div>
              <div class="item__data_social">
                <?php if (!empty($item['social_media']) && count($item['social_media']) > 0) {
                  foreach ($item['social_media'] as $key => $media) { ?>
                    <a href="<?php echo esc_url($media['link']['url']); ?>"><?php echo wp_get_attachment_image($media['icon'], 'full'); ?></a>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
    <h3 class="invited">Zaproszeni goście:</h3>
    <?php
    if (!empty($invited) && count($invited) > 0) { ?>
      <ul class="host-invited-ps__items">
        <?php foreach ($invited as $key => $item) { ?>
          <li class="host-invited-ps__items_item item">
            <div class="item__image">
              <?php echo my_custom_attachment_image($item['author_icon']); ?>
            </div>
            <div class="item__data">
              <div class="item__data_name"><?php echo $item['author_name']; ?></div>
              <div class="item__data_position"><?php echo $item['author_position']; ?></div>
              <div class="item__data_descr"><?php echo $item['author_descr']; ?></div>
              <div class="item__data_social">
                <?php if (!empty($item['social_media']) && count($item['social_media']) > 0) {
                  foreach ($item['social_media'] as $key => $media) { ?>
                    <a href="<?php echo esc_url($media['link']['url']); ?>"><?php echo wp_get_attachment_image($media['icon'], 'full'); ?></a>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
</section><!-- host-invited-ps end -->