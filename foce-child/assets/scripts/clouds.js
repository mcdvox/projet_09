// Écouteur d'événement
document.addEventListener('scroll', function() {
  // Position de défilement
  const scrollPosition = window.scrollY;
  // Calcul du mouvement des nuages avec une limite le déplacement à 300px
  const cloudMovement = Math.min(scrollPosition / 5, 300);
  // Sélection et déplacement des nuages
  document.querySelectorAll('#place .bigCloud, #place .littleCloud').forEach(cloud => {
    cloud.style.transform = `translateX(-${cloudMovement}px)`;
  });
});