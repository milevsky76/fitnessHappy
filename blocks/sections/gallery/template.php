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
$text_title = get_field( 'text_title' );
$slogan = get_field( 'slogan' );
$list = get_field( 'list' );
?>

<section class="gallery">
	<div class="container">
		<div class="gallery__content">
			<header class="gallery__header">
				<?php if ( !empty( $text_title ) ) : ?>
					<h2 class="gallery__title"><?= nl2br( $text_title ) ?></h2>
				<?php endif; ?>

				<?php if ( !empty( $slogan ) ) : ?>
					<span class="gallery__slogon"><?= nl2br( $slogan ) ?></span>
				<?php endif; ?>
			</header>

			<?php if( have_rows('list') ): ?>
				<div class="gallery__list">
					<?php foreach ($list as $item) : ?>
						<? $image_count = count( $item['image'] ); ?>
						<div class="gallery__item">
							<div class="gallery__image-wrap">
								<img class="gallery__image" src="<?= esc_url( wp_get_attachment_image_url( $item['image'], 'full-hd' ) ) ?>" alt="">
							</div>
							<a class="gallery__link" href="#modal-image" data-bs-toggle="modal" data-bs-target="#modal-image">
								<h3 class="gallery__subtitle"><?= nl2br( $item['subtitle'] ) ?></h3>
							</a>
							<span class="gallery__count"><?= $image_count ?> Photo<?= $image_count > 1 ? 's' : '' ?></span>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<a class="button gallery__button" href="javascript:void(0);">Load More</a>
		</div>
	</div>
</section>