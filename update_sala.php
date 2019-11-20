<?php 
	session_start();

	$conexion=mysqli_connect("localhost","root","diciembre1999")or
		die ("Problema con la conexion");
		mysqli_select_db($conexion,"juegito_php_html");


		$usuario = $_SESSION['usuario'];

		$actualizar_sala = "update partida SET estado = 'jugando', idjugador2 =  (select idusuarios from usuarios where usuario = '$usuario');" ;
		
		$actualizar_sala=mysqli_query ($conexion, $actualizar_sala) or die ("Problema en el select".mysqli_error($conexion));

			header("Location: partida.php");

 ?>