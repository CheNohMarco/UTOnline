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
    <li class="breadcrumb-item"><a href="/UTOnline/Tareas.php">Etapas</a>  </li>
    <li class="breadcrumb-item active" aria-current="page">Tareas</li>
  </ol>
</nav>

    <div class="container">
        
         <div class="jumbotron jumbotron-fluid text-center">
            <h1 class="display-4"> Tareas </h1>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Tarea  #1
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <button type="button" class="btn btn-danger btn-lg btn-block">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>    
                        Eliminar</button>
                        <button type="button" class="btn btn-warning btn-lg btn-block">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>    
                        Editar</button>
                        <button type="button" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        Enviar</button>
                        <div class="form-group">
                            <label for="inputAddress">Comentario</label>
                            <input type="text" class="form-control text-center" id="inputAddress" placeholder="Incluya un comentario">
                        </div>
                        <label for="photo">Incluya el archivo</label>
                            <div class="drag-drop">
                            <input type="file" multiple="multiple" id="photo" />
                            <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                            </span>
                            <span class="desc">Pulse aquí para añadir archivos</span>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Tarea  #2
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                    <button type="button" class="btn btn-danger btn-lg btn-block">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>    
                        Eliminar</button>
                        <button type="button" class="btn btn-warning btn-lg btn-block">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>    
                        Editar</button>
                        <button type="button" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        Enviar</button>
                        <div class="form-group">
                            <label for="inputAddress">Comentario</label>
                            <input type="text" class="form-control text-center" id="inputAddress" placeholder="Incluya un comentario">
                        </div>
                        <label for="photo">Incluya el archivo</label>
                            <div class="drag-drop">
                            <input type="file" multiple="multiple" id="photo" />
                            <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                            </span>
                            <span class="desc">Pulse aquí para añadir archivos</span>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Tarea #3
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                    <button type="button" class="btn btn-danger btn-lg btn-block">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>    
                        Eliminar</button>
                        <button type="button" class="btn btn-warning btn-lg btn-block">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>    
                        Editar</button>
                        <button type="button" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        Enviar</button>
                        <div class="form-group">
                            <label for="inputAddress">Comentario</label>
                            <input type="text" class="form-control text-center" id="inputAddress" placeholder="Incluya un comentario">
                        </div>
                        <label for="photo">Incluya el archivo</label>
                            <div class="drag-drop">
                            <input type="file" multiple="multiple" id="photo" />
                            <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                            </span>
                            <span class="desc">Pulse aquí para añadir archivos</span>
                            </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
    </div>

</body>
<?php
			require ("footer.php"); //Se carga el script externo.
	?>
