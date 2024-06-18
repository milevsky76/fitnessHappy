<?php
/**
 * Block Resources.
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

<section class="resources">
	<div class="container">
		<div class="resources__content">
			<div class="resources__left">
				<div class="resources__wrap-image">
					<img class="resources__image" src="/wp-content/themes/testproject/resources/images/previews/resources-bg.png" alt="">
				</div>
			</div>
			<div class="resources__right">
				<header class="resources__header">
					<h2 class="resources__title">Resources</h2>

					<span class="resources__slogon">For all things fitness, health and wellness</span>
				</header>

				<div class="resources__list">
					<div class="card">
						<div class="card__wrap-image">
							<img src="/wp-content/themes/testproject/resources/images/previews/resources-1.jpg" alt="">
						</div>

						<div class="card__content">
							<time class="card__date" datetime="2021-01-14">14 Jan 2021</time>
							<a class="card__link" href="javascript:void(0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit</a>
						</div>
					</div>

					<div class="card">
						<div class="card__wrap-image">
							<img src="/wp-content/themes/testproject/resources/images/previews/resources-2.jpg" alt="">
						</div>

						<div class="card__content">
							<time class="card__date" datetime="2021-01-14">14 Jan 2021</time>
							<a class="card__link" href="javascript:void(0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
						</div>
					</div>

					<div class="card">
						<div class="card__wrap-image">
							<img src="/wp-content/themes/testproject/resources/images/previews/resources-3.jpg" alt="">
						</div>

						<div class="card__content">
							<time class="card__date" datetime="2021-01-14">14 Jan 2021</time>
							<a class="card__link" href="javascript:void(0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit</a>
						</div>
					</div>

					<div class="card">
						<div class="card__wrap-image">
							<img src="/wp-content/themes/testproject/resources/images/previews/resources-4.jpg" alt="">
						</div>

						<div class="card__content">
							<time class="card__date" datetime="2021-01-14">14 Jan 2021</time>
							<a class="card__link" href="javascript:void(0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
						</div>
					</div>
				</div>

				<div class="resources__wrap-buttons">
					<button class="button button--transparent-inverse" type="button">View All Resources</button>
				</div>
			</div>
		</div>
	</div>
</section>