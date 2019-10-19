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
<script>
    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    });
</script>
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
        <img src="../img/Fh-aachen.png" alt="..." class="rndImg" width="100%">
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
                <a class="nav-link active" href="#beschreibungen">Beschreibungen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#zutaten">Zutaten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#bewertung">Bewertung</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="beschreibungen" class="container tab-pane fade">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div id="zutaten" class="container tab-pane fade"><br>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
            <div id="bewertung" class="container tab-pane fade"><br>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam.</p>
            </div>
        </div>
    </div>
</div>

<?php include('Footer.html'); ?>
</body>
</html>
