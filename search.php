<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package i3d
 */

get_header();

add_filter('get_pagenum_link', 'kama_fix_search_pagination');
function kama_fix_search_pagination($result)
{
	$glue = strpos($result, '?') ? '&' : '?';
	return $result . $glue . "s={$_REQUEST['s']}";
}

// remove pages form search output
foreach ($posts as $key => $post) {
	if ($post->post_type === 'page') {
		unset($posts[$key]);
	}
}

$tags = get_tags(array(
	'name__like' => get_search_query(),
));

// global $posts;
if (!empty($tags)) {
	$slugs = array();
	foreach ($tags as $tag) {
		$slugs[] = $tag->slug;
	}
	$slugs = implode(',', $slugs);

	$icons = get_posts(
		array(
			'tag' => $slugs,
			'post_type' => array('icon', 'packs'),
		)
	);

	foreach ($icons as $icon) {
		$posts[] = $icon;
	}
}
?>

<div class="container">
	<?php if (have_posts() && count($posts)) : ?>
		<section class="search-result">
			<div class="search-result__wrap wrap">
				<h2 class="search-result__title h3">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search results for: %s', 'i3d'), '<span class="color-blue">' . get_search_query() . '</span>');
					?>
				</h2>
			</div>
		</section>
	<?php endif; ?>
	<section class="icons-list">
		<?php if (!empty($posts)) : ?>
			<div class="icons-list__wrap wrap">
				<div class="icons-list__row flex">
					<?php //if (have_posts() && count($posts)) :
					?>
					<?php
					/* Start the Loop */
					// while (false && have_posts()) {
					// 	the_post();
					// 	// echo '<pre>';
					// 	// var_dump($post);
					// 	// echo '</pre>';
					// 	get_template_part('template-parts/content', $post->post_type);
					// }

					foreach ($posts as $post) {
						setup_postdata($post);
						get_template_part('template-parts/content', $post->post_type);
					}
					wp_reset_postdata($post);

					?>
				</div>
			</div>
			<?php echo i3d_custom_pagination(); ?>

		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif ?>

		<?php echo do_shortcode('[trending type="packs"]'); ?>
		<?php echo do_shortcode('[trending]'); ?>
	</section>
</div>

<?php
get_footer();
