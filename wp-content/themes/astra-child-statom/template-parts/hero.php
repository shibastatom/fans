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
var_dump($gpo_hero_design);

// $GLOBALS['hero_design_f_image'] = $hero_design_f_image;

// get_template_part( 'template-parts/hero-designs/' . $gpo_hero_design, null, array( 'hero_design_f_image' => $hero_design_f_image ) );

get_template_part( 'template-parts/hero-designs/' . $gpo_hero_design );
?>
