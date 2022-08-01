<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - for - Exemplo 01</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - for - Exemplo 01</h1>

	<?php include_once 'menu.php' ?>

	<h4>
		Mostrar na tela todos os valores pares dentro do intervalo entre 1 e 50.
		Para tanto, utilize o laço de repetição <i>For</i>.
	</h4>

	<h3>Resultado:</h3>

	<?php 

	for ($cont=1; $cont <=50; $cont++) 
	{ 
		// um valor é par quando o resto da divisão dele for igual a 0
		// MOD - %: operador que pega o resto inteiro de uma divisão
		// Ex:
		// $x = 3 / 2; // o valor de $x será 1.5
		// $x = 3 % 2; // o resto da divisão de 3 por 2 = $x valerá 1

		// verificar se o valor do contador é par
		if ($cont % 2 == 0)
		{
			echo $cont . "<br>";
		}
	}


	




	 ?>



</body>
</html>