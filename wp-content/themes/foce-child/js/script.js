document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
        loop: true, // Permet le défilement infini
        autoplay: {
            delay: 3000, // Temps entre chaque slide (en millisecondes)
            disableOnInteraction: false, // Continue le défilement même après une interaction
        },
        pagination: {
            el: '.swiper-pagination', // Pagination (points en bas)
            clickable: true, // Points cliquables
        },
        navigation: {
            nextEl: '.swiper-button-next', // Bouton "suivant"
            prevEl: '.swiper-button-prev', // Bouton "précédent"
        },
    });
});