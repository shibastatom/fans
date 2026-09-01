<?php
/**
 * "Process steps" additional part - numbered step cards, each with an
 * icon, a heading, and a list of bullet items (optionally split into two
 * columns).
 *
 * Included from section-style-1.php, which has already included
 * general-block-options.php - $gbo_container_width is inherited from
 * that scope.
 *
 * Dummy data for now - no ACF field wired up yet.
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
?>
<div class="<?= $gbo_container_width; ?> pb-16">
	<div class="flex flex-col gap-8">
		<?php foreach ( $process_steps as $step_index => $step ) : ?>
			<div class="flex gap-6 items-start">
				<div class="shrink-0 w-14 text-3xl font-bold !text-secondary">
					<?php echo esc_html( sprintf( '%02d', $step_index + 1 ) ); ?>
				</div>

				<div class="flex-1 bg-white px-6 py-8 border-secondary border-t-8 shadow-lg">
					<?php if ( $step['icon'] ) : ?>
						<i class="<?php echo esc_attr( $step['icon'] ); ?> text-3xl !text-secondary !mb-8" aria-hidden="true"></i>
					<?php endif; ?>

					<h3 class="uppercase !text-primary font-bold"><?php echo esc_html( $step['title'] ); ?></h3>

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
