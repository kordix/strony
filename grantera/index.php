<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Grantera kopia</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/top2.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
<?php include 'resources/slides.php' ?>
  <?php include 'views/navbar.html' ?>
  <?php include 'views/topsection1.html' ?>

  <div class="container-fluid topsection2">
    <div class="row">
      <div class="col-md-4 tp2-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <p><?= $slides[0]->text ?> </p>
              <p>slide 1</p>
              <p>slide 1</p>
            </div>
            <div class="carousel-item">
              <p>slide 2</p>

            </div>
            <div class="carousel-item">
              <p>slide 3</p>

            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="col-md-4">
        asdf
      </div>
      <div class="col-md-4">
        asdf
      </div>
    </div>


  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js" type="text/javascript"></script>

  <script src="js/bootstrap.js" type="text/javascript"></script>
</body>

</html>
