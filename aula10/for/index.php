<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 10 - For Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<h1>Aula 10 - Laço for</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Laço For</h2>

	<p>
		O laço de repetição <i>For</i> é o laço mais utilizado na programação. usamos este laço quando sabemos quantas veses o comando precisa ser executados.
	</p>

	<p>
		Ex: percorrer todos os valores dentro do intervalo estre 1 e 50, e mostrar na tela apenas os valores pares. Neste caso, sabemos que o laço precisará percorrer 50 valores, ou seja, irá executar 50 vezes. O valor inicial do contador de execução, para este exemplo, é 1; enquanto que o valor final será 50. No momento em que o contador de execução estiver valendo 51, a condição de execução do laço não será mais verdadeira (pois ele deve executar os comandos até o contador valer 50). A partir deste ponto, o laço deixará de ser  executado. 
	</p>

	<h3>Sintaxe:</h3>
	<p class="code">
		for (valor inicial do contador; condição de execução; valor de incremento/decremento do contador) <br>
		{ <br>
			<span class="tab"><- comandos -></span><br>
		}
	</p>

	<p>
		<b>Onde:</b>
		valor inicial do contador: variável de controle de execuções do laço, que deverá receber um valor para iciciar a exeucução; <br>
		condição de execução: como o nome sugere, é a condição par aque o laço continue executando; <br>
		incremento/decremento do contador: é necessário para que o laço execute um número finito de vezes. Sem este valor, o laço executará infinitamete.
	</p>


</body>
</html>