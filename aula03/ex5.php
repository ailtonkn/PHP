<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 05</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Exercício 05</h1>

	<?php include_once "menu.php"; ?>

	<h3>Calcular a média final de um aluno com base nas suas 4 notas bimestrais.</h3>

	<form action="ex5.php" method="post">
		

		<p>
			<label>Nota 1° Bimestre</label><br>
			<input type="number" name="nota1" step="0.1" required>
		</p>

		<p>
			<label>Nota 2° Bimestre</label><br>
			<input type="number" name="nota2" step="0.1" required>
		</p>

		<p>
			<label>Nota 3° Bimestre</label><br>
			<input type="number" name="nota3" step="0.1" required>

		</p>

		<p>
			<label>Nota 4° Bimestre</label><br>
			<input type="number" name="nota4" step="0.1" required>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>


	</form>

	<?php 
	if (isset($_POST['calcular'])) 
	{
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];
		$nota3 = $_POST['nota3'];
		$nota4 = $_POST['nota4'];

		$media_final = ($nota1 + $nota2 + $nota3 + $nota4)/4;

		echo "<h4>Sua média final é $media_final.";

		// code...
	}




	 ?>

</body>
</html>