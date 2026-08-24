<?php
$block_slug = 'section-style-1';
include get_stylesheet_directory() . '/template-parts/acf-blocks/partials/general-block-options.php';
?>

<?php if ( $heading ) : ?>
	<h2 class="content-block__heading !text-primary">Text Priamry Important</h2>
	<h2 class="content-block__heading !text-secondary">Text Secondary Important</h2>
	<h2 class="content-block__heading !text-tertiary">Text Tertiary Important</h2>
<?php endif; ?>
<section
	class="<?php echo esc_attr( $section_classes ); ?> bg-tertiary p-12"
	style=""
	>
	<div class="content-block__inner">

		<?php if ( $heading ) : ?>
			<h2 class="content-block__heading !text-secondary"><?php echo esc_html( $heading ); ?>??</h2>
		<?php endif; ?>

		<?php if ( $subheading ) : ?>
			<p class="content-block__subheading"><?php echo esc_html( $subheading ); ?></p>
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
</section>
