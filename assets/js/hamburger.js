/**
 * Pokazuje lub ukrywa rozwijane menu po kliknięciu w przycisk.
 * @param {Node} hamburger 
 * @param {Node} menu 
 */
function toggleMenu( hamburger, menu ) {
	hamburger.addEventListener( 'click', function() {
		if ( menu.classList.contains( 'show' ) ) {
			hamburger.setAttribute( 'aria-expanded', 'false' );
			menu.classList.remove( 'show' );
		} else {
			hamburger.setAttribute( 'aria-expanded', 'true' );
			menu.classList.add( 'show' );
		}
	});
}

/**
 * Wyłącza wyświetlanie menu w wersji mobilnej.
 * @param {Node} menu 
 */
function hideMobileMenu( menu ) {
	if ( window.innerWidth >= 640 ) {
		if ( menu.classList.contains( 'show' ) ) {
			menu.classList.remove( 'show' );
		}
	}
}


document.addEventListener( 'DOMContentLoaded', function() {
	const hamburger = document.querySelector( '.js-hamburger' );
	const menu      = document.querySelector( '.js-menu-header' );

	if ( hamburger !== null && menu !== null ) {
		// Przełączanie widoczności menu.
		toggleMenu( hamburger, menu );

		// Wyłączanie mobilnego menu przy większych szerokościach ekranu.
		window.addEventListener( 'resize', function() {
			hideMobileMenu( menu );
		});
	}
});
