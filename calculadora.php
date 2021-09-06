<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	</head>
	<body class="fondo">
	<div class="modal-content text-center center">
    		<div class="modal-content center">
			<h1>Calculadora</h1>
			<form action="resultado.php" method="post">
				<select name="operador">
				<option value="suma">+</option>
				<option value="resta">-</option>
				<option value="multiplicacion">*</option>
				<option value="division">/</option>
				</select>
				<br>
				
				<input placeholder="numero 1" type="number" required name="valor1"><br/>
				<input placeholder="numero 2" type="number" required name="valor2"><br/>
				<input type="reset" class="colorbc-violeta color-gray" value="BORRAR">
				<input type="submit" class="colorbc-mar color-gray" value="CALCULAR">
			</form>			
		</div>
		<a href="index.php">Ir a la pagina principal</a>
	</div>
		
	</body>
	
</html>


