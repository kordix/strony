<html>

<head>
    <meta charset="utf-8">
    <title>Spółka i s-ka</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/effects.css">
    <link rel="stylesheet" href="/css/mynavbar.css">
    <link rel="stylesheet" href="/css/brand.css">
    
    <link rel="stylesheet" href="/css/carousel.css">
    <link rel="stylesheet" href="css/top2.css">
    <link rel="stylesheet" href="css/mid.css">
    <link rel="stylesheet" href="/css/counter.css">
    <link rel="stylesheet" href="/css/footer.css">
</head>

<body>
    <?php include 'resources/texts.php' ?>
    <?php include 'resources/slides.php' ?>
    <?php include 'views/navbar.php' ?>
    <?php include 'views/topsection1.html' ?>
    <?php include 'views/topsection2.php' ?>
    <?php include 'views/mid.php' ?>
    <?php include 'views/counters.php' ?>
    <div class="container-fluid" id="footer">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3><?= $company ?></h3>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Fakty</a></li>
                                <li><a href="#">Nasi klienci</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Szkolenia i konferencje</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Działalność społeczna</a></li>
                                <li><a href="#">Wiedza</a></li>
                                <li><a href="#">Aktualności</a></li>
                                <li><a href="#">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <h3>Head Office</h3>
                    <ul>
                        <li><a href="#">Spółka Spółka z.o.o.</a></li>
                        <li><a href="#">ul. Zdzisława Gomółki</a></li>
                        <li><a href="#">80-279 Gdańsk</a></li>
                        <li><a href="#">tel. 792 XXX XXX</a></li>
                        <li><a href="#">58 XXX XX XX</a></li>
                        <li><a href="#">58 XXX XX XX</a></li>
                        <li><a href="#">info@firma.pl</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Oddział w Warszawie</h3>
                    <ul>
                        <li><a href="#">Spółka Spólka z o.o.</a></li>
                        <li><a href="#">ul. Bieruta 150</a></li>
                        <li><a href="#">000-032 Warszawa</a></li>
                        <li><a href="#">22 xxx xx xx</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Obserwuj nas</h3>
                    <p class="socials"><a href="#"><i class="magn fab fa-facebook"></i></a>
                        <a><i class="magn fab fa-linkedin"></i></a></p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="#">©Spółka Społka z.o.o.</a>
            </div>
            <div class="col-md-3">
                <a href="#">Polityka Prywatności</a>
            </div>
            <div class="col-md-3">
                <a href="#">Klauzula informacyjna</a>
            </div>
            <div class="col-md-3" id="firm">
                <span>Made by</span>  <a href="#">kordix technologies</a>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="js/countUp.js"></script>
    <script src="js/counter.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/stickynavbar.js" type="text/javascript"></script>
</body>

</html>
