<?php
/**
 * "CTA" additional part - full-width call-to-action banner.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Lorem ipsum placeholder copy for now - wire up real ACF fields
 * (heading / copy / button) once content is ready.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php
$partial_padding = $gbo_hide_main_content ? 'pb-16 pt-16' : 'pb-16';
?>

<div class="<?= $gbo_container_width; ?> <?= $partial_padding ; ?>">
	<div class="bg-primary flex shadow-lg">
		<div class="flex-3 py-8 px-8">
			<h2 class="uppercase !text-secondary">Lorem ipsum dolor sit amet consectetur adipiscing elit</h2>
			<p class="st-hero-text-lead st-max-w-60perc text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<a href="#" class="st-btn-secondary">Get in touch</a>
		</div>
		<div class="flex-2">
			<img
				class="!h-full !w-full object-cover"
				src="https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/08/white-cloud-scaled.jpeg"
				alt="placeholder"
			>
		</div>
	</div>
</div>
