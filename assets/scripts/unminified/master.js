// Go to top
 function scrollToTop() {
	const root = document.documentElement;
	root.scrollTo(
		{
			top: 0,
		}
	);
	root.focus();
}

const scrollToTopButton = document.getElementById( 'scroll-to-top' );
scrollToTopButton.addEventListener( 'click', scrollToTop );

// Dropdown menu
const hasChildren = document.getElementsByClassName( 'menu-item-has-children' );

Array.from( hasChildren ).forEach( el => {
	el.addEventListener( 'mouseover', showSubMenu );
	el.addEventListener( 'mouseout', hideSubMenu );
})

function showSubMenu() {
	const submenu = this.querySelector( '.sub-menu' );
	submenu.classList.add( 'axel-submenu--show' );
	submenu.style.display = 'block';
}

function hideSubMenu() {
	const submenu = this.querySelector( '.sub-menu' );
	submenu.classList.remove( 'axel-submenu--show' );
	submenu.style.display = 'none';
}