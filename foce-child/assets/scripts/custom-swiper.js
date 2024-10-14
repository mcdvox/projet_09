// document.addEventListener("DOMContentLoaded", () => {
    // alert("DOM ready!");
    
    // Initialisation de Swiper
    var swiper = new Swiper('.swiper-container', {
        // Espacement entre les diapositives
        spaceBetween: 60,
        // Effet coverflow
        effect: 'coverflow',
        // Bouclage des diapositives
        loop: true,
        // Curseur de saisie pour faire défiler le carrousel
        grabCursor: true,
        // Diapositive centrées
        centeredSlides: true,
        // Nombre de diapositives visibles : 3
        slidesPerView: 3,
        // Effet coverflow
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
    });

// });
