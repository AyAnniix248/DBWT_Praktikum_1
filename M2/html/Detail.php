<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/all.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Meilenstein 2</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <?php include('snippets/db.php');
    $id = $_GET['id'];
    $query = "SELECT Mahlzeiten.ID, Mahlzeiten.Beschreibung, Mahlzeiten.Name, Preise.Gastpreis  FROM Mahlzeiten 
                JOIN Preise ON Mahlzeiten.ID = Preise.IDMahlzeiten
                WHERE ID = $id";

    $result = mysqli_query($remoteConnection, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row['ID'] == NULL) {
        echo '<meta http-equiv = "refresh" content ="0; URL=Produkte.php" >';
    }?>

</head>
<body>
<?php include('snippets/Header.php'); ?>
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
        <h1>Details für <?= $row['Name'] ?></h1>
        <img src="../img/mensa-fh-aachen.jpg" alt="..." class="rndImg">
        <p></p>
    </div>
    <div class="col-lg-2 preis">
        <p>Gast-Preis</p>
        <h1>
            <?= $row['Gastpreis'] ?>€
        </h1>
        <button class="btn btn-lg btn-primary btnvorbestellen" type="submit">Vorbestellen</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <p class="smallerFont">Melden Sie sich jetzt an, um die wirklich viel günstigeren Preise für Mitarbeiter oder
            Studenten zu sehen</p>
    </div>
    <div class="col-lg-6">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">Beschreibung</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                   aria-controls="nav-profile" aria-selected="false">Zutaten</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                   aria-controls="nav-contact" aria-selected="false">Bewertung</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p><?= $row['Beschreibung'] ?></p>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p>Kichererbsen und Sesam</p>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
            </div>
        </div>
    </div>
</div>
<?php
mysqli_close($remoteConnection);
include('snippets/Footer.html'); ?>
</body>
</html>
