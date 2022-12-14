<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Miranda | {{$title}}</title>
    <!-- <link rel="stylesheet" href="normalize.css" /> -->
    <link rel="stylesheet" type="text/css" href={{URL::to('css/home.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/carousel.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/button.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/styles.css') }} />

    <script
    src="https://kit.fontawesome.com/b519a5fd3c.js"
    crossorigin="anonymous"
    ></script>
</head>
<body>

    @include ('header')

    <section class="head-main">

      <h4 class="section">THE ULTIMATE LUXURY EXPERIENCE</h4>
      <h2 class="title">The Perfect Base For You</h2>
      <div>
        <button class="button-page">TAKE A TOUR</button>
        <button class="button-page">LEARN MORE</button>
      </div>
    </section>
    <section class="availability-check">
      <form action="" class="container-form">
        <label for="" class="availability-check__label">Arrival Date</label>
        <input
          type="date"
          placeholder="24th march 2020"
          class="availability-check__input"
        />
        <label for="" class="availability-check__label">LeDeparture Date</label>
        <input
          type="date"
          placeholder="30th march 2020"
          class="availability-check__input"
        />
      </form>
      <button class="button-page">CHECK AVAILABILITY</button>
    </section>

    <section class="about-us">
      <h4 class="section section--grey">ABOUT US</h4>
      <h2 class="title">Discover Our Underground.</h2>
      <p class="paragraph">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
        eligendi autem ab earum, pariatur, ullam rerum, odit fugiat molestiae
        incidunt cupiditate tenetur illum aperiam repudiandae? Rerum nulla cum
        placeat dolorem.
      </p>
      <button class="button-page button-page__sepia">BOOK NOW</button>
      <img
        class="image image--team"
        src="./images/photos/team.jpg"
        alt=""
      />
      <div class="team">
        <div class="container-icons">
          <img class="team-icon" src="./images/team.svg" alt="team" />
          <img
            class="team-icon__background"
            src="./images/team-background.svg"
            alt="team"
          />
        </div>
        <h3 class="sub-title">Strong Team</h3>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor.
        </p>
      </div>
    </section>
    <section>
      <div class="rooms-section">
        <img class="image" src="./images/photos/luxury-room.jpg" alt="" />
        <div class="rooms-section__text">
          <img class="icon-booking" src="./images/booking.svg" alt="booking" />
          <h3 class="sub-title sub-title--color">Luxury Room</h3>
          <p class="paragraph paragraph--color">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor.
          </p>
        </div>
      </div>
      <div class="text-block">
        <h4 class="section section--grey">ROOMS</h4>
        <h2 class="title">Hand Picked Rooms</h2>
      </div>

      <div class="carousel-slider">
        <input type="radio" name="control" id="slide1" checked />
        <input type="radio" name="control" id="slide2" />
        <input type="radio" name="control" id="slide3" />

        <label for="slide1" class="next next-1"></label>
        <label for="slide2" class="next next-2"></label>
        <label for="slide3" class="next next-3"></label>

        <label for="slide1" class="prev prev-1"></label>
        <label for="slide2" class="prev prev-2"></label>
        <label for="slide3" class="prev prev-3"></label>

        <div class="slides">
          <div id="slide-1" class="slide">
            <div class="container-duplex-room">
            <div class="icons-group">
              <img class="icon-rooms" src="./images/bed.svg" alt="no-smoking" />
              <img
                class="icon-rooms"
                src="./images/wifi.svg"
                alt="no-smoking"
              />
              <img class="icon-rooms" src="./images/car.svg" alt="no-smoking" />
              <img
                class="icon-rooms"
                src="./images/snowflake.svg"
                alt="no-smoking"
              />
              <img
                class="icon-rooms"
                src="./images/dumbbell.svg"
                alt="no-smoking"
              />
              <img
                class="icon-rooms"
                src="./images/cocktail.svg"
                alt="cocktail"
              />
            </div>
            <img class="image" src="./images/photos/duplex.jpg" alt="" />
            </div>
            <div class="block-center">
              <h3 class="sub-title">Minimal Duplex Room</h3>
              <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
              </p>
              <p class="block-center__price">
                $345<span class="block-center__price--night">/Night</span>
              </p>
            </div>
          </div>
          <div id="slide-2" class="slide">
              <div class="container-duplex-room">

              <div class="icons-group">
                <img
                  class="icon-rooms"
                  src="./images/bed.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/wifi.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/car.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/snowflake.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/dumbbell.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/cocktail.svg"
                  alt="cocktail"
                />
              </div>
              <img
                class="image"
                src="./images/photos/duplex2.jpg"
                alt=""
              />
            </div>
              <div class="block-center">
                <h3 class="sub-title">Minimal Duplex Room</h3>
                <p class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <p class="block-center__price">
                  $345<span class="block-center__price--night">/Night</span>
                </p>
            </div>
          </div>
          <div id="slide-3" class="slide">
              <div class="container-duplex-room">

              <div class="icons-group">
                <img
                  class="icon-rooms"
                  src="./images/bed.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/wifi.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/car.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/snowflake.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/dumbbell.svg"
                  alt="no-smoking"
                />
                <img
                  class="icon-rooms"
                  src="./images/cocktail.svg"
                  alt="cocktail"
                />
              </div>
              <img
                class="image"
                src="./images/photos/duplex3.jpg"
                alt=""
              />
              </div>
              <div class="block-center">
                <h3 class="sub-title">Minimal Duplex Room</h3>
                <p class="paragraph">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore.
                </p>
                <p class="block-center__price">
                  $345<span class="block-center__price--night">/Night</span>
                </p>
              </div>

          </div>
        </div>
      </div>
    </section>
    <section class="video-section">
      <h4 class="section section--sepia">INTRO VIDEO</h4>
      <h2 class="title title--white">
        Meet With Our Luxury Place.
      </h2>
      <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat you have to understand this.
      </p>
      <iframe
        width="100%"
        height="270px"
        src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
      <button class="button-page button-page__sepia">BOOK NOW</button>
    </section>
    <section class="facilities-section">
      <div class="block-center block-center__facilities">
        <h4 class="section section--grey">FACILITIES</h4>
        <h2 class="title">Core Features</h2>
      </div>
      <div class="carousel-slider">
  <input type="radio" name="control" id="features1" checked>
  <input type="radio" name="control" id="features2">
  <input type="radio" name="control" id="features3">
  <input type="radio" name="control" id="features4">
   <input type="radio" name="control" id="features5">
    <input type="radio" name="control" id="features6">

      <div class="slider-nav">
    <label for="features1" class="slide-nav-1"></label>
    <label for="features2" class="slide-nav-2"></label>
    <label for="features3" class="slide-nav-3"></label>
    <label for="features4" class="slide-nav-4"></label>
    <label for="features5" class="slide-nav-4"></label>
    <label for="features6" class="slide-nav-4"></label>

  </div>
  <div class="slides">
      <div id="features-1" class="slide-features">
        <div class="features-block">
          <p class="features-block__number">01</p>
          <img class="features-block__img" src="./images/rating.svg" alt="" />
        </div>
        <h3 class="sub-title">Have High Rating</h3>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div id="features-2" class="slide-features">
        <div class="features-block">
          <p class="features-block__number">02</p>
          <img class="features-block__img" src="./images/clock.svg" alt="" />
        </div>
        <h3 class="sub-title">Quiet Hours</h3>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div id="features-3" class="slide-features">
        <div class="features-block">
          <p class="features-block__number">03</p>
          <img
            class="features-block__img"
            src="./images/pointer-map.svg"
            alt=""
          />
        </div>
        <h3 class="sub-title">Best Locations</h3>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div id="features-4" class="slide-features">
        <div class="features-block">
          <p class="features-block__number">04</p>
          <img
            class="features-block__img"
            src="./images/clock-cancell.svg"
            alt=""
          />
        </div>
        <h3 class="sub-title">Free Cancellation</h3>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div id="features-5" class="slide-features">
        <div class="features-block">
          <p class="features-block__number">05</p>
          <img class="features-block__img" src="./images/payment.svg" alt="" />
        </div>
        <h3 class="sub-title">Payment Options</h3>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
      <div id="features-6" class="slide-features">
        <div class="features-block">
          <p class="features-block__number">06</p>
          <img class="features-block__img" src="./images/ribbon.svg" alt="" />
        </div>
        <h3 class="sub-title">Special Offers</h3>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna..
        </p>
      </div>
        </div>
       </div>

    </section>
    <section class="food-section">
      <div class="donut-container">
        <img class="donut-img" src="./images/donuts.svg" alt="" />
      </div>
      <div class="food-section__titles">
        <h4 class="section section--grey">MENU</h4>
        <h2 class="title">Our Foods Menu</h2>
      </div>

        <div class="carousel-slider">
          <input type="radio" name="control" id="breakfast1" checked />
          <input type="radio" name="control" id="breakfast2" />
          <label for="breakfast1" class="break-next  next-1"></label>
          <label for="breakfast2" class="break-next  next-2"></label>

          <label for="breakfast1" class="break-prev  prev-1"></label>
          <label for="breakfast2" class="break-prev  prev-2"></label>
          <div class="slides">
            <div id="breakfast-1" class="slide">
              <div class="menu-section">
                <img
                  class="food-section__img"
                  src="./images/photos/breakfast.jpg"
                  alt=""
                />
                <div class="menu-section__text">
                  <h5 class="sub-title sub-title--menu">
                    Eggs & Bacon
                  </h5>
                  <p class="paragraph paragraph--typo">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                    sed do eiusmod tempor.
                  </p>
                  <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
                </div>
              </div>
              <div class="menu-section">
                <img
                  class="food-section__img"
                  src="./images/photos/coffee.jpg"
                  alt=""
                />
                <div class="menu-section__text">
                  <h5 class="sub-title sub-title--menu">
                    Tea or Coffee
                  </h5>
                  <p class="paragraph paragraph--typo">
                    Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                    sed do eiusmod tempor.
                  </p>
                  <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
                </div>
              </div>
<div class="menu-section">
          <img
            class="food-section__img"
            src="./images/photos/yogurt.jpg"
            alt=""
          />
          <div class="menu-section__text">
            <h5 class="sub-title sub-title--menu">Chia Oatmeal</h5>
            <p class="paragraph paragraph--typo">
              Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
              eiusmod tempor.
            </p>
          </div>
          <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
        </div>
            </div>
            <div id="breakfast-2" class="slide">

            <div class="menu-section">
          <img
            class="food-section__img"
            src="./images/photos/fruit.jpg"
            alt=""
          />
          <div class="menu-section__text">
            <h5 class="sub-title sub-title--menu">Fruit Parfait</h5>
            <p class="paragraph paragraph--typo">
              Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
              eiusmod tempor.
            </p>
            <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
          </div>
        </div>
        <div class="menu-section">
          <img
            class="food-section__img"
            src="./images/photos/marmalade.jpg"
            alt=""
          />
          <div class="menu-section__text">
            <h5 class="sub-title sub-title--menu">
              Marmalade Selection
            </h5>
            <p class="paragraph paragraph--typo">
              Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
              eiusmod tempor.
            </p>
            <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
          </div>
        </div>
        <div class="menu-section">
          <img
            class="food-section__img"
            src="./images/photos/cheese.jpg"
            alt=""
          />
          <div class="menu-section__text">
            <h5 class="sub-title sub-title--menu">Cheese Plate</h5>
            <p class="paragraph paragraph--typo">
              Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
              eiusmod tempor.
            </p>
            <!-- <i class="fa-solid fa-arrow-right-long"></i> -->
          </div>
        </div>
        </div>
         </div>
          </div>
      </div>

      <div class="carousel-slider">
        <input type="radio" name="control" id="rest1" />
        <input type="radio" name="control" id="rest2" checked />
        <input type="radio" name="control" id="rest3" />
        <div class="slider-nav">
          <label for="rest1" class="slide-nav-1"></label>
          <label for="rest2" class="slide-nav-2"></label>
          <label for="rest3" class="slide-nav-3"></label>
        </div>
        <div class="slides">
          <div id="rest-1" class="slide-features">
            <img
              class="image"
              src="./images/photos/restaurant.jpg"
              alt=""
            />
          </div>
          <div id="rest-2" class="slide-features">
            <img class="image" src="./images/photos/plate.jpg" alt="" />
          </div>
          <div id="rest-3" class="slide-features">
            <img class="image" src="./images/photos/kitchen.jpg" alt="" />
          </div>

      </div>
    </section>
    <section class="section-records">
      <div class="block-records">
        <img src="./images/missil.svg" alt="" />
        <p class="section-records__text">
          84k<span class="section-records__text section-records__text--size"
            >+</span
          >
        </p>
        <p class="section-records__sub-text">Projects are Completed</p>
      </div>
      <div class="block-records">
        <img src="./images/people.svg" alt="" />
        <p class="section-records__text">
          10M<span class="section-records__text section-records__text--size"
            >+</span
          >
        </p>
        <p class="section-records__sub-text">Active Backers Around World</p>
      </div>
      <div class="block-records">
        <img src="./images/ranking.svg" alt="" />
        <p class="section-records__text">
          02K<span class="section-records__text section-records__text--size"
            >+</span
          >
        </p>
        <p class="section-records__sub-text">Categories Served</p>
      </div>
      <div class="block-records">
        <img src="./images/book.svg" alt="" />
        <p class="section-records__text">
          100M<span class="section-records__text section-records__text--size"
            >+</span
          >
        </p>
        <p class="section-records__sub-text">Idea Raised Funds</p>
      </div>
    </section>

  @include ('footer')


</body>
</html>
