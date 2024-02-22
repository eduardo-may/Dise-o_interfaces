<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>SIE</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<!-- <li><a href="index.php">Home</a></li> -->
					<li><a href="opciones.php">Regresar a opciones</a>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
			<form class="form-horizontal" method="POST" action="registrar.php" enctype="multipart/form-data"autocomplete="off">
				<!--<h1 class="lead">¡Bienvenido!</h1>-->
				<!--<h1 class="lead"></h1>-->
				<br>
				<p><a class="btn btn-default btn-lg" role="button">SUBE TU IMAGEN Y UNA DESCRIPCIÓN</a></p>
				<center>
				<input type="file" name="image" accept="image/*"><br>
				</center>
				<input type="text" name="description" placeholder="Descripción de la imagen."> 
    			<!-- <input type="password" name="password" placeholder="Contraseña"> -->
       			<!-- <input type="password" name="contrasenaconf" placeholder="Confirmar contraseña"> -->
       			<br><br>
       			<input type="submit" name="register">
    			<br>
    			<br>
    			<br>
    			<br>
    			<br>
    			</form>
    		<?php
        	//include("registrar.php");
        	?>

        		</div> 
			</div>
		</div>
	</header>
	<!-- /Header -->

</body>
</html>