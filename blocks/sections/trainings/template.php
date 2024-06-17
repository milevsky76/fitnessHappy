<?php
/**
 * Block Trainings.
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

<section class="trainings">
	<div class="container">
		<div class="trainings__content">
			<div class="trainings__left">
				<div class="trainings__training">OUR trainings</div>

				<h2 class="trainings__title">
					What We Offer
				</h2>

				<p class="trainings__review">
					The Happy Fitness has it going on!!! I love this gym, the staff and all the members. I have been in different gyms all my life and the Happy Fitness is the best by far. The staff are very knowledgeable about all aspects of exercise and nutrition. Whether you are using the trainers or not, they will always help make sure you are doing the exercises correctly so you get the best benefit and do not hurt yourself. I never thought I would care one way or the other if I was in an all female gym, but now that I am I truly love it. The other aspect I love about this gym is the cleanliness. The staff works very hard keeping the gym orderly and spotless. Check it out...I promise you it won't disappoint!!
				</p>
			</div>

			<div class="trainings__right">
				<div class="trainings__right-inner">
					<ul class="nav nav-pills mb-3 trainings__tablist js-tabs" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" 
							type="button" role="tab" aria-controls="pills-home" aria-selected="true">Body</button>
						</li>

						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" 
							type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Breast</button>
						</li>

						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" 
							type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Buttocks</button>
						</li>

						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-mens-tab" data-bs-toggle="pill" data-bs-target="#pills-mens" 
							type="button" role="tab" aria-controls="pills-mens" aria-selected="false">Mens</button>
						</li>
					</ul>

					<div class="tab-content trainings__tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="trainings__tabpanel">
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">1row Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">1acelift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">1eptoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Chin <br> Augmentation</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Morpheus8</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Injectables</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Ear Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Neck Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Dysport®</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Eyelid Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Rhinoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="trainings__tabpanel">
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">2row Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">2acelift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">2eptoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Chin <br> Augmentation</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Morpheus8</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Injectables</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Ear Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Neck Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Dysport®</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Eyelid Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Rhinoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="trainings__tabpanel">
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">3row Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">3acelift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">3eptoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Chin <br> Augmentation</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Morpheus8</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Injectables</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Ear Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Neck Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Dysport®</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Eyelid Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Rhinoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-mens" role="tabpanel" aria-labelledby="pills-mens-tab">
						<div class="trainings__tabpanel">
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">4row Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">4acelift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">4eptoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Chin <br> Augmentation</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Morpheus8</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Injectables</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Ear Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Neck Lift</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Dysport®</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Eyelid Surgery</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">Rhinoplasty</span>
								</a>
								<a class="trainings__link" href="javascript:void(0);">
									<span class="trainings__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="trainings__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>