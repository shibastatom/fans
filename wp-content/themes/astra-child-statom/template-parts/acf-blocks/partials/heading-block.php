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
		<p class="st-hero-text-lead st-max-w-60perc"><?= $gbo_subheading; ?></p>
	<?php endif; ?>
</div>
