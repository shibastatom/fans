<?php
/**
 * CTA - Design 2 (heading/subheading/button, centered, no image).
 *
 * Included from cta.php, which has already resolved $gbo_container_width
 * and $partial_padding.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>


<div class="<?= $gbo_container_width; ?> <?= $partial_padding ; ?>">
	<div class="flex text-center w-full">
		<div class="flex-1 py-16 px-8">
			<h2 class="uppercase ">
				<?= $gsc_cta_block_card['cta_card']['heading']; ?>
			</h2>
			<p class="st-hero-text-lead st-max-w-60perc text-white mt-4">Every great project starts with a conversation. Tell us about your goals, challenges, or ideas, and we’ll help you find the right solution.</p>
			<a href="#" class="st-btn-primary mt-6 inline-block">Get in touch</a>
		</div>
	</div>
</div>



