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
<?php
$term = get_queried_object();
$term_name = $term->name;
$term_id = $term->term_id;
$term_slug = $term->slug;

$term_posts = get_posts(array(
	'tag' => $term_slug,
	'post_type' => 'any',
	'numberposts' => -1,
	'suppress_filters' => true,
	'posts_per_page' => 2,
));
?>
<div class="container">

	<section class="pack-head">
		<div class="pack-head__wrap wrap">
			<div class="pack-head__row flex flex_justify flex_bottom">
				<div class="pack-head__column pack-head__column_left">
					<div class="pack-head__name">
						<h1 class="pack-head__title h2"><?php echo $term_name; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="icons-list">
		<div class="icons-list__wrap wrap">
			<?php if (!empty($term_posts)) : ?>
				<div class="icons-list__row flex">
					<?php global $post; ?>
					<?php foreach ($term_posts as $post) {
						setup_postdata($post);
						get_template_part('template-parts/content', $post->post_type);
					}
					wp_reset_postdata($post);
					?>
				</div>
				<?php echo i3d_custom_pagination(); ?>
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif ?>
		</div>
	</section>
</div>
<?php
get_footer();
