// Reproductor
const player = document.getElementById('player');
const playPauseBtn = document.getElementById('playPause');
const volumeSlider = document.getElementById('volume');

player.src = "https://stream.zeno.fm/tr4u2w53sxhvv";
player.volume = 1;

playPauseBtn.addEventListener('click', () => {
  if (player.paused) {
    player.play();
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
  } else {
    player.pause();
    playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
  }
});

volumeSlider.addEventListener('input', () => {
  player.volume = volumeSlider.value;
});

// Carrusel
const carousel = document.querySelector('.carousel');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const carouselContainer = document.querySelector('.carousel-container');

let offset = 0;
let autoSlide = null;

function getSlideMetrics() {
  const first = carousel.children[0];
  if (!first) return { slideWidth: 0, totalSlides: 0, visibleSlides: 1, maxOffset: 0 };

  const style = window.getComputedStyle(first);
  const marginLeft = parseFloat(style.marginLeft) || 0;
  const marginRight = parseFloat(style.marginRight) || 0;
  const slideWidth = first.offsetWidth + marginLeft + marginRight;

  const containerWidth = carouselContainer.offsetWidth;
  const visibleSlides = Math.max(1, Math.floor(containerWidth / slideWidth));
  const totalSlides = carousel.children.length;
  const maxOffset = -(slideWidth * (totalSlides - visibleSlides));

  return { slideWidth, totalSlides, visibleSlides, maxOffset };
}

function moveCarousel(direction) {
  const { slideWidth, maxOffset } = getSlideMetrics();
  if (slideWidth === 0) return;

  if (direction === 'next') {
    offset -= slideWidth;
    if (offset < maxOffset) offset = 0;
  } else {
    offset += slideWidth;
    if (offset > 0) offset = maxOffset;
  }

  carousel.style.transform = `translateX(${offset}px)`;
}

nextBtn.addEventListener('click', () => {
  moveCarousel('next');
  restartAutoSlide();
});
prevBtn.addEventListener('click', () => {
  moveCarousel('prev');
  restartAutoSlide();
});

function startAutoSlide() {
  if (autoSlide) return;
  autoSlide = setInterval(() => moveCarousel('next'), 3000);
}
function stopAutoSlide() {
  if (!autoSlide) return;
  clearInterval(autoSlide);
  autoSlide = null;
}
function restartAutoSlide() {
  stopAutoSlide();
  setTimeout(startAutoSlide, 800);
}

carousel.addEventListener('mouseover', stopAutoSlide);
carousel.addEventListener('mouseout', startAutoSlide);

window.addEventListener('resize', () => {
  const { maxOffset } = getSlideMetrics();
  if (offset < maxOffset) offset = maxOffset;
  if (offset > 0) offset = 0;
  carousel.style.transform = `translateX(${offset}px)`;
});

startAutoSlide();
