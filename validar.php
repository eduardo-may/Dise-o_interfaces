<?php
include('con_db.php');
$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;


$conex = mysqli_connect("localhost","root","","proyectopweb");

$consulta="SELECT * FROM datesformulario WHERE usuario = '$usuario' and password = '$password'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:opciones.php");

}else{
  ?>
  <center>
  <h1 class="bad">No eres un usuario registrado.</h1>
  </center>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
