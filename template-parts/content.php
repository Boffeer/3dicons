<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package i3d
 */

?>

<?php $icon_id = carbon_get_the_post_meta('product_id'); ?>
<?php $thumb = esc_url((wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'thumbnail')[0])) ?>
<?php if ($thumb) : ?>
	<div id="post-<?php the_ID(); ?>" class="icons-list__item item-icon">
		<div class="item-icon__nav nav-item">
			<a class="nav-item__button nav-item__button_eye" href="<?php echo esc_url(the_permalink()); ?>"><svg class="icon icon-eye" viewBox="0 0 24 24">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
				</svg></a><a class="nav-item__button nav-item__button_basket" href="https://payhip.com/b/<?php echo $icon_id; ?>"><svg class="icon icon-basket" viewBox="0 0 24 22">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
				</svg></a>
		</div>
		<div class="item-icon__preview">
			<picture>
				<!-- <source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.webp" /> -->

				<img src="<?php echo $thumb; ?>" class="item-icon__icon" alt="<?php the_title(); ?>" role="presentation" />
			</picture>
		</div>
		<div class="item-icon__name small"><?php the_title(); ?></div>
	</div>
<?php endif; ?>
