<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARTALOGO DE BOMBAS ETRON</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="js/Main.js">
</head>
<body>
    <header>
        <h2> ETRON BOMBAS DE POÇO SUBMESSAS</h2>
        <P>EMAIL...</P>
    </header>

    <nav>
        <a  href="index.php">PEÇAS</a>
        <a  href="bombas.php">BOMBAS</a>
        <a class="ativo" href="">CARRINHO DE COMPRAS</a>          
    </nav>

    <form action="" method="post" enctype="multipart/form-data">
        <table border="0" cellpadding="0" cellspacing="0" width="80%">
            <thead>
                <tr>
                    <td>Produto</td>
                    <td>Valor</td>/
                    <td>Qtd</td>
                    <td>Subtotal</td>
                </tr>
            </thead>

            <tbody id="content_retorno">
                <?php
                $total = 0;
                if(count($_SESSION['carrinho']) > 0):
                foreach($_SESSION['carrinho'] as $idProd => $qtd){
                    $pegaProduto = $pdo->prepare("SELECT * FROM `produtos` WHERE `id` = ?");
                    $pegaProduto->execute(array($idProd));
                    $dadosProduto = $pegaProduto->fetchObject();
                    $subTotal = ($dadosProduto->valor*$qtd);
                    $total += $subTotal;
                    
                    echo '<tr><td>'.utf8_encode($dadosProduto->titulo).'</td><td>Valor</td><td><input type="text" id="qtd" value="'.$qtd.'" size="3" /></td>';
                    echo '<td>R$ '.number_format($subTotal, 2, ',', '.').'</td></tr>';
                    
                }
                echo '<tr><td colspan="3">Total</td><td id="total">R$ '.number_format($total, 2, ',','.').'</td></tr>';
                endif;
                ?>
            </tbody>
        </table>
        <input type="submit" value="Concluir compra" class="botao" />
    </form>

</body>
</html>