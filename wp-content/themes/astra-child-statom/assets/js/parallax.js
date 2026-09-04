/**
 * Generic subtle scroll parallax.
 *
 * Any element with `.st-parallax` shifts vertically as the page scrolls,
 * offset from its natural position based on how far it is from the
 * vertical center of the viewport. Optional `data-parallax-speed` (a
 * small decimal, default 0.08) controls how strong the effect is - keep
 * it small for a subtle movement.
 *
 * This drives its own `transform`, so don't put it on an element that
 * already has one applied via CSS (e.g. a `.st-reveal-*` element) - put
 * it on a plain wrapper inside instead, so the two don't fight over the
 * same `transform` property.
 */
( function () {
	function clamp( value, min, max ) {
		return Math.max( min, Math.min( max, value ) );
	}

	function initParallax() {
		var elements = document.querySelectorAll( '.st-parallax' );

		if ( ! elements.length ) {
			return;
		}

		function update() {
			var viewportCenter = window.innerHeight / 2;

			elements.forEach( function ( el ) {
				var rect = el.getBoundingClientRect();
				var elementCenter = rect.top + rect.height / 6;
				var distanceFromCenter = elementCenter - viewportCenter;
				var speed = parseFloat( el.dataset.parallaxSpeed ) || 0.1;
				var offset = clamp( distanceFromCenter * speed * 1, -160, 160 );

				el.style.transform = 'translateY(' + offset + 'px)';
			} );
		}

		var ticking = false;

		function onScroll() {
			if ( ticking ) {
				return;
			}

			ticking = true;
			requestAnimationFrame( function () {
				update();
				ticking = false;
			} );
		}

		window.addEventListener( 'scroll', onScroll, { passive: true } );
		window.addEventListener( 'resize', onScroll );
		update();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', initParallax );
	} else {
		initParallax();
	}
} )();
