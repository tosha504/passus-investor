<?php

/**
 * Theme enqueue scripts and styles.
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
if (!function_exists('start_scripts')) {
	function start_scripts()
	{
		$theme_uri = get_template_directory_uri();
		// Custom JS
		wp_register_script('slick_theme_functions', $theme_uri . '/libery/slick.min.js', [], false, true);
		wp_enqueue_script('slick_theme_functions');
		wp_enqueue_script('start_functions', $theme_uri . '/src/index.js', ['jquery'], time(), true);

		if (is_archive() || is_tax()) { // Adjust conditions as needed
			wp_enqueue_script(
				'load-more',
				get_template_directory_uri() . '/src/load-more.js',
				array('jquery'),
				'1.0',
				true
			);

			wp_localize_script('load-more', 'load_more_params', array(
				'ajax_url' => admin_url('admin-ajax.php'),
				'query_vars' => json_encode($GLOBALS['wp_query']->query_vars),
			));
		}

		wp_localize_script('start_functions', 'localizedObject', [
			'ajaxurl' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('ajax_nonce'),
		]);

		// Custom css
		wp_enqueue_style('start_style', $theme_uri . '/src/index.css', [], time());

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'start_scripts',);



function custom_block_theme_acf_enqueue_scripts()
{
	$theme_uri = get_template_directory_uri();
	//if slick
	wp_register_script('slick_theme_functions', $theme_uri . '/libery/slick.min.js', [], false, true);
	if (has_block('acf/sldier-ps', get_queried_object_id())) {
		wp_enqueue_script('sldier-ps', $theme_uri . "/blocks/sldier-ps/sldier-ps.js", array(), '1.0.0', true);
	}

	if (has_block('acf/accordion-ps', get_queried_object_id())) {
		wp_enqueue_script('accordion-ps', $theme_uri . "/blocks/accordion-ps/accordion-ps.js", array(), '1.0.0', true);
	}

	if (has_block('acf/carousel-ps', get_queried_object_id())) {
		wp_enqueue_script('carousel-ps', $theme_uri . "/blocks/carousel-ps/carousel-ps.js", array(), '1.0.0', true);
	}

	if (has_block('acf/runline-ps', get_queried_object_id())) {
		wp_enqueue_script('runline-ps', $theme_uri . "/blocks/runline-ps/runline-ps.js", array(), '1.0.0', true);
	}

	if (has_block('acf/recordings-filters-ps', get_queried_object_id())) {
		wp_enqueue_script('recordings-filters-ps', $theme_uri . "/blocks/recordings-filters-ps/recordings-filters-ps.js", array(), '1.0.0', true);
	}
}
add_action('wp_enqueue_scripts', 'custom_block_theme_acf_enqueue_scripts');
add_action('admin_enqueue_scripts', 'custom_block_theme_acf_enqueue_scripts');


function load_more_posts_ajax_handler()
{
	// Check if 'page' and 'query_vars' are set
	if (isset($_POST['page']) && isset($_POST['query_vars'])) {
		$page = intval($_POST['page']);
		$query_vars = json_decode(stripslashes($_POST['query_vars']), true);

		// Modify query variables for pagination
		$query_vars['paged'] = $page;
		$query_vars['post_status'] = 'publish';

		// Create a new WP_Query
		$query = new WP_Query($query_vars);

		if ($query->have_posts()) {
			ob_start();
			while ($query->have_posts()) {
				$query->the_post();
				partner_tnl_card();
			}

			// Get the buffered content
			$content = ob_get_clean();
			echo $content;
		}

		wp_reset_postdata();
	}

	wp_die(); // Required to terminate immediately and return a proper response
}
add_action('wp_ajax_load_more_posts', 'load_more_posts_ajax_handler');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts_ajax_handler');
