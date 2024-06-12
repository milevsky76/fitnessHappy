<?php
/**
 * Block Hero.
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
<!-- /wp-content/themes/testproject/resources/images/previews/ -->
<section class="section section-hero">
	<div class="section-hero__bg" aria-hidden="true">
		<img class="section-hero__bg-image" src="/wp-content/themes/testproject/resources/images/previews/hero-bg.jpg" alt="" width="1920" height="930">
	</div>

	<div class="container">
		<div class="section-hero__content">
			<div class="section-hero__block-left">
				<nav class="section-hero__nav">
					<ul class="section-hero__list">
						<li class="section-hero__item section-hero__item--current">
							<a class="section-hero__link section-hero__link--active">Main</a>
						</li>

						<li class="section-hero__item">
							<a class="section-hero__link" href="javascript:void(0);">About Us</a>
						</li>

						<li class="section-hero__item">
							<a class="section-hero__link" href="javascript:void(0);">Contact Us</a>
						</li>

						<li class="section-hero__item">
							<a class="section-hero__link" href="javascript:void(0);">Before & After</a>
						</li>

						<li class="section-hero__item">
							<a class="section-hero__link" href="javascript:void(0);">Resources</a>
						</li>

						<li class="section-hero__item">
							<a class="section-hero__link" href="javascript:void(0);">Payment</a>
						</li>
					</ul>
				</nav>
			</div>

			<div class="section-hero__block-right">
				<h1 class="section-hero__title">The Happy&nbsp;Fitness</h1>

				<h2 class="section-hero__subtitle">Macon’s Premiere Boutuque Personal Training Studio</h2>

				<div class="section-hero__buttons">
					<button class="section-hero__consultation button" type="button" data-bs-toggle="modal" data-bs-target="#modalBookConsultation">Book Consultation</button>

					<button class="button button--transparent section-hero__play" type="button">
						<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M17.338 7.692 5.525.411A2.698 2.698 0 0 0 2.761.352c-.876.49-1.399 1.381-1.399 2.385v14.496c0 1.518 1.223 2.759 2.726 2.767H4.1c.47 0 .959-.147 1.416-.426a.78.78 0 1 0-.812-1.332c-.214.13-.423.198-.608.198a1.212 1.212 0 0 1-1.174-1.207V2.737c0-.43.224-.813.6-1.023.376-.21.82-.2 1.185.025L16.52 9.02c.355.219.558.583.557 1 0 .417-.205.78-.562.999l-8.54 5.229a.78.78 0 1 0 .814 1.33l8.54-5.228a2.712 2.712 0 0 0 1.308-2.327 2.712 2.712 0 0 0-1.299-2.33Z"></path></svg>
						<span>Play Video</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section gallery">
	<div class="container">
		<div class="gallery__content">
			<header class="gallery__header">
				<h2 class="gallery__title">Our gallery</h2>
				<span class="gallery__slogon">A fitness training center for <br> women, by women</span>
			</header>
			
			<div class="gallery__list">
				<div class="gallery__col-left">
					<div class="gallery__box-3">
						<div class="gallery__box-2">
							<div class="gallery__item">
								<div class="gallery__image-wrap">
									<img class="gallery__image bg-1" src="/wp-content/themes/testproject/resources/images/previews/g-1.jpg" alt="">
								</div>
								<a class="gallery__link js-open-gallery" href="/wp-content/themes/testproject/resources/images/previews/g-1.jpg" data-id="1">
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
				</div>
				<div class="gallery__col-right">
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
			</div>

			<a class="button gallery__button" href="javascript:void(0);">Load More</a>
		</div>
	</div>
</section>

<section class="section trainings">
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
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">1row Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">1acelift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">1eptoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Chin <br> Augmentation</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Morpheus8</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Injectables</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Ear Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Neck Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Dysport®</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Eyelid Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Rhinoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div class="trainings__tabpanel">
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">2row Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">2acelift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">2eptoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Chin <br> Augmentation</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Morpheus8</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Injectables</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Ear Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Neck Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Dysport®</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Eyelid Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Rhinoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="trainings__tabpanel">
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">3row Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">3acelift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">3eptoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Chin <br> Augmentation</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Morpheus8</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Injectables</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Ear Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Neck Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Dysport®</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Eyelid Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Rhinoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-mens" role="tabpanel" aria-labelledby="pills-mens-tab">
						<div class="trainings__tabpanel">
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">4row Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">4acelift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">4eptoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Chin <br> Augmentation</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Morpheus8</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Injectables</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Ear Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Neck Lift</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Dysport®</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Eyelid Surgery</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">Rhinoplasty</span>
								</a>
								<a class="services__link" href="javascript:void(0);">
									<span class="services__icon">
										<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
									</span>
									<span class="services__text">AccuTite™ <br>	and FaceTite®</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal-old">
	<div class="modal-content">
		<button class="close js-close" type="button" aria-label="Close">
			<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m13.326 12.001 10.4-10.4A.937.937 0 1 0 22.4.276L12 10.676 1.6.275A.937.937 0 1 0 .275 1.6l10.4 10.4-10.4 10.4A.938.938 0 1 0 1.6 23.726L12 13.326l10.4 10.4a.935.935 0 0 0 1.325 0 .937.937 0 0 0 0-1.325L13.325 12Z"></path></svg>
		</button>

		<div class="slides"></div>

		<div class="controls">
			<button class="prev js-prev" type="button">
				<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m.856 10.43 8.559-8.581a.977.977 0 0 1 1.383 1.38l-8.56 8.58c-.381.381-.381 1 0 1.383l8.56 8.58a.977.977 0 1 1-1.383 1.38l-8.558-8.58a2.933 2.933 0 0 1-.001-4.143Z"></path><path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"></path></svg>
			</button>

			<div class="pagination"></div>

			<button class="next js-next" type="button">
				<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="m24.144 10.43-8.559-8.581a.977.977 0 0 0-1.383 1.38l8.56 8.58c.381.381.381 1 0 1.383l-8.56 8.58a.977.977 0 1 0 1.383 1.38l8.558-8.58a2.933 2.933 0 0 0 .001-4.143Z"></path><path d="M18.702 11.523H.977a.977.977 0 0 0 0 1.954h17.725a.977.977 0 1 0 0-1.954Z"></path></svg>
			</button>
		</div>
	</div>
</div>