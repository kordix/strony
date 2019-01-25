<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/effects.css">
  <link rel="stylesheet" href="css/topmid.css">
  <link rel="stylesheet" href="css/style.css">




  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>index.html</title>
</head>

<body>
  <?php include 'views/navbar.html' ?>
  <?php include 'views/carousel.html' ?>
  <?php include 'views/top.html' ?>

  <section class="container" id="top2">
    <h1><i class="h-initial">G</i>dzie <b>kupić</b></h1>
    <p>Nasze salony i partnerzy służą Państwu fachowym doradztwem i pomocą. To miejsca przygotowane specjalnie dla Państwa, by dostarczyć informacji oraz dopasować najlepszy produkt w pełni spełniający Państwa potrzeby.</p>
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="images/mid2-1.jpg" alt="">
      </div>
      <div class="col-md-6">
        <img class="img-fluid" src="images/mid2-2.jpg" alt="">
      </div>
    </div>
  </section>


  <section id="mid1" class="container">
    <h1><i class="h-initial">K</i>Konfigurator drzwi premium</h1>
    <div class="row">
      <div class="col-md-6" id="m1">
        <div class="row" style="flex-wrap:nowrap">
          <div class="col-md-1 col-sm-1 col-xs-1 d-flex align-items-center" style="padding:10px;max-width:15%">
            <i class="fas fa-window-restore" id="wicon"></i>
          </div>
          <div class="col-md-10 col-sm-10 col-xs-10">
            <h3>STWÓRZ SWOJE DRZWI MARZEŃ</h3>
            <p>Wybierz rodzaj fasady, wypełnienia, zmieniaj kolory, pochwyty, użyj szkła lub nie. Twoja decyzja, Twoje drzwi - natychmiastowy efekt.</p>
          </div>
        </div>
        <div class="row d-flex ml-auto" style="justify-content:flex-end">
          <button type="button" class="btn btn-mylight magn" name="button">
            <i class="fas fa-window-restore" id="wicon-bt"></i> KONFIGURATOR DRZWI PREMIUM
          </button>
        </div>
      </div>
      <div class="col-md-6">
<img src="https://www.bertrand.pl/images/02_main_page/konfigurator_pl.jpg" alt="" class="img-fluid">
      </div>
    </div>
  </section>




  <script src="js/jquery-3.3.1.js"></script>
  <script src="https://unpkg.com/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
