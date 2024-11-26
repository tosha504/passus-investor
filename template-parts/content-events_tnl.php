<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		$tag = get_field('tag');
		$text_title = get_field('text_title');
		$class_title = get_field('class_title');
		$font_weight = get_field('font-weight');
		$fake_title =  !empty(get_field('subtitle')) ? '<h2 class="subtitle">' . get_field('subtitle') . '</h2>' : '';
		$description = !empty(get_field('date_place')) ? "<div class='date-place'>" . get_field('date_place') . "</div>" : "";
		$background = get_field('background') ? 'style="background-image: url(' . wp_get_attachment_url(get_field('background')) . ')"' : '';
		$link = get_field('button'); ?>
		<!-- banner-events-ps start -->
		<section class="banner-events-ps" <?php echo $background; ?>>
			<?php if (function_exists('yoast_breadcrumb')) {
				echo '<div class="breadcrumbs-container container">';
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
				echo '</div>';
			} ?>
			<div class="container">
				<div class="banner-events-ps__content">
					<?php show_title_and_btn($tag, $text_title, $class_title, $font_weight);
					echo  $fake_title;
					echo $description;
					if ($link) {
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>
						<div class="button-wrap">
							<a class="button button__primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
						</div>
					<?php } ?>
				</div>
			</div>

	</div>
	</section><!-- banner-events-ps end -->
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
</article><!-- #post-<?php the_ID(); ?> -->