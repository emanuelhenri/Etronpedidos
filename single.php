<?php
spl_autoload_register(function($classe){
    require_once('sys/'.$classe.'.class.php');
});
 BD::conn();
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
    <div class="container">
    <?php
    $id_produto = (int) $_GET['produto_id'];
    $produto_single = BD::conn()->prepare("SELECT * FROM produtos WHERE id= ?");
    $produto_single->execute(array($id_produto));

    while($dados_produto = $produto_single->fetchObject()){
    ?>
        <div class="produto_single">
            <img src="img/<?php echo $dados_produto->imagem;?>" alt="" width="320">
            <span><?php echo $dados_produto->nome;?></span>
            <span class="valor">R$ <?php echo number_format($dados_produto->preco, 2, ',', '.');?></span> 
            <div class="box">
                <form action="carrinho.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="qtd" value="<?php echo$id_produto;?>">
                    <input type="hidden" name="id" value="<?php echo$id_produto;?>">
                    <input type="hidden" name="acao" value="add">
                    <input type="submit" name="comprar" value="Adicionar ao carrinho">
                </form>
            </div>     
        </div>
        <?php
    }
        ?>
    </div>
</body>
</html>