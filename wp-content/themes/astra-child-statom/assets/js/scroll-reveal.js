/**
 * Generic "reveal on scroll" animator.
 *
 * Two ways to opt in, styled in tailwind-src.css:
 *
 * - `.st-reveal-scale` / `.st-heading-reveal` - put directly on the element
 *   that should animate itself. Safe to observe and animate the same
 *   element as long as its transform only scales or shifts it a small,
 *   fixed amount (a few rem at most) - not enough to meaningfully change
 *   whether it's in the viewport.
 * - `.st-reveal` + `.st-reveal-item` - for larger translate-based effects
 *   (e.g. a full-height slide). A
 *   stable (untransformed) wrapper gets `.st-reveal`, and the element that
 *   actually moves goes inside it with `.st-reveal-item` (revealed via a
 *   `.st-reveal.is-visible .st-reveal-item` rule). We observe the wrapper
 *   rather than the moving item itself - if we observed the item directly,
 *   its own translate would shift its measured position before the
 *   animation ever ran, throwing off (or entirely preventing) the
 *   intersection check.
 *
 * Either way, this file finds every matching element on the page and adds
 * `.is-visible` to it the first time it scrolls into view, so any partial
 * can opt into the effect with no extra per-instance JS.
 */
( function () {
	function initScrollReveal() {
		var elements = document.querySelectorAll( '.st-reveal, .st-reveal-scale, .st-heading-reveal' );

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
