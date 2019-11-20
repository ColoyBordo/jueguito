<?php 
	session_start();

	$conexion=mysqli_connect("localhost","root","diciembre1999")or
		die ("Problema con la conexion");
		mysqli_select_db($conexion,"juegito_php_html");

	
		$usuario = $_SESSION['usuario'];

		$crear_sala = "insert into partida  (estado, idjugador1) select 'espera', idusuarios from usuarios where usuario = '$usuario';" ;
		
		$crear_sala=mysqli_query ($conexion, $crear_sala) or die ("Problema en el select".mysqli_error($conexion));

		header("Location: nueva_sala.php");

?>
