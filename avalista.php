<?php

	// CRUD - Create, Retrieve, Update, Delete

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "gelato";

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

	$sql = "select * from avaliacao";

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
			if ($linha["id_aval"] == 0) {
				$linha = mysqli_fetch_assoc($resp);
			}
			echo "<div style=\"padding:10px;margin:5px;border:2px blue dashed;\">";
			echo "Número Avaliação: <b>{$linha["id_aval"]}</b><br>";
			echo "Nota Sabor: <b>{$linha["sabor"]}</b><br>";
			echo "Nota Tempo: <b>{$linha["tempo"]}</b><br>";
			echo "Nota Sistema: <b>{$linha["sistema"]}</b><br>";
			echo "<a href=\"avalia-atualiza.php?id_aval={$linha["id_aval"]}\">Edita</a>";
			echo " | ";
			echo "<a href=\"avalia-delete.php?id_aval={$linha["id_aval"]}\">Deleta</a>";
			echo "</div>";
			$linha = mysqli_fetch_assoc($resp);
		}
	}
	else
	{
		echo "Não há pedidos registrados";
	}
	echo "<a href='index.php'>Início</a>";

	mysqli_free_result($resp);
	mysqli_close($c);


