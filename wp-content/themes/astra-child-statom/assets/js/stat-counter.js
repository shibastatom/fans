/**
 * Generic "count up" stat number animator.
 *
 * Any partial that needs a rolling stat number just outputs a
 * `.st-stat-counter` element with its target value on `data-target`
 * (and, optionally, a `data-duration` in ms). This file finds every one
 * of those on the page and animates it from 0 up to its target the first
 * time it scrolls into view, so a single partial can be reused multiple
 * times on the same page with no extra per-instance JS.
 */
( function () {
	function animateCounter( el ) {
		var target = parseInt( el.dataset.target, 10 ) || 0;
		var duration = parseInt( el.dataset.duration, 10 ) || 2000;
		var startTime = null;

		function step( timestamp ) {
			if ( ! startTime ) {
				startTime = timestamp;
			}

			var progress = Math.min( ( timestamp - startTime ) / duration, 1 );
			el.textContent = Math.floor( progress * target );

			if ( progress < 1 ) {
				requestAnimationFrame( step );
			} else {
				el.textContent = target;
			}
		}

		requestAnimationFrame( step );
	}

	function initStatCounters() {
		var counters = document.querySelectorAll( '.st-stat-counter' );

		if ( ! counters.length ) {
			return;
		}

		if ( typeof IntersectionObserver === 'undefined' ) {
			counters.forEach( animateCounter );
			return;
		}

		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						animateCounter( entry.target );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.4 }
		);

		counters.forEach( function ( el ) {
			observer.observe( el );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', initStatCounters );
	} else {
		initStatCounters();
	}
} )();
