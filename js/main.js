var mySwiper = new Swiper('.hotel-slider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },

  // keyboard control
  keyboard: {
    enabled: true,
  },
});

var mySwiper2 = new Swiper('.review-slider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.review-slider__button--next',
    prevEl: '.review-slider__button--prev',
  },

  // keyboard control
  keyboard: {
    enabled: true,
  },
});

var navButton = document.querySelector('.nav-button');

navButton.addEventListener('click', function() {
  console.log("Нажал")
  document
    .querySelector('.navigation')
    .classList.toggle('navigation--visible')
});