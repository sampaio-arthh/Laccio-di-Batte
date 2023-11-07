<?php

$id_avaliacao = "";
$tempo = "";
$sabor = "";
$sistema = "";

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "gelato";

$c = mysqli_connect($host,$usuario,$senha);
$c2 = $c;

if(!$c2)
{
	echo "Desculpe, erro na conexão";
	echo mysqli_error($c);
	die();
}

if(!mysqli_select_db($c,$banco))
{
	echo "Desculpe, erro no 'select_db'";
	echo mysqli_error($c);
	mysqli_close($c);
	die();
}

?>