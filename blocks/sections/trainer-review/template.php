<?php
/**
 * Block Trainer-review.
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

<section class="trainer-review">
	<div class="container">
		<div class="trainer-review__content">
			<div class="trainer-review__info">
				<h2 class="trainer-review__name">Alli Kerr</h2>

				<div class="trainer-review__description short">
					<div class="truncate-text">
						business. Knowing I had more to offer the universe Knowing I had more to offer the universe, I got the crazy idea to open my own brick and mortar fitness business. It was an itch that I had to scratch. In 2010 The Happy Fitness was born.
					</div>
				</div>

				<a class="trainer-review__read-more js-more" href="javascript:void(0);">Read more</a>
				<div class="trainer-review__wrap-buttons">
					<button class="button" type="button">Watch Video of The Bio</button>
					<a class="button button--transparent-inverse" href="javascript:void(0);">Learn More</a>
				</div>

				<div class="wrap-image">
					<img src="/wp-content/themes/testproject/resources/images/previews/trainer.png" alt="">
				</div>
			</div>

			<div class="trainer-review__reviews">
				<h2 class="trainer-review__reviews-title">Hear from the people who know me best</h2>

				<div class="trainer-review__list">

					<div class="swiper slider-review">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="review">
									<div class="review__author">
											<h3 class="review__author-name">Sally Profit1</h3>
											<div class="review__rating">
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
											</div>
									</div>

									<div class="review__comment">
										The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been in different gyms all my life and the Happy Fitness is the best by far. The staff are very knowledgeable about all aspects of exercise and nutrition. Whether you are using the trainers or not, they will always help make sure you are doing the exercises correctly so you get the best benefit and do not hurt yourself. I never thought I would care one way or the other if I was in an all female gym, but now that I am I truly love it. The other aspect I love about this gym is the cleanliness. The staff works very hard keeping the gym orderly and spotless. Check it out...I promise you it won't disappoint!!
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="review">
									<div class="review__author">
											<h3 class="review__author-name">Sally Profit2</h3>
											<div class="review__rating">
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
											</div>
									</div>

									<div class="review__comment">
									The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been in different gyms all my life and the Happy Fitness is the best by far. The staff are very knowledgeable about all aspects of exercise and nutrition. Whether you are using the trainers or not, they will always help make sure you are doing the exercises correctly so you get the best benefit and do not hurt yourself. I never thought I would care one way or the other if I was in an all female gym, but now that I am I truly love it. The other aspect I love about this gym is the cleanliness.
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="review">
									<div class="review__author">
										<h3 class="review__author-name">Sally Profit3</h3>
										<div class="review__rating">
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
													<span class="review__star">
														<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path fill-rule="evenodd" d="M4.527 15.515a1.28 1.28 0 0 1-.733.233H3.79c-.263 0-.524-.083-.752-.248a1.27 1.27 0 0 1-.474-1.411l1.184-3.92a.213.213 0 0 0-.073-.228L.5 7.49a1.268 1.268 0 0 1-.43-1.434c.18-.529.657-.87 1.213-.87h3.961a.206.206 0 0 0 .201-.135L6.784 1.12C6.964.591 7.441.25 8 .25h.002c.558 0 1.035.341 1.215.87l1.338 3.932a.206.206 0 0 0 .2.135h3.962c.556 0 1.032.341 1.213.87a1.311 1.311 0 0 1 .065.546 1.269 1.269 0 0 1-.495.888l-3.174 2.45a.213.213 0 0 0-.073.229l1.184 3.919a1.27 1.27 0 0 1-.474 1.411 1.28 1.28 0 0 1-.752.248h-.004a1.28 1.28 0 0 1-.733-.233L8.12 13.18a.212.212 0 0 0-.241 0l-3.353 2.335Z" clip-rule="evenodd"></path></svg>
													</span>
											</div>
									</div>

									<div class="review__comment">
									The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been in different gyms all my life and the Happy Fitness is the best by far. The staff are very knowledgeable about all aspects of exercise and nutrition. Whether you are using the trainers or not, they will always help make sure you are doing the exercises correctly so you get the best benefit and do not hurt yourself. I never thought I would care one way or the other if I was in an all female gym, but now that I am I truly love it. The other aspect I love about this gym is the cleanliness. The staff works very hard keeping the gym orderly and spotless. Check it out.
									</div>
								</div>
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
		</div>
	</div>
</section>

<!-- Swiper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->