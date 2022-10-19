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
    <link rel="stylesheet" type="text/css" href={{URL::to('css/contact.css') }} />
    <script
    src="https://kit.fontawesome.com/b519a5fd3c.js"
    crossorigin="anonymous"
    ></script>
      <script src="{{ URL::to('js/contact.js') }}" type='module'></script>

</head>
<body>

    @include ('header')
<main>
<section class="head-main">
      <h4 class="section">THE ULTIMATE LUXURY</h4>
      <h2 class="title">New Details</h2>
      <div class="head-main__buttons">
        <a href="./">Home</a>
        <span>|</span>
        <a class="head-main__buttons--sepia" href="">Blog</a>
      </div>
    </section>
    <section>
      <div class="block-contact">
        <p class="block-contact__number">01</p>
        <img src="./images/map.svg" alt="" />
        <div>
          <p>Hotel Address</p>
          <p class="footer__contact footer__contact--number">
            19/A, City Hall Tower <br />
            New York, NYC
          </p>
        </div>
      </div>
      <div class="block-contact">
        <p class="block-contact__number">02</p>
        <img src="./images/phone.svg" alt="" />
        <div>
          <p>Phone Number</p>
          <p class="footer__contact footer__contact--number">
            +987 876 765 76 577
          </p>
        </div>
      </div>
      <div class="block-contact">
        <p class="block-contact__number">03</p>
        <img src="./images/email.svg" alt="" />
        <div>
          <p>Email</p>
          <p class="footer__contact footer__contact--number">
            mirandahotel@webmail.com
          </p>
        </div>
      </div>
    </section>
    <section>
      <div class="title-community">Comunidades Autonomas:</div>
      <select
        name="comunidadesAuto"
        id="comunidadesAuto"
        class="select-community"
      >
        <option value="">Select one...</option>
      </select>
      <div id="map" class="google-map"></div>
      <label class="direction-title" for="myDirection"
        >Dirección de usuario</label
      ><br />
      <input
        class="direction-title__input"
        type="text"
        id="input"
        placeholder="Enter a location"
      />
      <input
        class="direction-title__submit"
        type="button"
        id="submit"
        value="Submit"
      />
      <button class="find-location" style="margin: 20px" id="buttonRequest">
        Find my nearest locations
      </button>
      <ul id="response"></ul>
    </section>
    <section>
      <form action="" class="contact-form">
        <label for="">
          <input type="text" placeholder="Your full name" />
          <i class="fa-solid fa-user contact-icon"></i>
        </label>
        <label for="">
          <input type="number" placeholder="Add phone number" />
          <i class="fa-solid fa-phone contact-icon"></i>
        </label>
        <label for="">
          <input type="email" placeholder="Enter email address" />
          <i class="fa-solid fa-envelope contact-icon"></i>
        </label>
        <label for="">
          <input type="text" placeholder="Enter subject" />
          <i class="fa-solid fa-book contact-icon"></i>
        </label>
        <label for="">
          <input type="text" placeholder="Enter message" width="400px" />
          <i class="fa-solid fa-pencil contact-icon"></i>
        </label>
        <button class="contact-form__button">SEND</button>
      </form>
    </section>


    </main>
  @include ('footer')


</body>
</html>
