<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<link rel=stylesheet href=tienda.css>

	<div class="cont_titulo">
		<h1 class="titulo">Bienvenido a la tienda</h1>
	</div>

	<div class="tienda">
		<form action="compra.php" method="post" name="compra">
		<?php

		$conexion=mysqli_connect("localhost:3307","root","")or
		die ("Problema con la conexion");
		mysqli_select_db($conexion,"phpmyadmin");

		$consulta_objeto = "select nombre, tipoobjeto, costo, imagenObjeto from objetos;";

		$consulta_objeto=mysqli_query ($conexion, $consulta_objeto) or die ("Problema en el select".mysqli_error($conexion));



    	while($row = mysqli_fetch_array($consulta_objeto)) {
		?>
		<div class="objeto">
			<p id="nombreobj"><?php echo $row['nombre'];?></p>
			<p>Tipo: <?php echo $row['tipoobjeto'];?></p>
			<img src="img/<?php echo $row['imagenObjeto'];?>">
			<p id="costo"><?php echo $row['costo'];?></p><img id="coin" src="img/imgObjeto/coin.png" height="60px" width="60px"><input id="check" type="checkbox" name="obj1" value="Comprar">
		</div>

		<?php
}
		?>
		</div>
			<input id="comprar" class="comprar" type="submit" value="Comprar">
		</form>



	<div class="volver">
		<form action="menu_juego.php" method="post">
			<input id="volver" class="volver" type="submit" value="volver">
		</form>
	</div>


</body>
</html>
