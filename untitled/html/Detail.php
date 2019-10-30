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
<?php include('Header.php'); ?>

<div class="row">
    <!--Login-->
    <div class="col-lg-3 border-dark p-3">
        <form class="form-signin">
            <h2 class="form-signin-heading">Login</h2>
            <input type="text" class="form-control" name="user" placeholder="Benutzer" required="" autofocus=""/>
            <input type="password" class="form-control" name="password" placeholder="Passwort" required=""/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>
        </form>
    </div>
    <div class="col-lg-7">
        <h1>Details für "Falafel"</h1>
        <img src="../img/Fh-aachen.png" alt="..." class="rndImg">
        <p></p>
    </div>
    <div class="col-lg-2 preis">
        <p>Gast-Preis</p>
        <h1>5,95€</h1>
        <button class="btn btn-lg btn-primary btnvorbestellen" type="submit">Vorbestellen</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <p class="smallerFont">Melden Sie sich jetzt an, um die wirklich viel günstigeren Preise für Mitarbeiter oder
            Studenten zu sehen</p>
    </div>
    <!-- Tab system-->

    <div class="col-lg-6">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php if (!(isset($_GET['tab2']) || isset($_GET['tab3']))) echo 'active'; ?>
                <h1>test 1</h1>" href="?tab1">Beschreibungen</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if (isset($_GET['tab2'])) echo 'active'; ?>"
                   href="?tab2">Zutaten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if (isset($_GET['tab3'])) echo 'active'; ?>"
                   href="?tab3">Bewertung</a>
            </li>
        </ul>

        <?php
        if (isset($_GET['tab2'])) {
            ?>
            <p>Kichererbsen und Sesam</p>
            <?php
        } else if (isset($_GET['tab3'])) {
        ?>
        <form action="http://bc5.m2c-lab.fh-aachen.de/form.php" method="post">
           <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="mahlzeit">Mahlzeit</label>
                <div class="col-sm-4">
                    <select name="mahlzeit" class="form-control" id="mahlzeit">
                        <option>Schnitzel</option>
                        <option>Bratrolle</option>
                        <option>Krautsalat</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="benutzer" class="col-sm-2 col-form-label">Benutzername</label>
                <div class="col-sm-4">
                    <input name="benutzer" id="benutzer" class="form-control" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group row">
                <label for="bewertung" class="col-sm-2 col-form-label">Bewertung</label>
                <div class="col-sm-2">
                    <select name="bewertung" id="bewertung" class="custom-select ">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                    <label for="bemerkung" class="col-sm-2">Textarea</label>
                <div class="col-sm-4">
                    <textarea name="bemerkung" class="form-control" id="bemerkung"
                              placeholder="Bemerkung"></textarea>
                </div>
            </div>
            <input type="hidden" name="matrikel" value="3217296"/>
            <input type="hidden" name="kontrolle" value="kal"/>

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Bewertung absenden</button>
                </div>
            </div>
    </form>
    <?php
    } else { ?>
        <p> Teigtasche mit Falafel aus Kichererbsen und Sesam. </p>
    <?php }
    ?>
</div>
</div>

<?php include('Footer.html'); ?>
</body>
</html>
