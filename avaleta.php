<?php

	$id_aval = $_REQUEST["id_aval"];

	if(!empty($id_aval))
	{
		$sql = "delete from avaliacao where id_aval = $id_aval";

		$host = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "gelato";

		$c = mysqli_connect($host,$usuario,$senha);
        $c2 = $c;
		if(!$c2)
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


		$resp = mysqli_query($c,$sql);

		if(!$resp)
		{
			echo "erro na consulta $sql";
			echo mysqli_error($c);
			mysqli_close($c);
			die();
		}
		else
		{
			header("location: avalista.php");
		}
	}	
	else
	{
		echo "ID não informado";		
	}
