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
 * Provides: $heading, $subheading, $button, $image, $container_width.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$get_general_block_options = get_sub_field(
	'general_block_options'
);
$gbo = $get_general_block_options;

$gbo_heading = $gbo['heading'];
$gbo_section_image = $gbo['section_image'];
$gbo_section_design = $gbo['section_design'];


$get_gbo_container_width = $gbo['container_width'];
$gbo_container_width = '';
switch ( $get_gbo_container_width ) {
	case 'narrow':
		$gbo_container_width = 'max-w-3xl mx-auto';
		break;
	case 'full-width':
		$gbo_container_width = '';
		break;
	case 'container':
		$gbo_container_width = 'ast-container';
		break;
	default:
		$gbo_container_width = 'ast-container';
		break;
}

$subheading      = get_sub_field( 'subheading' );
$button          = get_sub_field( 'button' );
$image           = get_sub_field( 'image' );
$container_width = get_sub_field( 'container_width' );
