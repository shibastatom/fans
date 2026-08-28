/**
 * Generic scroll-scrubbed "flick through cards" effect.
 *
 * Expected markup shape (per instance):
 *
 *   <div class="st-scroll-flick" style="height: <n * 100>vh;">  <- tall track
 *     <div class="st-scroll-flick-pin">                          <- pins in place for the track's height
 *       ...static left-side content...
 *       <div class="st-scroll-flick-stack">
 *         <div class="st-scroll-card">Card 1</div>
 *         <div class="st-scroll-card">Card 2</div>
 *         ...
 *       </div>
 *     </div>
 *   </div>
 *
 * As the page scrolls through the tall `.st-scroll-flick` track, this
 * works out how far through it the user is and crossfades the
 * `.st-scroll-card` children accordingly - so any partial can drop in any
 * number of cards with no extra per-instance JS.
 *
 * The pin's height doesn't have to be 100vh - progress is measured against
 * however tall `.st-scroll-flick-pin` actually is (track height minus pin
 * height is exactly how long a sticky element of that height stays stuck),
 * so a shorter pin still tracks correctly.
 */
( function () {
	function clamp( value, min, max ) {
		return Math.max( min, Math.min( max, value ) );
	}

	function initTrack( track ) {
		var cards = track.querySelectorAll( '.st-scroll-card' );
		var pin = track.querySelector( '.st-scroll-flick-pin' );

		if ( ! cards.length || ! pin ) {
			return;
		}

		function update() {
			var rect = track.getBoundingClientRect();
			var scrollableDistance = track.offsetHeight - pin.offsetHeight;
			var progress = scrollableDistance > 0 ? clamp( -rect.top / scrollableDistance, 0, 1 ) : 0;
			var activeIndex = Math.min( cards.length - 1, Math.floor( progress * cards.length ) );

			cards.forEach( function ( card, index ) {
				card.classList.toggle( 'is-active', index === activeIndex );
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

	function initScrollFlickCards() {
		document.querySelectorAll( '.st-scroll-flick' ).forEach( initTrack );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', initScrollFlickCards );
	} else {
		initScrollFlickCards();
	}
} )();
