<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Folha de pagamento</h1>

	<form action="pagamento.php" method="post">

		<p>
			<label>NOME DO FUNCIONÁRIO:</label><br>
			<input type="text" name="nome" maxlength="50" required>
		</p>

		<p>
			<label>NÚMERO DE HORAS TRABALHADAS:</label><br>
			<input type="number" name="horas" min="1" required>
		</p>

		<p>
			<label>VALOR DA HORA TRABALHADA:</label><br>
			<input type="number" name="valor_horas" min="10" step="0.01" required>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>
		
	</form>

</body>
</html>