<?php
session_start();
$_SESSION['usuario']=$_REQUEST['campousuario'];
$_SESSION['clave']=$_REQUEST['campoclave'];


$conexion=mysqli_connect("localhost","root","diciembre1999")or
die ("Problema con la conexion");
mysqli_select_db($conexion,"juegito_php_html");
$sql="select usuario from usuarios where usuario='". $_SESSION['usuario'] . "' and clave='". $_SESSION['clave']."';";
$registros=mysqli_query ($conexion, $sql) or die ("Problema en el select".mysqli_error($conexion));
$exito=false;

while($reg=mysqli_fetch_array($registros)){
 $exito=true;
}
 
if($exito==true){
header('Location: menu_juego.php');
}else{
$error_clave = 'Usuario o Contraseña incorrecta';
$_SESSION['usuarioContra_incorrecto']=$error_clave;

header("Location: login.php");
}

?>



