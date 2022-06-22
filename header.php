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
