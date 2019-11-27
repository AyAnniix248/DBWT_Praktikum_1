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
</head>
<body>
<?php
include('snippets/Header.php');
include 'snippets/db.php';
?>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-7">
        <h1>Verfügbare Speisen (Bestseller)</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <form class="border border-dark p-3">
            <h3>Speiseliste filtern</h3>
            <div class="form-group">
                <select class="form-control">
                    <option>Hauptspeisen</option>
                    <option>Nachtisch</option>
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    nur Verfügbare
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2">
                <label class="form-check-label" for="exampleRadios1">
                    nur vegetarische
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    nur vegane
                </label>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Speisen finden</button>
        </form>
    </div>
    <div class="col-md-7">
        <div class="row">
            <?php
            $sql = 'SELECT Mahlzeiten.Name, Mahlzeiten.ID, Bilder.Binaerdaten, Bilder.`Alt-Text` FROM Mahlzeiten
                        JOIN MahlzeitenBilder ON Mahlzeiten.ID = MahlzeitenBilder.IDBilder
                        JOIN Bilder ON MahlzeitenBilder.IDBilder = Bilder.ID'
                        . (isset($_GET['avail']) ? ' WHERE Verfuegbar = 1' : '') . ' ORDER by Name' . (isset($_GET['limit']) ? ' LIMIT ' . $_GET['limit'] : '');
            $result = mysqli_query($remoteConnection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-3">
                        <img class="full-width-img center-block"
                             src="data:image/jpg;base64,<?= $row["Binaerdaten"] ?>"
                             alt="<?= $row["Alt-Text"] ?>">
                        <div class="text-center"><?= $row['Name'] ?></div>
                        <div class="text-center"><a href="Detail.php?id=<?= $row['ID'] ?>">Details</a></div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>
<?php
mysqli_close($remoteConnection);
include('snippets/Footer.html'); ?>
</body>
</html>

