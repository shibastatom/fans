<?php
/**
 * Posts carousel - Design 1 (thumbnail, title, location, excerpt, button).
 *
 * Included from posts-carousel.php inside the WP_Query loop, once per
 * slide - the current post is already set up via
 * $posts_carousel_query->the_post().
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="h-full flex flex-col">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="group relative block aspect-[3/4] overflow-hidden border-secondary border-t-8">
			<?php the_post_thumbnail( 'medium_large', array( 'class' => 'block !w-full !h-full object-cover transition-transform duration-300 group-hover:scale-110' ) ); ?>
			<div class="absolute inset-0 bg-secondary opacity-0 transition-opacity duration-300 group-hover:opacity-80"></div>
		</a>
	<?php endif; ?>

	<div class="flex flex-col flex-1 pt-4">
		<h3 class="uppercase font-bold"><?php the_title(); ?></h3>
		<p class="uppercase !text-secondary !mb-0">Location</p>
		<p class="flex-1"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
		<a href="<?php the_permalink(); ?>" class="st-btn-secondary mt-4 self-start">Read more</a>
	</div>
</div>
