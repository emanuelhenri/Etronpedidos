<?php
spl_autoload_register(function($classe){
    require_once('sys/'.$classe.'.class.php');
});
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CARTALOGO DE BOMBAS ETRON</title>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/function.js">
</head>
<body>
    <header>
        <h2> ETRON BOMBAS DE POÇO SUBMESSAS</h2>
        <P>EMAIL...</P>
    </header>
    <nav>
        <a class="ativo" href="">PEÇAS</a>
        <a href="bombas.php">BOMBAS</a>
        <a href="carrinho.php">CARRINHO DE COMPRAS</a>          
    </nav>
    
    <div class="container">
        <ul class="lista">
            <li>
                <img src="img/VentodaN02.jpeg" alt="" width="150px" height="200">
                <span>ventosa 02</span>
                <a class="btn" href="#">ver detalhes</a>
            </li>
            <li>
                <img src="img/Amortecedor.jpeg" alt="" width="150px" height="200">
                <span>amortecedor</span>
                <a class="btn" href="#">ver detalhes</a>
            </li>
            <li>
                <img src="img/AnelOring.jpeg" alt="" width="150px" height="200">
                <span>anel oring</span>
                <a class="btn" href="#">ver detalhes</a>
            </li>
            <li>
                <img src="img/ArruelaVentosa.jpeg" alt="" width="150px" height="200">
                <span>arruela</span>
                <a class="btn" href="#">ver detalhes</a>
            </li>
            <li>
                <img src="img/Canopla650.jpeg" alt="" width="150px" height="200">
                <span>canopla 650</span>
                <a class="btn" href="#">ver detalhes</a>
            </li>
            <li>
                <img src="img/SedeCValvula.jpeg" alt="" width="150px" height="200">
                <span>anel oring</span>
                <a class="btn" href="#">ver detalhes</a>
            </li>
        </ul>
    </div> 

    


</body>
</html>