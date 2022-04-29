// Back to top of the page
function scrollToTop() {
	const root = document.documentElement;
	root.scrollTo( { top: 0, } );
	root.focus();
}

const scrollToTopButton = document.getElementById( 'scroll-to-top' );

if ( scrollToTopButton ) {
	scrollToTopButton.addEventListener( 'click', scrollToTop );
}

// Dropdown menu
function showSubMenu() {
	this.querySelector('.axel-submenu').classList.add('axel-submenu--show');
}

function hideSubMenu() {
	this.querySelector('.axel-submenu').classList.remove('axel-submenu--show');
}

const hasChildren = document.getElementsByClassName( 'axel-menu__has-children' );

if ( hasChildren ) {
	Array.from(hasChildren).forEach(el => {
		el.addEventListener('mouseover', showSubMenu);
		el.addEventListener('mouseout', hideSubMenu);
	})
}
