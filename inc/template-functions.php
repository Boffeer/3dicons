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
add_filter('get_search_form', 'i3d_search_form_togglable');
function i3d_search_form_togglable($form)
{
	$form = '
		<form class="hello-screen__search search js-without-validation" action="' . home_url('/') . '">
			<div class="search__row">
				<div class="search__cell search__cell_nav">
					<div class="search__select js-select select">
						<input class="select__input js-select-input" type="hidden" name="type" value="all" />
						<div class="select__header js-select-head">
							<div class="select__name js-select-label">All assets</div>
							<div class="select__arrow">
								<svg class="icon icon-arrow" viewBox="0 0 12 12">
									<use xlink:href="' . get_stylesheet_directory_uri() . '/app/icons/sprite.svg#arrow"></use>
								</svg>
							</div>
						</div>
						<div class="select__dropdown">
							<ul class="select__list">
								<li class="select__item js-select-option" data-value="all">
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
							<use xlink:href="' . get_stylesheet_directory_uri() . '/app/icons/sprite.svg#loupe"></use>
						</svg>
					</button>
				</div>
			</div>
			<div class="search__tags h6">
				<span class="search__label color-gray">Popular:</span><a class="search__tag" href="#">Instagram, </a><a class="search__tag" href="#">Bitcoin, </a><a class="search__tag" href="#">Phone, </a><a class="search__tag" href="#">Car, </a><a class="search__tag" href="#">Crypto, </a><a class="search__tag" href="#">Design, </a><a class="search__tag" href="#">Laptop</a>
			</div>
		</form>';
	return $form;
}
