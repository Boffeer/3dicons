<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package i3d
 */

get_header();
?>

<div class="container">
	<div class="hello-screen__inner">
		<section class="hello-screen">
			<div class="hello-screen__wrap wrap">
				<div class="hello-screen__inner">
					<div class="hello-screen__content content content_gray h5">
						<h1>
							<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'i3d'); ?>
						</h1>
						<p>
							<?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'i3d'); ?>
						</p>
					</div>
					<?php echo get_search_form(); ?>
				</div>
			</div>
		</section>
	</div>
</div>



<?php
get_footer();
