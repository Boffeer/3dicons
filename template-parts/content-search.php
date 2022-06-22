<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package i3d
 */

?>

<div class="icons-list__item item-icon" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="item-icon__nav nav-item">
		<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
			</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
				<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
			</svg></a>
	</div>
	<div class="item-icon__preview">
		<picture>
			<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1-big.webp" />
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1-big.png" class="item-icon__icon" alt="" role="presentation" />
		</picture>
	</div>
	<div class="item-icon__name small">
		<?php the_title(); ?>
	</div>
</div>
