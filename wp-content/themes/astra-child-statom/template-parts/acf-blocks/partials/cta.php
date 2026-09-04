<?php
/**
 * "CTA" additional part - full-width call-to-action banner.
 *
 * Included from section-style-1.php as an `additional_part` - has already
 * included general-block-options.php, so $gbo_container_width and
 * $gbo_hide_main_content are inherited from that scope.
 *
 * Dispatches to a design variant in partials/cta/ - $cta_design is
 * hardcoded for now (no ACF field wired up yet). Swap the value below to
 * preview a different design; will be driven by a real field later.
 *
 * Lorem ipsum placeholder copy for now - wire up real ACF fields
 * (heading / copy / button) once content is ready.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// $gbo_container_width  = $gbo_container_width ?? 'ast-container';
// $gbo_hide_main_content = $gbo_hide_main_content ?? false;

$cta_design = $gbo_cta_block_options_design;
// var_dump($gbo_cta_block_options_design);

$gsc_cta_block_card = get_field( 'cta_block_card', 'option' );
$gsc_cta_block_card_index = intval( $gbo_cta_block_options_cta_block_card );
$gsc_cta_block_card = $gsc_cta_block_card[ $gsc_cta_block_card_index ] ?? null;


// include __DIR__ . '/cta/' . $cta_design . '.php';
?>

<div class="<?= $gbo_container_width; ?> py-12">
	<?php include __DIR__ . '/cta/' . $cta_design . '.php'; ?>
</div>
