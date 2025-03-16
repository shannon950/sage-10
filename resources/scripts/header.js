document.addEventListener('DOMContentLoaded', () => {
    const hamburgerButton = document.getElementById('hamburger-button');

    // open and close hamburger menu
    hamburgerButton.addEventListener('click', toggleHamburgerMenu);

     // add listeners for main navigation items
     const primaryNavItems = document.querySelectorAll('#primary-nav-container > nav > div > ul > li');
     let openSubMenu = null;
   
     primaryNavItems.forEach(menuItem => {
       const submenu = menuItem.querySelector('.sub-menu');
   
       if (submenu) {
         submenu.classList.add('hidden');
   
         menuItem.addEventListener('click', (event) => {
           event.stopPropagation();
   
           if (openSubMenu && openSubMenu !== submenu) {
             openSubMenu.classList.add('hidden');
           }
   
           submenu.classList.toggle('hidden');
           openSubMenu = submenu.classList.contains('hidden') ? null : submenu;
         });
       }
     });
 
     document.addEventListener('click', () => {
       if (openSubMenu) {
         openSubMenu.classList.add('hidden');
         openSubMenu = null; // reset the tracker
       }
     });

     // add listeners for hamburger right side menu items
    const hamburgerMenuItems = document.querySelectorAll('.sub_menu.right > .menu > div > ul > li');
    let openHamburgerSubMenu = null;
    let openIconSpan = null;

    hamburgerMenuItems.forEach(li => {
        const nestedUl = li.querySelector('ul');
        const link = li.querySelector('a');
        const iconSpan = document.createElement('span');

        if (nestedUl) {
            iconSpan.className = 'expand-icon-header';
            nestedUl.classList.add('hidden');

            // add an event listener to toggle visibility of nested sub-menu
            li.addEventListener('click', (e) => {
                // only prevent re-direction for parent list items
                if (e.target.closest('li') === li && nestedUl) {
                    e.preventDefault(); 
                }
                
                // close the previously open submenu if it's not the current one
                if (openHamburgerSubMenu && openHamburgerSubMenu !== nestedUl) {
                    openHamburgerSubMenu.classList.add('hidden');

                    // reset the icon class of the previously open submenu
                    if (openIconSpan) {
                        openIconSpan.classList.remove('retract-icon-header');
                        openIconSpan.classList.add('expand-icon-header');
                    }
                }

                // toggle the current submenu
                const isHidden = nestedUl.classList.toggle('hidden');
                iconSpan.classList.toggle('retract-icon-header', !isHidden);
                iconSpan.classList.toggle('expand-icon-header', isHidden);

                // update the currently open submenu tracker
                openHamburgerSubMenu = isHidden ? null : nestedUl;
                openIconSpan = isHidden ? null : iconSpan;
            });
        } else {
            const iconImg = Object.assign(document.createElement('img'), {
                className: 'arrow-svg',
                src: arrowIconUrl, // created in header.blade.php to get dynamic path
                alt: "right facing black arrow"
            });
            iconSpan.appendChild(iconImg)
        }

        if (link) {
            link.appendChild(iconSpan);
        }
    });
    
    // dynamically align sub menu to parent nav item  
    window.addEventListener('load', () => paddNestedItemToParent(primaryNavItems));
    window.addEventListener('resize', () => paddNestedItemToParent(primaryNavItems));
});

const toggleHamburgerMenu = () => {
    const hamburgerButton = document.getElementById('hamburger-button');
    const dropdownMenu = document.querySelector('#hamburger-dropdown-menu');
    const primaryNav = document.getElementById('primary-nav-container');

    hamburgerButton.classList.toggle('active');
    dropdownMenu.classList.toggle('hidden');
    primaryNav.classList.toggle('hidden');

    if (dropdownMenu.classList.contains('hidden')) {
        revertIcons();
    }
}

const revertIcons = () => {
    const retractIcons = document.querySelectorAll('.retract-icon-header');

    retractIcons.forEach(icon => {
        icon.classList.remove('retract-icon-header');
        icon.classList.add('expand-icon-header');

        const parentLi = icon.closest('li');
        const nestedUl = parentLi.querySelector('ul');

        if (nestedUl) {
            nestedUl.classList.toggle('hidden');
        }
    });
}

const paddNestedItemToParent = (primaryNavItems) => {
    primaryNavItems.forEach(menuItem => { 
        const subMenu = menuItem.querySelector('ul.sub-menu');
        if (subMenu) {
            const offsetLeft = menuItem.getBoundingClientRect().left;
            subMenu.style.paddingLeft = `${offsetLeft}px`;
        }
    });
}