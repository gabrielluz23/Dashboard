<?php 

include '../conexao/conexao.php';

$mes = $_POST['mes'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$sql = "INSERT INTO `vendas`( `mes_venda`, `quantidade_venda`, `valor_venda`) VALUES ('$mes',$quantidade,$valor)";

$query = mysqli_query($conexao,$sql);

header('Location: ../dashboard.php?pagina=cadastrovendas');