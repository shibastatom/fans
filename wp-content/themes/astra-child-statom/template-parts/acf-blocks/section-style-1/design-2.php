<?php
/**
 * section-style-1 - Design 2 (full-bleed image, overlay, heading + cards).
 *
 * Included from section-style-1.php, which has already included
 * partials/general-block-options.php - $gbo_container_width, $gbo_heading,
 * $subheading and $gbo_section_image are inherited from that scope.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="relative min-h-[80vh] w-full overflow-hidden">

	<?php if ( $gbo_section_image ) : ?>
	<img
		class="absolute inset-0 w-full h-full object-cover"
		src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
		alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
	>
	<?php endif; ?>

	<!-- Overlay -->
	<div class="absolute inset-0 bg-black/75"></div>

	<!-- Content -->
	<div class="relative z-10 flex flex-col justify-between min-h-[80vh] <?= $gbo_container_width; ?> py-12">

		<!-- Heading, top left; supporting text underneath, right-aligned -->
		<div class="">
			<p class="uppercase !text-secondary">Lorem ipsum</p>
			<?php if ( $gbo_heading ) : ?>
				<h2 class="_heading uppercase !text-white"><?= $gbo_heading; ?></h2>
			<?php endif; ?>

			<div class="text-right !text-white mt-4 st-hero-text-lead max-w-[50%] ml-auto">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<!-- 4 cards, bottom of section -->
		<!-- Placeholder content - swap for an ACF repeater once the copy is known -->
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
			<div class="bg-white/10 !text-white p-6">
				<h3 class="text-2xl font-bold uppercase">Vertically integrated</h3>
				<p class="mt-2 text-right">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
			</div>
			<div class="bg-white/10 !text-white p-6">
				<p class="text-2xl font-bold uppercase">Vertically integrated</p>
				<p class="mt-2">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
			</div>
			<div class="bg-white/10 !text-white p-6">
				<p class="text-2xl font-bold uppercase">Future‑focused</p>
				<p class="mt-2">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
			</div>
			<div class="bg-white/10 !text-white p-6">
				<p class="text-2xl font-bold uppercase">Value‑driven</p>
				<p class="mt-2">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
			</div>
		</div>
	</div>
</div>
