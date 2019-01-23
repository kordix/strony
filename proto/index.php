<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Bertrand B4</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/moje.css">
    <link rel="stylesheet" href="css/pho2.css">


</head>

<body>
    <?php include 'views/navbar.html'  ?>

    <!--Karuzela-->
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-interval="10000" data-ride="carousel" style="margin:0px;padding:0px">
            <div class="carousel-inner" >
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                </ol>
                <div class="carousel-item active" style="margin:0px;padding:0px">
                    <div id="slide1" class="container" style="position:relative">
                        <div class="d-flex justify-content-center">

                        <img class="mx-auto" src="http://wiked.pl/image/frontslider/frontslide1.jpg" class="img-fluid" style="height:300px" alt="">
                    </div>
                        <div class="d-flex justify-content-center">

                        <p>Lorem ipsum</p>
                    </div>

                    </div>
                </div>
                <div class="carousel-item">
                    SLIDE 2
                </div>
                <div class="carousel-item">
                    SLIDE 3
                    <img src="http://www.studiujnaukrainie.pl/images/banner1.jpg" alt="">
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
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script>
        function toggleCodes(on) {
            var obj = document.getElementById('icons');

            if (on) {
                obj.className += ' codesOn';
            } else {
                obj.className = obj.className.replace(' codesOn', '');
            }
        }
    </script>
    <script type="text/javascript" src="js/moje.js">
    </script>
</body>

</html>
