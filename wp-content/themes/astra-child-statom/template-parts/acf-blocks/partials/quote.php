<?php
/**
 * "Quote" additional part - a pull-quote from the CEO, with photo and
 * attribution.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Dummy content for now - swap for real ACF fields (quote text, name,
 * job title, photo) once content is ready.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$quote_text  = 'Every project we deliver is built on a simple principle: create places people are proud to call home. That commitment shapes every decision we make, from the first sketch to the final handover.';
$quote_name  = 'John Smith';
$quote_title = 'Chief Executive Officer';
$quote_photo = 'https://chocolate-zebra-256559.hostingersite.com/wp-content/uploads/2026/09/senior-expert-square.png';
?>
<div class="
<?= $gbo_container_width; ?> 
<?= $gbo_hide_main_content == true ? 'py-12' : '' ?>
">
	<div class="flex flex-col md:flex-row items-center gap-8 shadow-2xl st-bg-fade-primary-dp-p-d border-secondary border-l-8 st-parallax-horizontal pt-8">
		<div class="flex-2 shrink-0 w-full aspect-square overflow-hidden st-reveal-scale">
			<img class="!w-full !h-full object-cover" src="<?php echo esc_url( $quote_photo ); ?>" alt="<?php echo esc_attr( $quote_name ); ?>">
		</div>

		<div class="flex-3 st-reveal">
			<i class="fa-solid fa-quote-left text-4xl !text-secondary" aria-hidden="true"></i>
			<blockquote class="st-hero-text-lead-2  !text-white st-reveal-item">
				<?php echo esc_html( $quote_text ); ?>
			</blockquote>
			<p class="mt-4 uppercase font-bold ">
				<span class="text-white"><?php echo esc_html( $quote_name ); ?></span>
				<span class="block text-secondary font-normal normal-case"><?php echo esc_html( $quote_title ); ?></span>
			</p>
		</div>
	</div>
</div>
