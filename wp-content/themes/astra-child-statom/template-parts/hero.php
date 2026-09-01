<?php
/**
 * Generic hero for all Page posts - page title + featured image.
 *
 * Included from page.php inside the loop, after the_post() has run.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php
$get_general_page_options = get_field(
	'general_page_content'
);
$gpo = $get_general_page_options;
$get_gpo_hero_design = $gpo['hero_design'];
$gpo_hero_design = ! empty( $get_gpo_hero_design ) ? sanitize_file_name( $get_gpo_hero_design ) : 'default';
$gpo_alt_featured_image = $gpo['alt_featured_image'];

if ( ! empty( $gpo_alt_featured_image['url'] ) ) {
	$hero_design_f_image = $gpo_alt_featured_image;
} else {
	$post_thumbnail_id = get_post_thumbnail_id();
	$hero_design_f_image = $post_thumbnail_id ? acf_get_attachment( $post_thumbnail_id ) : null;
}

$GLOBALS['hero_design_f_image'] = $hero_design_f_image;

get_template_part( 'template-parts/hero-designs/' . $gpo_hero_design, null, array( 'hero_design_f_image' => $hero_design_f_image ) );
?>
