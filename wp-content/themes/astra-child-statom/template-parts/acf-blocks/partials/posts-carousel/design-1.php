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
