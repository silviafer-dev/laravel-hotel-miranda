<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Miranda | {{$title}}</title>
    <!-- <link rel="stylesheet" href="normalize.css" /> -->
    <link rel="stylesheet" type="text/css" href={{URL::to('css/home.css') }} />
    <!-- <link rel="stylesheet" type="text/css" href={{URL::to('css/carousel.css') }} /> -->
    <link rel="stylesheet" type="text/css" href={{URL::to('css/button.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/styles.css') }} />
    <link rel="stylesheet" type="text/css" href={{URL::to('css/rooms.css') }} />

    <script
    src="https://kit.fontawesome.com/b519a5fd3c.js"
    crossorigin="anonymous"
    ></script>
</head>
<body>
 @include ('header')

<section class="head-main">
      <h4 class="section">THE ULTIMATE LUXURY</h4>
      <h2 class="title">Ultimate Room</h2>
      <div class="head-main__buttons">
      <a href="./">Home</a>
        <span>|</span>
        <a class="head-main__buttons--sepia" href="">Rooms</a>
      </div>
      <div>
<!-- @foreach($rooms as $data)
    <div>
      <div>{{$data->id}}</div>
      <div>{{$data->photo}}</div>
      <div>{{$data->room_type}}</div>

</div>
@endforeach -->



    </div>
    </section>
    <section class="rooms-list">
      <div>
        <div class="container-duplex-room">
            <a href="room-details.html">
          <img class="image" src="./images/photos/duplex.jpg" alt="" />
          </a>
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">


          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>

          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
        </p>
        <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>


      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex2.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
        </p>
        <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex3.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>
           <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex4.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>
           <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex5.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>
           <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>
        </div>
      </div>
      <div>
        <div class="container-duplex-room">
          <img class="image" src="./images/photos/duplex6.jpg" alt="" />
          <div class="icons-group-room">
            <img class="icon-rooms" src="./images/bed.svg" alt="bed" />
            <img class="icon-rooms" src="./images/wifi.svg" alt="wifi" />
            <img class="icon-rooms" src="./images/car.svg" alt="car" />
            <img
              class="icon-rooms"
              src="./images/snowflake.svg"
              alt="snowflake"
            />
            <img
              class="icon-rooms"
              src="./images/dumbbell.svg"
              alt="dumbbell"
            />
            <img
              class="icon-rooms"
              src="./images/cocktail.svg"
              alt="cocktail"
            />
          </div>
        </div>
        <div class="block-center-room">
          <h3 class="sub-title">Minimal Duplex Room</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
          </p>
          <p class="block-center__price inline">
            $345<span class="block-center__price--night">/Night</span>
          </p>


              <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>

        </div>
      </div>
    </section>


  @include ('footer')


</body>
</html>
