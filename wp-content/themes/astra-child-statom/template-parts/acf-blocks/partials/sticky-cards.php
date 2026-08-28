<?php
/**
 * "Sticky cards" additional part - copy pinned on the left while a taller
 * stack of cards scrolls past it on the right.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Dummy copy/cards for now - swap for real ACF fields (heading/copy on the
 * left, a repeater on the right) once content is ready.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$sticky_cards = array(
	array(
		'title' => 'Lorem Ipsum One',
		'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	),
	array(
		'title' => 'Lorem Ipsum Two',
		'copy'  => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
	),
	array(
		'title' => 'Lorem Ipsum Three',
		'copy'  => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
	),
	array(
		'title' => 'Lorem Ipsum Four',
		'copy'  => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
	),
);
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="flex flex-col md:flex-row items-start gap-8">
		<!-- LEFT: STICKY COPY -->
		<div class="flex-1 md:sticky md:top-24">
			<p class="st-eyebrow">Why choose us</p>
			<h2 class="uppercase !text-primary">Lorem ipsum dolor sit amet consectetur adipiscing elit</h2>
			<p class="st-hero-text-lead text-primary mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<a href="#" class="st-btn-secondary mt-6 inline-block">Learn more</a>
		</div>

		<!-- RIGHT: SCROLLING CARDS -->
		<div class="flex-1 flex flex-col gap-8">
			<?php foreach ( $sticky_cards as $card ) : ?>
				<div class="px-6 py-8 border-secondary border-t-8 bg-secondary-t20 shadow-lg">
					<h3 class="uppercase !text-primary font-bold"><?php echo esc_html( $card['title'] ); ?></h3>
					<p class="mt-2 text-primary"><?php echo esc_html( $card['copy'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
