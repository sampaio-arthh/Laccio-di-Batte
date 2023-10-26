<?php

	$id_contato = $_REQUEST["id_contato"];

	if(!empty($id_contato))
	{
		$sql = "delete from contato where id_contato = $id_contato";

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
			// Redirect: Volta para a página contato-lista.php
			header("location: contato-lista.php");
		}
	}	
	else
	{
		echo "ID não informado";		
	}
