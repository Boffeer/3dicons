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
				<form class="hello-screen__search search" action="">
					<div class="search__row">
						<div class="search__cell search__cell_nav">
							<div class="search__select js-select select">
								<input class="select__input js-select-input" type="hidden" name="type" value="all" />
								<div class="select__header js-select-head">
									<div class="select__name js-select-label">All assets</div>
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
						<a class="switcher__link is-active" href="/main.html">Icons</a><a class="switcher__link" href="/packs.html">Icon packs</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="icons-list">
		<div class="icons-list__wrap wrap">
			<div class="icons-list__row flex">
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Instagram</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Bitcoin</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Dashboard</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Comment</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Instagram</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Bitcoin</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Dashboard</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Comment</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Instagram</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Bitcoin</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Dashboard</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Comment</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Instagram</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Bitcoin</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Dashboard</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Comment</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Instagram</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Bitcoin</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Dashboard</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Comment</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-1.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Instagram</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-2.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Bitcoin</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-3.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Dashboard</div>
				</div>
				<div class="icons-list__item item-icon">
					<div class="item-icon__nav nav-item">
						<a class="nav-item__button nav-item__button_eye" href="/card_paid.html"><svg class="icon icon-eye" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#eye"></use>
							</svg></a><a class="nav-item__button nav-item__button_basket" href="#"><svg class="icon icon-basket" viewBox="0 0 24 22">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#basket"></use>
							</svg></a>
					</div>
					<div class="item-icon__preview">
						<picture>
							<source type="image/webp" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.webp" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/item-icon-4.png" class="item-icon__icon" alt="" role="presentation" />
						</picture>
					</div>
					<div class="item-icon__name small">Comment</div>
				</div>
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
