<?php
$id_sorvetePM = "";
$sabor1 = "";
$sabor2 = "";
$sabor3 = "";
$tipo ="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laccio di Batte | Gelato P/M</title>
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
        <div class="text-container">
            <h3><b>Monte sua versão da delícia</b></h3>
            <h4>Uma boa sobremesa começa <br>com uma boa escolha.</h4>
        </div>
        <div class="container">
            <div class="questions">
                <form method="post" id="form" action="salva.php">
                    <input type="hidden" name="id_pedido">
                    <label for="tipo">Tamanho Gelato</label>
                    <select name="tipo" id="tipo">
                        <option value="P">P</option>
                        <option value="M">M</option></select>
                    <br>
                    <label for="sabor">Escolha um sabor: </label>
                    <select name="sabor1" id="sabor1">
                        <option value=""></option>
                        <option value="Biscoitto">Biscoitto</option>
                        <option value="Caju">Caju</option>
                        <option value="Chocolate">Chocolate Belga</option>
                        <option value="Creme">Creme</option>
                        <option value="Cocco">Cocco</option>
                        <option value="Floccos">Floccos</option>
                        <option value="Goiaba">Goiaba</option>
                        <option value="Maracujá">Maracujá</option>
                        <option value="Strawberry">Strawberry</option>
                        <option value="Pistachio">Pistachio</option>
                        <option value="Romeo">Romeo e Julietta</option>
                    </select>
                    <br>
                    <label for="sabor2">Escolha um sabor: </label>
                    <select name="sabor2" id="sabor2">
                        <option value=""></option>
                        <option value="Biscoitto">Biscoitto</option>
                        <option value="Caju">Caju</option>
                        <option value="Chocolate">Chocolate Belga</option>
                        <option value="Creme">Creme</option>
                        <option value="Cocco">Cocco</option>
                        <option value="Floccos">Floccos</option>
                        <option value="Goiaba">Goiaba</option>
                        <option value="Maracujá">Maracujá</option>
                        <option value="Strawberry">Strawberry</option>
                        <option value="Pistachio">Pistachio</option>
                        <option value="Romeo">Romeo e Julietta</option>
                    </select>
                    <br>
                    <label for="sabor3">Escolha um sabor: </label>
                    <select name="sabor3" id="sabor3">
                        <option value=""></option>
                        <option value="Biscoitto">Biscoitto</option>
                        <option value="Caju">Caju</option>
                        <option value="Chocolate">Chocolate Belga</option>
                        <option value="Creme">Creme</option>
                        <option value="Cocco">Cocco</option>
                        <option value="Floccos">Floccos</option>
                        <option value="Goiaba">Goiaba</option>
                        <option value="Maracujá">Maracujá</option>
                        <option value="Strawberry">Strawberry</option>
                        <option value="Pistachio">Pistachio</option>
                        <option value="Romeo">Romeo e Julietta</option>
                    </select>
                    <br>
                    <button type="submit">Pedir</button>
                </form>
            </div>
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
        select{border: 2px solid #eec387; border-radius:5%;background-color: #cdb593; color:rgb(13, 34, 90); font-family:'Montserrat Alternates', sans-serif; font-weight: 400;}
        .main{background-color: #EAD7BB;height: 93vh;display: flex; align-items:center;  justify-items: center; justify-content: space-evenly;width:100vw;}
        .container{text-align:center;}
        .questions{display:flex; margin: 8vh 0; align-content: space-evenly;height: 40vh;align-items: center; background-color: #a38f73;border-radius: 6.5%;width: 20vw; justify-content: center;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;}
        label{color: #ecd65a; font-weight: 500; font-family: 'Montserrat Alternates', sans-serif;}
        h5{color: #ecd65a; font-weight: 500; font-family: 'Montserrat Alternates', sans-serif;}
        #sabor2{margin:5vh 0;}
        #tipo{margin: 0 0 5vh 0;}
        h3{text-align: center; font-family: 'Montserrat', sans-serif;font-size: 28px; color: #4a310c;}
        h4{text-align: center; font-family: 'Montserrat', sans-serif;font-size: 24px; color: #8b7557;}
        button{margin: 3vh auto 0 auto; display: flex; border-radius: 6%; border: 2px solid #d8b532;background-color: #ecd65a;padding: 8px 12px;transition:0.2s;}
        button:hover{background-color: #816b4c; color: #f6e3c7; border: 2px solid #71634f; transform: scale(120%);}
        .top a{text-decoration: none;}
        .top a:hover{color:#f2ce1a;}
        .top a::after{color: #f2ce1a;}
    </style>
</body>