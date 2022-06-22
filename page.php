<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package i3d
 */

get_header();
?>

<div class="container">
	<section class="page">
		<div class="page__wrap wrap">
			<div class="page__inner">
				<h1 class="page__title h1"><?php the_title(); ?></h1>
				<div class="page__content content content_gray">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
