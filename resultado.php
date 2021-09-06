<!DOCTYPE html>
<html>
	<head>
		<title>RESULTADO</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>
	<body class="fondo">
	<div class="modal-content text-center center">
    		<div class="modal-content center">
			<h1>Calculadora resultado</h1>
			<?php 
	
				if ($_POST["operador"] == "suma") {
					print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);		
				} elseif ($_POST["operador"] == "resta") {
					print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
				} elseif ($_POST["operador"] == "multiplicacion") {
					print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
				} elseif ($_POST["operador"] == "division") {
					print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
				}
				
			?>
		</div>
		<a href="calculadora.php">Ir a la calculadora</a>
	</div>		
	</body>
	
</html>



