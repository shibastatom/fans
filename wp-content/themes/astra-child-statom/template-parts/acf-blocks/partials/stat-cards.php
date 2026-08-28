<?php
/**
 * "Stat cards" additional part - number, suffix, label per card.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Each number rolls up from 0 to its target the first time it scrolls
 * into view, animated generically by assets/js/stat-counter.js - so this
 * partial can be used more than once on the same page with no extra
 * per-instance JS.
 *
 * Expects an ACF repeater field 'stat_cards' on the flexible content row,
 * with sub-fields:
 *   - number (number)
 *   - suffix (text)      e.g. "+", "%"
 *   - label  (text)
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$stat_cards = array();

if ( have_rows( 'stat_cards' ) ) {
	while ( have_rows( 'stat_cards' ) ) {
		the_row();

		$stat_cards[] = array(
			'number' => get_sub_field( 'number' ),
			'suffix' => get_sub_field( 'suffix' ),
			'label'  => get_sub_field( 'label' ),
		);
	}
} else {
	// Dummy data for preview - remove once the ACF repeater has real rows.
	$stat_cards = array(
		array(
			'number' => 250,
			'suffix' => '+',
			'label'  => 'Homes Delivered',
		),
		array(
			'number' => 15,
			'suffix' => '',
			'label'  => 'Years Experience',
		),
		array(
			'number' => 98,
			'suffix' => '%',
			'label'  => 'Client Satisfaction',
		),
		array(
			'number' => 200,
			'suffix' => '%',
			'label'  => 'Projects Completed',
		),
	);
}

if ( empty( $stat_cards ) ) {
	return;
}

?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 w-full">
		<?php foreach ( $stat_cards as $card_index => $card ) : ?>
			<div
				class="px-6 py-8 border-secondary border-t-8 bg-primary shadow-lg text-center aspect-square flex flex-col justify-center st-reveal-scale"
				style="transition-delay: <?= $card_index * 0.1; ?>s;"
			>
				<div>
					<h3 class="st-text-promo !text-secondary">
						<span class="st-stat-counter" data-target="<?php echo esc_attr( $card['number'] ); ?>">0</span><?php echo esc_html( $card['suffix'] ); ?>
					</h3>
					<?php if ( $card['label'] ) : ?>
						<p class="mt-2 uppercase"><?php echo esc_html( $card['label'] ); ?></p>
					<?php endif; ?>
				</div>	
			</div>
		<?php endforeach; ?>
	</div>
</div>
