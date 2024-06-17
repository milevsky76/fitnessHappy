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

?>

<section class="testimonials">
	<div class="container">
		<h2 class="testimonials__title">Testimonials</h2>

		<ul class="testimonials__list">
			<li class="testimonials__item">
				<a class="testimonials__link js-button-play-video-local" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-video-local" 
					data-local-video-poster="/wp-content/themes/testproject/resources/images/previews/office-poster.jpg"
					data-local-video-src="/wp-content/themes/testproject/resources/images/previews/office.mp4" aria-label="Play">
					<img class="testimonials__image" src="/wp-content/themes/testproject/resources/images/previews/testimonials-1.jpg" alt="">

					<span class="testimonials__button-play icon-wrap">
						<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M9.966 6.012v37.981c0 .904.959 1.485 1.76 1.067l36.239-18.926c.86-.45.861-1.68.002-2.131L11.73 4.947a1.203 1.203 0 0 0-1.763 1.065Z"></path></svg>
					</span>
				</a>
			</li>

			<li class="testimonials__item">
				<a class="testimonials__link js-button-play-youtube" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-video-youtube" data-youtube-id="S2ihdoT2noo" aria-label="Play">
					<img class="testimonials__image" src="/wp-content/themes/testproject/resources/images/previews/testimonials-2.jpg" alt="">

					<span class="testimonials__button-play icon-wrap">
						<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M9.966 6.012v37.981c0 .904.959 1.485 1.76 1.067l36.239-18.926c.86-.45.861-1.68.002-2.131L11.73 4.947a1.203 1.203 0 0 0-1.763 1.065Z"></path></svg>
					</span>
				</a>
			</li>

			<li class="testimonials__item">
				<a class="testimonials__link js-button-play-youtube" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-video-youtube" data-youtube-id="BBsITpXLdcE" aria-label="Play">
					<img class="testimonials__image" src="/wp-content/themes/testproject/resources/images/previews/testimonials-3.jpg" alt="">
					
					<span class="testimonials__button-play icon-wrap">
						<svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M9.966 6.012v37.981c0 .904.959 1.485 1.76 1.067l36.239-18.926c.86-.45.861-1.68.002-2.131L11.73 4.947a1.203 1.203 0 0 0-1.763 1.065Z"></path></svg>
					</span>
				</a>
			</li>
		</ul>
	</div>
</section>