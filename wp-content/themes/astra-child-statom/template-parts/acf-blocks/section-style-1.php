<?php
$block_slug = 'section-style-1';
include get_stylesheet_directory() . '/template-parts/acf-blocks/partials/general-block-options.php';

?>

<section
	class="st-section-s1 bg-gray-300"
	style=""
	>
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
</section>
