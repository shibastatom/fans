<?php
/**
 * section-style-1 - Design 3 (simple left/right, image left, white background, no overlap).
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
<div class="bg-white">
	<div class="<?= $gbo_container_width; ?> flex flex-col md:flex-row items-stretch gap-8 py-12">
		<!-- LEFT SIDE -->
		<?php if ( $gbo_section_image ) : ?>
		<div class="flex-1 flex justify-center">
			<div class="border-secondary border-t-4 border-b-4">
				<img
					class="!h-full !w-full object-cover"
					src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
					alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
				>
			</div>
		</div>
		<?php endif; ?>

		<!-- RIGHT SIDE -->
		<div class="page-hero__content flex-1 flex flex-col justify-center">
			<div>
				<p class="uppercase !text-secondary">Who we are</p>
				<?php if ( $gbo_heading ) : ?>
					<h2 class="_heading uppercase !text-primary">D3 DEVELOPING TOMORROW, <span class="text-secondary">ENRICHING TODAY</span></h2>
				<?php endif; ?>

				<p class="st-hero-text-lead text-primary mt-4">Fancourt Property Group is a forward-thinking property developer with a proven track record of delivering high-quality residential and mixed-use developments. Our focus is on creating exceptional places that enhance lifestyles and stand the test of time.</p>

				<div class="mt-6 flex gap-4">
					<button type="button" class="st-btn-secondary">Learn more</button>
				</div>
			</div>
		</div>
	</div>
</div>
