<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package i3d
 */

if (!function_exists('i3d_posted_on')) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function i3d_posted_on()
	{
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if (get_the_time('U') !== get_the_modified_time('U')) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr(get_the_date(DATE_W3C)),
			esc_html(get_the_date()),
			esc_attr(get_the_modified_date(DATE_W3C)),
			esc_html(get_the_modified_date())
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x('Posted on %s', 'post date', 'i3d'),
			'<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('i3d_posted_by')) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function i3d_posted_by()
	{
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x('by %s', 'post author', 'i3d'),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if (!function_exists('i3d_entry_footer')) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function i3d_entry_footer()
	{
		// Hide category and tag text for pages.
		if ('post' === get_post_type()) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list(esc_html__(', ', 'i3d'));
			if ($categories_list) {
				/* translators: 1: list of categories. */
				printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'i3d') . '</span>', $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'i3d'));
			if ($tags_list) {
				/* translators: 1: list of tags. */
				printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'i3d') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'i3d'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Edit <span class="screen-reader-text">%s</span>', 'i3d'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if (!function_exists('i3d_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function i3d_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>

		<?php
		endif; // End is_singular().
	}
endif;

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
	{ ?>
		<?php foreach ($bullets as $bullet) : ?>
			<?php echo do_shortcode($bullet); ?>
	<?php endforeach;
	}
endif;

function i3d_search_start()
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
