<?php
$tempo = $_REQUEST["tempo"];
$sabor = $_REQUEST["sabor"];
$sistema = $_REQUEST["sistema"];
$id_avaliacao = $_REQUEST["id_aval"];

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

$ans = mysqli_query($c, "SELECT id_aval from avaliacao where id_aval = $id_avaliacao");
$cont=0;
$fet = mysqli_query($c, "SELECT * from avaliacao");
$dado = mysqli_fetch_assoc($fet);
while ($dado) {
	if ($dado["id_aval"] == $id_avaliacao) {
		$cont+=1;
	}
	$dado = mysqli_fetch_assoc($fet);
}

if ($cont != 0) {
	header("location: avalia.php?e=1");
}
else {
	$sql = "insert into avaliacao(id_aval,tempo,sabor,sistema) values ('$id_avaliacao','$tempo','$sabor','$sistema')";
	$resp = mysqli_query($c, $sql);

	if(!$resp){
		echo "Desculpe, erro na consulta $sql";
		echo mysqli_error($c);
		mysqli_close($c);
		die();
	}
	else{
		header("location: index.php");
	}
}