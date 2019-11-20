<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel=stylesheet href=nuevasala_estilo.css>

	<div class="principal_sala">
		<div class="titulo"><h1>Salas de juego</h1></div>

<?php
		$conexion=mysqli_connect("localhost","root","diciembre1999")or
		die ("Problema con la conexion");
		mysqli_select_db($conexion,"juegito_php_html");

		$consulta_objeto = "select estado, idjugador1 from partida;";
		
		$consulta_objeto=mysqli_query ($conexion, $consulta_objeto) or die ("Problema en el select".mysqli_error($conexion));

?>

<form action="crear_sala.php" method="post">
			<input id="crearsala" class="crearsala" type="submit" value="Crear sala">
</form>

<table>

<?php
    	while($row = mysqli_fetch_array($consulta_objeto)) {
?>

		
  			<tr>
    		<th>Jugadores</th>
    		<th>Estado</th> 
   			<th></th>
  			</tr>
			<tr>
    		<td><?php echo $row['idjugador1'];?></td>
    		<td><?php echo $row['estado'];?></td>
    		<td>
    			<form action="update_sala.php" method="post">
    			<input id="sala1" type="submit" value="Ingresar a la sala">
    			</form>
    		</td>
  			</tr>

<?php
}
?>
</table>

		<form action="menu_juego.php" method="post">
			<input id="volver" class="volver" type="submit" value="volver">
		</form>

	</div>

</body>
</html>