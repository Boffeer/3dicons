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
				<?php echo get_search_form(); ?>
				<div class="hello-screen__bottom">
					<div class="hello-screen__switcher switcher">
						<a href="<?php echo get_home_url() ?>?post_type=icon" class="switcher__link">Icons</a>
						<a href="<?php echo get_home_url() ?>?post_type=packs" class="switcher__link  is-active">Icon packs</a>
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
				<?php echo i3d_custom_pagination(); ?>
			</div>
		</div>
	</section>
	<?php echo do_shortcode('[trending]'); ?>
</div>
<?php get_footer(); ?>
