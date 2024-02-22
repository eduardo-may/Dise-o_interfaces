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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<center>
	<table border="2">
		<thead>
			<tr>
				<th>ID</th>
				<th>Descripción</th>
				<th>Imagen</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			include("con_db.php");

			$query = "SELECT * FROM images";
			$resultado = $conex->query($query);
			while($row = $resultado->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><img height = "100px" src="data:image/jpg/;base64, <?php echo base64_encode($row['image']); ?>" /></td>
				<th><a href="modificar.php?id = <?php echo $row['id']; ?>">Modificar descripción.</a></th>
			</tr>
		<?php
			}

		?>
		</tbody>
	</table>
</center>