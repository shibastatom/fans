<?php
$block_slug = 'section-style-1';
include get_stylesheet_directory() . '/template-parts/acf-blocks/partials/general-block-options.php';

?>

<?php
$design = $gbo['section_design'];
?>

<section
	class="st-section-s3"
	style=""
	>
	<?php if ($design == 'design-2') : ?>
		<?php include __DIR__ . '/section-style-1/design-1.php'; ?>
	<?php elseif ($design == 'design-3') : ?>
		<?php include __DIR__ . '/section-style-1/design-3.php'; ?>
	<?php else : ?>
		<?php include __DIR__ . '/section-style-1/design-2.php'; ?>
	<?php endif ?>

	<?php if ( $gbo_additional_part === 'feature-cards' ) : ?>
		<?php include __DIR__ . '/partials/feature-cards.php'; ?>
	<?php endif; ?>
</section>
