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
 * Provides: $section_classes, $heading, $subheading, $button, $image.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$get_general_block_options = get_sub_field(
	'general_block_options'
);
$gbo = $get_general_block_options;

$section_classes = array( 'content-block', $block_slug );

$padding = get_sub_field( 'padding' );
if ( $padding ) {
	$section_classes[] = 'padding-' . $padding;
}

$container_width = get_sub_field( 'container_width' );
if ( $container_width ) {
	$section_classes[] = 'container-' . $container_width;
}

$section_classes = implode( ' ', $section_classes );

$heading    = $gbo['heading'];
$subheading = get_sub_field( 'subheading' );
$button     = get_sub_field( 'button' );
$image      = get_sub_field( 'image' );
