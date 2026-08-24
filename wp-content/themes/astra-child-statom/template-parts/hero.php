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

<section class="st-section-s1 bg-primary">
	<div class="ast-container flex flex-col md:flex-row items-center gap-8">
		<div class="page-hero__content md:w-1/2">
			<p class="uppercase !text-secondary">London Residential & Mixed-use development</p>
			<h1 class="_heading !text-white uppercase">Building exceptional <span class="text-secondary">places.</span></h1>
			<p class="st-hero-text-lead color-text text-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			<button type="button" class="st-btn-secondary">Secondary</button>
			<button type="button" class="st-btn-primary">Primary</button>
		</div>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="page-hero__image bg-gray-300 md:w-1/2">
				<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto' ) ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
