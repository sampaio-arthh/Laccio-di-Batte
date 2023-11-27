<?php

$id_aval = $_REQUEST["id_aval"];
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

$sql = "select * from avaliacao where id_aval = $id_aval";

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
    $id = $linha["id_aval"];
    $sabor = $linha["sabor"];
    $tempo = $linha["tempo"];
    $sistema = $linha["sistema"];
    header("location: avalia2.php?id_aval=$id_aval");
}
else
{
    echo "Não encontrado";
}

mysqli_free_result($resp);
mysqli_close($c);

?>