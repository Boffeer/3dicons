<?php
get_header();
$page_id = get_the_ID();

$icon = array(
	'id' => carbon_get_the_post_meta('product_id'),
	'pay_status' => carbon_get_the_post_meta('pay_status'),
	'free_bullets' => i3d_explode_textarea(carbon_get_theme_option('free_icons_bullets')),
	'currency' => carbon_get_theme_option('currency_price'),
	'price' => carbon_get_theme_option('icons_price'),
	'thumbs' => carbon_get_the_post_meta('thumbs'),
);

if ($icon['pay_status'] == 'premium') {
	$icon['premium_bullets'] = i3d_explode_textarea(carbon_get_theme_option('premium_icons_bullets'));
}

?>
<div class="container">
	<section class="card">
		<div class="card__wrap wrap">
			<a class="card__link arrow-link arrow-link_back" href="<?php echo esc_url(get_post_type_archive_link($post_type)) ?>"><span class="arrow-link__text"> Back to icons</span><span class="arrow-link__icon"><svg class="icon icon-arrowRight" viewBox="0 0 24 24">
						<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowRight"></use>
					</svg></span></a>
			<div class="card__row flex">
				<div class="card__column card__column_left flex flex_vertical flex_center">
					<div class="card__gallery js-gallery">
						<div class="card__title h5"><?php echo the_title(); ?></div>
						<div class="card__slider">
							<div class="card__slide js-slide">
								<div class="card__img">
									<picture>
										<!-- <source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack__img264.webp" /> -->
										<img src="<?php echo esc_url((wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'medium')[0])) ?>" />
									</picture>
								</div>
								<div class="card__caption color-gray h6">
									Perspective / Matte
								</div>
							</div>
							<?php if ($icon['thumbs']) : ?>
								<?php foreach ($icon['thumbs'] as $thumb) : ?>
									<div class="card__slide js-slide">
										<div class="card__img">
											<picture>
												<!-- <source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack__img264-2.webp" /> -->
												<img src="<?php echo esc_url((wp_get_attachment_image_src($thumb['image'], 'medium')[0])) ?>" />
											</picture>
										</div>
										<div class="card__caption color-gray h6">
											<?php echo $thumb['name'] ?>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<?php if ($icon['thumbs']) : ?>
							<div class="card__thumbnails flex flex_center">
								<div class="card__preview is-active js-preview">
									<picture>
										<!-- <source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack__img48.webp" /> -->
										<img src="<?php echo esc_url((wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'thumbnail')[0])) ?>" />
									</picture>
								</div>
								<?php foreach ($icon['thumbs'] as $thumb) : ?>
									<div class="card__preview js-preview">
										<picture>
											<!-- <source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack__img48.webp" /> -->
											<img src="<?php echo esc_url((wp_get_attachment_image_src($thumb['image'], 'thumbnail')[0])) ?>" />
										</picture>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="card__column card__column_right">
					<div class="card__sidebar">
						<?php if ($icon['pay_status'] == 'premium') : ?>
							<div class="card__box">
								<h3 class="card__box-title h5 color-blue">
									Premium version
								</h3>
								<div class="card__list">
									<?php i3d_get_bullets($icon['premium_bullets']); ?>
								</div>
								<a href="https://payhip.com/b/<?php echo $icon['id']; ?>" data-product="<?php echo $icon['id']; ?>" data-theme="none" class="card__btn btn js-modal payhip-buy-button">
									<span class="btn__text">Add to cart <?php echo $icon['currency']; ?> <?php echo $icon['price']; ?></span></a>
							</div>
						<?php endif; ?>
						<div class="card__box">
							<h3 class="card__box-title h5">Free version</h3>
							<div class="card__list">
								<?php i3d_get_bullets($icon['free_bullets']); ?>
							</div>
							<a class="card__btn btn btn_border js-show-popup" href="#cart"><span class="btn__text">Free download</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="recommend-list">
		<div class="recommend-list__wrap wrap">
			<div class="recommend-list__header flex flex_justify">
				<div class="recommend-list__cell recommend-list__cell_title">
					<h2 class="recommend-list__title h3">Related icon packs</h2>
				</div>
				<div class="recommend-list__cell recommend-list__cell_nav">
					<a class="recommend-list__link arrow-link" href="#"><span class="arrow-link__text"> All icon packs</span><span class="arrow-link__icon"><svg class="icon icon-arrowRight" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowRight"></use>
							</svg></span></a>
				</div>
			</div>
			<div class="recommend-list__list flex">
				<div class="recommend-list__item item-pack">
					<div class="item-pack__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/pack.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-pack__gallery flex flex_vertical">
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
					</div>
					<div class="item-pack__bottom flex flex_center small">
						<div class="item-pack__name">Analytics</div>
						<div class="item-pack__count">20 icons</div>
					</div>
				</div>
				<div class="recommend-list__item item-pack">
					<div class="item-pack__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/pack.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-pack__gallery flex flex_vertical">
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
					</div>
					<div class="item-pack__bottom flex flex_center small">
						<div class="item-pack__name">Analytics</div>
						<div class="item-pack__count">20 icons</div>
					</div>
				</div>
				<div class="recommend-list__item item-pack">
					<div class="item-pack__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/pack.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-pack__gallery flex flex_vertical">
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
					</div>
					<div class="item-pack__bottom flex flex_center small">
						<div class="item-pack__name">Analytics</div>
						<div class="item-pack__count">20 icons</div>
					</div>
				</div>
				<div class="recommend-list__item item-pack">
					<div class="item-pack__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/pack.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-pack__gallery flex flex_vertical">
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-1.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-2.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-3.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-4.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-5.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
						<div class="item-pack__image">
							<div class="item-pack__placeholder">
								<picture>
									<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.webp" />
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/pack-6.png" alt="" role="presentation" />
								</picture>
							</div>
						</div>
					</div>
					<div class="item-pack__bottom flex flex_center small">
						<div class="item-pack__name">Analytics</div>
						<div class="item-pack__count">20 icons</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
