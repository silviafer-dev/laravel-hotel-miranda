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
      <link rel="stylesheet" type="text/css" href={{URL::to('css/offers.css') }} />
    <script
    src="https://kit.fontawesome.com/b519a5fd3c.js"
    crossorigin="anonymous"
    ></script>
</head>
<body>
      @include ('header')
 <section class="head-main">
      <h4 class="section">THE ULTIMATE LUXURY</h4>
      <h2 class="title">Our Offers</h2>
      <div class="head-main__buttons">
        <a href="./">Home</a>
        <span>|</span>
        <a class="head-main__buttons--sepia" href="">Offers</a>
      </div>
    </section>
@foreach ($rooms as $room) 
    <section class="offers-list">
      <div class="container-photo-offers">
        <img class="image" src="./images/photos/duplex.jpg" alt="luxury room" />
        <div class="full-price">$500 <span>/Night</span></div>
        <div class="offer-price">$345 <span>/Night</span></div>
      </div>
      <h4 class="section section--grey">DOBLE BED</h4>
      <h2 class="sub-title">Luxury Double Bed</h2>
      <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehend erit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur.
      </p>

      <div class="amenities-offers">
        <div class="amenities-offers__block">
          <img src="./images/icons-room/air-conditioner.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Air conditioner
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/breakfast-icons.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Breakfast
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/cleaning.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Cleaning
          </p>
        </div>

        <div class="amenities-offers__block">
          <img src="./images/icons-room/support.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            24/7 Online Support
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/air-conditioner.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Air conditioner
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/locker.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Smart Security
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/wifi.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            High speed WiFi
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/kitchen.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Kitchen
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/shower.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Shower
          </p>
        </div>

        <div class="amenities-offers__block">
          <img src="./images/icons-room/towels.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Towels
          </p>
        </div>
      </div>
      <button class="button-page button-page__sepia">BOOK NOW</button>
    </section>
       <section class="offers-list">
      <div class="container-photo-offers">
        <img class="image" src="./images/photos/duplex3.jpg" alt="luxury room" />
        <div class="full-price">$500 <span>/Night</span></div>
        <div class="offer-price">$345 <span>/Night</span></div>
      </div>
      <h4 class="section section--grey">DOBLE BED</h4>
      <h2 class="sub-title">Luxury Double Bed</h2>
      <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehend erit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur.
      </p>

      <div class="amenities-offers">
        <div class="amenities-offers__block">
          <img src="./images/icons-room/air-conditioner.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Air conditioner
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/breakfast-icons.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Breakfast
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/cleaning.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Cleaning
          </p>
        </div>

        <div class="amenities-offers__block">
          <img src="./images/icons-room/support.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            24/7 Online Support
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/air-conditioner.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Air conditioner
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/locker.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Smart Security
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/wifi.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            High speed WiFi
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/kitchen.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Kitchen
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/shower.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Shower
          </p>
        </div>

        <div class="amenities-offers__block">
          <img src="./images/icons-room/towels.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Towels
          </p>
        </div>
      </div>
      <button class="button-page button-page__sepia">BOOK NOW</button>
    </section>
       <section class="offers-list">
      <div class="container-photo-offers">
        <img class="image" src="./images/photos/duplex2.jpg" alt="luxury room" />
        <div class="full-price">$500 <span>/Night</span></div>
        <div class="offer-price">$345 <span>/Night</span></div>
      </div>
      <h4 class="section section--grey">DOBLE BED</h4>
      <h2 class="sub-title">Luxury Double Bed</h2>
      <p class="paragraph">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehend erit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur.
      </p>

      <div class="amenities-offers">
        <div class="amenities-offers__block">
          <img src="./images/icons-room/air-conditioner.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Air conditioner
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/breakfast-icons.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Breakfast
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/cleaning.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Cleaning
          </p>
        </div>

        <div class="amenities-offers__block">
          <img src="./images/icons-room/support.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            24/7 Online Support
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/air-conditioner.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Air conditioner
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/locker.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Smart Security
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/wifi.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            High speed WiFi
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/kitchen.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Kitchen
          </p>
        </div>
        <div class="amenities-offers__block">
          <img src="./images/icons-room/shower.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Shower
          </p>
        </div>

        <div class="amenities-offers__block">
          <img src="./images/icons-room/towels.svg" alt="" />
          <p class="amenities-offers__block amenities-offers__block--title">
            Towels
          </p>
        </div>
      </div>
      <button class="button-page button-page__sepia">BOOK NOW</button>
    </section>
      @include ('footer')
</body>
</html>
