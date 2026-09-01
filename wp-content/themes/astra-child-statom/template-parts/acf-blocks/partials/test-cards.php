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



$get_gbo_cards_set = $gbo_cards_set;
$chosen_cards_set = '';
switch ( $get_gbo_cards_set ) {
	case 'philosophy':
		$chosen_cards_set = 'philosophy';
		break;
	default:
		$chosen_cards_set = 'philosophy';
		break;
}
$gsc_features_cards = get_field( 'featured_cards', 'option' );
$gsc_features_cards_chosen_set = $gsc_features_cards[ $chosen_cards_set ] ?? array();






$feature_cards = array();
// $feature_cards = $gsc_features_cards_chosen_set

if ( have_rows( 'feature_cards' ) ) {
	while ( have_rows( 'feature_cards' ) ) {
		the_row();

		$feature_cards[] = array(
			'icon'  => get_sub_field( 'icon' ),
			'title' => get_sub_field( 'title' ),
			'copy'  => get_sub_field( 'copy' ),
		);
	}
} elseif ( ! empty( $gsc_features_cards_chosen_set ) ) {
	$feature_cards = $gsc_features_cards_chosen_set;
} else {
	// Dummy data for preview - remove once the ACF repeater has real rows.
	$feature_cards = array(
		array(
			'icon'  => 'fa-solid fa-building',
			'title' => 'Test Card 1',
			'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
		),
		array(
			'icon'  => 'fa-solid fa-leaf',
			'title' => 'Test Card 2',
			'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
		),
		array(
			'icon'  => 'fa-solid fa-city',
			'title' => 'Test Card 3',
			'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
		),
		array(
			'icon'  => 'fa-solid fa-chart-line',
			'title' => 'Test Card 4',
			'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
		),
	);
}

if ( empty( $feature_cards ) ) {
	return;
}

// When enabled via the 'card_overlap' ACF True/False field, pull this block
// up over its sibling above and narrow it in slightly on each side.
// $overlap_classes = $gbo_additional_part_overlap ? 'relative z-10 mt-16 mx-16 p-6' : '';
// var_dump($gbo_additional_part_overlap);
$overlap_classes = $gbo_additional_part_overlap == true ? 'st-additional-overlap-container' : '';



?>
<div class="<?= $overlap_classes; ?> <?= $gbo_container_width; ?> pb-16">
	<div class="st-additional-overlap-container-content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
		<?php foreach ( $feature_cards as $card_index => $card ) : ?>
			<div
				class="px-6 py-8 border-secondary border-t-8 bg-secondary-t20 shadow-lg st-reveal-scale"
				style="transition-delay: <?= $card_index * 0.1; ?>s;"
			>
				<?php if ( $card['icon'] ) : ?>
					<i class="<?php echo esc_attr( $card['icon'] ); ?> text-5xl !text-secondary mb-4" aria-hidden="true"></i>
				<?php endif; ?>

				<?php if ( $card['title'] ) : ?>
					<h3 class="mt-4 uppercase !text-primary font-bold"><?php echo esc_html( $card['title'] ); ?></h3>
				<?php endif; ?>

				<?php if ( $card['copy'] ) : ?>
					<p class="mt-2 text-primary"><?php echo esc_html( $card['copy'] ); ?></p>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
</div>