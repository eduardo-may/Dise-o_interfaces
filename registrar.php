<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['description']) >= 1) {
	    $description = trim($_POST['description']);
	    //$password = trim($_POST['password']);
	    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	    $consulta = "INSERT INTO images(description, image) VALUES ('$description','$image')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado){
	    	?>
	    	<center>
	    	<h3 class="ok">¡Se ha subido tu imagen!</h3>
	    	</center>
          	<?php
	    } else {
	    	?>
	    	<center> 
	    	<h3 class="bad">No se ha subido la imagen correctamente.</h3>
	    	</center>
           <?php
	    }
    }	else {
	    	?> 
	    	<h3 class="bad">Todos los campos son obligatorios</h3>
           <?php
    }
 }   
?>