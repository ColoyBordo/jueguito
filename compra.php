<?php 

$conexion=mysqli_connect("localhost","root","diciembre1999")or
die ("Problema con la conexion");
mysqli_select_db($conexion,"juegito_php_html");
$sql="insert idobjeto idheroe from objeto_heroe";

$registros=mysqli_query ($conexion, $sql) or die ("Problema en el select".mysqli_error($conexion));
$exito=false;

while($reg=mysqli_fetch_array($registros)){
 $exito=true;
}
 
if($exito==true){
header('Location: menu_juego.php');
}else{
echo "error al comprar";
}

 ?>