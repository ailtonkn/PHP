<?php  include_once 'lock.php';

if (!isset($_GET['id_filmes']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_filmes = $_GET['id_filmes'];

	include_once '../database/filmes.dao.php';

	$result = deletar_filme($id_filmes);

	if ($result)
	{
		header('location:index.php?msg=filmedeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}


?>