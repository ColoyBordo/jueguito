<html>
<head>
<title>Login</title>
<link rel="shortcut icon" href="img/logo_juego5.png" />
</head>
<body>
	<link rel=stylesheet href=login_registro.css>
	<div class="contenedor_login">

<form action="proceso_login.php" method="post">
<br>

	<img id="logo_juego" src="img/logo_juego4.png"><br><br><br>

	<div class="formulario_login">

Usuario:
<input type="text" name="campousuario"><br>

Clave:
<input type="password" name="campoclave"><br>
<br>
<input type="submit" value="confirmar">
</div> <br><br>

<?php
	session_start();
	
	if (strlen($_SESSION['usuarioContra_incorrecto']) < 1) {
	echo "<div class='error_login2'></div>";
	} else {
	echo "<div class='error_login'>";
	echo $_SESSION['usuarioContra_incorrecto'];
	echo "</div>";
	}

	$_SESSION['usuarioContra_incorrecto']= null;
	?>
	<br>

<div class="noEstoyRegistrado"><a href="registro.php">Registrarme</a>
	</div>
	
	</div>
</form>
</body>
</html>
