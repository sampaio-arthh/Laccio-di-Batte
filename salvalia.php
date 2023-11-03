<?php
$id_avaliacao = $_REQUEST("id_avaliacao");
$tempo = $_REQUEST("tempo");
$sabor = $_REQUEST("sabor");
$sistema = $_REQUEST("sistema");
$opinion = $_REQUEST("opinion");

if(empty($id_avaliacao)) {
    $sql = "insert into avaliacao(tempo,sabor,sistema,opinion) values ('$tempo','$sabor','$sistema','$opinion')";
}
else
{
    // Alteração
    $sql = "update avaliacao set tempo = '$tempo', sabor = '$sabor', sistema = '$sistema', opinion = '$opinion' where id_avaliacao = $id_avaliacao";
}

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

$resp = mysqli_query($c, $sql);

if(!$resp)
{
	echo "Desculpe, erro na consulta $sql";
	echo mysqli_error($c);
	mysqli_close($c);
	die();
}
else
{
	header("location: index.php");
}

?>