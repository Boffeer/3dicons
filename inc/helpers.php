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
