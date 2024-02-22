<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>SIGMAA</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">


	<style>
        /* Estilos para la imagen */
        .navbar-brand img {
            width: 300px; /* Ancho deseado */
            height: auto; /* Altura automática para mantener la proporción */
            /* Otros estilos opcionales */
            display: block; /* Alinear la imagen como un bloque */
            margin: 0 auto; /* Centrar la imagen horizontalmente */
            /* Agrega más estilos según sea necesario */
        }
    </style>

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/Unicaribe.jpg"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="about.php">Inscribirse</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
			<!-- <form class="form-horizontal" method="POST" action="validar.php" enctype="multipart/form-data"autocomplete="off"> -->
				<form action="validar.php" method="post">
				<h1 class="lead">¡Bienvenido a SIGMAA!</h1>
				<h1 class="lead">Sistema de Administración Escolar</h1>
				<br>
				<p><a class="btn btn-default btn-lg" role="button">ESCRIBE TUS DATOS PARA INICIAR SESIÓN</a></p>
				<input type="text" name="usuario" placeholder="Usuario">
    			<input type="password" name="password" placeholder="Contraseña">
       			<!-- <input type="password" name="contrasenaconf" placeholder="Confirmar contraseña"> -->
       			<input type="submit" value="Ingresar">
       			<center>
       				<br>
       				<p>
       					<!-- Sube la imagen de tu crendencial de estudiante. -->
       				</p>
       				<br>
					<!-- <input type="file" name="image" accept="image/*"> -->
       			</center>
    			<br>
    			<br>
    			<br>
    			<br>
    			<br>
    			</form>
    		<?php
        	//include("validar.php");
        	?>

        		</div> 
			</div>
		</div>
	</header>
	<!-- /Header -->

</body>
</html>