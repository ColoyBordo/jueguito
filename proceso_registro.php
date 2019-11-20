<?php
session_start();
$_SESSION['usuario']=$_REQUEST['campousuario'];
$_SESSION['clave']=$_REQUEST['campoclave'];
$_SESSION['clave2']=$_REQUEST['campoclave2'];
$_SESSION['mail']=$_REQUEST['campomail'];


$clave = $_SESSION['clave'];
$usuario = $_SESSION['usuario'];
$mail = $_SESSION['mail'];
$error_clave= null;
$error_mail= null;
$contador = 0;

if(strlen($usuario) < 5){
      $error_clave = 'El usuario debe tener al menos 5 caracteres';
      $_SESSION['error_contraseña']=$error_clave;
      header("Location: registro.php");
     
     return false;
  }
   if(strlen($clave) < 6){
      $error_clave = 'La clave debe tener al menos 6 caracteres';
      $_SESSION['error_contraseña']=$error_clave;
      header("Location: registro.php");
     
      return false;
   }
   $contador = $contador + 1;
   if(strlen($clave) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      $_SESSION['error_contraseña']=$error_clave;
      header("Location: registro.php");
     
      return false;
   }
   $contador = $contador + 1;
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      $_SESSION['error_contraseña']=$error_clave;
      header("Location: registro.php");

      return false;
   }
   $contador = $contador + 1;
   
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      $_SESSION['error_contraseña']=$error_clave;
      header("Location: registro.php");

      return false;
   }
   $contador = $contador + 1;
   
   if (is_valid_email($mail)) {
      $contador = $contador + 1;
   } else {
      $error_clave = "El e-Mail no es valido";
      $_SESSION['error_contraseña']=$error_clave;
      header("Location: registro.php");
   }

   
   
$conexion=mysqli_connect("localhost","root","diciembre1999")or
die ("Problema con la conexion");
mysqli_select_db($conexion,"juegito_php_html");


if ($contador == 5){
if($_SESSION['clave'] == $_SESSION['clave2']){
$usr = $_SESSION['usuario'];
$pass = $_SESSION['clave'];
$sql="INSERT INTO usuarios (usuario, clave, mail) VALUES ('$usr', '$pass', '$mail')";

if (mysqli_query($conexion, $sql)) {
      echo "Registrado correctamente";
      header('Location: index.php');
}else{
      echo "Error: " . "<br>" . "Error al registrarte";
}
mysqli_close($conexion);


} else {
   $error_clave = "Las contraseñas no coinciden";
   $_SESSION['error_contraseña']=$error_clave;
   header("Location: registro.php");
}
}

 function is_valid_email($mail)
{
  $matches = null;
  return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $mail, $matches));
}

?>


