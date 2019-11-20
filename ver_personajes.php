<?php
session_start();

		$conexion=mysqli_connect("sql202.tonohost.com","ottos_24554408","coloybordo1234")or
die ("Problema con la conexion");
mysqli_select_db($conexion,"ottos_24554408_juegito_php_html");
/*$consulta_personaje="select p.nomPersonaje,
p.PuntosdeVida,
p.puntosdeDano,
h.descripcionHeroe, 
h.tipoheroe,o.nombrePoder,
o.descripcionPoder,
o.aumento,
o.caracteristicaAfectada
from personaje p 
join Heroe h on h.idpersonaje= p.idpersonaje 
join PoderesHeroe a on a.idpersonaje=p.idpersonaje 
join Poderes o on o.idpoder=a.idpoder where p.idpersonaje = 1;";*/

$consulta_personaje="select * from Heroe";

$consulta_personaje=mysqli_query ($conexion, $consulta_personaje) or die ("Problema en el select".mysqli_error($conexion));
$exito=false;
//echo $consulta_personaje['p.nomPersonaje'];
while ($reg=mysqli_fetch_array($consulta_personaje)) {
	echo reg['0'];
	$tabla_personaje = "
	<table class='egt'>

  <tr>

    <th>Nombre</th>

    <th>Vida</th>

    <th>Poder</th>

    <th>Daño</th>

    <th>Descripcion</th>

    <th>Tipo de Heroe</th>

  </tr>

  <tr>

    <td>".reg['p.nomPersonaje']."</td>

    <td>".reg['p.PuntosdeVida']."</td>

    <td>".reg['o.nombrePoder']."</td>

    <td>".reg['p.puntosdeDano']."</td>

    <td>".reg['h.descripcionHeroe']."</td>

    <td>".reg['h.tipoheroe']."</td>

  </tr>

</table>
	";

}

$_SESSION['tablapersonaje'] = $tabla_personaje;

///header('Location: nuevo_personaje.php');

	
		?>
