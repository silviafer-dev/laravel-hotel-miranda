<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Miranda | {{$title}}</title>
    <link rel="stylesheet" type="text/css" href={{URL::to('css/home.css') }} />
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
      <a href="./index.php">Home</a>
        <span>|</span>
        <a class="head-main__buttons--sepia" href="">Rooms</a>
      </div>

    </section>
    <section class="rooms-list">
        @foreach ($rooms as $room)
      <div>
        <div class="container-duplex-room">
          <a href="room-details.php">
          <img class="image" src={{$room->photo}} alt="" />
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

          <h3 class="sub-title">{{$room->room_type}}</h3>
          <p class="paragraph">
            {{$room->description}}
          </p>

          <p class="block-center__price inline">
            {{$room->price}}<span class="block-center__price--night">/Night</span>
        </p>
        <p class="booking inline"><a href="./room-details.html">Booking Now</a></p>

    </div>
</div>
@endforeach
</section>

  @include ('footer')


</body>
</html>
