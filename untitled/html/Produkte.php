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
        <?php include('Header.php');?>
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
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
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
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Curry Wok</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Schnitzel</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Bratrolle</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Krautsalat</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Curry Wok</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Schnitzel</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Bratrolle</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                    <div class="col-md-3">
                        <img class="full-width-img center-block" alt="produkt1" src="../img/Annanas.png" style="max-height:100%; max-width:100%;" />
                        <div class="text-center">Krautsalat</div>
                        <div class="text-center"><a href="Detail.php">Details</a></div>
                    </div>
                </div>

            </div>
        </div>


        <?php include('Footer.html');?>
    </body>
</html>

