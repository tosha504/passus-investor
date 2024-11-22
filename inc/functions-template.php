<?php

/**
 * Custom functions
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

function my_custom_attachment_image($attachment_id)
{
  echo wp_get_attachment_image($attachment_id, 'full', false, ['alt' => get_post_meta($attachment_id, '_wp_attachment_image_alt', true), 'loading' => 'lazy', 'title' => get_the_title($attachment_id)]);
}

function show_title_and_btn($tag, $text_title, $class_title = null, $font_weight)
{
  $cls = $class_title !== null ? $class_title : "";
  if (!empty($text_title)) {
    echo <<<TITLE_AND_BTN
    <div class="title-block-ps {$cls}" style="font-weight:{$font_weight}">
    <$tag>$text_title</$tag>
    </div>
    TITLE_AND_BTN;
  }
}

function display_all_technologies()
{
  $terms = get_terms(array(
    'taxonomy' => 'technologies',
    'hide_empty' => true, // Set to true to hide terms with no posts
  ));

  if (!empty($terms) && !is_wp_error($terms)) {
    $active_class = (is_post_type_archive()) ? 'primary' : 'outline';
    echo '<ul class="technologies-list">';
    echo '<li>';
    echo '<a class="button button__' . esc_attr($active_class) . '" href="http://integrator-passus.local/partnerzy/">Wszyscy</a>';
    echo '</li>';
    foreach ($terms as $term) {
      $active_class = (is_tax('technologies', $term->term_id)) ? 'primary' : 'outline';

      echo '<li>';
      echo '<a class="button button__' . esc_attr($active_class) . '" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
      echo '</li>';
    }
    echo '</ul>';
  }
}

function load_more_partners_btn($wp_query)
{
  $max_pages = $wp_query->max_num_pages;
  if ($max_pages > 1) { ?>
    <div class="load-more-container container">
      <a href="#" class="button button__outline" id="load-more" data-page="1" data-max="<?php echo esc_attr($max_pages); ?>">
        <?php _e('Load More', 'passus'); ?>
      </a>
    </div>
  <?php
  }
}

function partner_tnl_card()
{ ?>
  <li class="partners-tnl__partners_partner partner">
    <?php if (get_the_post_thumbnail()) { ?>
      <div class="partner__image"><?php the_post_thumbnail(); ?></div>
    <?php  }
    if (get_the_excerpt()) { ?>
      <div class="partner__excerpt"><?php the_excerpt(); ?></div>
    <?php  } ?>
    <a href="<?php echo esc_url(get_the_permalink()); ?>">
      <?php _e('Read more', 'passus'); ?>
    </a>
  </li>
<?php }

function author_post_block($author_icon, $author_name, $author_position, $social_media)
{ ?>
  <div class="author-post-data">
    <?php if (!empty($author_icon)) { ?>
      <div class="author-post-data__icon">
        <?php echo my_custom_attachment_image($author_icon); ?>
      </div>
    <?php }
    if (!empty($author_name) || !empty($author_position)) { ?>
      <div class="author-post-data__data">
        <p class="author-post-data__data_name"><b><?php echo get_post_type() === 'webinar_tnl' ? 'Prowadzący' : 'Autor'; ?>:</b> <?php echo $author_name; ?></p>
        <p class="author-post-data__data_position">
          <?php echo $author_position ?>
        </p>
      </div>
    <?php }
    if (!empty($social_media) && count($social_media) > 0) { ?>
      <div class="author-post-data__socials">
        <?php foreach ($social_media as $key => $social) {
          if ($social) {
            $link_url = $social['link']['url'];
            $link_target = $social['link']['target'] ? $social['link']['target'] : '_self'; ?>
            <div class="author-post-data__socials_social">
              <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo my_custom_attachment_image($social['icon']); ?></a>
            </div>
        <?php }
        } ?>
      </div>
  </div>
<?php  } ?>
<?php }


function get_reading_time($post_id = null)
{
  // Get the post content
  $post_id = $post_id ?: get_the_ID();
  $content = get_post_field('post_content', $post_id);

  // Calculate word count
  $word_count = str_word_count(strip_tags($content));

  // Average reading speed in words per minute
  $reading_speed = 200;

  // Calculate time to read
  $reading_time = ceil($word_count / $reading_speed);

  // Return the time to read with a label
  return $reading_time . ' minute' . ($reading_time > 1 ? 's' : '');
}
