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

<section class="st-section-s2 bg-primary min-h-[80vh] flex">
	<div class="ast-container flex flex-col md:flex-row items-stretch gap-8">
		<!-- LEFT SIDE -->
		<div class="page-hero__content flex-1 flex flex-col justify-center">
			<div>
				<p class="uppercase !text-secondary">London Residential & Mixed-use development</p>
				<h1 class="_heading !text-white uppercase">Building exceptional <span class="text-secondary">places.</span></h1>
				<p class="st-hero-text-lead color-text text-text">Fancourt Property Group develops outstanding residential and mixed-use communities across London; acquired, optimised and delivered without compromise.</p>
				<button type="button" class="st-btn-secondary">Secondary</button>
				<button type="button" class="st-btn-primary">Primary</button>
			</div>
		</div>

		<!-- RIGHT SIDE -->
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="flex-1 flex justify-center">
			<?php the_post_thumbnail( 'large', array( 'class' => '!h-full !w-full object-cover' ) ); ?>
		</div>
		<?php endif; ?>
	</div>
</section>
