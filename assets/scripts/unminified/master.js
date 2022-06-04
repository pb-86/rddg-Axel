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
