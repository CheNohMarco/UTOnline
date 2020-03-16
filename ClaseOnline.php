

<head>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Clase Online</title>
</head>


<body>
    <?php
        require ("navBar.php"); //Se carga el script externo.
    ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/UTOnline/check-login.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Clases online</li>
  </ol>
</nav>

    <div class="container">

        <div class="jumbotron jumbotron-fluid text-center">
            <h1 class="display-4"> Elaboración de salsas IV</h1>
            <h5>Profesor: Oscar mesa</h5>
        </div>

        <div class="text-center">
            <div class="card-video">
                <div class="card-body">
                    <iframe width="800" height="415" src="https://www.youtube.com/embed/7QKM0hdUp3w" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

        </div>

        <div class="container">
            <!-- <div style="width: 10"> -->

                <div class="card bg-light ">

                    <h1 class="text-center"> Chat</h1>

                    <!-- <div class="col-6">


                    </div> -->
                    <div class="col-12">
                        <div class="card bg-light ">
                            <div class="card-body">
                                <h5 class="card-title">Rubén Antonio Garcia Ruiz</h5>
                                <input type="text" name="comentario" ;>
                                <button type="submit" class="btn btn-light ">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                Enviar
                                </button>
                                <img src="img/hombre.png"
                                width="100"
                                height="70"
                                align="right"
                                >
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="card bg-light ">
                            <div class="card-body">
                                <h5 class="card-title">Luis Ricardo Díaz Chavez</h5>
                                <input type="text" name="comentario" ;>
                                <button type="submit" class="btn btn-light ">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                Enviar
                                </button>
                                <img src="img/hombre.png"
                                   
                                width="100"
                                height="70"
                                align="right"
                                >
                
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="card bg-light ">
                            
                            <div class="card-body">
                                   
                                <h5 class="card-title">Michel</h5>
                                <input type="text" name="Comentario" ;>
                                <button type="submit" class="btn btn-light ">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                Enviar
                                </button>
                                <img src="img/mujer.jpg"
                                   
                                width="100"
                                height="100"
                                align="right"
                                >

                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="card bg-light  " style="padding: 4px;">
                            <div class="card-body">
                                <h5 class="card-title">Marco</h5>
                                <input type="text" name="Comentario" ;>
                                <button type="submit" class="btn btn-light ">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                Enviar
                                </button>
                                <img src="img/hombre.png"
                                   
                                width="100"
                                height="70"
                                align="right"
                               
                                >

                            </div>
                        </div>

                    </div>
                </div>

            <!-- </div> -->
        </div>
</div>

    </div>

        
</body>




<?php
			require ("footer.php"); //Se carga el script externo.
	?>