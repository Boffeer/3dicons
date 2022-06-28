<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package i3d
 */

// wp_redirect(esc_url(get_post_type_archive_link('icon')));
// exit;
get_header();
?>

<?php
$paged = (get_query_var('page')) ? get_query_var('page') : 1;
$i3d_post_type = $_GET['post_type'];
if (!$i3d_post_type) {
	$i3d_post_type = 'icon';
}
$args = array(
	'post_type'      => $i3d_post_type,
	'orderby'        => 'date',
	'order'          => 'DESC',
	'paged' => $paged
);
$q = new WP_Query($args);
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $q;
?>

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
						<a href="<?php echo get_home_url() ?>?post_type=icons" class="switcher__link is-active">Icons</a>
						<a href="<?php echo get_home_url() ?>?post_type=packs" class="switcher__link">Icon packs</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="icons-list icons-list--icons">
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
					<?php echo i3d_custom_pagination(); ?>
				</div>
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>
		</div>
	</section>


	<?php echo do_shortcode('[trending type="packs"]'); ?>

</div>

<?php
get_footer();
