document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.menuplanty');

    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active'); // Affiche/masque le menu en ajoutant/retirant la classe 'active'
        menuToggle.classList.toggle('active'); // Transforme le bouton hamburger en "X" lorsqu'il est actif
    });
});
