<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercício</title>
	<link rel="stylesheet" type="text/css" href="css/eslilo.css">
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

	<?php 

	if (isset($_POST['calcular'])) 
	{
		$nome = $_POST ['nome']
		$horas = $_POST['horas']
		$valor_horas = $_POST['valor_horas']
		$sal_bruto = $horas * $valor_horas


		if ($sal_bruto <= 1372.81) 
		{
			$ir = 0;
		}
		else if($sal_bruto >= 1372.82 && <=2743.25)
		{
			$ir = $sal_bruto + (15/100);
		}

		else if ($sal_bruto > 2743.26 ) 
		{
			$ir = $sal_bruto + (27.5/100);
		}

		if ($sal_bruto <= 868.29)
		{
			$inss = $sal_bruto + (8/100);
		}
		else if($sal_bruto >= 868.30 && <=1447.14)
		{
			$inss = $sal_bruto + (9/100);
		}

		else if ($sal_bruto => 1447.15 && <= 2894.28) 
		{
			$inss = $sal_bruto + (11/100);
		}

		else($sal_bruto > 2894.28)
		{
			$inss = $sal_bruto + 318.37;
		}

		$sal_liq = $sal_bruto - $ir - $inss;
		$fgts = $sal_bruto - (8/100);

	





	 ?>


</body>
</html>