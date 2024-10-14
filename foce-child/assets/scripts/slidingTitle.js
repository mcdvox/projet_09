// Écouteur d'événement
document.addEventListener('DOMContentLoaded', function() {
    // Fonction de détection du scroll
    function onScroll() {
        // Sélection des titres et récupération de leur position
        document.querySelectorAll('.slidingTitle span').forEach(function(title, index) {
            var rect = title.getBoundingClientRect();
            // Vérification de la visibilité du titre
            if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                // Animation de l'apparition du titre
                setTimeout(function() {
                    title.classList.add('visible');
                }, index * 100); // Décalage de 100ms entre chaque mot
            }
        });
    }
    
    // Écoute du scroll et exécution initiale
    window.addEventListener('scroll', onScroll);
    onScroll();
});