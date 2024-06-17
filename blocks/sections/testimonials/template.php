<?php
/**
 * Block Testimonials.
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
$section_title = get_field( 'section_title' );
$testimonials_buttons = get_field( 'testimonials_buttons_buttons_generator' );
?>

<section class="testimonials">
	<div class="container">
		<?php if ( !empty( $section_title ) ) : ?>
			<h2 class="testimonials__title"><?= apply_filters( 'the_content', $section_title ) ?></h2>
		<?php endif; ?>

		<?php if (!empty($testimonials_buttons)) : ?>
			<ul class="testimonials__list">
				<?php foreach ($testimonials_buttons as $button) : ?>
					<?php
						$button_type = $button['button']['video_popup']['video_type'];
						$background_image = $button['button']['video_popup']['image_poster'];
					?>

					<li class="testimonials__item">
						<? if ( 'youtube' === $button_type ) : ?>
							<a class="testimonials__link js-button-play-youtube" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-video-youtube" data-youtube-id="<?= $button['button']['video_popup']['youtube_link'] ?>" aria-label="Play">
								<img class="testimonials__image" src="<?= esc_url( wp_get_attachment_image_url( $background_image, 'full-hd' ) ) ?>" alt="">
								
								<span class="testimonials__button-play icon-wrap">
									<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M9.966 6.012v37.981c0 .904.959 1.485 1.76 1.067l36.239-18.926c.86-.45.861-1.68.002-2.131L11.73 4.947a1.203 1.203 0 0 0-1.763 1.065Z"></path></svg>
								</span>
							</a>
						<? elseif ( 'self_hosted' === $button_type ) : ?>
							<a class="testimonials__link js-button-play-video-local" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-video-local" 
								data-local-video-poster="<?= esc_url( wp_get_attachment_image_url( $background_image, 'full-hd' ) ) ?>"
								data-local-video-src="<?= wp_get_attachment_url( $button['button']['video_popup']['video_file'] ) ?>" aria-label="Play">
								<img class="testimonials__image" src="<?= esc_url( wp_get_attachment_image_url( $background_image, 'full-hd' ) ) ?>" alt="">

								<span class="testimonials__button-play icon-wrap">
									<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M9.966 6.012v37.981c0 .904.959 1.485 1.76 1.067l36.239-18.926c.86-.45.861-1.68.002-2.131L11.73 4.947a1.203 1.203 0 0 0-1.763 1.065Z"></path></svg>
								</span>
							</a>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>