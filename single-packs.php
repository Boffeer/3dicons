<?php get_header();

$pack = array(
	'id' => carbon_get_the_post_meta('product_id'),
	'price' => carbon_get_the_post_meta('pack_price'),
	'icons' => carbon_get_the_post_meta('pack_icons'),
	'currency' => carbon_get_theme_option('currency_price'),
);
?>
<div class="container">
	<section class="pack-head">
		<div class="pack-head__wrap wrap">
			<div class="pack-head__row flex flex_justify flex_bottom">
				<div class="pack-head__column pack-head__column_left">
					<a class="pack-head__link arrow-link arrow-link_back" href="<?php echo home_url('/'); ?>?post_type=packs"><span class="arrow-link__text"> Back to packs</span><span class="arrow-link__icon"><svg class="icon icon-arrowRight" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowRight"></use>
							</svg></span></a>
					<div class="pack-head__name">
						<h1 class="pack-head__title h2"><?php the_title(); ?></h1>
						<div class="pack-head__counter">
							<?php echo i3d_get_word_form(count($pack['icons']), array('icon', 'icons')); ?>
						</div>
					</div>
				</div>
				<div class="pack-head__column pack-head__column_right">
					<a class="pack-head__btn btn js-show-popup payhip-add-to-cart-button" href="https://payhip.com/b/<?php echo $pack['id']; ?>" data-product="<?php echo $icon['id']; ?>" data-theme="none"><span class="btn__text">Add this pack to cart <?php echo $pack['currency']; ?><?php echo $pack['price']; ?></span></a>
				</div>
			</div>
		</div>
	</section>
	<section class="icons-list">
		<div class="icons-list__wrap wrap">
			<div class="icons-list__row flex">
				<?php
				$pack_icons = array();
				foreach ($pack['icons'] as $icon) {
					$pack_icons[] = $icon['id'];
				}

				global $post;
				$pack_icons = get_posts(array(
					'numberposts' => -1,
					'post_type'   => 'icon',
					'include' => $pack_icons,
					'suppress_filters' => true,
				));
				foreach ($pack_icons as $post) :
					setup_postdata($post);
					get_template_part('template-parts/content', 'icon');
				endforeach;
				wp_reset_postdata();
				?>
			</div>
			<div class="icons-list__bottom">
				<?php echo i3d_custom_pagination(); ?>
			</div>
		</div>
	</section>

	<?php $related_packs = i3d_render_related_by_tag_packs(get_the_id()); ?>
	<?php if ($related_packs) : ?>
		<section class="recommend-list">
			<div class="recommend-list__wrap wrap">
				<div class="recommend-list__header flex flex_justify">
					<div class="recommend-list__cell recommend-list__cell_title">
						<h2 class="recommend-list__title h3">Related icon packs</h2>
					</div>
					<div class="recommend-list__cell recommend-list__cell_nav">
						<a class="recommend-list__link arrow-link" href="<?php echo esc_url(get_post_type_archive_link('packs')) ?>"><span class="arrow-link__text"> All icon packs</span><span class="arrow-link__icon"><svg class="icon icon-arrowRight" viewBox="0 0 24 24">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowRight"></use>
								</svg></span></a>
					</div>
				</div>
				<div class="recommend-list__list flex">
					<?php echo $related_packs; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
