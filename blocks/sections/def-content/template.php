<?php
/**
 * Block Def-content.
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
$post_thumbnail_id = get_post_thumbnail_id();
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
$post_title = get_the_title();

$content = apply_filters( 'the_content', get_the_content() );

$def_title = get_field('def_title', get_the_ID());
$def_body = get_field('def_body', get_the_ID());
?>
<!-- /wp-content/themes/testproject/resources/images/previews/ -->
 
<section class="def-content">
	<div class="container container--post">
		<?= $content ?>
		<hr>
		<?= $def_body ?>
	</div>
</section>