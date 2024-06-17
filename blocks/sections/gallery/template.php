<?php
/**
 * Block Gallery.
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

<section class="gallery">
	<div class="container">
		<div class="gallery__content">
			<header class="gallery__header">
				<h2 class="gallery__title">Our gallery</h2>
				<span class="gallery__slogon">A fitness training center for <br> women, by women</span>
			</header>

			<div class="gallery__list">
				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image bg-1" src="/wp-content/themes/testproject/resources/images/previews/g-1.jpg" alt="">
					</div>
					<a class="gallery__link" href="" data-bs-toggle="modal" data-bs-target="#modal-image">
						<h3 class="gallery__subtitle">Beginners <br> Welcome</h3>
					</a>
					<span class="gallery__count">2 Photos</span>
				</div>

				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image" src="/wp-content/themes/testproject/resources/images/previews/g-2.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-2.jpg" data-id="2">
						<h3 class="gallery__subtitle">Virtual/Hybrid <br> Training</h3>
					</a>
					<span class="gallery__count">2 Photos</span>
				</div>

				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image bg-3" src="/wp-content/themes/testproject/resources/images/previews/g-3.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-3.jpg" data-id="3">
						<h3 class="gallery__subtitle">Personal <br> Training</h3>
					</a>
					<span class="gallery__count">5 photos</span>
				</div>

				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image" src="/wp-content/themes/testproject/resources/images/previews/g-4.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-4.jpg" data-id="4">
						<h3 class="gallery__subtitle">On-Demand <br> Programs</h3>
					</a>
					<span class="gallery__count">2 Photos</span>
				</div>

				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image" src="/wp-content/themes/testproject/resources/images/previews/g-5.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-5.jpg" data-id="5">
						<h3 class="gallery__subtitle">The mind <br> fitness</h3>
					</a>
					<span class="gallery__count">2 Photos</span>
				</div>

				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image bg-6" src="/wp-content/themes/testproject/resources/images/previews/g-6.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-6.jpg" data-id="6">
						<h3	h3 class="gallery__subtitle">Semi-Private Training <br> for Women</h3>
					</a>
					<span class="gallery__count">2 photos</span>
				</div>

				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image" src="/wp-content/themes/testproject/resources/images/previews/g-7.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-7.jpg" data-id="7">
						<h3 class="gallery__subtitle">Nutrition <br> Program</h3>
					</a>
					<span class="gallery__count">2 Photos</span>
				</div>

				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image" src="/wp-content/themes/testproject/resources/images/previews/g-8.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-8.jpg" data-id="8">
						<h3 class="gallery__subtitle">Co-ed <br> Training</h3>
					</a>
					<span class="gallery__count">2 Photos</span>
				</div>
			
				<div class="gallery__item">
					<div class="gallery__image-wrap">
						<img class="gallery__image bg-9" src="/wp-content/themes/testproject/resources/images/previews/g-9.jpg" alt="">
					</div>
					<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-9.jpg" data-id="9">
						<h3 class="gallery__subtitle">Functional <br> Fitness</h3>
					</a>
					<span class="gallery__count">2 photos</span>
				</div>
			</div>

			<a class="button gallery__button" href="javascript:void(0);">Load More</a>
		</div>
	</div>
</section>