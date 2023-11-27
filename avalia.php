<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laccio di Batte | Avaliação</title>
</head>
<body>
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
        <div class="container">
            <h3>Nos conte sua experiência</h3>
            <div class="questions">
                <form action="salvalia.php" method="post" id="form">
                    <div class="part">
                        <h4>Escolha o número do pedido</h4>
                        <select name="id_aval" id="id_aval">
                            <?php
                                include "connectform.php";
                                $categories = mysqli_query($c, "SELECT * from PEDIDO");
                                while($cat = mysqli_fetch_array($categories)) {
                            ?>
                            <option value="<?php echo $cat["id_pedido"] ?>"><?php echo $cat["id_pedido"] ?></option>
                            <?php } ?>
                        </select>
                        <h4>Nota Tempo (1-5)</h4>
                        <select name="tempo" id="tempo">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="part">
                        <h4>Nota Sabor(1-5)</h4>
                        <select name="sabor" id="sabor">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="part">
                        <h4>Nota Sistema(1-5)</h4>
                        <select name="sistema" id="sistema">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="part">
                        <button type="submit" id="but">Enviar</button>
                    </div>
                    
                    </form>
            </div>
            <a class="outro" href="avalista.php">Editar Avaliação</a>
        </div>
        
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;1,300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Tilt+Neon&display=swap');
        *{margin:0; padding:0; border:0;}
        .top {width: 100vw; display:flex; background-color: #94A684; height: 7vh; justify-content: space-between; align-items: center;}
        .top h2{margin:  0 0 0 2vw; color:#f2ce1a; font-size:26px; font-family:"Montserrat",'Courier New', Courier, monospace; font-weight: 200;}
        .line-container{display: grid; align-items: center; align-content: space-between; margin: 0 2vw 0 0}
        .line-container h4 {text-align: center; font-family: 'Montserrat', sans-serif; font-size:12px; color: #FFEEF4;}
        .line{width:20vw; height:0.5vh; margin:0.2vh 0; background-color: #AEC3AE;}
        .main{height: 93vh; background-color: #EAD7BB; display: flex;  justify-items: center; align-items: center; justify-content: center; align-content: center;text-align: center;width:100vw;}
        .container{background-color:#a1c27f; height: 60vh; width: 20vw; border-radius:5%}
        .questions{display: flex; justify-content: center;}
        select{margin-bottom: 3vh; border-radius: 5px;}
        h3{margin: 4vh auto; font-family: "Montserrat", sans-serif; font-size: 28px; color:rgb(84, 246, 122);}
        h4{color: rgb(173, 238, 117); font-family: "Quicksand", sans-serif; font-size: 18px;}
        button {background-color: #113946; color:aliceblue; font-family: 'Tilt Neon', sans-serif; padding:10px; border-radius:8%; font-size: 14px; transition: 0.3s;margin-bottom: 1vh;}
        button:hover {transform:scale(105%); background-color: #AEC3AE;}
        .main a{text-decoration: none; font-family:"Quicksand", sans-serif; font-weight: 500; color:#113946;}
        .main a::after{color:#113946}
        .top a{text-decoration: none;}
        .top a:hover{color:#f2ce1a;}
        .top a::after{color: #f2ce1a;}
    </style>
    <?php
        if (!empty($_GET)) {
            echo "<script>alert('Número de Avaliação já existente, use a página correta para editar sua avaliação')</script>";
        }
    ?>
</body>