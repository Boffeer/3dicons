<?php

if (!function_exists('i3d_explode_textarea')) :
	/**
	 * Prints product page bullets
	 */
	function i3d_explode_textarea($input)
	{
		return explode("\n", str_replace("\r", "", $input));
	}
endif;

if (!function_exists('i3d_get_word_form')) :
	/**
	 * Prints product page bullets
	 */
	function i3d_get_word_form($count, $words)
	{
		if ($count > 1) {
			return "{$count} {$words['1']}";
		} else {
			return "{$count} {$words['0']}";
		}
	}
endif;


if (!function_exists('i3d_setup_crb_posts')) :
	/**
	 * Prints crb assosiation posts
	 */
	function i3d_the_crb_posts($posts, $count = -1)
	{
		$include_ids = array();
		$post_type = null;
		foreach ($posts as $item) {
			$include_ids[] = $item['id'];
			if (!$post_type) {
				$post_type = $item['subtype'];
			}
		}

		global $post;
		$posts = get_posts(array(
			'numberposts' => $count,
			'post_type'   => $post_type,
			'include' => $include_ids,
			'suppress_filters' => true,
		));

		foreach ($posts as $post) :
			setup_postdata($post);
			get_template_part('template-parts/content', $post->post_type);
		endforeach;
		wp_reset_postdata();
	}
endif;
