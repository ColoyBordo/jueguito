<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">

    function idpj() {
      var combo = document.getElementById('heroes');
      var valor = combo.value;
      document.location.href='nuevo_personaje.php?pj='+ valor;
    }

  function get(idheroe){
    

  document.getElementById('heroes').value=idheroe;
}

</script>

	<title>Personaje</title>
</head>
<body>

	<link rel=stylesheet href=juego.css>

	<div class="seleccionar_personaje">

	<form action="personaje_usuario.php" method="post">

	<select id='heroes' onchange="idpj()" class="select_css" name="heroes" style="width:150px;">
	<option name="mago" value="2">Mago</option> 
	<option name="caballero" value="1">Caballero</option> 
	<option name="sanador" value="4">Sanador</option>
	<option name="cazador" value="3">Cazador</option> 
	</select>
	<br>
	<input type="submit" value="Seleccionar">
	</form>


		<div>
			<form action="menu_juego.php" method="post">
			<input id="volver" class="volver" type="submit" value="volver">
			</form>
		</div>

	</div>

<?php


$conexion=mysqli_connect("localhost","root","diciembre1999")or
die ("Problema con la conexion");
mysqli_select_db($conexion,"juegito_php_html");

//$consulta_personaje="select * from Heroe";

$consulta_personaje="select p.nomPersonaje,
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
join Poderes o on o.idpoder=a.idpoder where p.idpersonaje = '$_GET[pj]';";


$consulta_personaje=mysqli_query ($conexion, $consulta_personaje) or die ("Problema en el select".mysqli_error($conexion));



while($row = mysqli_fetch_array($consulta_personaje)) {
     
?>


	<table>

		<caption>Estadisticas de Heroe</caption>

  <tr>
    <td>Nombre</td>
    <td><?php echo $row['nomPersonaje'];?></td>
  </tr>

  <tr>
    <td>Vida</td>
    <td><?php echo $row['PuntosdeVida'];?></td>
  </tr>

  <tr>
    <td>Daño</td>
    <td><?php echo $row['puntosdeDano'];?></td>
  </tr>

  <tr>
    <td>Descripcion</td>
    <td><?php echo $row['descripcionHeroe'];?></td>
  </tr>

  <tr>
    <td>Tipo de Heroe</td>
    <td><?php echo $row['tipoheroe'];?></td>
  </tr>

  <tr>
    <td>Poder</td>
    <td><?php echo $row['nombrePoder'];?></td>
  </tr>

  <tr>
    <td>Descripcion del Poder</td>
    <td><?php echo $row['descripcionPoder'];?></td>
  </tr>

  <tr>
    <td>Aumento</td>
     <td><?php echo $row['aumento'];?></td>
  </tr>

</table>
	



<?php



  } 

?>



</body>
</html>