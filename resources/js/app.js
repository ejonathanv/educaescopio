import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function showMenu() {
    let button = document.querySelector('.menu-button');
    let menu = document.querySelector('.menu-content');
    let body = document.querySelector('body');
    button.addEventListener('click', function() {
        menu.classList.add('show');
        body.classList.add('overflow-hidden');
        window.scrollTo(0, 0);
    });
}

function closeMenu() {
    let button = document.querySelector('.close-button');
    let menu = document.querySelector('.menu-content');
    let body = document.querySelector('body');
    button.addEventListener('click', function() {
        menu.classList.remove('show');
        body.classList.remove('overflow-hidden');
    });
}

showMenu();
closeMenu();