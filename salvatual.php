<?php
session_start();
$id_aval = $_REQUEST["id_aval"];
$sabor = $_REQUEST["sabor"];
$tempo = $_REQUEST["tempo"];
$sistema = $_REQUEST["sistema"];

$host = "localhost";
$user = 'root';
$pass = "";
$bd = "gelato";

$c = mysqli_connect($host, $user, $pass);
$c2 = $c;

if (!$c2) {
    echo "Erro na conexão";
    echo mysqli_error($c);
}

$con_table = mysqli_select_db($c, $bd);

if (!$con_table) {
    echo "Erro no select_db";
    echo mysqli_error($c);
    mysqli_close($c);
}

$answ = "UPDATE  avaliacao set  sabor = $sabor, tempo = $tempo, sistema = $sistema WHERE id_aval = $id_aval";
$resp = mysqli_query($c, $answ);
if (!$resp) {
    echo mysqli_error($c); 
}
else {
    header("location: avalista.php");
}


