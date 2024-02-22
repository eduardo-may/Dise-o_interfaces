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
	    	echo "Tu imagen se ha subido correctamente.";
	    } else {
	    	echo "Error al intentar subir imagen. Inténtelo de nuevo";
	    }
    }	else {
	    	echo "Todos los campos son obligatorios.";
    }
 }   
?>