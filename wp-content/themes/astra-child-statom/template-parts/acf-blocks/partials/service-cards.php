<?php
/**
 * "Feature cards" additional part - icon, title, copy per card.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Expects an ACF repeater field 'feature_cards' on the flexible content
 * row, with sub-fields:
 *   - icon  (text)     Font Awesome class, e.g. "fa-solid fa-building"
 *   - title (text)
 *   - copy  (textarea)
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$feature_cards = array();

if ( have_rows( 'feature_cards' ) ) {
	while ( have_rows( 'feature_cards' ) ) {
		the_row();

		$feature_cards[] = array(
			'icon'  => get_sub_field( 'icon' ),
			'title' => get_sub_field( 'title' ),
			'copy'  => get_sub_field( 'copy' ),
		);
	}
} else {
	// Dummy data for preview - remove once the ACF repeater has real rows.
	$feature_cards = array(
		array(
			'icon'  => 'fa-solid fa-building',
			'title' => 'Vertically Integrated',
			'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
		),
		array(
			'icon'  => 'fa-solid fa-leaf',
			'title' => 'No legacy projects',
			'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
		),
		array(
			'icon'  => 'fa-solid fa-city',
			'title' => 'Future-focused',
			'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
		),
	);
}

if ( empty( $feature_cards ) ) {
	return;
}
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
		<?php foreach ( $feature_cards as $card ) : ?>
			<div class="px-6 py-8 border-secondary border-t-8 bg-white shadow-lg st-reveal-scale">
				<?php if ( $card['icon'] ) : ?>
					<i class="<?php echo esc_attr( $card['icon'] ); ?> text-5xl !text-secondary mb-4" aria-hidden="true"></i>
				<?php endif; ?>

				<?php if ( $card['title'] ) : ?>
					<h3 class="mt-4 uppercase !text-primary font-bold"><?php echo esc_html( $card['title'] ); ?></h3>
				<?php endif; ?>

				<?php if ( $card['copy'] ) : ?>
					<p class="mt-2 text-primary"><?php echo esc_html( $card['copy'] ); ?></p>
				<?php endif; ?>

				<button class="st-btn-primary">Test button</button>
			</div>
		<?php endforeach; ?>
	</div>
</div>
