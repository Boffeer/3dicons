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
	$form = i3d_search_start();
	$form .= i3d_get_search_tags(42);
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
		'<span class="pagination__button"',
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
		'<li>',
		'<a href',
	];
	$replace = [
		'<ul class="popular-keywords__list flex">',
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

// add_action('after_setup_theme', 'water_mark');
// function themename_watermark()
// {
// 	add_image_size('watermarked', 500, 650, true);
// }


// #region watermark
add_filter('wp_generate_attachment_metadata', 'water_mark', 10, 2);
// https://stackoverflow.com/questions/12388796/adding-watermarking-to-wordpress-function-php
function water_mark($meta, $id)
{

	if (!isset($meta['sizes'])) {
		return $meta;
	}

	$upload_path = wp_upload_dir();
	$path = $upload_path['basedir'];

	//handle the different media upload directory structures
	if (isset($path)) {
		$file = trailingslashit($upload_path['basedir'] . '/') . $meta['file'];
		// $water_path = trailingslashit($upload_path['basedir'] . '/') . 'watermark.png';
		$water_path = wp_upload_dir()['baseurl'] . '/watermarks/' . mt_rand(1, 3)  . '-' . mt_rand(1, 3) . '.png';
	} else {
		$file = trailingslashit($upload_path['path']) . $meta['file'];
		// $water_path = trailingslashit($upload_path['path']) . 'watermarks/2-2.png';
		$water_path = wp_upload_dir()['baseurl'] . '/watermarks/' . mt_rand(1, 3)  . '-' . mt_rand(1, 3) . '.png';
	}

	//list original image dimensions
	list($orig_w, $orig_h, $orig_type) = @getimagesize($file);

	//load watermark - list its dimensions
	$watermark = imagecreatefrompng($water_path);
	list($wm_width, $wm_height, $wm_type) = @getimagesize($water_path);

	//if your watermark is a transparent png uncomment below
	imagealphablending($watermark, 1);
	imagesavealpha($watermark, true);

	//load fullsize image
	$image = wp_load_image($file);

	//if your watermark is a transparent png uncomment below
	imagealphablending($image, 1);
	imagesavealpha($image, true);

	//greyscale image
	// imagefilter($image, IMG_FILTER_GRAYSCALE);

	//create merged copy
	//if your watermark is a transparent png uncomment below
	imagecopy($image, $watermark, $orig_w - ($wm_width - 9), $orig_h - ($wm_height - 9), 0, 0, $wm_width, $wm_height);

	//if your watermark is a transparent png comment out below
	// imagecopymerge($image, $watermark, $orig_w - ($wm_width + 10), $orig_h - ($wm_height + 10), 0, 0, $wm_width, $wm_height, 70);

	//save image backout
	switch ($orig_type) {
		case IMAGETYPE_GIF:
			imagegif($image, $file);
			break;
		case IMAGETYPE_PNG:
			imagepng($image, $file, 9);
			break;
		case IMAGETYPE_JPEG:
			imagejpeg($image, $file, 95);
			break;
	}

	imagedestroy($watermark);
	imagedestroy($image);

	//return metadata info
	wp_update_attachment_metadata($id, $meta);
	return $meta;
}

function i3d_get_thumb($id)
{
	if ($id == get_the_ID()) {
		return wp_get_attachment_image_src(get_post_thumbnail_id($id), 'medium');
	} else {
		return wp_get_attachment_image_src($id, 'medium');
	}
}
function i3d_watermarked_url($url, $sizes)
{
	return str_replace("-{$sizes['w']}x{$sizes['h']}", '', $url);
}
function i3d_watermarked_url_by_id($id)
{
	$image = i3d_get_thumb($id);
	$url = $image[0];
	$sizes = array(
		'w' => $image[1],
		'h' => $image[2]
	);
	return esc_url(i3d_watermarked_url($url, $sizes)) . '?' . $sizes['w'] . 'x' . $sizes['h'];
}
// #endregion watermark
