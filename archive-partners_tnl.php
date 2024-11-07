<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start
 */

get_header();
?>

<main id="primary" class="site-main partners-tnl">
	<div class="partners-tnl__banners">
		<div class="container">
			<?php echo "<h1>" . post_type_archive_title('', false) . "</h1>";
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
					partner_tnl_card();
				} ?>
			</ul>
	</div>
	<?php load_more_partners_btn($wp_query); ?>
<?php
			wp_reset_postdata();
		} else {
			get_template_part('template-parts/content', 'none');
		} ?>
</main><!-- #main -->

<?php
get_footer();
