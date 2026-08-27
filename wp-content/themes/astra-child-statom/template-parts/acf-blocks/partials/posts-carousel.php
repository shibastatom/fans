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
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="st-swiper-carousel swiper" data-swiper-options='<?= esc_attr( wp_json_encode( $posts_carousel_options ) ); ?>'>
		<div class="swiper-wrapper">
			<?php
			while ( $posts_carousel_query->have_posts() ) :
				$posts_carousel_query->the_post();
				?>
				<div class="swiper-slide">
					<div class="h-full flex flex-col shadow-lg">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="block aspect-[4/3] overflow-hidden">
								<?php the_post_thumbnail( 'medium_large', array( 'class' => 'block !w-full !h-full object-cover' ) ); ?>
							</a>
						<?php endif; ?>

						<div class="p-6 bg-white flex flex-col flex-1">
							<h3 class="uppercase !text-primary font-bold"><?php the_title(); ?></h3>
							<p class="text-secondary uppercase">Location</p>
							<p class="text-primary flex-1"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
							<a href="<?php the_permalink(); ?>" class="st-btn-secondary mt-4 self-start">Read more</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>

		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
		<!-- <div class="swiper-pagination"></div> -->
	</div>
</div>
<?php wp_reset_postdata(); ?>
