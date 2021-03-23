<?php
session_start();
include("conecao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));


$sql = "INSERT INTO cliente (nome_cli, email_cli,celular_cli) VALUES ('$nome', '$email',$celular)";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: formulario.php');
exit;
?>