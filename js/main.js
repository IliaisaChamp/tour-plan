var mySwiper = new Swiper('.swiper-container', {
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
})

// var myMap;

// // Дождёмся загрузки API и готовности DOM.
// ymaps.ready(init);

// function init() {
//   // Создание экземпляра карты и его привязка к контейнеру с
//   // заданным id ("map").
//   myMap = new ymaps.Map('map', {
//       // При инициализации карты обязательно нужно указать
//       // её центр и коэффициент масштабирования.
//       center: [41.058629, 28.978826], // Москва
//       zoom: 15
//     }, {
//       searchControlProvider: 'yandex#search'
//     }),

//     myGeoObject = new ymaps.GeoObject({
//       // Описание геометрии.
//       geometry: {
//         type: "Point",
//         coordinates: [41.058629, 28.978826]
//       },
//     }),

//     myMap.geoObjects
//     .add(myGeoObject)
//     .add(new ymaps.Placemark([41.058629, 28.978826], {
//       iconColor: 'yellow'
//     }))

//   document.getElementById('destroyButton').onclick = function () {
//     // Для уничтожения используется метод destroy.
//     myMap.destroy();
//   };

// }