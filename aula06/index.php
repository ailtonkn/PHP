<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício Avaliativo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Exercício Avaliativo</h1>
	<?php include_once 'menu.php' ?>

	<form action="cadastro.php" method="post">

		<p>
			<label>NOME DO APARELHO:</label><br>
			<input type="text" name="nome"  required>
		</p>

		<p>
			<label>CONSUMO MÁXIMO EM WATTS:</label><br>
			<input type="number" name="consu_horas" min="1" required>
		</p>

		<p>
			<label>NUMERO DE HORAS QUE O APARELHO É LIGADO POR DIA:</label><br>
			<input type="number" name="horas_dias" min="0" max="24" required>
		</p>

		<p>
			<label>NUMERO DE HORAS QUE FICARÁ LIGADO POR MÊS:</label><br>
			<input type="number" name="horas_mes" min="0" max="31" required>
		</p>

		<P>
			<label>VALOR DO KILOWATT-HORA:</label><br>
			<input type="number" name="valor_kilohoras" min="0" step="0.01" required>
		</P>

		<p>
			<button type="submit" name="cadastrar">Cadastrar</button>
		</p>
		
	</form>

</body>
</html>