<?php
/**
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$posts_collection_query = new WP_Query(
	array(
		'post_type'      => 'project',
		'post_status'    => 'publish',
		'posts_per_page' => 9,
		'no_found_rows'  => true,
	)
);

if ( ! $posts_collection_query->have_posts() ) {
	return;
}

// Hardcoded for now - swap to preview a different card design. Will be
// driven by a real field once one exists.
$posts_collection_card_design = 'design-2';
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="grid grid-cols-3 gap-8">
		<?php while ( $posts_collection_query->have_posts() ) : $posts_collection_query->the_post(); ?>
            <div class="">
					<?php include __DIR__ . '/posts-card-designs/' . $posts_collection_card_design . '.php'; ?>
				</div>
		<?php endwhile; ?>
	</div>
</div>

<?php
wp_reset_postdata();