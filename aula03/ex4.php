<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício - 04</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

	<h1>Exercício 04</h1>

	<?php include_once "menu.php"; ?>

	<h3>Calcular o consumo por litro de um carro, sendo que será informada a
        quantidade de quilômetros percorrido e a quantidade de litros abastecido
        (basta dividir a quilometragem percorrida pela quantidade de litros abastecida).</h3>


    <form action="ex4.php" method="post">
    	
    	<p>
    		<label>Quilômetros percorridos:</label> <br>
    		<input type="number" name="km_percorrido" step="0.1" required>
    	</p>

    	<p>
    		<label>Quantidade de litros abastecidos:</label> <br>
    		<input type="number" name="litros_abastecidos" step="0.1" required>
    	</p>

    	<p>
    		<button type="submit" name="calcular">Calcular</button>
    	</p>

    </form>

    <?php 

    if (isset($_POST['calcular'])) 
    {
    	$km_perc = $_POST['km_percorrido'];
    	$litros_abas = $_POST['litros_abastecidos'];

    	$consumo = $km_perc/$litros_abas;

    	
    
    	echo "<h4>O consumo do carro é exatamente $consumo por litro.</h4>";

    	// code...
    }




     ?> 
    





</body>
</html>