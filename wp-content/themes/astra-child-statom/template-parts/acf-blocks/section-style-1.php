<?php
$block_slug = 'section-style-1';
include get_stylesheet_directory() . '/template-parts/acf-blocks/partials/general-block-options.php';

?>

<?php
$design = 'design-1';
?>

<section
	class="st-section-s3"
	style=""
	>
	<!-- DESIGN 1 - START -->
	<?php if ($design == 'design-1') : ?>
	<div class="<?= $gbo_container_width; ?> flex flex-col md:flex-row items-stretch gap-8">
		<!-- LEFT SIDE -->
		<?php if ( $gbo_section_image ) : ?>
		<div class="flex-1 flex justify-center">
			<img
				class="!h-full !w-full object-cover"
				src="<?php echo esc_url( $gbo_section_image['url'] ); ?>"
				alt="<?php echo esc_attr( $gbo_section_image['alt'] ); ?>"
			>
		</div>
		<?php endif; ?>
		<!-- RIGHT SIDE -->
		<div class="page-hero__content flex-1 flex flex-col justify-between py-12">
			<div class="text-right">
				<p class="uppercase !text-secondary">Who we are</p>
				<h2 class="_heading uppercase !text-primary">DEVELOPING TOMORROW, <span class="text-secondary">ENRICHING TODAY</span></h2>
			</div>
			<div class="text-left">
				<p class="st-hero-text-lead text-primary">Fancourt Property Group develops outstanding residential and mixed-use communities across London; acquired, optimised and delivered without compromise.</p>
				<button type="button" class="st-btn-primary">Secondary</button>
			</div>
		</div>
	</div>
	<!-- DESIGN 1 - END -->
	<?php else : ?>
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
	<?php endif ?>
</section>
