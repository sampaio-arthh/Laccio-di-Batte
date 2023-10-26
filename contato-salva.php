<?php

$id_contato = $_REQUEST["id_contato"];
$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$telefone = $_REQUEST["telefone"];

if(empty($id_contato))
{
	// Inclusão
	$sql = "insert into contato(nome,email,telefone) values ('$nome','$email','$telefone')";
}
else
{
	// Alteração
	$sql = "update contato set nome = '$nome', email = '$email', telefone = '$telefone' where id_contato = $id_contato";
}

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


$resp = mysqli_query($c, $sql);

if(!$resp)
{
	echo "erro na consulta $sql";
	echo mysqli_error($c);
	mysqli_close($c);
	die();
}
else
{
	// Redirect
	header("location: contato-lista.php");
}


