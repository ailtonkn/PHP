<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Projeto Final - Home</title>
</head>
<body class="container-fluid">

	<h1>Projeto Final - FilmeSystem</h1>

	<?php  

	if (isset($_GET['msg']))
	{
		include_once 'util.php';
		echo validar_msg($_GET['msg']);
	}
	?>

	<h2>Utilize o formulário abaixo para entrar no sistema</h2>

	<form action="validar.php" method="post">

		<p>
			<label>Usuário:</label><br>
			<input type="text" name="usuario" required>
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha" required>
		</p>

		<p>
			<button type="submit" name="entrar" class="btn btn-outline-primary">Entrar</button>
		</p>
		
	</form>

</body>
</html>