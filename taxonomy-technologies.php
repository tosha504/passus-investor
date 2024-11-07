<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start
 */

get_header(); ?>

<main id="primary" class="site-main partners-tnl">
	<div class="partners-tnl__banners">
		<div class="container">
			<?php
			if (is_post_type_archive()) {
				echo "<h1>" . post_type_archive_title('', false) . "</h1>";
			}

			if (is_tax()) {
				echo "<h1>" . single_term_title('', false) . "</h1>";
			}
			display_all_technologies();
			?>
		</div>
	</div>
	<div class="container">
		<?php if (have_posts()) { ?>
			<ul class="partners-tnl__partners">
				<?php
				while (have_posts()) {
					the_post();
					echo '<li class="partners-tnl__partners_partner partner">';
					echo !empty(get_the_post_thumbnail()) ? "<div class='partner__image'>" . get_the_post_thumbnail() . "</div>" : "";
					echo  !empty(get_the_excerpt()) ? "<div class='partner__excerpt'>" . get_the_excerpt() . "</div>" : "";
					echo "<a href=" . esc_url(get_the_permalink()) . ">" . __('Read more', 'passus') . "</a>";
					echo '</li>';
				} ?>
			</ul>
	</div>
	<?php load_more_partners_btn($wp_query); ?>
<?php
			wp_reset_postdata();
		} else {
			get_template_part('template-parts/content', 'none');
		}
?>

</main><!-- #main -->

<?php
get_footer();
