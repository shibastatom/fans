<?php
/**
 * section-style-1 - Design 1 (split image / content).
 *
 * Included from section-style-1.php, which has already included
 * partials/general-block-options.php - $gbo_container_width and
 * $gbo_section_image are inherited from that scope.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="<?= $gbo_container_width; ?> flex flex-col md:flex-row items-stretch gap-8">
	<!-- LEFT SIDE -->
	<?php if ( $gbo_section_image ) : ?>
	<div class="flex-1 flex justify-center">
		<img
			class="!h-full !w-full object-cover"
			src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
			alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
		>
	</div>
	<?php endif; ?>
	<!-- RIGHT SIDE -->
	<div class="page-hero__content flex-1 flex flex-col justify-between py-12">
		<div class="text-right">
			<p class="uppercase !text-secondary">Who we are</p>
			<h2 class="_heading uppercase !text-primary">DEVELOPING TOMORROW, <span class="text-secondary">ENRICHING TODAY</span></h2>
		</div>
		<div class="text-left">
			<p class="st-hero-text-lead text-primary">Fancourt Property Group develops outstanding residential and mixed-use communities across London; acquired, optimised and delivered without compromise.</p>
			<button type="button" class="st-btn-primary">Secondary</button>
		</div>
	</div>
</div>