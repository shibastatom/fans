<?php
/**
 * "Sticky cards" additional part - copy pinned on the left while a taller
 * stack of cards scrolls past it on the right.
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Dummy copy/cards for now - swap for real ACF fields (heading/copy on the
 * left, a repeater on the right) once content is ready.
 *
 * @package Astra Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$process_steps = array(
	array(
		'icon'    => 'fa-solid fa-bullseye',
		'title'   => 'Customers',
		'columns' => 1,
		'items'   => array(
			array(
				'text' => 'Ensuring customers remain at the heart of our decision-making.',
			),
			array(
				'text' => 'Delivering exceptional sustainable homes and places and an outstanding customer experience.',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-map-location-dot',
		'title'   => 'Communities',
		'columns' => 1,
		'items'   => array(
			array(
				'text'  => 'Truly engaging with communities in which we work',
			),
			array(
				'text'  => 'Listening and implementing feedback and contributing to long-term thriving communities',
			),
			array(
				'text'  => 'Building strong relationships in the communities in which we work',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-building',
		'title'   => 'Partners',
		'columns' => 1,
		'items'   => array(
			array(
				'text'  => 'Being a trusted development partner',
			),
			array(
				'text'  => 'Working collaboratively to ensure projects are delivered meeting all stakeholder requirements',
			),
			array(
				'text'  => 'Being open and transparent',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-compass-drafting',
		'title'   => 'Job Creation',
		'columns' => 1,
		'items'   => array(
			array(
				'text'  => 'We ensure that our supply chain creates local apprenticeships and jobs through a Service Level Agreement (SLA) embedded within our Employer Requirements (ERs)',
			),
			array(
				'text'  => 'We have a proven track record of creating multiple jobs, apprenticeships, pieces of training etc.',
			),
			array(
				'text'  => 'Energy strategy, fabric-first approach, EV charging, water efficiency.',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-route',
		'title'   => 'Delivering great places',
		'columns' => 1,
		'items'   => array(
			array(
				'text'  => 'Delivering sustainable places in which people aspire to live',
			),
			array(
				'text'  => 'Innovating and utilising latest sustainable technologies to benefit residents and communities',
			),
		),
	),
);

$sticky_cards = $process_steps;
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="flex flex-col md:flex-row items-start gap-8">
		<!-- LEFT: STICKY COPY -->
		<div class="flex-1 md:sticky md:top-24">
			<?php include __DIR__ . '/../partials/heading-block.php'; ?>
		</div>

		<!-- RIGHT: SCROLLING CARDS -->
		<div class="flex-2 flex flex-col gap-8">
			<?php foreach ( $sticky_cards as $step_index => $step ) : ?>
				<div
				class="flex gap-6 items-start st-reveal-scale"
				style="transition-delay: <?= $step_index * 0.1; ?>s;"
			>
				

				<div class="flex-1 bg-white px-6 py-8 border-secondary border-t-8 shadow-lg">
					<?php if ( $step['icon'] ) : ?>
						<i class="<?php echo esc_attr( $step['icon'] ); ?> text-3xl !text-secondary !mb-8" aria-hidden="true"></i>
					<?php endif; ?>

					<h3 class="uppercase !text-primary font-bold st-heading-reveal"><?php echo esc_html( $step['title'] ); ?></h3>

					<?php
					$step_columns = 2 === $step['columns'] ? array_chunk( $step['items'], ceil( count( $step['items'] ) / 2 ) ) : array( $step['items'] );
					?>
					<div class="grid grid-cols-1 <?= 2 === $step['columns'] ? 'md:grid-cols-2' : ''; ?> gap-x-8">
						<?php foreach ( $step_columns as $step_column ) : ?>
							<ul class="list-disc pl-5 space-y-1">
								<?php foreach ( $step_column as $item ) : ?>
									<li class="text-primary">
										<?php if ( ! empty( $item['label'] ) ) : ?>
											<strong><?php echo esc_html( $item['label'] ); ?>:</strong>
										<?php endif; ?>
										<?php echo esc_html( $item['text'] ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
