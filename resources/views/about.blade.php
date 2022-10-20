<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Miranda | {{$title}}</title>

    <link rel="stylesheet" type="text/css" href={{URL::to('css/home.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/carousel.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/button.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/styles.css') }} />
      <link rel="stylesheet" type="text/css" href={{URL::to('css/about.css') }} />
    <script
    src="https://kit.fontawesome.com/b519a5fd3c.js"
    crossorigin="anonymous"
    ></script>
</head>
<body>
      @include ('header')

    <section class="head-main">
      <h4 class="section">THE ULTIMATE LUXURY</h4>
      <h2 class="title">About Us</h2>
      <div class="head-main__buttons">
        <a href="./">Home</a>
        <span>|</span>
        <a class="head-main__buttons--sepia" href="">About</a>
      </div>
    </section>

    <section class="presentation">
      <iframe
        width="100%"
        height="315"
        src="https://www.youtube.com/embed/Bu3Doe45lcU"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
      <h2 class="title title--resize">
        Hello. Our hotel has been present for over 20 years. We make the best
        for all our customers.
      </h2>
      <div class="container-icons-about">
        <div class="about-icons">
          <img class="icon-category" src="./images/breakfast.png" alt="" />
          <p class="icon-category__name">BREAKFAST</p>
        </div>
        <div class="about-icons">
          <img class="icon-category" src="./images/airplane.png" alt="" />
          <p class="icon-category__name">AIRPORT PICKUP</p>
        </div>
        <div class="about-icons">
          <img class="icon-category" src="./images/city-guide.png" alt="" />
          <p class="icon-category__name">CITY GUIDE</p>
        </div>
        <div class="about-icons">
          <img class="icon-category" src="./images/luxury-room.png" alt="" />
          <p class="icon-category__name">LUXURY ROOM</p>
        </div>
      </div>
    </section>
    <section class="restaurant">
      <img class="image" src="./images/photos/view-restaurant.jpg" alt="" />

      <h4 class="section section--grey">RESTAURANT</h4>
      <h2 class="sub-title">Get Restaurant Facilities & Many Other More</h2>
      <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
      </p>
      <button class="button-page button-page__sepia">TAKE A TOUR</button>
    </section>
    <section class="facilities-section facilities-section--black">
      <div class="block-center block-center__facilities">
        <h4 class="section section--grey">FACILITIES</h4>
        <h2 class="title">Core Features</h2>
      </div>
      <div class="carousel-slider">
        <input type="radio" name="control" id="features1" checked />
        <input type="radio" name="control" id="features2" />
        <input type="radio" name="control" id="features3" />
        <input type="radio" name="control" id="features4" />
        <input type="radio" name="control" id="features5" />
        <input type="radio" name="control" id="features6" />

        <div class="slider-nav">
          <label for="features1" class="slide-nav-1"></label>
          <label for="features2" class="slide-nav-2"></label>
          <label for="features3" class="slide-nav-3"></label>
          <label for="features4" class="slide-nav-4"></label>
          <label for="features5" class="slide-nav-4"></label>
          <label for="features6" class="slide-nav-4"></label>
        </div>
        <div class="slides">
          <div id="features-1" class="slide-features slide-features--color">
            <div class="features-block">
              <p class="features-block__number features-block__number--darker">
                01
              </p>
              <img
                class="features-block__img"
                src="./images/rating.svg"
                alt=""
              />
            </div>
            <h3 class="sub-title sub-title--color">Have High Rating</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div id="features-2" class="slide-features slide-features--color">
            <div class="features-block">
              <p class="features-block__number features-block__number--darker">
                02
              </p>
              <img
                class="features-block__img"
                src="./images/clock.svg"
                alt=""
              />
            </div>
            <h3 class="sub-title sub-title--color">Quiet Hours</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div id="features-3" class="slide-features slide-features--color">
            <div class="features-block">
              <p class="features-block__number features-block__number--darker">
                03
              </p>
              <img
                class="features-block__img"
                src="./images/pointer-map.svg"
                alt=""
              />
            </div>
            <h3 class="sub-title sub-title--color">Best Locations</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div id="features-4" class="slide-features slide-features--color">
            <div class="features-block">
              <p class="features-block__number features-block__number--darker">
                04
              </p>
              <img
                class="features-block__img"
                src="./images/clock-cancell.svg"
                alt=""
              />
            </div>
            <h3 class="sub-title sub-title--color">Free Cancellation</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div id="features-5" class="slide-features slide-features--color">
            <div class="features-block">
              <p class="features-block__number features-block__number--darker">
                05
              </p>
              <img
                class="features-block__img"
                src="./images/payment.svg"
                alt=""
              />
            </div>
            <h3 class="sub-title sub-title--color">Payment Options</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
          <div id="features-6" class="slide-features slide-features--color">
            <div class="features-block">
              <p class="features-block__number features-block__number--darker">
                06
              </p>
              <img
                class="features-block__img"
                src="./images/ribbon.svg"
                alt=""
              />
            </div>
            <h3 class="sub-title sub-title--color">Special Offers</h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna..
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="counter">
      <h4 class="section section--grey">COUNTER</h4>
      <h2 class="title">Some Fun Facts</h2>

      <div class="container-fun-facts">
        <img src="./images/happy-user.svg" alt="" />
        <div>
          <p class="counter__number">8000</p>
          <p class="counter__text">Happy Users</p>
        </div>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
      <div class="container-fun-facts">
        <img src="./images/review.svg" alt="" />
        <div>
          <p class="counter__number">10M</p>
          <p class="counter__text">Reviews & Appreciate</p>
        </div>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
      <div class="container-fun-facts">
        <img src="./images/globe.svg" alt="" />
        <div>
          <p class="counter__number">100</p>
          <p class="counter__text">Country Coverage</p>
        </div>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
    </section>
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
          <img class="image" src="./images/photos/restaurant.jpg" alt="" />
        </div>
        <div id="rest-2" class="slide-features">
          <img class="image" src="./images/photos/plate.jpg" alt="" />
        </div>
        <div id="rest-3" class="slide-features">
          <img class="image" src="./images/photos/kitchen.jpg" alt="" />
        </div>
      </div>
    </div>


      @include ('footer')
</body>
</html>
