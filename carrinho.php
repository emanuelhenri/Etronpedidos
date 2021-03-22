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
        <a href="index.php">PEÇAS</a>
        <a href="bombas.php">BOMBAS</a>
        <a class="ativo" href="">CARRINHO DE COMPRAS</a>          
    </nav>
    <div class="container">
        <table class="carrinho" border="1" cellppading="0" cellspacing="0">
            <caption>carrinho de compras</caption>
            <thead>
                <tr>
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <td>Preço</td>
                    <td>Subtotal</td>
                    <td>Remover</td>
                </tr>
                
            </thead>
            <form action="" method="post">
                <tfoot>
                    <tr>
                        <td colspan="4">Valor total</td>
                        <td>R$ 180,00</td>
                    </tr>
                    <tr>
                        <td><input class="btn reload" type="submit" name="atualizar" value="Atualizar carrinho"></td>
                        <td><a class="btn" href="#">Continuar comprando</a></td>
                </tr>
                </tfoot>
                <tbody>
                    <?php for($r=0; $r<=5;$r++):?>
                    <tr>
                        <td>canopla</td>
                        <td> <input type="text" size="3" name="qtd[]"></td>
                        <td>R$ 90,00</td>
                        <td>R$ 90,00</td>
                        <td><a class="btn"href="#">Remover</a></td>
                    </tr>
                    <?php endfor;?>
                </tbody>
            </form>
        </table>
    </div>

    


</body>
</html>