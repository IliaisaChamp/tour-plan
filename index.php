<?php include 'header.html'; ?>

    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__wrapper">
            <div class="hotel-info__stars">
              <img class="hotel-info__star" src="images/star.svg" alt="star" />
              <img class="hotel-info__star" src="images/star.svg" alt="star" />
              <img class="hotel-info__star" src="images/star.svg" alt="star" />
              <img class="hotel-info__star" src="images/star.svg" alt="star" />
              <img class="hotel-info__star" src="images/star.svg" alt="star" />
            </div>
            <h1 class="hotel-info__title">Grand hilton hotel</h1>
            <span class="hotel-info__offer">Flash Offer</span>
            <span class="hotel-info__subtitle"
              >Half-Board / All Inclusive + Complimentary Activities + Child
              Stays Free</span
            >
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
        </div>
        <!-- /.hotel-info -->

        <div class="hotel-grid">
          <!-- СЛАЙДЕР -->
          <div class="swiper-container hotel-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="swiper-slide__img"
                  src="images/slider-1.jpg"
                  alt="img: Grand Hilton Hotel"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="swiper-slide__img"
                  src="images/slider-2.jpg"
                  alt="img: Grand Hilton Hotel"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="swiper-slide__img"
                  src="images/slider-3.jpg"
                  alt="img: Grand Hilton Hotel"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="swiper-slide__img"
                  src="images/slider-4.jpg"
                  alt="img: Grand Hilton Hotel"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="swiper-slide__img"
                  src="images/slider-5.jpg"
                  alt="img: Grand Hilton Hotel"
                />
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <button class="slider-button slider-button--prev"></button>
            <button class="slider-button slider-button--next"></button>
          </div>
          <!-- /.swiper-container -->

          <div class="hotel-booking">
            <div class="booking">
              <div class="booking-info">
                <div class="booking__price">
                  <span class="booking__price-start">price starts as</span>
                  <strong class="booking__price-tag">$ 8,500</strong>
                  <span class="booking__price-perroom">per room / night</span>
                </div>
                <!-- /.booking__price -->
                <div class="booking__person-room">
                  <div class="booking__person-wrap">
                    <img
                      class="booking__user"
                      src="images/user.svg"
                      alt="Icon: user"
                    />
                    <span class="booking__guests">2 x Guests</span>
                  </div>
                  <div class="booking__person-wrap">
                    <img
                      class="booking__home"
                      src="images/home.svg"
                      alt="Icon: home"
                    />
                    <span class="booking__room">1 x Room</span>
                  </div>
                </div>
                <!-- /.booking__person-room -->
              </div>
              <!-- /.booking-info -->
              <div class="booking__call-center">
                <span class="booking__quick">Quick Booking</span>
                <a class="booking__call-number" href="tel:12100">
                  <img
                    class="booking__phone"
                    src="images/phone-call.svg"
                    alt="Icon: phone-call"
                  />
                  <span class="booking__number">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button class="booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div class="booking-map" id="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6797.139127571386!2d79.79924981923662!3d7.574980549671371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2c96110de8289%3A0x3fd7668bc2d85eb9!2sGrand%20Hilton%20Hotel!5e0!3m2!1sru!2sru!4v1595357827601!5m2!1sru!2sru"
                width="100%"
                height="100%"
                frameborder="0"
                style="border: 0;"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
          <!-- /.hotel-booking -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->

    <section class="packages">
      <div class="container">
        <h2 class="packages__title">Other Packages</h2>
        <div class="packages-grid">
          <div class="packages-grid__item packages-grid__item--big">
            <img
              src="images/packages.jpg"
              alt="Hotel: Hotel Blue Haven"
              class="packages-grid__img packages-grid__img--big"
            />
            <span class="packages-grid__offer packages-grid__offer--big"
              >Flash Offer</span
            >
            <div class="packages-grid__info packages-grid__info--big">
              <div class="packages-grid__stars">
                <img src="images/star.svg" alt="star" />
                <img src="images/star.svg" alt="star" />
                <img src="images/star.svg" alt="star" />
                <img src="images/star.svg" alt="star" />
                <img src="images/star.svg" alt="star" />
              </div>
              <h3 class="packages-grid__title packages-grid__title--big">
                Hotel Blue Haven
              </h3>
              <p class="packages-grid__subtitle">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <div class="grid-room grid-room--big">
                <img
                  src="images/map.svg"
                  alt="Icon: map"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1749 Wheeler Ridge Delaware</span>
              </div>

              <div class="grid-room grid-room--big">
                <img
                  src="images/user.svg"
                  alt="Icon: user"
                  class="grid-room__img"
                />
                <span class="grid-room__text">2 x Guests</span>
              </div>

              <div class="grid-room grid-room--big">
                <img
                  src="images/home.svg"
                  alt="Icon: home"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1 x Room</span>
              </div>

              <span class="packages-grid__price-line">$ 8,500</span>

              <div class="packages-grid__flex">
                <strong class="packages-grid__price-strong">$ 3,000</strong>
                <button class="packages-grid__button">Book Now</button>
              </div>
            </div>
            <!-- /.packages-grid__info -->
          </div>
          <!-- /.packages-grid__item -->

          <div class="packages-grid__item">
            <img
              src="images/packages-1.jpg"
              alt="Hotel: LUX* Belle Mare"
              class="packages-grid__img"
            />
            <span class="packages-grid__offer packages-grid__offer--big"
              >Flash Offer</span
            >
            <div class="packages-grid__info">
              <h3 class="packages-grid__title">LUX* Belle Mare</h3>

              <div class="grid-room">
                <img
                  src="images/map.svg"
                  alt="Icon: map"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1749 Wheeler Ridge Delaware</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/user.svg"
                  alt="Icon: user"
                  class="grid-room__img"
                />
                <span class="grid-room__text">2 x Guests</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/home.svg"
                  alt="Icon: home"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1 x Room</span>
              </div>

              <span class="packages-grid__price-line">$ 8,500</span>

              <div class="packages-grid__flex">
                <strong class="packages-grid__price-strong">$ 3,000</strong>
                <button class="packages-grid__button">Book Now</button>
              </div>
            </div>
            <!-- /.packages-grid__info -->
          </div>
          <!-- /.packages-grid__item -->

          <div class="packages-grid__item">
            <img
              src="images/packages-2.jpg"
              alt="Hotel: LUX* Belle Mare"
              class="packages-grid__img"
            />
            <span class="packages-grid__offer packages-grid__offer--big"
              >Flash Offer</span
            >
            <div class="packages-grid__info">
              <h3 class="packages-grid__title">White Palace</h3>

              <div class="grid-room">
                <img
                  src="images/map.svg"
                  alt="Icon: map"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1749 Wheeler Ridge Delaware</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/user.svg"
                  alt="Icon: user"
                  class="grid-room__img"
                />
                <span class="grid-room__text">2 x Guests</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/home.svg"
                  alt="Icon: home"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1 x Room</span>
              </div>

              <span class="packages-grid__price-line">$ 10,500</span>

              <div class="packages-grid__flex">
                <strong class="packages-grid__price-strong">$ 9,500</strong>
                <button class="packages-grid__button">Book Now</button>
              </div>
            </div>
            <!-- /.packages-grid__info -->
          </div>
          <!-- /.packages-grid__item -->

          <div class="packages-grid__item">
            <img
              src="images/packages-3.jpg"
              alt="Hotel: LUX* Belle Mare"
              class="packages-grid__img"
            />
            <span class="packages-grid__offer packages-grid__offer--big"
              >Flash Offer</span
            >
            <div class="packages-grid__info">
              <h3 class="packages-grid__title">Luxury Place</h3>

              <div class="grid-room">
                <img
                  src="images/map.svg"
                  alt="Icon: map"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1749 Wheeler Ridge Delaware</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/user.svg"
                  alt="Icon: user"
                  class="grid-room__img"
                />
                <span class="grid-room__text">2 x Guests</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/home.svg"
                  alt="Icon: home"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1 x Room</span>
              </div>

              <span class="packages-grid__price-line">$ 4,500</span>

              <div class="packages-grid__flex">
                <strong class="packages-grid__price-strong">$ 2,500</strong>
                <button class="packages-grid__button">Book Now</button>
              </div>
            </div>
            <!-- /.packages-grid__info -->
          </div>
          <!-- /.packages-grid__item -->

          <div class="packages-grid__item">
            <img
              src="images/packages-4.jpg"
              alt="Hotel: LUX* Belle Mare"
              class="packages-grid__img"
            />
            <span class="packages-grid__offer packages-grid__offer--big"
              >Flash Offer</span
            >
            <div class="packages-grid__info">
              <h3 class="packages-grid__title">Hotel Five Star</h3>

              <div class="grid-room">
                <img
                  src="images/map.svg"
                  alt="Icon: map"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1749 Wheeler Ridge Delaware</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/user.svg"
                  alt="Icon: user"
                  class="grid-room__img"
                />
                <span class="grid-room__text">2 x Guests</span>
              </div>

              <div class="grid-room">
                <img
                  src="images/home.svg"
                  alt="Icon: home"
                  class="grid-room__img"
                />
                <span class="grid-room__text">1 x Room</span>
              </div>

              <span class="packages-grid__price-line">$ 6,500</span>

              <div class="packages-grid__flex">
                <strong class="packages-grid__price-strong">$ 3,500</strong>
                <button class="packages-grid__button">Book Now</button>
              </div>
            </div>
            <!-- /.packages-grid__info -->
          </div>
          <!-- /.packages-grid__item -->
        </div>
        <!-- /.packages-grid -->
      </div>
    </section>

    <section
      class="newsletter"
      data-parallax="scroll"
      data-image-src="images/newslatter-bg.jpg"
      data-speed="0.5"
    >
      <div class="newsletter__container">
        <h2 class="newsletter__title">
          subscribe to our
          <span class="newsletter__title--strong">Newsletter</span>
        </h2>
        <form action="send.php" method="POST" class="newsletter__form">
          <input
            class="newsletter__input"
            type="text"
            placeholder="Your email address"
            name="email"
          />
          <button class="newsletter__button">Send</button>
        </form>
      </div>
      <!-- /.newsletter-container -->
    </section>
    <!-- /.newsletter -->

    <section class="review">
      <div class="container">
        <h2 class="review__title">What people thinks about us</h2>

        <div class="swiper-container review-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="review-slider__item">
                <div class="review-slider__profile">
                  <img
                    src="images/review-1.jpg"
                    alt="User: Megan"
                    class="review-slider__user"
                  />
                  <h3 class="review-slider__title">Megan Fox</h3>
                  <span class="review-slider__desc">Stayed 18 Nov, 2019</span>
                  <div class="review-slider__stars">
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                  </div>
                  <p class="review-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lift was not in working and we were allotted to 3rd
                    floor and amenities articles were in corner of gallery which
                    were giving bad feeling. Breakfast was good and support of
                    the staff was also very nice. Location is not good as per
                    atmosphere, it is very nearby most of the popular places but
                    self location in a narrow street is not good. Overall it was
                    a good experience and could recommend.
                  </p>
                </div>
                <!-- /.review-slidr__profile -->
              </div>
              <!-- /.review-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="review-slider__item">
                <div class="review-slider__profile">
                  <img
                    src="images/review-2.jpg"
                    alt="User: Megan"
                    class="review-slider__user"
                  />
                  <h3 class="review-slider__title">Jon Snow</h3>
                  <span class="review-slider__desc">Stayed 19 Nov, 2018</span>
                  <div class="review-slider__stars">
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                  </div>
                  <p class="review-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lift was not in working and we were allotted to 3rd
                    floor and amenities articles were in corner of gallery which
                    were giving bad feeling. Breakfast was good and support of
                    the staff was also very nice. Location is not good as per
                    atmosphere, it is very nearby most of the popular places but
                    self location in a narrow street is not good. Overall it was
                    a good experience and could recommend.
                  </p>
                </div>
                <!-- /.review-slidr__profile -->
              </div>
              <!-- /.review-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="review-slider__item">
                <div class="review-slider__profile">
                  <img
                    src="images/review-3.jpg"
                    alt="User: Megan"
                    class="review-slider__user"
                  />
                  <h3 class="review-slider__title">Sansa Stark</h3>
                  <span class="review-slider__desc">Stayed 15 Sep, 2019</span>
                  <div class="review-slider__stars">
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                    <img src="images/star.svg" alt="star" />
                  </div>
                  <p class="review-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lift was not in working and we were allotted to 3rd
                    floor and amenities articles were in corner of gallery which
                    were giving bad feeling. Breakfast was good and support of
                    the staff was also very nice. Location is not good as per
                    atmosphere, it is very nearby most of the popular places but
                    self location in a narrow street is not good. Overall it was
                    a good experience and could recommend.
                  </p>
                </div>
                <!-- /.review-slidr__profile -->
              </div>
              <!-- /.review-slider__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <div class="review-slider__button review-slider__button--prev"></div>
          <div class="review-slider__button review-slider__button--next"></div>
        </div>
        <!-- /.review-slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.review -->

    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card">
            <img
              class="card__img"
              src="images/card-1.jpg"
              alt="The curious corner 
            of chamarel"
            />
            <h3 class="card__title">The curious corner of chamarel</h3>
            <button class="card__button">Book Now</button>
          </div>

          <div class="card activities__card">
            <img
              class="card__img"
              src="images/card-2.jpg"
              alt="Gymkhana club golf
            course"
            />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button class="card__button">Book Now</button>
          </div>

          <div class="card activities__card">
            <img
              class="card__img"
              src="images/card-3.jpg"
              alt="Tamarind falls hiking
            trip - full day"
            />
            <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
            <button class="card__button">Book Now</button>
          </div>

          <div class="card activities__card">
            <img
              class="card__img"
              src="images/card-4.jpg"
              alt="The blue marine discovery
            quest"
            />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.activities-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.activities -->

   <?php include 'footer.html';?>
