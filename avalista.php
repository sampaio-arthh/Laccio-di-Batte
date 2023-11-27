<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;1,300&family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <div class="top">
		<a href="index.html">
                <h2><b>Laccio di Batte</b></h2>
            </a>
            <div class="line-container">
                <h4>Sofia Werneck</h4>
                <div class="line"></div>
                 <div class="line"></div>
                 <h4>Arthur Sampaio</h4>
            </div>     
        </div>
</header>
<div class="main">
<?php

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
			echo "<div class='holder'>";
			echo "<div class='b-holder'>";
			echo "Número Avaliação: <b>{$linha["id_aval"]}</b><br>";
			echo "Nota Sabor: <b>{$linha["sabor"]}</b><br>";
			echo "Nota Tempo: <b>{$linha["tempo"]}</b><br>";
			echo "Nota Sistema: <b>{$linha["sistema"]}</b><br>";
			echo "<a href=\"avalia-atualiza.php?id_aval={$linha["id_aval"]}\">Edita</a>";
			echo " | ";
			echo "<a href=\"avaleta.php?id_aval={$linha["id_aval"]}\">Deleta</a>";
			echo "</div>";
			echo "</div>";
			$linha = mysqli_fetch_assoc($resp);
		}
	}
	else
	{
		echo "<h2>Não há pedidos registrados</h2>";
	}

	mysqli_free_result($resp);
	mysqli_close($c);

?>

</div>
<style>
	*{margin:0; padding:0; border:0;}
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Tilt+Neon&display=swap');
	.top {width: 100vw; display:flex; background-color: #94A684; height: 7vh; justify-content: space-between; align-items: center;}
	.top h2{margin:  0 0 0 2vw; color:#f2ce1a; font-size:26px; font-family:"Montserrat",'Courier New', Courier, monospace; font-weight: 200;}
	.line-container{display: grid; align-items: center; align-content: space-between; margin: 0 2vw 0 0;}
	.line-container h4 {text-align: center; font-family: 'Montserrat', sans-serif; font-size:12px; color: #FFEEF4;}
	.line{width:20vw; height:0.5vh; margin:0.2vh 0; background-color: #AEC3AE;}
	.top a{text-decoration: none;}
	.top a:hover{color:#f2ce1a;}
	.top a::after{color: #f2ce1a;}
	.main {display: flex; justify-content: space-evenly;}
	.holder{border: #94A684 solid 3px; width: 20vw; margin-top:5vh	; display: flex; justify-content: center;font-family: "Montserrat", sans-serif; font-size: 16px;}
	.holder a {text-decoration: none;font-family: "Montserrat", sans-serif; font-size:14px;color: #012e36;}
	.holder a::after {color: #012e36;}
	.b-holder {margin: 20px;}

	body {background-color: #EAD7BB;height: 93vh; width: 100vw;}
</style>
</body>