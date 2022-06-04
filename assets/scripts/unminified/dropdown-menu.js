// Toggles class that shows sub menu.
function toggleMenu() {
	const subMenu = this.querySelector( '.sub-menu' );
	if ( subMenu !== null ) {
		subMenu.classList.toggle( 'sub-menu--show' );
	}
}

const menuItemHasChildren = document.querySelectorAll( '.menu-item-has-children' );

if ( menuItemHasChildren.length !== 0 ) {
	menuItemHasChildren.forEach( item => {
		item.addEventListener( 'mouseover', toggleMenu );
		item.addEventListener( 'mouseout', toggleMenu );
	});
}
