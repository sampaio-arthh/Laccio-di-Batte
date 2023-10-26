<?php

	// CRUD - Create, Retrieve, Update, Delete

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "agenda";

	$c = mysqli_connect($host,$usuario,$senha);

	if(!$c)
	{
		echo "erro na conexão";
		echo mysqli_error($c);
		die();
	}

	if(!mysqli_select_db($c,$banco))
	{
		echo "erro no select_db";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}

	$sql = "select * from contato";

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
		while($linha)
		{
			echo "<div style=\"padding:10px;margin:5px;border:2px blue dashed;\">";
			echo "Id contato: <b>{$linha["id_contato"]}</b><br>";
			echo "Nome: <b>{$linha["nome"]}</b><br>";
			echo "Email: <b>{$linha["email"]}</b><br>";
			echo "Telefone: <b>{$linha["telefone"]}</b><br>";
			echo "<a href=\"contato-atualiza.php?id_contato={$linha["id_contato"]}\">Edita</a>";
			echo " | ";
			echo "<a href=\"contato-delete.php?id_contato={$linha["id_contato"]}\">Deleta</a>";
			echo "</div>";
			$linha = mysqli_fetch_assoc($resp);
		}
	}
	else
	{
		echo "tabela vazia";
	}
	echo "<a href=\"contato-inclui.php\">Inclui</a>";

	mysqli_free_result($resp);
	mysqli_close($c);


