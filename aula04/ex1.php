<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 04 - exercício 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

	<h1>Aula 04 - Exercício 01</h1>

	<?php include_once "menu.php"; ?>

	<h3>
		Faça um algoritmo que leia o nome de uma pessoa e a sua altura. Leve em 
		consideração que a altura será lida em centímetros, por exemplo 177 e não 1,77. 
		Com base na altura deve ser dada uma mensagem dizendo se a pessoa é de 
		estatura “Baixa”, “Média” ou “Alta”.

	</h3>

	<form action="ex1.php" method="post">
		
		<p>
			<label>Informe seu nome:</label><br>
			<input type="text" name="nome" maxlength="50" required>
		</p>

		<p>
			<label>Informe sua altura:</label><br>
			<input type="number" name="altura" min="1" required>
		</p>

		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>

		<p>
			<button type="submit" name="calcular">Calcular</button>
		</p>


	</form>

	<?php 

	// verificar se o botão 'enviar' foi submetido (ou seja, o formulário foi enviado)

	if (isset($_POST['enviar'])) 
	{
		// armazenar os dados do formulário nas respectivas variáveis
		$nome =  $_POST['nome'];
		$altura = $_POST['altura'];

		/* Operadores Lógicos no PHP
		E - &&
		OU - || 
		NÃO - !
		*/

		// VERIFICAR A ALTURA
		if ($altura >= 1 && $altura <= 159) 
		{
			$estatura = "baixa";
		}

		else if ($altura >= 159 && $altura <= 172) 
		{
			$estatura = "média";
			// code...
		}

		else
		{
			$estatura = "alta";

		}

		echo "<p>$nome, você tem $altura cm de altura, logo, sua estatura é $estatura</p>";


		}





	 ?>

</body>
</html>