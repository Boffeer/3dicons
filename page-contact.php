<?php get_header(); ?>

<div class="container">
	<section class="contact">
		<div class="contact__wrap wrap">
			<div class="contact__row flex flex_vertical flex_justify">
				<div class="contact__column contact__column_left">
					<h1 class="contact__title h2">Contact</h1>
					<div class="contact__desc color-gray h5">
						If you have any questions or suggestions, <br />we would be
						happy to chat with you.
					</div>
					<form class="contact__form form" action="<?php echo get_stylesheet_directory_uri(); ?>/app/mail/">
						<div class="form__field field">
							<input class="field__input" type="text" name="name" placeholder="Your name" />
						</div>
						<div class="form__field field">
							<input class="field__input" type="email" name="email" placeholder="Your e-mail" />
						</div>
						<div class="form__field field">
							<textarea class="field__textarea" placeholder="Your question" name="question"></textarea>
						</div>
						<button class="form__btn btn">
							<span class="btn__text">Send</span>
						</button>
					</form>
				</div>
				<div class="contact__column contact__column_right">
					<div class="contact__img">
						<video class="contact__video js-video js-video-no-loop" src="<?php echo get_stylesheet_directory_uri(); ?>/app/video/Contact.mp4" autoplay="autoplay" muted="muted"></video>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
