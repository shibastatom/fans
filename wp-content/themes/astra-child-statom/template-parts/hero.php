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

get_template_part( 'template-parts/hero-designs/' . $gpo_hero_design );
?>
