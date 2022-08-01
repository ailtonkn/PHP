<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - for - Exemplo 02</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

	<h1>Aula 10 - for - Exemplo 02</h1>

	<?php include_once 'menu.php' ?>

	<h4>
		Mostrar a quantidade de valores impares dentro do intervalo entre -10 e 57. Para tanto, utilize o laço <i>For</i>
	</h4>

	<h3>Resultado:</h3>

	<?php 

	$qtde = 0; // contador de valores ímpares (inicialmente é zero)

	for ($cont= -10; $cont <=57 ; $cont++) 
	{ 

		// verificar se o valor atual do contador é impar:
		if ($cont % 2 != 0) 
		{
			$qtde++; // incremento uma unidade no valor de $qtde
		}
	} // quando a condição de execução for falsa, o program continuará a 
	  // execução de qualquer comando que exista abaixo das chaves do fors

	  echo "Quantidade de valores impares entre -10 e 57 é = $qtde";
	   
	?>



</body>
</html>