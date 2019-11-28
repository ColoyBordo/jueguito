<?php
	session_start();

	$conexion=mysqli_connect("localhost:3307","root","")or
		die ("Problema con la conexion");
		mysqli_select_db($conexion,"phpmyadmin");


		$usuario = $_SESSION['usuario'];

		$crear_sala = "insert into partida  (estado, idjugador1) select 'espera', idusuarios from usuarios where usuario = '$usuario';" ;
		$_SESSION['idsala'] = mysql_insert_id();
		$crear_sala=mysqli_query ($conexion, $crear_sala) or die ("Problema en el select".mysqli_error($conexion));

		header("Location: nueva_sala.php");

?>
