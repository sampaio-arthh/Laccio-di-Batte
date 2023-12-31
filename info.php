<?php
session_start();
$num = $_SESSION["id_p"];
$pg1 = <<<EOT
<head>
    <title>Laccio di Batte - Sorvete P</title>
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
    <body>
    <div class="main">
        <div class="text-container">
            <h2>O seu pedido foi efetuado!</h2>
EOT;
$pg2 = "<h3>O número do pedido é: $num</h3>";
$pg3 = <<<EOT
            <h4>Agradecemos pela preferência!</h4>
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
        .main{height: 93vh; background-color: #EAD7BB; display: flex; justify-content: space-around; align-items:center; justify-items: center;}
        .main h2 {text-align: center;font-family: "Quicksand", sans-serif; font-size: 38px; color: #113946;}
        .main h3 {text-align: center; font-family: "Montserrat", sans-serif; font-size: 30px; color: #052c38;}
        .main h4 {text-align: center; font-size: 26px; font-family: "Montserrat Alternates";font-weight: 300; color: #364836;}
        .top a{text-decoration: none;}
        .top a:hover{color:#f2ce1a;}
        .top a::after{color: #f2ce1a;}
    </style>
</body>
EOT;

echo $pg1;
echo $pg2;
echo $pg3;
?>