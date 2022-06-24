<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package i3d
 */

?>

<?php $id = carbon_get_the_post_meta('product_id'); ?>

<?php if ($post->post_type == 'icon') : ?>
	<?php $thumb = esc_url((wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'thumbnail')[0])) ?>
	<div id="post-<?php the_ID(); ?>" class="icons-list__item item-icon">
		<div class="item-icon__nav nav-item">
			<a class="nav-item__button nav-item__button_eye" href="<?php echo esc_url(the_permalink()); ?>"><svg class="icon icon-eye" viewBox="0 0 24 24">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
				</svg></a><a class="nav-item__button nav-item__button_basket" href="https://payhip.com/b/<?php echo $id; ?>" data-product="<?php echo $icon['id']; ?>" data-theme="none"><svg class="icon icon-basket" viewBox="0 0 24 22">
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
<?php elseif ($post->post_type === 'packs') : ?>
	<?php
	$pack = array(
		'id' => carbon_get_the_post_meta('product_id'),
		'icons' => carbon_get_the_post_meta('pack_icons'),
		'currency' => carbon_get_theme_option('currency_price'),
		'title' => $post->post_title
	);
	?>
	<div class="icons-list__item item-pack">
		<div class="item-pack__nav nav-item">
			<a class="nav-item__button nav-item__button_eye" href="<?php echo esc_url(get_the_permalink()); ?>"><svg class="icon icon-eye" viewBox="0 0 24 24">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
				</svg></a><a class="nav-item__button nav-item__button_basket" href="https://payhip.com/b/<?php echo $pack['id']; ?>" data-product="<?php echo $icon['id']; ?>" data-theme="none"><svg class="icon icon-basket" viewBox="0 0 24 22">
					<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
				</svg></a>
		</div>
		<div class="item-pack__gallery flex flex_vertical">
			<?php
			$pack_icons = array();
			foreach ($pack['icons'] as $icon) {
				$pack_icons[] = $icon['id'];
			}

			global $post;
			$pack_icons = get_posts(array(
				'numberposts' => 6,
				'post_type'   => 'icon',
				'include' => $pack_icons,
				'suppress_filters' => true,
			));
			?>
			<?php foreach ($pack_icons as $post) : ?>
				<?php setup_postdata($post); ?>
				<div class="item-pack__image">
					<div class="item-pack__placeholder">
						<picture>
							<!-- <source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.webp" /> -->
							<img src="<?php echo esc_url((wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'thumbnail')[0])) ?>" alt="<?php the_title(); ?>" role="presentation" />
						</picture>
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<div class="item-pack__bottom flex flex_center small">
			<div class="item-pack__name"><?php echo $pack['title'];
																		?></div>
			<div class="item-pack__count"><?php echo count($pack['icons']); ?></div>
		</div>
	</div>
<?php endif; ?>
