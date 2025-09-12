// Carrusel de patrocinadores
const carousel = document.querySelector('.carousel');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
let offset = 0;
let autoSlide;

function moveCarousel(direction) {
  const slideWidth = carousel.children[0].offsetWidth + 20; // ancho + margen
  const totalSlides = carousel.children.length;
  const visibleSlides = Math.floor(document.querySelector('.carousel-container').offsetWidth / slideWidth);
  const maxOffset = -(slideWidth * (totalSlides - visibleSlides));

  if (direction === 'next') {
    offset -= slideWidth;
    if (offset < maxOffset) offset = 0;
  } else {
    offset += slideWidth;
    if (offset > 0) offset = maxOffset;
  }

  carousel.style.transform = `translateX(${offset}px)`;
}

// Botones
nextBtn.addEventListener('click', () => moveCarousel('next'));
prevBtn.addEventListener('click', () => moveCarousel('prev'));

// Auto slide
function startAutoSlide() {
  autoSlide = setInterval(() => moveCarousel('next'), 3000);
}
function stopAutoSlide() {
  clearInterval(autoSlide);
}
carousel.addEventListener('mouseover', stopAutoSlide);
carousel.addEventListener('mouseout', startAutoSlide);

startAutoSlide();
