<?php  include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['genero']) || empty($_POST['titulo']) || empty($_POST['imdb']))
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$genero	 = $_POST['genero'];
	$titulo   = $_POST['titulo'];
	$imdb = $_POST['imdb'];

	include_once '../database/filmes.dao.php';

	$result = salvar_filmes($genero, $titulo, $imdb);

	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=errocadastro');
	}
}

?>