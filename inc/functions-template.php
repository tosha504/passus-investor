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

  echo <<<TITLE_AND_BTN
  <div class="title-block-ps {$cls}" style="font-weight:{$font_weight}">
    <$tag>$text_title</$tag>
  </div>
  TITLE_AND_BTN;
}

function display_all_technologies()
{
  $terms = get_terms(array(
    'taxonomy' => 'technologies',
    'hide_empty' => true, // Set to true to hide terms with no posts
  ));

  if (!empty($terms) && !is_wp_error($terms)) {
    $active_class = (is_post_type_archive()) ? 'active' : '';
    echo '<ul class="technologies-list">';
    echo '<li class="' . esc_attr($active_class) . '">';
    echo '<a href="http://integrator-passus.local/partnerzy/">Wszyscy</a>';
    echo '</li>';
    foreach ($terms as $term) {
      $active_class = (is_tax('technologies', $term->term_id)) ? 'active' : '';

      echo '<li class="' . esc_attr($active_class) . '">';
      echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
      echo '</li>';
    }
    echo '</ul>';
  }
}


function load_more_partners_btn($wp_query)
{
  // Load More Button
  $max_pages = $wp_query->max_num_pages;
  if ($max_pages > 1) { ?>
    <div class="load-more-container container">
      <a href="#" id="load-more" data-page="1" data-max="<?php echo esc_attr($max_pages); ?>">
        <?php _e('Load More', 'passus'); ?>
      </a>
    </div>
<?php
  }
}
