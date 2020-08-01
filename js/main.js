
$(document).ready(function () {
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

  navButton.addEventListener('click', function () {
    document
      .querySelector('.navigation')
      .classList.toggle('navigation--visible')
  });


  var modalButton = $(".modal__button");
  var modalCloseButton = $('.modal__close')
  modalButton.on('click', openModal )
  modalCloseButton.on('click', closeModal)


  function openModal() {
    var modal = $('.modal');
    modal.addClass('modal--visible')
  }

  function closeModal() {
    var modal = $('.modal');
    modal.removeClass('modal--visible')
  }
  
  $(document).keyup(function(e) {
    if (e.key === "Escape" || e.keyCode === 27) {
      closeModal()
    }
  });
  
});