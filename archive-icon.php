<?php get_header(); ?>

<div class="container">
	<div class="background video-background">
		<div class="video-background__el">
			<video class="video-background__video js-video js-video-no-loop" src="<?php echo get_stylesheet_directory_uri(); ?>/app/video/Main-screen.mp4" autoplay="autoplay" muted="muted"></video>
		</div>
	</div>
	<section class="hello-screen">
		<div class="hello-screen__wrap wrap">
			<div class="hello-screen__inner">
				<div class="hello-screen__content content content_gray h5">
					<h1>
						All <span class="color-blue">3D </span>icons you need in one
						place
					</h1>
					<p>
						This is a collection of free, beautiful, trending 3D icons, that
						you can use <br />
						in your website, app or in any project. Search and click to
						download.
					</p>
				</div>
				<?php echo get_search_form(); ?>
				<div class="hello-screen__bottom">
					<div class="hello-screen__switcher switcher">
						<span class="switcher__link is-active">Icons</span>
						<a class="switcher__link" href="/packs.html">Icon packs</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="icons-list">
		<div class="icons-list__wrap wrap">
			<?php if (have_posts()) : ?>
				<div class="icons-list__row flex">
					<?php while (have_posts()) : ?>
						<?php
						the_post();
						get_template_part('template-parts/content', get_post_type());
						?>
					<?php endwhile; ?>
				</div>
				<div class="icons-list__bottom">
					<?php the_posts_navigation(); ?>
					<div class="icons-list__pagination flex pagination">
						<a class="pagination__button pagination__button_prev" href="#"><svg class="icon icon-arrowLeft" viewBox="0 0 9 6">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowLeft"></use>
							</svg></a><a class="pagination__button" href="#">1</a><a class="pagination__button" href="#">2</a><a class="pagination__button is-active" href="#">3</a><span class="pagination__button">...</span><a class="pagination__button" href="#">10</a><a class="pagination__button pagination__button_next" href="#"><svg class="icon icon-arrowLeft" viewBox="0 0 9 6">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowLeft"></use>
							</svg></a>
					</div>
				</div>
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>
		</div>
	</section>
	<section class="recommend-list">
		<div class="recommend-list__wrap wrap">
			<div class="recommend-list__header flex flex_justify">
				<div class="recommend-list__cell recommend-list__cell_title">
					<h2 class="recommend-list__title h3">Trending icon packs</h2>
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
