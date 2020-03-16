
<head>
    <link rel="stylesheet" href="css/styleExamen.css">
    <title>Examen final</title>
</head>

<body>
<?php
        require ("navBar.php"); //Se carga el script externo.
    ?>

    <!-- ////////////////////EXAMEN ONLINE/////////////////////// -->
    <div class="container">

        <div class="jumbotron jumbotron-fluid text-center">
            <h1 class="display-4">Examen final</h1>

            <p class="lead">¿Qué es ....?</p>

            <div class="row">
                <div class="col-6">
                    <div class="card bg-light ">
                        <div class="card-body">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Default radio
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-light ">
                        <div class="card-body">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Default radio
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-light ">
                        <div class="card-body">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Default radio
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-light ">
                        <div class="card-body">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                              Default radio
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-btn">
                <button type="button" class="btn  btn-lg btn-block">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Enviar</button>
            </div>
        </div>
    </div>

    <?php
			require ("footer.php"); //Se carga el script externo.
	?>
</body>


