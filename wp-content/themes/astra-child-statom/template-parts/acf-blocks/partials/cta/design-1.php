<?php
/**
 * CTA - Design 1 (heading/copy/button beside an image).
 *
 * Included from cta.php, which has already resolved $gbo_container_width
 * and $partial_padding.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// var_dump($gsc_cta_block_card['cta_card']['subheading']);
?>
<!-- <div class="<?= $gbo_container_width; ?> py-12"> -->
	<div
	class="bg-primary st-bg-fade-primary! flex shadow-lg overflow-hidden"
	>
		<div class="flex-3 py-16 px-8">
			<!-- <h2 class="uppercase !text-white st-heading-reveal">Let's Discuss Your <span class="text-secondary">Next Project</span></h2> -->
			<h2 class="uppercase st-heading-reveal">
				<?= $gsc_cta_block_card['cta_card']['heading']; ?>
			</h2>
			<!-- <p class="st-hero-text-lead st-max-w-60perc text-white mt-4">Every great project starts with a conversation. Tell us about your goals, challenges, or ideas, and we’ll help you find the right solution.</p> -->
			<p class="st-hero-text-lead st-reveal">
				<?php st_render_word_reveal( $gsc_cta_block_card['cta_card']['subheading'] ); ?>
			</p>
			<a href="#" class="st-btn-primary">Get in touch</a>
		</div>
		<div class="flex-2">
			<img
				class="!w-full !h-full object-cover st-reveal-right"
				src="https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/08/low-angle-shot-facade-white-modern-building-blue-clear-sky.png"
				alt="placeholder"
			>
		</div>
	</div>
<!-- </div> -->
