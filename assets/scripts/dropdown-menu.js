/**
 * Pokzuje lub ukrywa rozwiane submenu.
 */
function toggleClass() {
	const subMenu = this.querySelector( '.sub-menu' );
	if ( subMenu !== null ) {
		subMenu.classList.toggle( 'sub-menu--show' );
	}
}


document.addEventListener( 'DOMContentLoaded', function() {
	const menuItemHasChildren = document.querySelectorAll( '.menu-item-has-children' );

	if ( menuItemHasChildren.length !== 0 ) {
		menuItemHasChildren.forEach( item => {
			item.addEventListener( 'mouseover', toggleClass );
			item.addEventListener( 'mouseout', toggleClass );
		});
	}
});
