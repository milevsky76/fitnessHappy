<?php
/**
 * Block Subscribe.
 *
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var bool $is_preview True during AJAX preview.
 * @var $post_id (int|string) The post ID this block is saved to.
 */

/**
 * Block preview image
 */
if ( isset( $block['data']['block_preview_images'] ) ) {
	hm_get_template_part_with_params( 'fragments/block-preview-image', ['block' => $block] );
	return;
}

/**
 * Block Variables
 */

?>

<section class="subscribe">
	<div class="container">
		<div class="subscribe__content">
			<div class="subscribe__left">
				<div class="subscribe__text">Sign up to receive exclusive access to workout and wellness inspiration, meal prep tips, recipes, and more</div>
			</div>

			<div class="subscribe__right">
				<div class="subscribe__wrap-form">
					<form class="form form--inverse form-subscribe" name="form-subscribe" method="post">
						<div class="form__field">
							<input class="form__input" id="email" name="email" type="email" autocomplete="email" required="">
							<label class="form__label" for="email">Enter your email</label>
						</div>

						<div class="form__field">
							<button class="form__button button button--inverse" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>