<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>doorplast kopia</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <?php include 'views/navbar.html'?>
  <?php include 'views/carousel.html'?>
  <section class="container">
    <h1 style="margin-top:30px;letter-spacing:2px" class="hpink">O FIRMIE</h1>
    <div class="krecha"></div>



    <p>
      <?php include 'teksty/1.php' ?>
    </p>
    <button class="mybutton2" type="button" name="button" style="display:block;margin:auto">CZYTAJ WIĘCEJ</button>
  </section>

  <section class="container">
    <h1 style="margin-top:30px;letter-spacing:2px" class="hdark">OFERTA</h1>
    <div class="krecha"></div>
    <p>
      <?php include 'teksty/2.php'?>
    </p>
  </section>

  <section id="obrazki" class="container">
    <div class="row">
      <figure class="col-md-3 col-sm-6">
          <img src="images/icon1.png" class="d-flex mx-auto" alt="">
          <figcaption class="" style="text-align:center">Okna</figcaption>
      </figure>
      <figure class="col-md-3 col-sm-6">
        <img src="images/icon2.png" class="d-flex mx-auto" alt="">
        <figcaption>Drzwi zewnętrzne</figcaption>
      </figure>
      <figure class="col-md-3 col-sm-6">
        <img src="images/icon3.png" alt="" class="d-flex mx-auto" >
        <figcaption>Drzwi wewnętrzne</figcaption>
      </figure>
      <figure class="col-md-3 col-sm-6">
        <img src="images/icon4.png" alt="" class="d-flex mx-auto" >
        <figcaption>Bramy garażowe</figcaption>
      </figure>
    </div>
    <div class="row">
      <figure class="col-md-3 col-sm-6">
          <img src="images/icon5.png" class="d-flex mx-auto" alt="">
          <figcaption class="" style="text-align:center">Rolety</figcaption>
      </figure>
      <figure class="col-md-3 col-sm-6">
        <img src="images/icon6.png" class="d-flex mx-auto" alt="">
        <figcaption>Panele</figcaption>
      </figure>
      <figure class="col-md-3 col-sm-6">
        <img src="images/icon7.png" alt="" class="d-flex mx-auto" >
        <figcaption>Parapety</figcaption>
      </figure>
      <figure class="col-md-3 col-sm-6">
        <img src="images/icon8.png" alt="" class="d-flex mx-auto" >
        <figcaption>Klamki</figcaption>
      </figure>

    </div>

  </section>

  <section class="container" id="aktualnosci">
    <h1 style="margin-top:30px;letter-spacing:1.5px" class="hdark">AKTUALNOŚCI</h1>
    <div class="krecha"></div>
  </section>






  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
