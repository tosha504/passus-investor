<?php

/**
 * Custom register post types
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
function register_post_types()
{
  register_post_type('partners_tnl', array(
    'label' => 'Partnerzy technologiczni',
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'rewrite' => array('slug' => 'partnerzy'),
    'show_in_rest' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-universal-access',
  ));

  register_post_type('webinar_tnl', array(
    'label' => 'Webinarium',
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'rewrite' => array('slug' => 'webinarium'),
    'show_in_rest' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-format-video',
  ));

  register_post_type('datesheet_tnl', array(
    'label' => 'Data Sheet',
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'rewrite' => array('slug' => 'webinarium'),
    'show_in_rest' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-media-spreadsheet',
  ));
}
add_action('init', 'register_post_types');

function create_taxonomy()
{
  register_taxonomy('categories_webinar', array('webinar_tnl'), array(
    'hierarchical'      => true,
    'label'             => 'Kategoria',
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array('slug' => 'category_webinar'),
  ));

  register_taxonomy('technologies', array('partners_tnl'), array(
    'hierarchical'      => true,
    'label'             => 'Technologia',
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => array('slug' => 'technologia'),
  ));
}

add_action('init', 'create_taxonomy');
