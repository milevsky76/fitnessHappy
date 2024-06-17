<?php
/**
 * Block Real-results.
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

<section class="real-results">
	<div class="container">
		<div class="real-results__content">
			<div class="real-results__left">
				<div class="real-results__slider-1">
					<div class="swiper slider-ba-text">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<h2 class="real-results__title">Real Women, <br> Real Results1</h2>
								<div class="real-results__subtext">I believe when you truly commit to making a change, you will see results</div>
							</div>
							<div class="swiper-slide">
								<h2 class="real-results__title">Real Women, <br> Real Results2</h2>
								<div class="real-results__subtext">I believe when you truly commit to making a change, you will see results</div>
							</div>
							<div class="swiper-slide">
								<h2 class="real-results__title">Real Women, <br> Real Results3</h2>
								<div class="real-results__subtext">I believe when you truly commit to making a change, you will see results</div>
							</div>
						</div>
						
						<div class="navigation">
							<button class="swiper-button-prev" type="button">
								<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m.856 10.43 8.559-8.581a.977.977 0 0 1 1.383 1.38l-8.56 8.58c-.381.381-.381 1 0 1.383l8.56 8.58a.977.977 0 1 1-1.383 1.38l-8.558-8.58a2.933 2.933 0 0 1-.001-4.143Z"></path><path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"></path></svg>
							</button>
							<div class="swiper-pagination"></div>
							<button class="swiper-button-next" type="button">
								<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-opacity=".5" d="m24.144 10.429-8.559-8.58a.977.977 0 0 0-1.383 1.379l8.56 8.581c.381.38.381 1 0 1.382l-8.56 8.58a.977.977 0 1 0 1.383 1.38l8.558-8.58a2.933 2.933 0 0 0 .001-4.142Z"></path><path fill-opacity=".5" d="M18.702 11.523H.977a.977.977 0 0 0 0 1.954h17.725a.977.977 0 1 0 0-1.954Z"></path></svg>
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="real-results__right">
				<div class="real-results__slider-2">
					<div class="swiper slider-ba-image">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="real-results__slider-inner">
									<div class="before">
										<img src="/wp-content/themes/testproject/resources/images/previews/real-results-1-1.jpg" alt="">
									</div>
									<div class="after">
										<img src="/wp-content/themes/testproject/resources/images/previews/real-results-1-2.jpg" alt="">
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="real-results__slider-inner">
									<div class="before">
										<img src="/wp-content/themes/testproject/resources/images/previews/real-results-2-1.jpg" alt="">
									</div>
									<div class="after">
										<img src="/wp-content/themes/testproject/resources/images/previews/real-results-2-2.jpg" alt="">
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="real-results__slider-inner">
									<div class="before">
										<img src="/wp-content/themes/testproject/resources/images/previews/real-results-1-1.jpg" alt="">
									</div>
									<div class="after">
										<img src="/wp-content/themes/testproject/resources/images/previews/real-results-1-2.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Swiper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->