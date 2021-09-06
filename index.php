<!DOCTYPE html>
<html>
	<head>
		<title>Hello world</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>	
	<body class="fondo">
	<div class="modal-content text-center center">
    		<div class="modal-content center">
		<h1 class="color-violeta">HELLO WORLD DESDE HTML</h1>
		<?php
			echo("<h1 class=\"color-mar\">HELLO WORLD DESDE PHP<h1>");
		?>
		<h3 id="saludo" name="saludo">Salida: Hola usuario</h3>
		<input type="text" placeholder="Ingresa tu nombre (Nombre)" id="nombre" name="nombre">
		<button id="boton" name="boton" class="colorbc-violeta color-gray" type="button" onclick ="ingresarNombre()">
			INGRESAR
		</button></p>
		<img src="imagen.jpeg">
		</div>
		<a href="calculadora.php">Ir a la calculadora</a>
	</div>		
	<script type="text/javascript" src="script.js"></script>
	<div class="a-footer">
    		<p>COPYRIGHT © UNIVERSIDAD SAN CARLOS DE GUATEMALA </p>
	</div>
	</body>
	
 
</html>


