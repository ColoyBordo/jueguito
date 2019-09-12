<?php session_start();  ?>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<STYLE type="text/css">
 BODY {text-align: center}
</STYLE>
</head>
<body>
<form action="pagina2.php" method="post">
<H1 align="center"></H1>
<br>
Ingrese nombre de usuario:
<input type="text" name="campousuario"><br>
Ingrese clave     :
<input type="password" name="campoclave"><br>
<a href="registro.php">Registrate aqui </a><br>
<input type="submit" value="confirmar">
</form>
<?php
echo $_SESSION['usuarioContra_incorrectos'];
$_SESSION['usuarioContra_incorrectos']='';

 ?>
</body>
</html>
