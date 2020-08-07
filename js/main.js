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


  var modalButton = $(".modal-button");
  var modalCloseButton = $('.modal__close')
  modalButton.on('click', openModal)
  modalCloseButton.on('click', closeModal)


  function openModal() {
    var modal = $('.modal');
    modal.addClass('modal--visible')
  }

  function closeModal() {
    var modal = $('.modal');
    modal.removeClass('modal--visible')
  }

  $(document).keyup(function (e) {
    if (e.key === "Escape" || e.keyCode === 27) {
      closeModal()
    }
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

  $(function () {
    $('.lazy').Lazy();
  });
 

});

// находим все фреймы в документе
let iframes = document.querySelectorAll("iframe")

// перебираем массив (на самом деле здесь мы имеем дело с объектом Nodelist, но это неважно)
for (let i = 0; i < iframes.length; i++){
    let iframe = iframes[i],
    
    // сохраняем оригинальное значение srс
    originalSrc = iframe.src
    
    // заменяем содержимое фрейма картинкой
    iframe.src = "../images/cover.jpg"
    
    // при наведении курсора отображаем содержимое фрейма
    iframe.addEventListener("mouseover", () => iframe.src = originalSrc)
    
    // возвращаем "кавер"
    iframe.addEventListener("mouseout", () => iframe.src = "../images/cover.jpg")
}