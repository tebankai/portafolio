const carouselImages = document.querySelector('.carousel-images');
const prevButton = document.querySelector('.carousel-btn.prev');
const nextButton = document.querySelector('.carousel-btn.next');

let currentIndex = 0;

prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex === 0) ? 2 : currentIndex - 1; // Si es el primero, vuelve al último
  updateCarousel();
});

nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex === 2) ? 0 : currentIndex + 1; // Si es el último, vuelve al primero
  updateCarousel();
});

function updateCarousel() {
  const offset = -currentIndex * 100; // Mover el contenedor en función del índice
  carouselImages.style.transform = `translateX(${offset}%)`;
}
