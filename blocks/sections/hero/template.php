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
$section_background = get_field( 'hero_section_background_background' );
$background_type = $section_background['type'];
$section_title = get_field( 'hero_section_title_text' );
$section_subtitle = get_field( 'hero_section_subtitle' );

$menu_list = get_field( 'menu_list' );

// echo '<pre>'; 
// var_dump(isset($menu_list));
// var_dump($menu_list);
// echo '</pre>';

?>
<?php if( !empty( $section_title ) ) : ?>
	<section class="section-hero">
		<div class="section-hero__bg" aria-hidden="true">
			<?php if ( 'empty' !== $background_type ) : ?>
				<?php if ( 'image' === $background_type ) : ?>
					<?php
					$background_image = $section_background['image'];
					?>
					<picture>
						<source srcset="<?= esc_url( wp_get_attachment_image_url( $background_image, 'bg-image-4k' ) ) ?>" media="(min-width: 1920px)">
						<source srcset="<?= esc_url( wp_get_attachment_image_url( $background_image, 'bg-image-desktop' ) ) ?>" media="(min-width: 1280px)">
						<source srcset="<?= esc_url( wp_get_attachment_image_url( $background_image, 'bg-image-tablet' ) ) ?>" media="(max-width: 1279px)">
						<source srcset="<?= esc_url( wp_get_attachment_image_url( $background_image, 'bg-image-mobile' ) ) ?>" media="(max-width: 767px)">
						<img class="section-hero__bg-image" src="<?= esc_url( wp_get_attachment_image_url( $background_image, 'bg-image-4k' ) ) ?>" alt="">
					</picture>
				<?php endif; ?>
			<?php endif; ?>
		</div>

		<div class="container">
			<div class="section-hero__content">
				<div class="section-hero__block-left">
					<nav class="section-hero__nav">
						<?php if ( isset($menu_list) ) : ?>
							<ul class="section-hero__list">
								<?php foreach ($menu_list as $item) : ?>
									<li class="section-hero__item <?= $item['active'] ? 'section-hero__item--current' : '' ?>">
										<?php if ($item['active']) : ?>
											<a class="section-hero__link section-hero__link--active"><?= $item['text'] ?></a>
										<?php else : ?>
											<a class="section-hero__link" href="<?= $item['link'] ?>"><?= $item['text'] ?></a>
										<?php endif; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</nav>
				</div>

				<div class="section-hero__block-right">
					<h1 class="section-hero__title">
						<?= $section_title ?>
					</h1>

					<?php if ( !empty( $section_subtitle ) ) : ?>
						<h2 class="section-hero__subtitle">
							<?= $section_subtitle ?>
						</h2>
					<?php endif; ?>

					

					<div class="section-hero__buttons">
						<button class="section-hero__consultation button" type="button" data-bs-toggle="modal" data-bs-target="#modalBookConsultation">Book Consultation</button>

						<button class="button button--transparent section-hero__play js-play-overlay" type="button" data-is-play="true">
							<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" role="img" aria-hidden="true"><path d="M17.338 7.692 5.525.411A2.698 2.698 0 0 0 2.761.352c-.876.49-1.399 1.381-1.399 2.385v14.496c0 1.518 1.223 2.759 2.726 2.767H4.1c.47 0 .959-.147 1.416-.426a.78.78 0 1 0-.812-1.332c-.214.13-.423.198-.608.198a1.212 1.212 0 0 1-1.174-1.207V2.737c0-.43.224-.813.6-1.023.376-.21.82-.2 1.185.025L16.52 9.02c.355.219.558.583.557 1 0 .417-.205.78-.562.999l-8.54 5.229a.78.78 0 1 0 .814 1.33l8.54-5.228a2.712 2.712 0 0 0 1.308-2.327 2.712 2.712 0 0 0-1.299-2.33Z"></path></svg>
							<span>Play Video</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif ?>