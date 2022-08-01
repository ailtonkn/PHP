<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Home</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<h1>Aula 03 - Home</h1>

	<?php include_once'menu.php'; ?>

	<p>
		Esta é a página principal. <br>
		Utilize o menu acima para navegar estre as páginas.

	</p>

	<?php 

	// verificar se esdta pagina recebeu o parametro origem
	if (isset($_GET['origem'])) 
	{

		$origem = $_GET['origem'];

		echo "<h4>você chegou nesta pagina através da $origem</h4>";
		// code...
	}


	 ?>

</body>
</html>