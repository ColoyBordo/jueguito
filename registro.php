<html>
<head>
<title>Registro</title>
<link rel="shortcut icon" href="img_pj/mago_gif3.gif" />
</head>
<body>
	<link rel=stylesheet href=login_registro.css>
	<div class="contenedor_registro">

<form action="proceso_registro.php" method="post">
<br>

	<img id="logo_juego_r" src="img_pj/caballero.png"><br><br><br>

	<div class="formulario_registro"> 

Usuario:
<input type="text" name="campousuario"><br>

Mail:
<input type="text" name="campomail"><br>

Ingrese una clave:
<input type="password" name="campoclave"><br>

Confirme su clave:
<input type="password" name="campoclave2"><br>
<br>
<input type="submit" value="Registrar">
</div><br>
	
	<?php
	session_start();
	
	if (strlen($_SESSION['error_contraseña'])<1) {
	echo "<div class='error_contra2'></div>";
	} else {
	echo "<div class='error_contra'>";
	echo $_SESSION['error_contraseña'];
	echo "</div>";
	}
	$_SESSION['error_contraseña']= null;
	?>
	<br>

<div class="estoyRegistrado"><a href="index.php">Ya estoy registrado</a>
	</div>

	</div>
</form>
</body>
</html>
