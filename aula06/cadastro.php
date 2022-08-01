<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulário</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include 'menu.php'; ?>

	<h1>Resultado formulário dos aparelhos</h1>

	<?php 
		

		if (isset($_POST['cadastrar'])) 
		{
			$nome = $_POST['nome'];
			$consu_horas = $_POST['consu_horas'];
			$horas_dias = $_POST['horas_dias'];
			$horas_mes = $_POST['horas_mes'];
			$valor_kilohoras = $_POST['valor_kilohoras'];

			$consu_diario = ($consu_horas/1000) * $horas_dias;
			$consu_mensal = $horas_dias * 30;
			$consu_reais = $horas_mes * $valor_kilohoras;

			if ($consu_reais <= 5) 
			{
				$consumo = "Baixa";
			}
			else if ($consu_reais <= 10)
			{
				$consumo = "Moderada";
			}
			else if ($consu_reais > 10)
			{
				$consumo = "Elevada";
			}

			
			$consu_diario = number_format($consu_diario, "2");
			$consu_mensal = number_format($consu_mensal, "2");
			$consu_reais = number_format($consu_reais, "2", ",", ".");

			echo "Nome do aparelho: $nome <br>";
            echo "Consumo Máximo em horas: $consu_horas<br>"; 
            echo "Horas do aparelho ligado por dia: $horas_dias <br>";
            echo "Horas do aparelho ligado no mês: $horas_mes horas <br>";
            echo "Valor do kilowatts-hora: $valor_kilohoras <br>";

            echo "<br><h4>Consumo diário do aparelho: $consu_diario Kwh.</h4>";  
            echo "<h4>Consumo mensal do aparelho: $consu_mensal Kwh.</h4>";
            echo "<h4>Consumo do aparelho em Reais: R\$$consu_reais.</h4>";
            echo "<h4>Categoria de consumo: $consumo.</h4>";


		}









	 ?>

	

</body>
</html>