<?php
include 'conexao/conexao.php';

$sqlQuantidade = "SELECT SUM( `quantidade_cliente`) AS QUANTIDADE FROM `clientes`";
$consultaQuantidade = mysqli_query($conexao, $sqlQuantidade);
$dadosQuantidade = mysqli_fetch_array($consultaQuantidade);
$quantidadeCliente = $dadosQuantidade['QUANTIDADE'];

$sqlTotal = "SELECT SUM( `valor_venda`) AS VALOR FROM `vendas`";
$consultaTotal = mysqli_query($conexao,$sqlTotal);
$dadosTotal = mysqli_fetch_array($consultaTotal);

$totalVenda =  number_format($dadosTotal['VALOR'],2,'.','');


$sqlQuantidadeVenda = "SELECT SUM( `quantidade_venda`) AS QUANTIDADEVENDA FROM `vendas`";
$consultaQuantidadeVenda = mysqli_query($conexao,$sqlQuantidadeVenda);
$dadosQuantidadeVenda = mysqli_fetch_array($consultaQuantidadeVenda);
$quantidadeVenda = $dadosQuantidadeVenda['QUANTIDADEVENDA'];