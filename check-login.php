<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleInicio.css">
    <title>Plan de estudio</title>
</head>
	<body>
		<?php
			require ("navBar.php"); //Se carga el script externo.
		?>
		
<div class="container">

			<?php
			// Connection info. file
			include 'conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// data sent from form login.html 
			$email = $_POST['email']; 
			$password = $_POST['password'];
			
			// Query sent to database
			$result = mysqli_query($conn, "SELECT Email, Password, Name FROM users WHERE Email = '$email'");
			
			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);
			
			// Variable $hash hold the password hash on database
			$hash = $row['Password'];
			
			/* 
			password_Verify() function verify if the password entered by the user
			match the password hash on the database. If everything is OK the session
			is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
			*/
			if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['Name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
				echo "
				<div class='jumbotron'>
				<h1 class='display-4'>Plan de estudio</h1>
				<p class='lead'>Bienvenido $row[Name].</p>
				<hr class='my-4'>
				<p class='lead'>Carrera: Ingieria en Tecnologias de la Información y Comunicación </br>
					Matrícula:  17391005 </p>
				</div>
				";	
			
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='index.html'><strong>Please try again!</strong></a></p></div>";			
			}	
			?>

	<div class="row">
		<div class="col-lg-6 col-sm-12">
			<a href="http://localhost/UTOnline/ClaseOnline.php" class="text-decoration-none">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/programacion.webp" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Programación</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-6 col-sm-12">
			<a href="http://localhost/UTOnline/ClaseOnline.php" class="text-decoration-none">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/matematicas.jpg" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Matematicas</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-6 col-sm-12">
			<a href="http://localhost/UTOnline/ClaseOnline.php" class="text-decoration-none">
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/so.webp" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Sistemas operativos</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-6 col-sm-12">
			<a href="http://localhost/UTOnline/ClaseOnline.php" class="text-decoration-none">
				<div class="card" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="img/basedatos.jpg" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Base de datos</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	<!-- </div> -->
</div>


	</body>
	<?php
			require ("footer.php"); //Se carga el script externo.
	?>
</html>