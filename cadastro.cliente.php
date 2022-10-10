<?php

include 'connet.php';

$nomeCliente        = $_POST['nomeCliente'];
$telefoneCliente    = $_POST['telefoneCliente'];
$emailCliente       = $_POST['emailCliente'];
$enderecoCliente    = $_POST['enderecoCliente'];
$cpfCliente         = $_POST['cpfCliente'];
$generoCliente      = $_POST['generoCliente'];


$sql = "INSERT INTO `clientes`(`nomeCliente`, `telefoneCliente`, `emailCliente`, `enderecoCliente`, `cpfCliente`, `generoCliente`) 
VALUES ('$nomeCliente', '$telefoneCliente','$emailCliente','$enderecoCliente',$cpfCliente,'$generoCliente')";

$inserir = mysqli_query($connet, $sql);

?>

<div class="container" style="width: 300px; text-align:center; padding: 40px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <h4>Cliente Cadastrado com Sucesso!</h4>

    <div>
        <a href="index.html" role="button" class="btn btn-sm btn-outline-dark"> Cadastrar novo Cliente </a>
    </div>
</div>