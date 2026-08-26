<?php
/**
 * section-style-1 - Design 1 (split image / content).
 *
 * Included from section-style-1.php, which has already included
 * partials/general-block-options.php - $gbo_container_width and
 * $gbo_section_image are inherited from that scope.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="<?= $gbo_container_width; ?> py-12 flex flex-col">
	<div class="w-full">
		<!-- FULL WIDTH -->
		<div class="<?= $gbo_heading_text_alignment; ?>">
			<h2 class=""><?= $gbo_heading; ?></h2>
			<p class="st-hero-text-lead st-max-w-60perc"><?= $gbo_subheading; ?>??</p>
		</div>
	</div>

	<div class="flex flex-col md:flex-row items-stretch gap-8 mt-8">
	<!-- LEFT SIDE -->
	<?php if ( $gbo_content_left_use_section_image == true ) : ?>
	<div class="flex-1 flex flex-col justify-between">
		<?php if ( $gbo_section_image ) : ?>
		<div class="st-theme-border-1">
			<img
				class="!h-full !w-full object-cover"
				src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
				alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
			>
		</div>
		<?php endif; ?>
	</div>
	<?php elseif ( !empty($gbo_content_left_content) ) : ?>
	<div class="flex-1 <?= $gbo_content_right_positioning; ?>">
		<div><?= $gbo_content_left_content; ?></div>
	</div>
	<?php endif; ?>

	<!-- RIGHT SIDE -->
	<?php if ( $gbo_content_right_use_section_image == true ) : ?>
	<div class="flex-1 flex flex-col justify-between">
		<?php if ( $gbo_section_image ) : ?>
		<div class="st-theme-border-1">
			<img
				class="!h-full !w-full object-cover"
				src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
				alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
			>
		</div>
		<?php endif; ?>
	</div>
	<?php elseif ( !empty($gbo_content_right_content) ) : ?>
	<div class="flex-1 <?= $gbo_content_right_positioning; ?>">
		<div><?= $gbo_content_right_content; ?></div>
	</div>
	<?php endif; ?>
	</div>
</div>
