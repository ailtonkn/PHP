<?php include_once 'lock.php';
// se o form de edição nao foi enviado ou se algum campo estiver em branco
if (!isset($_POST['salvar']) || empty($_POST['genero']) || empty($_POST['titulo']) || empty($_POST['imdb']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_filmes = $_POST['id_filmes'];
	$genero	  = $_POST['genero'];
	$titulo    = $_POST['titulo'];
	$imdb  = $_POST['imdb'];

	include_once '../database/filmes.dao.php';

	$result = editar_filmes($id_filmes, $genero, $titulo, $imdb);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}


?>