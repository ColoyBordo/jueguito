<?php
	session_start();

	$conexion=mysqli_connect("localhost:3307","root","")or
		die ("Problema con la conexion");
		mysqli_select_db($conexion,"phpmyadmin");


		$usuario = $_SESSION['usuario'];

		$actualizar_sala = "update partida SET estado = 'jugando', idjugador2 =  (select idusuarios from usuarios where usuario = '$usuario');" ;

		$actualizar_sala=mysqli_query ($conexion, $actualizar_sala) or die ("Problema en el select".mysqli_error($conexion));

			header("Location: partida.php");

 ?>
