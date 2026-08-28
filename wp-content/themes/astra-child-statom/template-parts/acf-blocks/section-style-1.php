<?php
$block_slug = 'section-style-1';
include get_stylesheet_directory() . '/template-parts/acf-blocks/partials/general-block-options.php';

?>

<?php
$design = $gbo['section_design'];
?>
<section
	class="st-section-s3 relative <?php echo $gbo_background_image ? 'bg-cover bg-center bg-no-repeat' : $gbo_background_colour; ?>"
	<?php if ( $gbo_background_image ) : ?>
	style="background-image: url('<?php echo esc_url( $gbo_background_image['url'] ); ?>');"
	<?php endif; ?>
	>
	<?php if ( $gbo_background_image ) : ?>
	<div class="absolute inset-0 <?= $gbo_background_overlay; ?>"></div>
	<?php endif; ?>

	<div class="relative z-10 <?= $gbo_background_overlay; ?>">
		<?php if ($design == 'design-2') : ?>
			<?php include __DIR__ . '/section-style-1/design-2.php'; ?>
		<?php elseif ($design == 'design-3') : ?>
			<?php include __DIR__ . '/section-style-1/design-3.php'; ?>
		<?php else : ?>
			<?php include __DIR__ . '/section-style-1/design-1.php'; ?>
		<?php endif ?>

		<?php if ( $gbo_additional_part === 'test-cards' ) : ?>
			<?php include __DIR__ . '/partials/test-cards.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'feature-cards' ) : ?>
			<?php include __DIR__ . '/partials/feature-cards.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'service-cards' ) : ?>
			<?php include __DIR__ . '/partials/service-cards.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'posts-carousel' ) : ?>
			<?php include __DIR__ . '/partials/posts-carousel.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'stat-cards' ) : ?>
			<?php include __DIR__ . '/partials/stat-cards.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'logo-carousel' ) : ?>
			<?php include __DIR__ . '/partials/logo-carousel.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'cta' ) : ?>
			<?php include __DIR__ . '/partials/cta.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'sticky-cards' ) : ?>
			<?php include __DIR__ . '/partials/sticky-cards.php'; ?>
		<?php endif; ?>
		<?php if ( $gbo_additional_part === 'scroll-flick-cards' ) : ?>
			<?php include __DIR__ . '/partials/scroll-flick-cards.php'; ?>
		<?php endif; ?>
	</div>
</section>
