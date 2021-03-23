<?php
spl_autoload_register(function($classe){
    require('sys/'.$classe.'.class.php');
});
 BD::conn();
 $carrinho = new carrinho();
 if(isset($_POST['acao'])&& $_POST['acao']=='add'){
     $id_produto = (int)$_POST['id'];
     $qtd = (int)$_POST['qtd'];
     $forma=(isset($_POST['forma'])) ? $_POST['forma']:null;

     $carrinho->adicionarCarrinho($id_produto,$qtd,$forma);
     
 }

if(isset($_POST['atualizar'])){
    $qtd = $_POST['qtd'];

    foreach($qtd as $indice => $valor){
        $carrinho->alterarQtd($indice,$valor);

    }
}

 if(isset($_GET['acao'])&& $_GET['acao']== 'del'){
    $id= $_GET['id'];
    $carrinho->excluirQtd($id);
}
 $produtos= $carrinho-> listarProdutos();
 $total = $carrinho->valorTotal();
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
                        <td>R$ <?php echo number_format($total, 2,',','.');?></td>
                    </tr>
                    <tr>
                        <td><input class="btn reload" type="submit" name="atualizar" value="Atualizar carrinho"></td>
                        <td><a class="btn" href="index.php">Continuar comprando</a></td>
                </tr>
                </tfoot>
                <tbody>
                <?php
                $contProdutos = count($produtos);
                if($contProdutos == 0 ){
                    echo'<tr><tdcolspan="5">NÃO TEM PRODUTOS NO CARRINHO COMPRE AGORA </td></tr>';
                }else{
                    foreach($produtos as $indice => $produto):
                ?>
                    <tr>
                        <td><?php echo $produto['nome'];?></td>
                        <td> <input type="text" size="3" name="qtd[<?php echo $indice;?>]" value="<?php echo $produto['qtd'];?>"></td>
                        <td>R$ <?php echo number_format($produto['preco'], 2,',','.')?></td>
                        <td>R$ <?php echo number_format($produto['subtotal'],2,',','.')?></td>
                        <td><a class="btn"href="?acao=del&id=<?php echo$indice;?>">Remover</a></td>
                    </tr>
                    <?php endforeach;} ?>
                </tbody>
                
            </form>
        </table>
    </div>

    


</body>
</html>