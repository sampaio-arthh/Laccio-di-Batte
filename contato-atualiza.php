<?php

	$id_contato = $_REQUEST["id_contato"];
	
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "agenda";

	$c = mysqli_connect($host,$usuario,$senha);

	if(!$c)
	{
		echo "erro na conexão";
		echo mysql_error();
		die();
	}

	if(!mysqli_select_db($c,$banco))
	{
		echo "erro no select_db";
		echo mysql_error();
		mysql_close($c);
		die();
	}

	$sql = "select * from contato where id_contato = $id_contato";

	$resp = mysqli_query($c, $sql);

	if(!$resp)
	{
		echo "erro na consulta $sql";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}

	$linha = mysqli_fetch_assoc($resp);
	if($linha)
	{
		$nome = $linha["nome"];
		$email = $linha["email"];
		$telefone = $linha["telefone"];
		include "contato-form.php";
	}
	else
	{
		echo "Nao encontrado";
	}

	mysqli_free_result($resp);
	mysqli_close($c);

