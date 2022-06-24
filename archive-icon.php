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
						<a class="switcher__link" href="<?php echo esc_url(get_post_type_archive_link('packs')); ?>">Icon packs</a>
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
					<a class="recommend-list__link arrow-link" href="<?php echo esc_url(get_post_type_archive_link('packs')) ?>"><span class="arrow-link__text"> All icon packs</span><span class="arrow-link__icon"><svg class="icon icon-arrowRight" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/app/icons/sprite.svg#arrowRight"></use>
							</svg></span></a>
				</div>
			</div>
			<div class="recommend-list__list flex">
				<?php
				$trending_packs = carbon_get_theme_option('trending_packs');
				i3d_the_crb_posts($trending_packs);
				?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
