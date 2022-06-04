// Scrolls to the top of the page.
function scrollToTop() {
	const root = document.documentElement;
	root.scrollTo( {  top: 0 } );
	root.focus();
}

const scrollToTopButton = document.querySelector( '#scroll-to-top' );

if ( scrollToTopButton !== null ) {
	scrollToTopButton.addEventListener( 'click', scrollToTop );
}
