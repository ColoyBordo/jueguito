<?php
session_start();
$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");

mysqli_select_db($conexion, "phpmyadmin") or die("Problemas en
la selección de la base de datos");

$sql="select nombre from usuarios where usuario='".$_REQUEST['campousuario']."'and pass='".$_REQUEST['campoclave']."';";

$registro=mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));

$exito=false;

while ($reg=mysqli_fetch_array($registro)){
  $exito=true;
}

if ($exito==true) {
  header('Location: /juego/menu.php');

}else{
      $error_ing = 'Usuario o pass incorrectos';
      $_SESSION['usuarioContra_incorrectos']=$error_ing;
      header('Location: /juego/login.php');

  }



/*while ($reg=mysqli_fetch_array($registro)){
  $exito=true;
header('Location: /juego/menu.php');
}*/

?>
