<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package i3d
 *
 * Template Name: Tag Archive
 *
 */

get_header();
?>
<div class="container">
	<section class="icons-list">
		<div class="icons-list__wrap wrap">
			<?php if (have_posts()) : ?>
				<div class="icons-list__row flex">
					<?php
					/* Start the Loop */
					while (have_posts()) {
						the_post();
						echo 'lalal';
						get_template_part('template-parts/content', $post->post_type);
					}
					?>
				</div>
				<?php echo i3d_custom_pagination(); ?>
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none');
				?>
			<?php endif ?>
		</div>
	</section>
</div>
<?php
get_sidebar();
get_footer();
