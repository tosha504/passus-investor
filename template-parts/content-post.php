<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start
 */

$author_icon = get_field('author_icon');
$author_name = get_field('author_name');
$author_position = get_field('author_position');
$social_media = get_field('social_media');

if (function_exists('yoast_breadcrumb')) {
	echo '<div class="breadcrumbs-container container">';
	yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
	echo '</div>';
} ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="attributes-tnl">
			<p class="date">
				<?php
				$timestamp = get_the_date('U');
				echo date('d.m.Y', $timestamp); ?></p>
			<p><?php echo get_reading_time(get_the_ID()); ?></p>
		</div>
		<?php
		the_title('<h1 class="entry-title">', '</h1>');
		echo author_post_block($author_icon, $author_name, $author_position, $social_media); ?>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'start'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'start'),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<?php echo author_post_block($author_icon, $author_name, $author_position, $social_media);	?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->