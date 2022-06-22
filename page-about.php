<?php get_header(); ?>

<div class="container">
	<section class="about">
		<div class="about__wrap wrap">
			<h1 class="about__title h2"><?php echo the_title(); ?></h1>
			<div class="about__content">
				<?php the_content(); ?>
			</div>
			<div class="about__row flex flex_vertical flex_justify">
				<div class="about__column about__column_left">
					<div class="about__list">
						<div class="about__item item-about is-active js-item-about">
							<div class="item-about__icon">
								<svg class="icon icon-check" viewBox="0 0 16 16">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#check"></use>
								</svg>
							</div>
							<div class="item-about__wrap">
								<div class="item-about__title h5">3 Camera angles</div>
								<div class="item-about__text color-gray content">
									Use the camera angle you want, so that the icon looks
									<br>
									great in any scene.
								</div>
							</div>
						</div>
						<div class="about__item item-about js-item-about">
							<div class="item-about__icon">
								<svg class="icon icon-check" viewBox="0 0 16 16">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#check"></use>
								</svg>
							</div>
							<div class="item-about__wrap">
								<div class="item-about__title h5">Extra glossy style</div>
								<div class="item-about__text color-gray content">
									You can use two different styles to diversify your
									design.
								</div>
							</div>
						</div>
						<div class="about__item item-about js-item-about">
							<div class="item-about__icon">
								<svg class="icon icon-check" viewBox="0 0 16 16">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#check"></use>
								</svg>
							</div>
							<div class="item-about__wrap">
								<div class="item-about__title h5">Editable colors</div>
								<div class="item-about__text color-gray content">
									Change the color of the icons at any time to match the
									style <br /> of your brand. <a href="#">See how to edit</a>
								</div>
							</div>
						</div>
						<div class="about__item item-about js-item-about">
							<div class="item-about__icon">
								<svg class="icon icon-check" viewBox="0 0 16 16">
									<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#check"></use>
								</svg>
							</div>
							<div class="item-about__wrap">
								<div class="item-about__title h5">High resolution</div>
								<div class="item-about__text color-gray content">
									Icons in high resolution (3000 px) will look great on
									any display.
								</div>
							</div>
						</div>
					</div>
					<div class="about__btn-wrap">
						<a class="about__btn btn" href="#"><span class="btn__text">Explore</span></a>
					</div>
				</div>
				<div class="about__column about__column_right">
					<div class="about__clock">
						<video class="about__video js-video-about is-active js-video" src="<?php echo get_stylesheet_directory_uri(); ?>/app/video/3-cameras.mp4" loop="loop" autoplay="autoplay" muted="muted"></video><video class="about__video js-video-about js-video" src="<?php echo get_stylesheet_directory_uri(); ?>/app/video/Glossy-style.mp4" loop="loop" autoplay="autoplay" muted="muted"></video><video class="about__video js-video-about js-video" src="<?php echo get_stylesheet_directory_uri(); ?>/app/video/Editable-colors.mp4" loop="loop" autoplay="autoplay" muted="muted"></video><video class="about__video js-video-about js-video" src="<?php echo get_stylesheet_directory_uri(); ?>/app/video/High-resolution.mp4" loop="loop" autoplay="autoplay" muted="muted"></video>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
