<?php

include 'connet.php';

$numeroProduto      = $_POST ['numeroProduto'];
$nomeProduto        = $_POST ['nomeProduto'];
$quantidadeProduto  = $_POST ['quantidadeProduto'];
$categoriaProduto   = $_POST ['categoriaProduto'];
$fornecedorProduto  = $_POST ['fornecedorProduto'];

$sql = "INSERT INTO `produtos`(`numeroProduto`, `nomeProduto`, `quantidadeProduto`, `categoriaProduto`, `fornecedorProduto`) 
VALUES ($numeroProduto, '$nomeProduto',$quantidadeProduto,'$categoriaProduto','$fornecedorProduto')";

$inserir = mysqli_query($connet,$sql);

?>

<div style= "width: 300px; text-align:center; padding:40px; margin-left: 750px;">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<h4>Produto Cadastrado com Sucesso!</h4>

<div>
    <a href="index.html" role="button" class="btn btn-sm btn-outline-dark"> Cadastrar novo Item </a>
</div>
</div>