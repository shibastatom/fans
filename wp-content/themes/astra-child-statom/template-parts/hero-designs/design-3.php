<?php
/**
 * Generic hero for all Page posts - page title + featured image.
 *
 * Included from page.php inside the loop, after the_post() has run.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

include get_stylesheet_directory() . '/template-parts/acf-blocks/partials/general-page-content.php';
?>

<section
class="st-section-s2 bg-primary bg-cover bg-center bg-no-repeat h-[80vh] flex" 

>
	<div class="ast-container w-full relative flex flex-row md:flex-row items-stretch gap-8">
		<!-- LEFT SIDE -->
		<div class="page-hero__content flex-1 flex flex-col justify-center">
			<div>
				<p>Hero Design 3</p>
				<h1 class="_heading uppercase !text-secondary"><?= $gpo_alt_title ?></h1>
				<!-- <p class="st-hero-text-lead st-reveal"><?php echo esc_html( get_the_excerpt() ); ?></p> -->
				<p class="st-hero-text-lead st-reveal">
					<?php st_render_word_reveal( get_the_excerpt() ); ?>
				</p>
				<button type="button" class="st-btn-secondary">Learn more</button>
			</div>
		</div>

		<!-- RIGHT SIDE -->
		<?php if ( !empty($hero_design_f_image['url'])) : ?>
		<div class="flex-1 flex justify-center">
			<div 
			class="st-theme-border-1 bg-secondary overflow-hidden st-reveal"
			style="background-image: url('https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/08/fancourt-pattern-large-scaled.jpg');"
			>
				<img
					class="!h-full object-cover st-reveal-item"
					src="<?php echo esc_url( $hero_design_f_image['url'] ); ?>"
					alt="<?php echo esc_attr( $hero_design_f_image['alt'] ); ?>"
				>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>