document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.querySelector('.menu-box');
    const navMenu = document.querySelector('.right-header');

    hamburgerButton.addEventListener('click', function () {
        navMenu.classList.toggle('show');
    });
});