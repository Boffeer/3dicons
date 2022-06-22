<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package i3d
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script>
		function canUseWebP() {
			var e = document.createElement("canvas");
			return (
				!(!e.getContext || !e.getContext("2d")) &&
				0 == e.toDataURL("image/webp").indexOf("data:image/webp")
			);
		}
		var root = document.getElementsByTagName("html")[0];
		canUseWebP() ? root.classList.add("ws") : root.classList.add("wn");
	</script>
	<?php wp_head(); ?>
</head>

<body <?php //body_class();
			?>>
	<?php wp_body_open(); ?>

	<main>
		<header class="header">
			<div class="header__wrap wrap wrap_big">
				<div class="header__row flex">
					<div class="header__cell header__cell_logo">
						<a class="header__logo h3 logo" href="#">Free<span class="color-blue">3D</span>icon</a>
					</div>
					<div class="header__cell header__cell_search">
						<form class="header__search js-without-validation search search_small" action="">
							<div class="search__row">
								<div class="search__cell search__cell_nav">
									<div class="search__select js-select select">
										<input class="select__input js-select-input" type="hidden" name="type" value="all" />
										<div class="select__header js-select-head">
											<div class="select__name js-select-label">
												All assets
											</div>
											<div class="select__arrow">
												<svg class="icon icon-arrow" viewBox="0 0 12 12">
													<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrow"></use>
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
											<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#loupe"></use>
										</svg>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="header__cell header__cell_menu">
						<ul class="header__menu flex little-menu">
							<li class="little-menu__item">
								<a class="little-menu__link" href="#"> Explore</a>
							</li>
							<li class="little-menu__item">
								<a class="little-menu__link" href="#"> About</a>
							</li>
							<li class="little-menu__item">
								<a class="little-menu__link" href="#"> Contact</a>
							</li>
							<li class="little-menu__item">
								<a class="little-menu__link" href="#"> License</a>
							</li>
						</ul>
					</div>
					<div class="header__cell header__cell_nav">
						<div class="header__burger js-burger">
							<div class="header__burger-line"></div>
							<div class="header__burger-line"></div>
							<div class="header__burger-line"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="header__mobile mobile js-mobile">
				<div class="mobile__wrap wrap wrap_big">
					<ul class="mobile__nav">
						<li class="mobile__item">
							<a class="mobile__link" href="#"> Explore</a>
						</li>
						<li class="mobile__item">
							<a class="mobile__link" href="#"> About</a>
						</li>
						<li class="mobile__item">
							<a class="mobile__link" href="#"> Contact</a>
						</li>
						<li class="mobile__item">
							<a class="mobile__link" href="#"> License</a>
						</li>
					</ul>
					<div class="mobile__copyright color-gray">
						© 2022, Free3Dicon LLC.
					</div>
				</div>
			</div>
		</header>
