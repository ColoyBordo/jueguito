<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel=stylesheet href=menu.css>

	<div class="bienvenido">
	<?php 
	session_start();

		$bienvenido ="
			<h3>!Bienvenido ".$_SESSION['usuario']."¡</h3>
			";
			echo $bienvenido;
	?>
	</div>

	<div class="menu">
<div class="titulo"><h2 class="texto_menu">Menu</h2></div>

<form action="nueva_sala.php" method="post">
	<input id="nueva_partida" type="submit" value="Nueva Partida">
</form>

<form action="nuevo_personaje.php" method="post">
	<input id="nuevo_personaje" type="submit" value="Nuevo Personaje">
</form>

<form action="tienda.php" method="post">
	<input id="tienda" type="submit" value="Tienda">
	<!-- <input id="tienda" type="image" src="img/logo_juego2.png" width="5" height="2" value="Tienda"> -->
</form>

<form action="index.php" method="post">
	<input id="salir" type="submit" value="Salir">
</form>

	</div>

</body>
</html>