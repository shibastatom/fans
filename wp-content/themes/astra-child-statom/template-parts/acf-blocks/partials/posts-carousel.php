<?php
/**
 * "Posts carousel" additional part - Swiper carousel of the latest Posts.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
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

$posts_carousel_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 9,
		'no_found_rows'  => true,
	)
);

if ( ! $posts_carousel_query->have_posts() ) {
	return;
}

$posts_carousel_options = array(
	'slidesPerView' => 1,
	'spaceBetween'  => 24,
	'loop'          => true,
	'navigation'    => array(
		'nextEl' => '.swiper-button-next',
		'prevEl' => '.swiper-button-prev',
	),
	'pagination'    => array(
		'el'        => '.swiper-pagination',
		'clickable' => true,
	),
	'breakpoints'   => array(
		768  => array( 'slidesPerView' => 2 ),
		1024 => array( 'slidesPerView' => 3 ),
	),
);

// Hardcoded for now - swap to preview a different card design. Will be
// driven by a real field once one exists.
$posts_carousel_card_design = 'design-1';
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="st-swiper-carousel swiper" data-swiper-options='<?= esc_attr( wp_json_encode( $posts_carousel_options ) ); ?>'>
		<div class="swiper-wrapper">
			<?php
			while ( $posts_carousel_query->have_posts() ) :
				$posts_carousel_query->the_post();
				?>
				<div class="swiper-slide">
					<?php include __DIR__ . '/posts-card-designs/' . $posts_carousel_card_design . '.php'; ?>
				</div>
			<?php endwhile; ?>
		</div>

		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
		<!-- <div class="swiper-pagination"></div> -->
	</div>
</div>
<?php wp_reset_postdata(); ?>
