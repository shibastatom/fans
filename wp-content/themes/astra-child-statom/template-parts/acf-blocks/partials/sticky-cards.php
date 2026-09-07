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
		'title'   => 'Identify Vision & Objectives',
		'columns' => 1,
		'items'   => array(
			array(
				'text' => 'Establish clear requirements and aspirations.',
			),
			array(
				'text' => 'Identify opportunities to deliver need in local communities.',
			),
			array(
				'text' => 'Create timelines for delivery of each stage of the project.',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-map-location-dot',
		'title'   => 'Undertake Site Overview',
		'columns' => 1,
		'items'   => array(
			array(
				'label' => 'Location',
				'text'  => 'Context, access, surrounding uses, constraints.',
			),
			array(
				'label' => 'Site Characteristics',
				'text'  => 'Topography, boundaries, existing structures, ecology.',
			),
			array(
				'label' => 'Opportunities & Constraints',
				'text'  => 'Key frontages, views, natural features, connectivity.',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-building',
		'title'   => 'Set Development Proposals',
		'columns' => 2,
		'items'   => array(
			array(
				'label' => 'Best Use Case',
				'text'  => 'Identify most viable outcome based on vision and objectives.',
			),
			array(
				'label' => 'Density & Yield',
				'text'  => 'Model parameters to establish best outcomes.',
			),
			array(
				'label' => 'Planning Strategy',
				'text'  => 'Establish a clear planning strategy to deliver optimal development proposals.',
			),
			array(
				'label' => 'Feasibility Studies',
				'text'  => 'Clear modelling of financial outcomes to establish a financially deliverable proposal.',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-compass-drafting',
		'title'   => 'Clarify Design Principles',
		'columns' => 2,
		'items'   => array(
			array(
				'label' => 'Architecture',
				'text'  => 'Cohesive style, material palette, facade rhythm.',
			),
			array(
				'label' => 'Public Realm',
				'text'  => 'Streetscape, lighting, planting, play areas.',
			),
			array(
				'label' => 'Sustainability',
				'text'  => 'Energy strategy, fabric-first approach, EV charging, water efficiency.',
			),
			array(
				'label' => 'Access & Movement',
				'text'  => 'Vehicular, pedestrian and cycle, public transport integration.',
			),
			array(
				'label' => 'Amenity & Community Infrastructure',
				'text'  => 'On-site amenity, resident/community facilities and local service requirements.',
			),
			array(
				'label' => 'Social Value',
				'text'  => 'Engagement, employment, community partnerships.',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-route',
		'title'   => 'Establish Delivery Strategy',
		'columns' => 2,
		'items'   => array(
			array(
				'label' => 'Phasing',
				'text'  => 'Construction programmes, phases of occupation and handover.',
			),
			array(
				'label' => 'Technical Requirements',
				'text'  => 'Surveys, utilities, drainage, engineering constraints.',
			),
			array(
				'label' => 'Planning Approach',
				'text'  => 'Policy alignment, design codes, stakeholder engagement.',
			),
			array(
				'label' => 'Cost Control',
				'text'  => 'Budgets across planning, construction, handover and maintenance.',
			),
		),
	),
	array(
		'icon'    => 'fa-solid fa-flag-checkered',
		'title'   => 'Execute Project Delivery',
		'columns' => 1,
		'items'   => array(
			array(
				'label' => 'Planning',
				'text'  => 'Deploy the planning strategy to the agreed programme to meet the development proposals.',
			),
			array(
				'label' => 'Construction',
				'text'  => 'Safely deliver the development proposals on time and in budget.',
			),
			array(
				'label' => 'Handover & Maintenance',
				'text'  => 'Ongoing maintenance and support following handover.',
			),
		),
	),
);


$sticky_cards = array(
	array(
		'title' => 'Lorem Ipsum One',
		'copy'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
	),
	array(
		'title' => 'Lorem Ipsum Two',
		'copy'  => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
	),
	array(
		'title' => 'Lorem Ipsum Three',
		'copy'  => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
	),
	array(
		'title' => 'Lorem Ipsum Four',
		'copy'  => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
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
				<div class="shrink-0 w-14 font-bold !text-secondary">
					<p class="st-text-promo"><?php echo esc_html( sprintf( '%02d', $step_index + 1 ) ); ?></p>
				</div>

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
