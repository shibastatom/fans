<?php
/**
 * section-style-1 - Design 2 (default content block: heading, image, button).
 *
 * Included from section-style-1.php, which has already included
 * partials/general-block-options.php - $gbo_container_width, $gbo_heading,
 * $image and $button are inherited from that scope.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="<?= $gbo_container_width; ?>">
	<div class="content">
		<?php if ( $gbo_heading ) : ?>
			<h2 class="content-block__heading !text-secondary"><?php echo esc_html( $gbo_heading ); ?>??</h2>
		<?php endif; ?>

		<?php if ( $image ) : ?>
			<img
				class="content-block__image"
				src="<?php echo esc_url( $image['url'] ); ?>"
				alt="<?php echo esc_attr( $image['alt'] ); ?>"
			>
		<?php endif; ?>

		<?php if ( $button ) : ?>
			<a
				class="content-block__button"
				href="<?php echo esc_url( $button['url'] ); ?>"
				target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>"
			><?php echo esc_html( $button['title'] ); ?></a>
		<?php endif; ?>
	</div>
</div>
