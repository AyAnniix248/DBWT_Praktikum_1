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
<?php include('Header.html'); ?>
<div class="row">
    <!--Login-->
    <div class="col-lg-3 border-dark p-3">
        <form class="form-signin">
            <h2 class="form-signin-heading">Login</h2>
            <input type="text" class="form-control" name="user" placeholder="Benutzer" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Passwort" required=""/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>
        </form>
    </div>
    <div class="col-lg-7">
        <h1>Details für "Falafel"</h1>
        <img src="../img/Fh-aachen.png" alt="..." class="rndImg" width="100%"><p></p>
    </div>
    <div class="col-lg-2 preis">
        <p>Gast-Preis</p>
        <h1>5,95€</h1>
        <button class="btn btn-lg btn-primary btnvorbestellen" type="submit">Vorbestellen</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <p class="smallerFont">Melden Sie sich jetzt an, um die wirklich viel günstigeren Preise für Mitarbeiter oder Studenten zu sehen</p>
    </div>
    <!-- Tab system-->
    <div class="col-lg-6">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="beschreibung-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                   aria-selected="true">Beschreibungen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="zutaten-tab" data-toggle="tab" href="#zutaten" role="tab" aria-controls="profile"
                   aria-selected="false">Zutaten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="bewerungen-tab" data-toggle="tab" href="#bewertungen" role="tab" aria-controls="contact"
                   aria-selected="false">Bewertungen</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Teigtasche mit Falafel aus Kichererbsen und Sesam, dazu passt hervorragend der Krautsalat.</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Nix</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Nix</div>
        </div>
    </div>
</div>
<?php include('Footer.html'); ?>
</body>
</html>
