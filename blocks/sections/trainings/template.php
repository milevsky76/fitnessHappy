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
$section_title = get_field( 'section_title' );
$training = get_field( 'training' );
$review_text = get_field( 'review_text' );
$types_of_services = get_field( 'types_of_services' );
?>

<section class="trainings">
	<div class="container">
		<div class="trainings__content">
			<div class="trainings__left">
				<?php if ( !empty( $training ) ) : ?>
					<div class="trainings__training"><?= nl2br( $training ) ?></div>
				<?php endif; ?>

				<?php if ( !empty( $section_title ) ) : ?>
					<h2 class="trainings__title"><?= nl2br( $section_title ) ?></h2>
				<?php endif; ?>

				<?php if ( !empty( $review_text ) ) : ?>
					<p class="trainings__review"><?= nl2br( $review_text ) ?></p>
				<?php endif; ?>
			</div>

			<div class="trainings__right">
				<div class="trainings__right-inner">
					<ul class="nav nav-pills mb-3 trainings__tablist js-tabs" id="pills-tab" role="tablist">
						<?php foreach ($types_of_services as $key => $services) : ?>
							<?php
							$lower_name = mb_strtolower($services['name']);
							$active = ( $key === 0 ) ? 'active' : '';
							?>
							<li class="nav-item" role="presentation">
								<button class="nav-link <?= $active ?>" id="pills-<?= $lower_name ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?= $lower_name ?>" type="button" role="tab" aria-controls="pills-<?= $lower_name ?>" aria-selected="true"><?= $services['name'] ?></button>
							</li>
						<?php endforeach; ?>
					</ul>

					<div class="tab-content trainings__tab-content" id="pills-tabContent">
						<?php foreach ($types_of_services as $key => $services) : ?>
							<?php
							$lower_name = mb_strtolower($services['name']);
							$active = ( $key === 0 ) ? 'show active' : '';
							$links = $services['links'];
							?>
							<div class="tab-pane fade <?= $active ?>" id="pills-<?= $lower_name ?>" role="tabpanel" aria-labelledby="pills-<?= $lower_name ?>-tab">
								<div class="trainings__tabpanel">
									<?php foreach ($links as $link) : ?>
										<?
										$title = !empty($link['name']) ? $link['name'] : (!empty($link['link']['title']) ? $link['link']['title'] : '');
										$url = !empty( $link['link']['url'] ) ? $$link['link']['url'] : 'javascript:void(0);';
										$target = !empty( $link['link']['target'] ) ? 'target="_blank"' : '';
										?>
										<a class="trainings__link" href="<?= $url ?>" <?= $target ?>>
											<span class="trainings__icon">
												<svg width="7" height="10" viewBox="0 0 7 10" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" aria-hidden="true"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1.672 8.5 3.5-3.5-3.5-3.5"></path></svg>
											</span>
											<span class="trainings__text"><?= $title ?></span>
										</a>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>