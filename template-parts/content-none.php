<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package i3d
 */

?>


<div class="search-result__wrap wrap">
	<?php if (is_search()) :
	?>
		<h2 class="search-result__title h3">
			<?php printf(esc_html__('Search results for: %s', 'i3d'), '<span class="color-blue">' . get_search_query() . '</span>'); ?>
		</h2>
	<?php endif;
	?>
	<div class="search-result__text h4">
		Sorry, nothing found ... Please try other keywords
	</div>
</div>
</section>

<section class="popular-keywords">
	<div class="popular-keywords__wrap wrap">
		<h2 class="popular-keywords__title h3">Popular keywords</h2>
		<?php echo i3d_get_no_result_search_tags(42); ?>
	</div>
