/**
 * Generic Swiper carousel initializer.
 *
 * Any partial that needs a carousel just outputs a `.st-swiper-carousel`
 * element (the standard Swiper markup - swiper > swiper-wrapper >
 * swiper-slide) with its options JSON-encoded on `data-swiper-options`.
 * This file finds every one of those on the page and boots a Swiper
 * instance for it, so a single partial can be reused multiple times on the
 * same page without any extra per-instance JS.
 */
( function () {
	function initSwiperCarousels() {
		if ( typeof Swiper === 'undefined' ) {
			return;
		}

		document.querySelectorAll( '.st-swiper-carousel:not(.swiper-initialized)' ).forEach( function ( el ) {
			var options = {};

			if ( el.dataset.swiperOptions ) {
				try {
					options = JSON.parse( el.dataset.swiperOptions );
				} catch ( e ) {
					options = {};
				}
			}

			new Swiper( el, options );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', initSwiperCarousels );
	} else {
		initSwiperCarousels();
	}
} )();
