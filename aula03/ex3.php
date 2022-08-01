<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Exercício 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

	<h1>Exercício 03</h1>

	   <?php include_once "menu.php"; ?>

	<h3>Calcular a idade de uma pessoa, tendo em vista que a mesma irá digitar o ano
        do seu nascimento.</h3>

    <form action="ex3.php" method="post">
    		<p>
    			<label>Ano de nascimento:</label> <br>
    			<input type="number" name="ano_nasc" required>
    		</p>

    		<p>
    			<label>Ano atual:</label> <br>
    			<input type="number" name="ano_atual" required>
    		</p>

    		<p>
    			<button type="submit" name="calcular">Calcular</button>
    		</p>
    			
    		

    </form>

    <?php 

    if (isset($_POST['calcular'])) 
    {
    	$ano_nasc = $_POST['ano_nasc'];
    	$ano_atual = $_POST['ano_atual'];

    	$sua_idade = $ano_atual - $ano_nasc;

    	echo "<h4>Atualmente voçê está com $sua_idade anos de idade.";
    	// code...
    }

	?>

</body>
</html>