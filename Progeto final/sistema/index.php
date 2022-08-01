<?php include_once 'lock.php';
include_once '../database/filmes.dao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css../estilo.css">
	<title>Projeto Final - Area Restrita</title>
</head>
<body class="container-fluid">

	<h1>filmeSystem - Área Restrita</h1>

	<p>
		<a href="logout.php" class="btn btn-primary btn-sm">Sair do sistema</a>
	</p>

	<?php  

	if (isset($_GET['msg']))
	{
		include_once '../util.php';
		echo validar_msg($_GET['msg']);
	}
	?>

	<h3>Cadastrar filme:</h3>

	<div class="col-5">
		<form action="cadastrar.php" method="post">
			
			<p>
				<label class="form-label">Genero</label><br>
				<input type="text" name="genero" required class="form-control">
			</p>

			<p>
				<label class="form-label">Titulo</label><br>
				<input type="text" name="titulo" required class="form-control">
			</p>

			<p>
				<label class="form-label">Imdb</label><br>
				<input type="text" name="imdb" required class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar" class="btn btn-outline-primary">Salvar</button>
			</p>

		</form>
	</div>

	<h2>Filmes Cadastrados</h2>

	<?php  

	echo exibir_filmes();

	?>

</body>
</html>