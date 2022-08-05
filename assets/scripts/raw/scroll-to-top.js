const scrollToTopButton = document.querySelector( '#scroll-to-top' );

// Adds event listener to button.
if ( scrollToTopButton !== null ) {
	scrollToTopButton.addEventListener( 'click', scrollToTop );
}

/**
 * Scrolls to top of the page.
 *
 * @return void
 */
function scrollToTop() {
	const root = document.documentElement;
	root.scrollTo( {  top: 0 } );
	root.focus();
}