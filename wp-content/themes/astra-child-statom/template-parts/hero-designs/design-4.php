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

global $hero_design_f_image;
?>

<section class="st-section-s2 relative min-h-[80vh] flex overflow-hidden">
	<div
		class="absolute inset-0 bg-cover bg-center bg-no-repeat st-ken-burns"
		style="background-image: url('https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/09/74054.jpg');"
	></div>
	<div class="absolute inset-0 st-bg-vignette-primary opacity-80"></div>

	<div class="ast-container relative z-10 flex flex-col justify-between py-16 w-full">
		<div class="">
			<h1 
			class="_heading st-hero-heading !text-white uppercase st-heading-reveal"
			style=""
			>Building <br>exceptional <span class="text-secondary"><br>places.</span></h1>
		</div>

		<div class="max-w-lg self-end">
			<p class="st-hero-text-lead-2 !text-white st-reveal">
				<?php st_render_word_reveal( 'Fancourt Property Group develops outstanding residential and mixed-use communities across London; acquired, optimised and delivered without compromise.' ); ?>
			</p>
			<a class="st-btn-secondary">Learn more</a>
		</div>
	</div>
</section>