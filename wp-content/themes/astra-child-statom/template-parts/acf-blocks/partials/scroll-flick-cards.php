<?php
/**
 * "Scroll flick cards" additional part - copy pinned on the left while
 * scrolling crossfades through a stack of cards on the right.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * The crossfade itself is scroll-scrubbed generically by
 * assets/js/scroll-flick-cards.js, which finds every `.st-scroll-flick`
 * track on the page and swaps its `.st-scroll-card` children based on how
 * far the user has scrolled through it - so this partial can be reused
 * more than once on the same page with no extra per-instance JS.
 *
 * Dummy copy/cards for now - swap for real ACF fields (heading/copy on
 * the left, a repeater on the right) once content is ready.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Placeholder for preview only - swap for a real ACF image field per row.



$scroll_flick_cards = array(
	array(
		'icon'  => 'fa-solid fa-building',
		'title' => 'Lorem Ipsum One',
		'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'image' => 'https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/08/warm-cloud-bg-scaled.jpg',
	),
	array(
		'icon'  => 'fa-solid fa-leaf',
		'title' => 'Lorem Ipsum Two',
		'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'image' => 'https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/08/white-cloud-scaled.jpeg',
	),
	array(
		'icon'  => 'fa-solid fa-city',
		'title' => 'Lorem Ipsum Three',
		'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'image' => 'https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/08/warm-cloud-bg-scaled.jpg',
	),
);
?>
<div class="st-scroll-flick" style="height: <?= count( $scroll_flick_cards ) * 100; ?>vh;">
	<div class="st-scroll-flick-pin">
		<div class="<?= $gbo_container_width; ?> flex flex-col md:flex-row items-center gap-8">
			<!-- LEFT: STATIC COPY -->
			<div class="flex-2">
				<div class="<?= $gbo_content_left_flex; ?> <?= $gbo_content_left_positioning; ?> st-reveal-left">
					<div>
						<?php if ( $gbo_heading_positioning == 'left-content' ) : ?>
							<?php include __DIR__ . '/../partials/heading-block.php'; ?>
						<?php endif; ?>
						<?= $gbo_content_left_content; ?>
					</div>
				</div>
			</div>

			<!-- RIGHT: CROSSFADING CARDS -->
			<div class="flex-3 st-scroll-flick-stack w-full">
				<?php foreach ( $scroll_flick_cards as $card_index => $card ) : ?>
					<div class="st-scroll-card bg-secondary-t20 border-secondary border-t-8 shadow-lg<?= 0 === $card_index ? ' is-active' : ''; ?>">
						<div class="p-8">
							<?php if ( $card['icon'] ) : ?>
								<i class="<?php echo esc_attr( $card['icon'] ); ?> text-4xl !text-secondary mb-4" aria-hidden="true"></i>
							<?php endif; ?>

							<h3 class="uppercase font-bold"><?php echo esc_html( $card['title'] ); ?> <span class="text-secondary">VALUE</span></h3>
							<p class="mt-2"><?php echo esc_html( $card['copy'] ); ?></p>
						</div>

						<?php if ( $card['image'] ) : ?>
							<div class="aspect-[16/9] w-full overflow-hidden">
								<img class="block !w-full object-cover" src="<?= $card['image']; ?>" alt="">
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
