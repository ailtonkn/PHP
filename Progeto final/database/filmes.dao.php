<?php  
include_once 'conn.php';

// função para salvar filme
function salvar_filmes($genero, $titulo, $imdb)
{
	$conn = conectar();

	$sql = "INSERT INTO catalogo_db (genero, titulo, imdb) 
	VALUES ('$genero', '$titulo', '$imdb')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

// função para buscar todos os filmes
function buscar_filmes()
{
	$conn = conectar();

	$sql = "SELECT * FROM catalogo_db";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para exibir filmes
function exibir_filmes()
{
	$result = buscar_filmes();

	// se o valor de result for nulo, retornamos uma mensagem de erro
	if ($result == null)
	{
		$retorno = '<h3>Não há filmes cadastrados</h3>';
	}
	else // senão (há, ao menos, um filme para exibir)
	{
		$retorno = '<div class="col-6">';
		$retorno .= '<table class="table table-hover">';
		// montar a primeira linha da tablea
		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>'; // coluna de cabeçalho = th = table header
		$retorno .= '<th>genero</th>';
		$retorno .= '<th>sinopse</th>';
		$retorno .= '<th>imdb</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

		while ($filme = mysqli_fetch_assoc($result))
		{
			// dentro deste laço, montaremos novas linhas para a tabela:
			$retorno .= '<tr>';
			// coluna simples da tabela = td = table data
			$retorno .= "<td>" . $filme['id_filmes'] . "</td>";
			$retorno .= "<td>" . $filme['genero']   . "</td>";
			$retorno .= "<td>" . $filme['titulo']    . "</td>";
			$retorno .= "<td>" . $filme['imdb']  . "</td>";
			$retorno .= "<td>" . link_deletar($filme['id_filmes']) . "</td>";
			$retorno .= "<td>" . link_editar($filme['id_filmes'])  . "</td>";
			$retorno .= '</tr>'; // fim da linha da tabela
		}

		$retorno .= '</table>';
		$retorno .= '</div>';
	}

	return $retorno;
}

// função para montar o link de exclusão
function link_deletar($id_filmes)
{
	$link = '<a href="deletar.php?id_filmes='.$id_filmes.'" 
	onclick="return confirm(\'Tem certeza que deseja excluir este filme?\')" class="btn btn-danger">Deletar</a>';

	return $link;
}

// função para montar o linl para editar
function link_editar($id_filmes)
{
	$link = '<a href="editar.php?id_filmes='.$id_filmes.'" class="btn btn-warning">Editar</a>';
	return $link;
}

// função para deletar filme
function deletar_filme($id_filmes)
{
	$conn = conectar();

	$sql = "DELETE FROM catalogo_db WHERE id_filmes = $id_filmes";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

// função para buscar um filme específico
function buscar_filme($id_filmes)
{
	$conn = conectar();

	$sql = "SELECT * FROM catalogo_db WHERE id_filmes = $id_filmes";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

// função para editar (atualizar) dados do filme
function editar_filme($id_filmes, $genero, $titulo, $imdb)
{
	$conn = conectar();

	$sql = "UPDATE catalogo_db SET genero = '$genero', titulo = '$titulo', imdb = '$imdb' 
	WHERE id_filmes = $id_filmes";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

?>