/**
 * Generic "reveal on scroll" animator.
 *
 * A stable (untransformed) wrapper gets `.st-reveal`, and the element
 * that should actually animate into place goes inside it with
 * `.st-reveal-item` (styled in tailwind-src.css to start translated/
 * hidden, revealing via a `.st-reveal.is-visible .st-reveal-item` rule).
 * We observe the wrapper rather than the animated item itself - if we
 * observed the item directly, its own CSS transform would move its
 * measured position before the animation ever ran, throwing off (or
 * entirely preventing) the intersection check. This file finds every
 * `.st-reveal` on the page and adds `.is-visible` to it the first time
 * it scrolls into view, so any partial can opt into the effect with no
 * extra per-instance JS.
 */
( function () {
	function initScrollReveal() {
		var elements = document.querySelectorAll( '.st-reveal' );

		if ( ! elements.length ) {
			return;
		}

		if ( typeof IntersectionObserver === 'undefined' ) {
			elements.forEach( function ( el ) {
				el.classList.add( 'is-visible' );
			} );
			return;
		}

		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.2 }
		);

		elements.forEach( function ( el ) {
			observer.observe( el );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', initScrollReveal );
	} else {
		initScrollReveal();
	}
} )();
