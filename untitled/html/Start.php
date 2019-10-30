<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="../css/all.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <title>Meilenstein 1</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <!--container-fluid ermöglicht die maximale breite eines containers -->
        <!-- Navigation -->
        <?php include('Header.php');?>
        <!-- schöner machen -->
        <div class="row">
            <div class="container-fluid myPic">
                <img src="../img/test.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <!-- Main Content -->
        <!-- column, row Prinzip. Max. col.: 12 | lg für large screen-->
            <div class="row">
                <div class="col-lg-3">
                    <p class="myText">Der Dienst e-Mensa ist noch beta. Sie können bereits <a href="Produkte.php">Mahlzeiten</a>
                        durchstöbern, aber noch nicht bestellen.</p>
                </div>
                <div class="col-lg-7">
                    <h1>Leckere Gerichte vorbestellen</h1>
                    <p class="myText">... und gemeinsam mit Kommilitonen und Freunden essen, aber leider ist das bier alle
                        :((</p>
                </div>
                <div class="col-lg-2">
                    <button type="button" class="btn btn-outline-secondary logButton"><i class="far fa-hand-point-right"></i> Registrieren</button>
                    <button type="button" class="btn btn-primary logButton"><i class="fas fa-sign-in-alt"></i>Anmelden</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p class="myText"> Registrieren Sie sich <a href="#">hier</a>, um über die Veröffentlichung des Dienstes per
                        Mail informiert zu werden.</p>
                </div>
                <div class="col-lg-9">
                    <img src="../img/Fh-aachen.png" alt="..." class="rndImg">
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
