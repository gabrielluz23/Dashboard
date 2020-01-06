<?php
include 'conexao/conexao.php';

$sqlClientes = "SELECT * FROM `clientes`";
$buscarClientes = mysqli_query($conexao,$sqlClientes);

$sqlVendas = "SELECT * FROM `vendas`";
$buscarVendas = mysqli_query($conexao,$sqlVendas);