<?php
/**
 * Shared "General Block Options" ACF fields, common to every flexible
 * content layout in template-parts/acf-blocks/.
 *
 * Set $block_slug before including this file so it can build the wrapper
 * classes, e.g.:
 *
 *   $block_slug = 'section-style-1';
 *   include get_stylesheet_directory() . '/template-parts/acf-blocks/partials/general-block-options.php';
 *
 * Provides: $heading, $subheading, $button, $gbo_button_1, $image, $container_width.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$get_general_page_options = get_field(
	'general_page_content'
);
$gpo = $get_general_page_options;
$gpo_alt_title = ! empty( $gpo['alt_title'] ) ? $gpo['alt_title'] : get_the_title();
$gpo_alt_featured_image = $gpo['alt_featured_image'];
if ( ! empty( $gpo_alt_featured_image['url'] ) ) {
	$hero_design_f_image = $gpo_alt_featured_image;
} else {
	$post_thumbnail_id = get_post_thumbnail_id();
	$hero_design_f_image = $post_thumbnail_id ? acf_get_attachment( $post_thumbnail_id ) : null;
}
var_dump($gpo_alt_title);