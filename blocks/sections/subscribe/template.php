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
					<?php echo do_shortcode('[ninja_form id=2]') ?>
				</div>
			</div>
		</div>
	</div>
</section>