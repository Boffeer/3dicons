<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package i3d
 */


if (!function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
endif;

if (!function_exists('i3d_get_bullets')) :
	/**
	 * Prints product page bullets
	 */
	function i3d_get_bullets($bullets)
	{
		ob_start(); ?>
		<?php foreach ($bullets as $bullet) : ?>
			<div class="card__item">
				<?php echo do_shortcode($bullet) . '</span>'; /* Closing tag to bullet content */ ?>
			</div>
	<?php endforeach;
		return ob_get_clean();
	}
endif;

function i3d_search_block_start()
{
	ob_start();
	?>
	<form class="hello-screen__search search js-without-validation" action="<?php echo home_url('/'); ?>">
		<div class="search__row">
			<div class="search__cell search__cell_nav">
				<div class="search__select js-select select">
					<input class="select__input js-select-input" type="hidden" name="post_type" value="icon+packs" />
					<div class="select__header js-select-head">
						<div class="select__name js-select-label">All assets</div>
						<div class="select__arrow">
							<svg class="icon icon-arrow" viewBox="0 0 12 12">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrow"></use>
							</svg>
						</div>
					</div>
					<div class="select__dropdown">
						<ul class="select__list">
							<li class="select__item js-select-option" data-value="icon+packs">
								All assets
							</li>
							<li class="select__item js-select-option" data-value="icon">
								Icons
							</li>
							<li class="select__item js-select-option" data-value="packs">
								Icon packs
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="search__cell search__cell_field">
				<input class="search__input" name="s" type="text" placeholder="Search from all assets..." /><button class="search__button">
					<svg class="icon icon-loupe" viewBox="0 0 24 24">
						<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#loupe"></use>
					</svg>
				</button>
			</div>
		</div>
		<script>
			window.addEventListener('DOMContentLoaded', (event) => {
				const forms = [...document.querySelectorAll('.hello-screen__search.search')];
				if (forms.length > 0) {
					setTimeout(() => {
						let currentSearchType = '';
						if (window.location.search.includes('post_type=icon&')) {
							forms.forEach(form => {
								const button = form.querySelector('.js-select-option[data-value="icon"]');
								button.click()
							})
						} else if (window.location.search.includes('post_type=packs')) {
							forms.forEach(form => {
								const button = form.querySelector('.js-select-option[data-value="packs"]');
								button.click()
							})
						} else {
							forms.forEach(form => {
								const button = form.querySelector('.js-select-option[data-value="icon+packs"]');
								button.click()
							})
						}
					}, 200)
				}
			});
		</script>
	<?php return ob_get_clean();
}

function i3d_get_search_tags($max)
{
	$popular_tags = carbon_get_theme_option('popular_tags');
	ob_start();

	$tags = array();
	foreach ($popular_tags as $count => $tag) {
		if ($count > $max - 1) return;
		$tags[] = get_tag($tag['id']);
	}
	?>
		<div class="search__tags h6">
			<span class="search__label color-gray">Popular:</span>
			<?php foreach ($tags as $key => $tag) : ?>
				<a class="search__tag" href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name; ?></a>
			<?php endforeach; ?>
			<?php
			$popular_tags = (int)$max - (int)count($tags);
			echo i3d_custom_popular_tags($popular_tags);
			?>
		</div>
	<?php return ob_get_clean();
}
