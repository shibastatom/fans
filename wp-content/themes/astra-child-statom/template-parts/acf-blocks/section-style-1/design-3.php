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
		<?php if ( $gbo_heading_positioning == 'top-content' ) : ?>
			<?php include __DIR__ . '/../partials/heading-block.php'; ?>
		<?php endif; ?>
	</div>

	<div class="flex flex-col md:flex-row items-stretch gap-8">
	<!-- LEFT SIDE -->
	<?php if ( $gbo_content_left_use_section_image == true ) : ?>
	<div class="<?= $gbo_content_left_flex; ?> flex flex-col justify-between">
		<?php if ( $gbo_section_image ) : ?>
		<div class="st-theme-border-1 bg-primary overflow-hidden st-reveal">
			<img
				class="!h-full !w-full object-cover st-reveal-item"
				src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
				alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
			>
		</div>
		<?php endif; ?>
	</div>
	<?php elseif ( (!empty($gbo_content_left_content)  || $gbo_heading_positioning == 'left-content') ) : ?>
	<div class="<?= $gbo_content_left_flex; ?> <?= $gbo_content_left_positioning; ?>">
		<div>
			<?php if ( $gbo_heading_positioning == 'left-content' ) : ?>
				<?php include __DIR__ . '/../partials/heading-block.php'; ?>
			<?php endif; ?>
			<?= $gbo_content_left_content; ?>
		</div>
	</div>
	<?php endif; ?>

	<!-- RIGHT SIDE -->
	<?php if ( $gbo_content_right_use_section_image == true ) : ?>
	<div class="<?= $gbo_content_right_flex; ?> flex flex-col justify-between">
		<?php if ( $gbo_section_image ) : ?>
		<div class="st-theme-border-1 bg-secondary overflow-hidden">
			<div class="st-reveal">
				<img
					class="!h-full !w-full object-cover st-reveal-item"
					src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
					alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
				>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php elseif ( (!empty($gbo_content_right_content)) || $gbo_heading_positioning == 'right-content' ) : ?>
	<div class="<?= $gbo_content_right_flex; ?> <?= $gbo_content_right_positioning; ?>">
		<div>
			<?php if ( $gbo_heading_positioning == 'right-content' ) : ?>
				<?php include __DIR__ . '/../partials/heading-block.php'; ?>
			<?php endif; ?>
			<?= $gbo_content_right_content; ?>
		</div>
	</div>
	<?php endif; ?>
	</div>
</div>
