document.addEventListener('DOMContentLoaded', () => {
    const menuTitles = document.querySelectorAll('.footer-sub-menu-title'); 

    menuTitles.forEach(title => {
        const nestedItem = title.nextElementSibling;
        const icon = title.querySelector('.expand-icon-footer');

        if (nestedItem) {
            nestedItem.classList.add('hidden'); 

            title.addEventListener('click', () => {
                const isHidden = nestedItem.classList.toggle('hidden');
                icon.classList.toggle('expand-icon-footer', isHidden);
                icon.classList.toggle('retract-icon-footer', !isHidden);
            });
        }
    });
});