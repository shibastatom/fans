<?php
/**
 * Shared heading block (eyebrow + heading + subheading) for section-style-1
 * designs.
 *
 * Included from a design-*.php file, which has already included
 * general-block-options.php - $gbo_eyebrow, $gbo_heading,
 * $gbo_heading_text_alignment and $gbo_subheading are inherited from
 * that scope.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="<?= $gbo_heading_text_alignment; ?> mb-8">
	<?php if ( $gbo_eyebrow ) : ?>
		<p class="st-eyebrow"><?= $gbo_eyebrow; ?></p>
	<?php endif; ?>

	<?php if ( $gbo_heading ) : ?>
		<h2 class="<?= $gbo_heading_text_alignment; ?>"><?= $gbo_heading; ?></h2>
	<?php endif; ?>

	<?php if ( $gbo_subheading ) : ?>
		<p class="st-hero-text-lead st-max-w-60perc st-reveal">
			<?php
			$gbo_subheading_words = explode( ' ', wp_strip_all_tags( $gbo_subheading ) );
			foreach ( $gbo_subheading_words as $gbo_subheading_word_index => $gbo_subheading_word ) {
				printf(
					'<span class="st-word" style="transition-delay: %ss;">%s</span> ',
					esc_attr( $gbo_subheading_word_index * 0.033 ),
					esc_html( $gbo_subheading_word )
				);
			}
			?>
		</p>
	<?php endif; ?>

	<?php if ( $gbo_button_1 ) : ?>
		<a class="st-btn-secondary" href="<?= esc_url( $gbo_button_1['url'] ); ?>" target="<?= esc_attr( $gbo_button_1['target'] ); ?>"><?= esc_html( $gbo_button_1['title'] ); ?></a>
	<?php endif; ?>
	<?php if ( $gbo_button_2 ) : ?>
		<a class="st-btn-outline" href="<?= esc_url( $gbo_button_2['url'] ); ?>" target="<?= esc_attr( $gbo_button_2['target'] ); ?>"><?= esc_html( $gbo_button_2['title'] ); ?></a>
	<?php endif; ?>
</div>
