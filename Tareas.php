<head>
    <title>Tareas</title>
    <link rel="stylesheet" href="css/styleTareas.css">
</head>

<body>
    <?php
        require ("navBar.php"); //Se carga el script externo.
    ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="/UTOnline/check-login.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Etapas</li>
  </ol>
</nav>

    <div class="container">
        
         <div class="jumbotron jumbotron-fluid text-center">
            <h1 class="display-4"> Tareas </h1>

            <a href="ListaTareas.php">
                <div class="col-11 card" >
                    <div class="card-body">
                        <h5 class="card-title">Etapa 01</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Material</h6>
                        <span class="badge badge-secondary">5 tareas</span>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="col-11 card" >
                    <div class="card-body">
                        <h5 class="card-title">Etapa 02</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Material</h6>
                        <span class="badge badge-secondary">6 tareas</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

</body>
<?php
			require ("footer.php"); //Se carga el script externo.
	?>
