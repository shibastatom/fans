<?php
/**
 * "Logo carousel" additional part - Swiper carousel of sponsor logos.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Pulls images from the ACF Options page ("General Site Content") ->
 * Sponsors group -> Logos gallery field.
 *
 * The carousel itself is initialized generically by
 * assets/js/swiper-init.js, which boots a Swiper instance for every
 * `.st-swiper-carousel` element on the page - so this partial can be used
 * more than once on the same page and each instance still gets its own
 * carousel, no extra per-instance JS needed.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$logo_carousel_sponsors = get_field( 'sponsors', 'option' );
$logo_carousel_logos    = $logo_carousel_sponsors ? $logo_carousel_sponsors['logos'] : array();

if ( empty( $logo_carousel_logos ) ) {
	return;
}

$logo_carousel_options = array(
	'slidesPerView' => 2,
	'spaceBetween'  => 48,
	'loop'          => true,
	'autoplay'      => array(
		'delay'                => 2000,
		'disableOnInteraction' => false,
	),
	'breakpoints'   => array(
		640  => array( 'slidesPerView' => 3 ),
		768  => array( 'slidesPerView' => 4 ),
		1024 => array( 'slidesPerView' => 5 ),
	),
);
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="st-swiper-carousel swiper" data-swiper-options='<?= esc_attr( wp_json_encode( $logo_carousel_options ) ); ?>'>
		<div class="swiper-wrapper items-center">
			<?php foreach ( $logo_carousel_logos as $logo ) : ?>
				<div class="swiper-slide flex items-center justify-center">
					<img
						class="max-h-16 w-auto object-contain grayscale! opacity-70! hover:grayscale-0! hover:opacity-100! transition"
						src="<?php echo esc_url( $logo['sizes']['medium'] ); ?>"
						alt="<?php echo esc_attr( $logo['alt'] ); ?>"
					>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
