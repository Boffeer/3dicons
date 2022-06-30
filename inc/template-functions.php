<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package i3d
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function i3d_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'i3d_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function i3d_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'i3d_pingback_header');


/**
 * Change search form
 */
add_filter('get_search_form', 'i3d_search_form');
function i3d_search_form($form)
{
	$max_tags_to_show = 12;
	$form = i3d_search_block_start();
	$form .= i3d_get_search_tags($max_tags_to_show);
	$form .= '</form>';
	return $form;
}

function i3d_get_search_meter($count)
{
	ob_start();
	sm_list_popular_searches('', '', $count);
?>
	<?php return ob_get_clean();
}

function i3d_custom_pagination()
{
	$nav     = get_the_posts_pagination(array(
		'mid_size' => 3,
		'end_size' => 1,
		'prev_text' => '<svg class="icon icon-arrowLeft" viewBox="0 0 9 6"> <use xlink:href="' . get_stylesheet_directory_uri() . '/app/icons/sprite.svg#arrowLeft"></use> </svg>',
		'next_text' => '<svg class="icon icon-arrowLeft" viewBox="0 0 9 6"> <use xlink:href="' . get_stylesheet_directory_uri() . '/app/icons/sprite.svg#arrowLeft"></use> </svg>'
	));
	$search  = [
		'<nav class="navigation pagination" role="navigation">',
		'<div class="nav-links">',
		'</div>',
		'<a class="page-numbers"',
		'<a class="prev page-numbers"',
		'<a class="next page-numbers"',
		'<span aria-current="page" class="page-numbers current"',
		'<span class="page-numbers dots">',
	];
	$replace = [
		'<nav>',
		'<div class="icons-list__pagination flex pagination">',
		'</div>',
		'<a class="pagination__button"',
		'<a class="pagination__button pagination__button_prev"',
		'<a class="pagination__button pagination__button_next"',
		'<span aria-current="page" class="pagination__button is-active"',
		'<span class="pagination__button">',
	];
	$nav  = str_replace($search, $replace, $nav);
	return $nav;
}

function i3d_custom_popular_tags($count)
{
	$tags = i3d_get_search_meter($count);
	$search  = [
		'<ul>',
		'</ul>',
		'<li>',
		'</li>',
		'<a href',
		'</a>',
	];
	$replace = [
		'',
		'',
		'',
		'',
		'<a class="search__tag" href',
		'</a>'
	];
	$tags  = str_replace($search, $replace, $tags);
	return $tags;
}
function i3d_no_results_popular_tags($count = 42)
{
	$tags = i3d_get_search_meter($count);
	$search  = [
		'<ul>',
		'</ul>',
		'<li>',
		'<a href',
	];
	$replace = [
		// '<ul class="popular-keywords__list flex">',
		'',
		'',
		'<li class="popular-keywords__item">',
		'<a class="popular-keywords__link" href',
	];
	$tags  = str_replace($search, $replace, $tags);
	return $tags;
}


function i3d_get_related_packs_by_post_tags($id)
{
	$tags = get_the_tags($id);
	if (empty($tags)) {
		return;
	}

	$packs_to_show = array();
	$max_packs_to_show = 4;
	$tags_filter = '';

	foreach ($tags as $tag) {
		$tags_filter .= $tag->name . ',';
	}

	$packs = get_posts(array(
		'numberposts' => $max_packs_to_show,
		'post_type'   => 'packs',
		'tag' => $tags_filter,
		'suppress_filters' => true,
	));

	foreach ($packs as $pack) {
		$packs_to_show[] = $pack->ID;
	}

	return $packs_to_show;
}

function i3d_get_related_packs_to_icon($current_icon_id)
{
	$packs_to_show = array();
	$max_packs_to_show = 4;

	$packs = get_posts(array(
		'numberposts' => -1,
		'post_type'   => 'packs',
		'suppress_filters' => true,
	));

	foreach ($packs as $pack) {
		$pack_info = array(
			'id' => $pack->ID,
			'post_title' => $pack->post_title,
			'post_type' => $pack->post_type,
			'icons' => carbon_get_post_meta($pack_info['id'], 'pack_icons'),
		);

		foreach ($pack_info['icons'] as $icon) {
			if (!in_array($current_icon_id, $icon) && $packs_to_show >= $max_packs_to_show) {
				break;
			}
			$packs_to_show[] = $pack_info['id'];
		}
	}
}

function i3d_render_related_packs($packs_to_show)
{
	$packs_to_show = get_posts(array(
		'numberposts' => 4,
		'post_type'   => 'packs',
		'include' => $packs_to_show,
		'suppress_filters' => true,
	));
	global $post;
	foreach ($packs_to_show as $post) {
		setup_postdata($post);
		get_template_part('template-parts/content', $post->post_type, $post->post_title);
	}
	wp_reset_postdata($post);
}

function i3d_render_related_by_tag_packs($id)
{
	$related_packs = i3d_get_related_packs_by_post_tags($id);
	ob_start();
	i3d_render_related_packs($related_packs);
	return ob_get_clean();
}
