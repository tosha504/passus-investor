<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start
 */

$link = get_field('link');
$author_icon = get_field('author_icon');
$author_name = get_field('author_name');
$author_position = get_field('author_position');
$social_media = get_field('social_media'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="videoModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<iframe id="videoIframe" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
	<div class="container">
		<div class="webinar-tnl__video-block">
			<span id="openVideo" class="open-video" data-video-url="https://www.youtube.com/embed/<?php echo $link; ?>" aria-label="Open video from yotube"></span>
			<?php echo my_custom_attachment_image(get_post_thumbnail_id()); ?>
		</div>

		<div class="attributes-tnl">
			<p class="date">
				<?php
				$timestamp = get_the_date('U');
				echo date('d.m.Y', $timestamp); ?></p>
			<p><?php $video_length = get_field('video_length');
					echo $video_length; ?></p>
		</div>

		<?php if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		echo author_post_block($author_icon, $author_name, $author_position, $social_media);
		?>



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
	</div>
</article><!-- #post-<?php the_ID(); ?> -->