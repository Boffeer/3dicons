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
