/**
 * Generic subtle scroll parallax.
 *
 * Any element with `.st-parallax` shifts vertically as the page scrolls.
 * Use `.st-parallax-horizontal` to shift it horizontally instead. Both are
 * offset from their natural position based on how far they are from the
 * vertical center of the viewport. Optional `data-parallax-speed` (a
 * small decimal, default 0.08) controls how strong the effect is - keep
 * it small for a subtle movement.
 *
 * `.st-parallax-right-up` uses two scroll-linked phases: it first moves
 * in from the right, then moves upward. `data-parallax-right-distance`
 * and `data-parallax-up-distance` set the distances in pixels (defaults:
 * 240 and 160).
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
		var elements = document.querySelectorAll( '.st-parallax, .st-parallax-horizontal' );
		var rightUpElements = document.querySelectorAll( '.st-parallax-right-up' );

		if ( ! elements.length && ! rightUpElements.length ) {
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

				var axis = el.classList.contains( 'st-parallax-horizontal' ) ? 'X' : 'Y';

				el.style.transform = 'translate' + axis + '(' + offset + 'px)';
			} );

			rightUpElements.forEach( function ( el ) {
				var previousOffsetY = el.parallaxOffsetY || 0;
				var naturalTop = el.getBoundingClientRect().top - previousOffsetY;
				var travel = window.innerHeight + el.offsetHeight;
				var progress = clamp( ( window.innerHeight - naturalTop ) / travel, 0, 1 );
				var rightDistance = parseFloat( el.dataset.parallaxRightDistance ) || 240;
				var upDistance = parseFloat( el.dataset.parallaxUpDistance ) || 160;
				var horizontalProgress = clamp( progress * 2, 0, 1 );
				var verticalProgress = clamp( ( progress - 0.5 ) * 2, 0, 1 );
				var offsetX = rightDistance * ( 1 - horizontalProgress );
				var offsetY = -upDistance * verticalProgress;

				el.style.transform = 'translate3d(' + offsetX + 'px, ' + offsetY + 'px, 0)';
				el.parallaxOffsetY = offsetY;
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
