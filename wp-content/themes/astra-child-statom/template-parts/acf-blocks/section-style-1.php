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
	<?php if ($design == 'design-1') : ?>
		<?php include __DIR__ . '/section-style-1/design-1.php'; ?>
	<?php else : ?>
		<?php include __DIR__ . '/section-style-1/design-2.php'; ?>
	<?php endif ?>
</section>
