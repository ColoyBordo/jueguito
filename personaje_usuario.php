<?php 

session_start();
$idpj = $_POST['heroes'];

$conexion=mysqli_connect("localhost","root","diciembre1999")or
die ("Problema con la conexion");
mysqli_select_db($conexion,"juegito_php_html");


$selectid = "select idusuarios from usuarios where usuario='".$_SESSION['usuario']."';";

$selectid = mysqli_query ($conexion, $selectid) or die ("Problema en el select".mysqli_error($conexion));
$reg=mysqli_fetch_array($selectid);

$insert_personajeusuario = "INSERT INTO personaje_usuario (idusuarios, idpersonaje) VALUES ('".$reg['idusuarios']."', '".$idpj."');";

$insert_personajeusuario = mysqli_query ($conexion, $insert_personajeusuario) or die ("Problema en el select".mysqli_error($conexion));

 header("Location: menu_juego.php");

 ?>