<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Exercício 01</h1>

	<?php include_once 'menu.php'; ?>

	<h3>
		
		Calcule o almento que será dado a um funcionário, obtendo do usuario as seguintes informaçãoes: salário atual e a porcentagem de almento. Apresentar o novo valor de salário e o valor do almento.
	</h3>

	<form action="ex01.php" method="post">
		
		<p>
			<label>Salário atual:</label> <br>
			<input type="number" name="salario" min="800" max="10000" step="0.01" required>
		</p>

		<p>
			<label>Pocentagem de almento:</label> <br>
			<input type="number" name="porcentagem" min="1" max="100" step="0.1">
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>

	</form>

	<?php 

	//verificar se o formulario foi enviado
	if (isset($_POST['calcular'])) 
	{
		//receber dados do formulario e armazenar nas respectivas variáveis
		$salario = $_POST['salario'];
		$porcentagem = $_POST['porcentagem'];

		// processamento
		$aumento = $salario *($porcentagem/100);
		$salario_final = $salario + $aumento;

		//saída de dados
		echo "<h4>Seu  salário final é de R\$ $salario_final. Você teve um almento de R\$ $aumento</h4>";
		// code...
	}

	 ?>

</body>
</html>