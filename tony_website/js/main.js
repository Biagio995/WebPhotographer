document.addEventListener('DOMContentLoaded', function () {
  // Animazioni di fade-in per gli elementi con la classe animate-fade-in
  const fadeElements = document.querySelectorAll('.animate-fade-in');

  if (fadeElements.length > 0) {
    fadeElements.forEach(element => {
      element.style.opacity = '0';
      element.style.transform = 'translateY(20px)';
      element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    });

    setTimeout(() => {
      fadeElements.forEach(element => {
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
      });
    }, 300);
  }

  // Gestione della galleria (hover per mostrare overlay)
  const galleryItems = document.querySelectorAll('.gallery-item');

  if (galleryItems.length > 0) {
    galleryItems.forEach(item => {
      const overlay = item.querySelector('.gallery-overlay');

      item.addEventListener('mouseenter', () => {
        if (overlay) {
          overlay.style.opacity = '1';
        }
      });

      item.addEventListener('mouseleave', () => {
        if (overlay) {
          overlay.style.opacity = '0';
        }
      });
    });
  }
});
