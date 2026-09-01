<?php
/**
 * The template for displaying all pages.
 *
 * Overrides the parent Astra page.php so that pages render the "Content
 * Blocks" ACF Flexible Content field (looping each row and including a
 * matching template part from template-parts/acf-blocks/) instead of
 * the default post content, falling back to the_content() when the field
 * is empty.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() === 'left-sidebar' ) { ?>

	<?php get_sidebar(); ?>

<?php } ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php

		// HERO SECTION
		get_template_part( 'template-parts/hero');

		while ( have_posts() ) :
			the_post();
						
			// FLEXIBLE CONTENT PAGE BUILDER
			if ( function_exists( 'have_rows' ) && have_rows( 'content_blocks' ) ) :

				// Rename 'content_blocks' above and below to match your Flexible Content field's actual name if different.
				while ( have_rows( 'content_blocks' ) ) :
					the_row();

					$layout        = get_row_layout();
					$template_slug = str_replace( '_', '-', $layout );
					$template_part = get_stylesheet_directory() . '/template-parts/acf-blocks/' . $template_slug . '.php';

					if ( file_exists( $template_part ) ) {
						include $template_part;
					}
				endwhile;

			else :

				the_content();

			endif;

		endwhile;
		?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() === 'right-sidebar' ) { ?>

	<?php get_sidebar(); ?>

<?php } ?>

<?php get_footer(); ?>
