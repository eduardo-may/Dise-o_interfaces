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
					<li><a href="mostrar.php">Regresar a visualización</a>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<?php 
			include("con_db.php");

			//$id = $_REQUEST['id'];

			$query = "SELECT * FROM images";
			$resultado = $conex->query($query);
			$row = $resultado->fetch_assoc();
		?>
		<div class="container">
			<div class="row">
			<form class="form-horizontal" method="POST" action="processmod.php?id=<?php echo $row['id']; ?>" enctype="multipart/form-data"autocomplete="off">
				<!--<h1 class="lead">¡Bienvenido!</h1>-->
				<!--<h1 class="lead"></h1>-->
				<br>
				<p><a class="btn btn-default btn-lg" role="button">CAMBIAR DESCRIPCIÓN DE IMAGEN</a></p>
				<input type="text" name="description" placeholder="Nueva descripción de imagen.">
				<br>
				<br>
				<center>
				<!--<input type="file" name="image" accept="image/*"><br>-->
				</center>
				<!--<input type="text" name="description" placeholder="Nueva descripción de imagen.">-->
				<?php echo $row['description']; ?>
				<img height = "100px" src="data:image/jpg/;base64, <?php echo base64_encode($row['image']); ?>" />
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