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
		<h2 class="<?= $gbo_heading_text_alignment; ?> st-heading-reveal"><?= $gbo_heading; ?></h2>
	<?php endif; ?>

	<?php if ( $gbo_subheading || $gbo_heading_content_content ) : ?>
		<div class="st-max-w-60perc">
			<?php if ( $gbo_subheading ) : ?>
			<p class="st-hero-text-lead st-reveal">
				<?php st_render_word_reveal( $gbo_subheading ); ?>
			</p>
			<?php endif; ?>
		<?php if ( $gbo_heading_content_content ) : ?>
			<?= $gbo_heading_content_content; ?>
		<?php endif; ?>
		</div>
		
	<?php endif; ?>

	<?php if ( $gbo_button_1 ) : ?>
		<a class="st-btn-secondary" href="<?= esc_url( $gbo_button_1['url'] ); ?>" target="<?= esc_attr( $gbo_button_1['target'] ); ?>"><?= esc_html( $gbo_button_1['title'] ); ?></a>
	<?php endif; ?>
	<?php if ( $gbo_button_2 ) : ?>
		<a class="st-btn-outline" href="<?= esc_url( $gbo_button_2['url'] ); ?>" target="<?= esc_attr( $gbo_button_2['target'] ); ?>"><?= esc_html( $gbo_button_2['title'] ); ?></a>
	<?php endif; ?>
</div>
