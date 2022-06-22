<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package i3d
 */

?>

<footer class="footer">
	<div class="footer__wrap wrap">
		<div class="footer__row flex flex_vertical">
			<div class="footer__cell footer__cell_logo">
				<a class="footer__logo h3 logo logo_white" href="#">Free<span class="color-blue">3D</span>icon</a>
			</div>
			<div class="footer__cell footer__cell_copy">
				<div class="footer__copy">© 2022, Free3Dicon LLC.</div>
			</div>
			<div class="footer__cell footer__cell_menu">
				<ul class="footer__menu flex little-menu">
					<li class="little-menu__item">
						<a class="little-menu__link" href="#"> License</a>
					</li>
					<li class="little-menu__item">
						<a class="little-menu__link" href="#"> Privacy policy</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="modals modals_thank mfp-hide modal" id="thank">
	<div class="modals__thank">
		<div class="modals__thank-img">
			<picture>
				<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/thank__img.webp" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/thank__img.png" />
			</picture>
		</div>
		<div class="modals__thank-title h2">Thanks for writing!</div>
		<div class="modals__thank-desc color-gray">
			We have already received your message and will reply to you shortly.
		</div>
		<a class="modals__btn btn modals__thank-btn js-close-modal" href="#"><span class="btn__text">Got it</span></a>
	</div>
</div>
</main>

<?php wp_footer(); ?>

</body>

</html>
