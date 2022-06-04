const menuItemHasChildren = document.querySelectorAll( '.menu-item-has-children' );

// Adds event listeners for every menu items that have children.
if ( menuItemHasChildren.length !== 0 ) {
	menuItemHasChildren.forEach( item => {
		item.addEventListener( 'mouseover', toggleClass );
		item.addEventListener( 'mouseout', toggleClass );
	});
}

/**
 * Toggles class that is resopnsible for showing sub menu.
 *
 * @return void
 */
function toggleClass() {
	const subMenu = this.querySelector( '.sub-menu' );
	if ( subMenu !== null ) {
		subMenu.classList.toggle( 'sub-menu--show' );
	}
}
