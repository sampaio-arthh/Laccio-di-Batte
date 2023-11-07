<?php
session_start();
$id_pedido = $_REQUEST["id_pedido"];
$sabor1 = $_REQUEST["sabor1"];
$sabor2 = $_REQUEST["sabor2"];
$sabor3 = $_REQUEST["sabor3"];
$tipo = $_REQUEST["tipo"];
$_SESSION["id_p"] = $id_pedido;

if ($tipo == "g") {
    $sabor4 = $_REQUEST["sabor4"];
}
else {
    $sabor4 = "N";
}

if(empty($id_pedido)) {
		$sql = "insert into pedido(tipo,sabor1,sabor2,sabor3,sabor4) values ('$tipo','$sabor1','$sabor2','$sabor3','$sabor4')";
}
else
{
		// Alteração
		$sql = "update pedido set tipo = '$tipo', sabor1 = '$sabor1', sabor2 = '$sabor2', sabor3 = '$sabor3', sabor4 = 'sabor4' where id_pedido = $id_pedido";
}

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

$resp = mysqli_query($c, $sql);
if(empty($id_pedido)) {
	$_SESSION["id_p"] = mysqli_insert_id($c);
}

if(!$resp)
{
	echo "erro na consulta $sql";
	echo mysqli_error($c);
	mysqli_close($c);
	die();
}
else
{
	header("location: info.php");
}
?>