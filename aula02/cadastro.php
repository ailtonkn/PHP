<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 02 - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>
	<h1>Aula 02 - Cadastro</h1>

	<?php include_once 'menu.php';; ?>

	<h2>Cadatro Pessoal</h2>

	<form action="resposta.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			 <input type="text" name="nome" maxlength="40">
		</p>

		<p>
			<label>Idade:<</label><br>
			 <input type="number" name="idade" min="18" max="120">
		</p>

		<p>
			<label>E-mail:</label><br>
			 <input type="email" name="email" maxlength="40">
		</p>

		<p>
			<button>Enviar</button>
			<button>Resetar</button>
		</p>



	</form>
</body>
</html>