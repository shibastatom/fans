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
$gbo_additional_part = $gbo['additional_part'];
$gbo_additional_part_overlap = $gbo['additional_part_overlap'];
$gbo_background_image = $gbo['background_image'];
$get_gbo_background_overlay = $gbo['background_overlay_colours'];
switch ( $get_gbo_background_overlay ) {
	case 'bg-secondary/90':
		$gbo_background_overlay = 'bg-secondary/90';
		break;
	case 'bg-secondary/80':
		$gbo_background_overlay = 'bg-secondary/80';
		break;
	case 'bg-secondary/70':
		$gbo_background_overlay = 'bg-secondary/70';
		break;
	case 'bg-secondary/50':
		$gbo_background_overlay = 'bg-secondary/50';
		break;
	case 'bg-primary/90':
		$gbo_background_overlay = 'bg-primary/90';
		break;
	case 'bg-primary/80':
		$gbo_background_overlay = 'bg-primary/80';
		break;
	case 'bg-primary/70':
		$gbo_background_overlay = 'bg-primary/70';
		break;
	case 'bg-primary/50':
		$gbo_background_overlay = 'bg-primary/50';
		break;
	default:
		$gbo_background_overlay = '';
		break;
}

// $gbo_additional_part_overlap = True;


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
