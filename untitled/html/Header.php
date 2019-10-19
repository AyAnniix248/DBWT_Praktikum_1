<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-company-mint mynavBar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="Start.php">E-Mensa</a>
            <ul class="navbar-nav mr-auto navElements">
                <li class="nav-item border-right <?= "Start.php" == basename($_SERVER['PHP_SELF']) ? "active" : ""?>">
                    <a class="nav-link" href="Start.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item  border-right <?= "Produkte.php" == basename($_SERVER['PHP_SELF']) ? "active" : ""?>">
                    <a class="nav-link" href="Produkte.php">Mahlzeiten</a>
                </li>
                <li class="nav-item border-right">
                    <a class="nav-link" href="#">Bestellungen</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" target="_blank" href="http://fh-aachen.de">Fh-Aachen</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="http://www.google.de/search" method="get" target="_blank">
                <input class="form-control mr-sm-2 rounded-pill" name="q" placeholder="Suchen...">
                <input type="hidden" name="as_sitesearch" value="www.fh-aachen.de"/>
            </form>
        </div>
    </nav>
</header>
</html>