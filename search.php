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

foreach ($posts as $key => $post) {
	if ($post->post_type === 'page') {
		unset($posts[$key]);
	}
}
?>

<div class="container">
	<section class="search-result">
		<div class="search-result__wrap wrap">
			<?php if (have_posts() && count($posts)) : ?>
				<h2 class="search-result__title h3">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search results for: %s', 'i3d'), '<span class="color-blue">' . get_search_query() . '</span>');
					?>
				</h2>
			<?php endif; ?>
		</div>
	</section>
	<section class="icons-list">
		<div class="icons-list__wrap wrap">
			<?php if (have_posts() && count($posts)) : ?>
				<div class="icons-list__row flex">
					<?php
					/* Start the Loop */
					while (have_posts()) {
						the_post();
						get_template_part('template-parts/content', $post->post_type);
					}

					?>
				</div>
				<?php echo i3d_custom_pagination();
				?>
				<?php //the_posts_navigation()
				?>
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif ?>
		</div>
	</section>
	<?php echo do_shortcode('[trending type="packs"]'); ?>
	<?php echo do_shortcode('[trending]'); ?>
</div>

<?php
get_footer();
