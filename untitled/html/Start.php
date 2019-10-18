<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <title>Meilenstein 1</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <!--container-fluid ermöglicht die maximale breite eines containers -->
        <!-- Navigation -->
        <?php include('Header.html');?>

        <!-- schöner machen -->
        <div class="container-fluid">
        <img src="../img/mensa-fh-aachen.png" alt="Kantine" class="mx-auto d-block myPic" width="100%" height="20%">
        </div>
        <!-- Main Content -->
        <!-- column, row Prinzip. Max. col.: 12 | lg für large screen-->
            <div class="row">
                <div class="col-lg-3">
                    <p class="myText">Der Dienst e-Mensa ist noch beta. Sie können bereits <a href="#">Mahlzeiten</a>
                        durchstöbern, aber noch nicht bestellen.</p>
                </div>
                <div class="col-lg-7">
                    <h1>Leckere Gerichte vorbestellen</h1>
                    <p class="myText">... und gemeinsam mit Kommilitonen und Freunden essen, aber leider ist das bier alle
                        :((</p>
                </div>
                <div class="col-lg-2">
                    <button type="button" class="btn btn-outline-secondary">Registrieren</button>
                    <br/>
                    <button type="button" class="btn btn-primary">Anmelden</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p class="myText"> Registrieren Sie sich <a href="#">hier</a>, um über die Veröffentlichung des Dienstes per
                        Mail informiert zu werden.</p>
                </div>
                <div class="col-lg-9">
                    <img src="../img/top(probe).jpg" alt="..." class="mx-auto d-block" width="100%">
                </div>
            </div>
        <?php include('Footer.html');?>
    </body>
</html>

<!-- Img Slider
<div id="demo" class="carousel slide" data-ride="carousel">
     Indicators
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
 The slideshow
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/1.jpg">
        </div>
        <div class="carousel-item">
            <img src=../img/2.jpg">
        </div>
        <div class="carousel-item">
            <img src="../img/3.jpg">
        </div>
    </div>
 Left and right controls
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
-->
