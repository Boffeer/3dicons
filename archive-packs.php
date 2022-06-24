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
						This is a collection of free, beautiful, trending 3D icons,
						that you can use <br />
						in your website, app or in any project. Search and click to
						download.
					</p>
				</div>
				<form class="hello-screen__search js-without-validation search" action="">
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
					<div class="search__tags h6">
						<span class="search__label color-gray">Popular:</span><a class="search__tag" href="#">Instagram, </a><a class="search__tag" href="#">Bitcoin, </a><a class="search__tag" href="#">Phone, </a><a class="search__tag" href="#">Car, </a><a class="search__tag" href="#">Crypto, </a><a class="search__tag" href="#">Design, </a><a class="search__tag" href="#">Laptop</a>
					</div>
				</form>
				<div class="hello-screen__bottom">
					<div class="hello-screen__switcher switcher">
						<a class="switcher__link" href="<?php echo esc_url(get_post_type_archive_link('icon')); ?>">Icons</a><span class="switcher__link is-active">Icon packs</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="icons-list icons-list_packs">
		<div class="icons-list__wrap wrap">
			<div class="icons-list__row flex">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php
						the_post();
						get_template_part('template-parts/content', get_post_type());
						?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="icons-list__bottom">
				<div class="icons-list__pagination flex pagination">
					<a class="pagination__button pagination__button_prev" href="#"><svg class="icon icon-arrowLeft" viewBox="0 0 9 6">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowLeft"></use>
						</svg></a><a class="pagination__button" href="#">1</a><a class="pagination__button" href="#">2</a><a class="pagination__button is-active" href="#">3</a><span class="pagination__button">...</span><a class="pagination__button" href="#">10</a><a class="pagination__button pagination__button_next" href="#"><svg class="icon icon-arrowLeft" viewBox="0 0 9 6">
							<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowLeft"></use>
						</svg></a>
				</div>
			</div>
		</div>
	</section>
	<section class="recommend-list">
		<div class="recommend-list__wrap wrap">
			<div class="recommend-list__header flex flex_justify">
				<div class="recommend-list__cell recommend-list__cell_title">
					<h2 class="recommend-list__title h3">Trending icons</h2>
				</div>
				<div class="recommend-list__cell recommend-list__cell_nav">
					<a class="recommend-list__link arrow-link" href="<?php echo esc_url(get_post_type_archive_link('icon')) ?>"><span class="arrow-link__text"> All icons</span><span class="arrow-link__icon"><svg class="icon icon-arrowRight" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowRight"></use>
							</svg></span></a>
				</div>
			</div>
			<div class="recommend-list__list flex">
				<?php
				$trending_icons = carbon_get_theme_option('trending_icons');
				i3d_the_crb_posts($trending_icons);
				?>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
