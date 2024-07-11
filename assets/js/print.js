const printButton = document.querySelector( '.js-print' );

if ( printButton ) {
	printButton.addEventListener( 'click', function() {
		window.print();
	});
}