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
      .classList.toggle('navigation--visible');
    document.body.classList.toggle('modal-open'); 
  });


  // navButton.on('click', openNav);
  // function openNav() {

  //   // var nav = $('.navigation');
  //   // nav.addClass('navigation--visible');
  //   // var body = $('body');
  //   document.body.classList.toggle('modal-open');

  // };





  var modalButton = $(".modal-button");
  var modalCloseButton = $('.modal__close');
  modalButton.on('click', openModal);
  modalCloseButton.on('click', closeModal);

  function openModal() {
    var modal = $('.modal');
    modal.addClass('modal--visible')
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    const body = document.body;
    body.style.height = '100vh';
    body.style.overflowY = 'hidden';
    body.style.position = '';
    body.style.top = `-${scrollY}`;
  }

  function closeModal() {

    const body = document.body;
    const scrollY = body.style.top;
    body.style.position = '';
    body.style.top = '';
    body.style.height = '';
    body.style.overflowY = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);


    var modal = $('.modal');
    modal.removeClass('modal--visible')



  }

  window.addEventListener('scroll', () => {
    document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
  });


  $(document).keyup(function (e) {
    if (e.key === "Escape" || e.keyCode === 27) {
      closeModal()
    }
  });

  $(".modal__overlay").click(function (e) {
    if ($(e.target).closest(".modal__block").length == 0)
      closeModal();

  });

  // Валидация форм

  $(".form").each(function () {
    $(this).validate({
      errorClass: "formerror",
      rules: {
        name: "required",
        email: {
          required: true,
          email: true,
        },

      },
      messages: {
        name: "Please specify your name",
        phone: "Please specify your phone",
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
      }
    });
  });

  // Маска 
  $('.form').each(function () {
    $('.phone').mask('+7 (000) 000-00-00');
  });

  AOS.init();

});

const mapFrame = $("#map");
const dynamicMap = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6797.139127571386!2d79.79924981923662!3d7.574980549671371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2c96110de8289%3A0x3fd7668bc2d85eb9!2sGrand%20Hilton%20Hotel!5e0!3m2!1sru!2sru!4v1595357827601!5m2!1sru!2sru";
const container = $("#mapContainer");

let isTurned = false; // Для проверки,чтобы карта не обновлялась при каждом наведении, обернуть if
mapFrame.hover(() => {
    if (!isTurned)
      mapFrame.attr('src', dynamicMap);
    isTurned = true;
  },
  () => {});