<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<link rel=stylesheet href=sala_estilo.css>

	<div class="principal_sala">
		<div class="titulo"><h1>Jugadores en la sala</h1></div>
		<?php
		session_start();

		$salas ="
		<div class='sala'>
			<h3>Jugador: ".$_SESSION['usuario']."</h3>
		</div>
		<div class='sala'>
			<h3>Jugador:</h3>
		</div>
		<div class='sala'>
			<h3>Jugador:</h3>
		</div>
		<div class='sala'>
			<h3>Jugador:</h3>
		</div>
		<div class='sala'>
			<h3>Jugador:</h3>
		</div>

		<form action='nueva_sala.php' method='post'>
			<input id='volver' class='volver' type='submit' value='volver'>
		</form>
		";

		echo $salas;

		?>
	</div>

</body>
</html>